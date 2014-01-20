<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Description here
 *
 * @package    miniCMS
 * @subpackage -
 * @author     BATMUNKH Moltov <contact@batmunkh.com>
 * @version    SVN: $Id
 */
class Category extends D\Model\Category {

    public static $treeArray = array();
    public static $tree = array();
    public static $form_options = array();

    public static function fetchAll() {

        global $db;

        $mapper_db = db_unit($db, __CLASS__);

        $all_categories = $mapper_db->fetchAll(array(), "id!=0 ORDER BY pos ASC");

        return $all_categories;
    }

    public static function fetchByParentId($parent_id = 0) {

        global $db;

        $mapper_db = db_unit($db, __CLASS__);

        $all_categories = $mapper_db->fetchAll(array(
            'parent_id' => $parent_id
                ), "parent_id=:parent_id ORDER BY pos ASC");

        return $all_categories;
    }

    public static function fetchById($id) {

        global $db;

        $mapper_db = db_unit($db, __CLASS__);

        $category = $mapper_db->fetchById($id);

        return $category;
    }

    public static function getPosition($parent_id = 0) {


        global $db;

        $mapper_db = db_unit($db, __CLASS__);

        $categories = $mapper_db->fetchAll(array(
            'parent_id' => 0
                ), "parent_id=:parent_id ORDER BY pos ASC", array('pos'));

        $pos = 0;
        foreach ($categories as $category) {
            $pos = $category->pos;
        }

        return $pos;
    }

    /**
     * ID field eer songoh
     *
     * @param integer $id ID field iin utga
     *
     * @return object : Oldson object iig butsaana.
     */
    public static function getById($id = 0) {

        global $db;

        $mapper_db = db_unit($db, __CLASS__);

        $result = $mapper_db->fetchById($id);

        return $result;
    }

    /**
     * Ugugdsun field iin 1 utgiig butsaana.
     * @param string $field_name : Filter leh fieldiin ner
     * @param string $field_value : Filter hiih field iin utga
     * @param string $to_get_field : Butsaah field iin ner
     *
     * @return string $to_get_field iin utgiig butsaana
     */
    public static function getByField($field_name, $field_value, $to_get_field) {

    }

    /**
     * Sub category toi esehiig shalgana
     */
    public static function hasSubCategory($parent_id = 0) {

        return self::fetchByParentId($parent_id)->count();
    }

    /**
     * Category iig array bolgoh
     */
    public static function convertToArray($parent_id = 0) {

        if (count(self::$treeArray > 0)) {
            self::clearTree();
            $categories = self::fetchAll($parent_id);

            foreach ($categories as $category) {
                self::$treeArray[$category->parent_id][$category->id] = array(
                    'id' => $category->id,
                    'parent_id' => $category->parent_id,
                    'code' => $category->code,
                    'depth' => $category->depth,
                    'lft' => $category->lft,
                    'rgt' => $category->rgt,
                    'st' => $category->st,
                    'user_id' => $category->user_id,
                    'pos' => $category->pos,
                    'name' => $category->name,
                    'is_external' => $category->is_external,
                    'external_url' => $category->external_url,
                    'lang' => $category->lang,
                    'hits' => $category->hits,
                    'date_created' => $category->date_created,
//                'date_last_updated' => $category->date_last_updated,
                    'last_updated_user_id' => $category->last_updated_user_id,
                    'is_adult' => $category->is_adult
                );
                if (isset(self::$treeArray[$category->id])) {
                    self::$treeArray[$category->parent_id][$category->id]['has_sub'] = 1;
                } else {
                    self::$treeArray[$category->parent_id][$category->id]['has_sub'] = 0;
                }
            }
        }
        return self::$treeArray[$parent_id];
    }

    /**
     * Sub category toi esehiig shalgana
     */
    public static function buildTree($parent_id = 0) {

        $tree = array();

        self::convertToArray();
        $array = self::$treeArray;

        foreach ($array[0] as $k => $v) {
            $tree[0][$k] = $array[0][$k];
            if (isset($array[$k])) {
                $tree[0][$k]['sub'] = self::buildSubTree($k);
//                echo $k . '.,';
            } else {
//                echo $k . '-,';
            }
        }

//        print_r($tree);
//        echo str_repeat('.', 100) . "\n";
//        print_r($array);
//        die();
        return self::$tree;
    }

    /**
     * Sub category toi esehiig shalgana
     */
    public static function buildSubTree($parent_id = 0) {

        self::convertToArray();
        $tree = array();
        $array = self::$treeArray;

        foreach ($array[$parent_id] as $k => $v) {
            $tree[$k] = $array[$parent_id][$k];
            if (isset($array[$k])) {
                $tree[$k]['sub'] = self::buildSubTree($k);
            }
        }
        self::$tree = $tree;
        return $tree;
    }

    public static function clearTree() {
        foreach (self::$treeArray as $k => $v) {
            unset(self::$treeArray[$k]);
        }
    }

    /**
     * form iin select options-d zoriulj butsaana
     */
    public static function formOptions($parent_id = 0) {

        self::convertToArray();
        $array = self::$treeArray;

        foreach ($array[$parent_id] as $k => $v) {

            self::$form_options[$k] = str_repeat('&nbsp;', ($array[$parent_id][$k]['depth'] * 10))
                    . $array[$parent_id][$k]['name'];
            if (isset($array[$k]) == 1) {
                self::$form_options = self::formOptions($k);
            }
        }

        return self::$form_options;
    }

    /**
     * form iin select options-d zoriulj butsaana
     */
    public static function formOptionsHTML($parent_id = 0) {

        self::convertToArray();
        $array = self::$treeArray;

        foreach ($array[$parent_id] as $k => $v) {

            self::$form_options[$k] = str_repeat('&nbsp;', ($array[$parent_id][$k]['depth'] * 10))
                    . $array[$parent_id][$k]['name'];
            if (isset($array[$k]) == 1) {
                self::$form_options = self::formOptions($k);
            }
        }

        return self::$form_options;
    }

    public static function categoriesMultiSelect() {
        $categories = '
            <!--multiple select start-->
              <div class="row">
              <div class="col-md-12">
                  <section class="panel">
                      <div class="panel-body">
                              <div class="form-group">
                                  <label class="control-label col-md-2"> ' . __('Select categories') . '</label>
                                  <div class="col-md-10">
                                      <select multiple="multiple" class="multi-select" id="categories" name="categories[]">
                                          ';
        foreach (\Category::formOptions() as $k => $v) {
            $categories .= '<option value="' . $k . '">' . $v . '</option>';
        }
        $categories .='
                                      </select>
                                  </div>
                              </div>


        ';

        return $categories;
    }

}

<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace D\Model;

/**
 * Content model. contents table.
 */
class Content extends AbstractEntity {

    /**
     * contents table iin baganuud n ContentMapper deer davhar zaaj ugnu
     */
    protected $allowedFields = array(
        'id',
        'parent_id',
        'user_id',
        'code',
        'st',
        'content_type',
        'photo',
        'title',
        'content_brief',
        'content_body',
        'use_comment',
        'date_created',
        'total_updated',
        'views',
        'hits',
        'session_id',
        'session_time',
        'is_adult');

    /**
     * field info:
     *    name:       id
     *    type:       int(11) unsigned
     *    null:       NO
     *    default:
     *    extra:      auto_increment
     *    generated:  2013-12-28 07:34:15 am
     * @param $id int Content iin id
     * @return object
     */
    public function setId($id) {
        $id = (int) $id;
        if (isset($this->fields["id"])) {
            throw new \BadMethodCallException(__("The ID has been set already."));
        }

        if (!is_int($id) || $id < 1) {
            throw new \InvalidArgumentException(__("The ID is invalid."));
        }$this->fields["id"] = $id;

        return $this;
    }

    /**
     * field info:
     *    name:       parent_id
     *    type:       int(11) unsigned
     *    null:       NO
     *    default:    0
     *    extra:
     *    generated:  2013-12-28 07:34:15 am
     * @param $parent_id int Content iin parent_id
     * @return object
     */
    public function setContentId($parent_id) {
        $parent_id = (int) $parent_id;

        if (!isset($parent_id) || $parent_id == "") {
            $parent_id = "0";
        }
        $this->fields["parent_id"] = $parent_id;

        return $this;
    }

    /**
     * field info:
     *    name:       user_id
     *    type:       int(11) unsigned
     *    null:       NO
     *    default:    0
     *    extra:
     *    generated:  2013-12-28 07:34:15 am
     * @param $user_id int Content iin user_id
     * @return object
     */
    public function setUserId($user_id) {
        $user_id = (int) $user_id;

        if (!isset($user_id) || $user_id == "") {
            $user_id = "0";
        }
        $this->fields["user_id"] = $user_id;

        return $this;
    }

    /**
     * field info:
     *    name:       code
     *    type:       varchar(255)
     *    null:       YES
     *    default:
     *    extra:
     *    generated:  2013-12-28 07:34:15 am
     * @param $code string Content iin code
     * @return object
     */
    public function setCode($code) {
        $code = (string) $code;
        $this->fields["code"] = $code;

        return $this;
    }

    /**
     * field info:
     *    name:       st
     *    type:       varchar(20)
     *    null:       NO
     *    default:    inactive
     *    extra:
     *    generated:  2013-12-28 07:34:15 am
     * @param $st string Content iin st
     * @return object
     */
    public function setSt($st) {
        $st = (string) $st;

        if (!isset($st) || $st == "") {
            $st = "inactive";
        }
        $this->fields["st"] = $st;

        return $this;
    }

    /**
     * field info:
     *    name:       content_type
     *    type:       varchar(20)
     *    null:       NO
     *    default:    article
     *    extra:
     *    generated:  2013-12-28 07:34:15 am
     * @param $content_type string Content iin content_type
     * @return object
     */
    public function setContentType($content_type) {
        $content_type = (string) $content_type;

        if (!isset($content_type) || $content_type == "") {
            $content_type = "article";
        }
        $this->fields["content_type"] = $content_type;

        return $this;
    }

    /**
     * field info:
     *    name:       photo
     *    type:       varchar(255)
     *    null:       YES
     *    default:
     *    extra:
     *    generated:  2013-12-28 07:34:15 am
     * @param $photo string Content iin photo
     * @return object
     */
    public function setPhoto($photo) {
        $photo = (string) $photo;
        $this->fields["photo"] = $photo;

        return $this;
    }

    /**
     * field info:
     *    name:       title
     *    type:       varchar(255)
     *    null:       YES
     *    default:
     *    extra:
     *    generated:  2013-12-28 07:34:15 am
     * @param $title string Content iin title
     * @return object
     */
    public function setTitle($title) {
        $title = (string) $title;
        $this->fields["title"] = $title;

        return $this;
    }

    /**
     * field info:
     *    name:       content_brief
     *    type:       text
     *    null:       YES
     *    default:
     *    extra:
     *    generated:  2013-12-28 07:34:15 am
     * @param $content_brief string Content iin content_brief
     * @return object
     */
    public function setContentBrief($content_brief) {
        $content_brief = (string) $content_brief;
        $this->fields["content_brief"] = $content_brief;

        return $this;
    }

    /**
     * field info:
     *    name:       content_body
     *    type:       longtext
     *    null:       YES
     *    default:
     *    extra:
     *    generated:  2013-12-28 07:34:15 am
     * @param $content_body  Content iin content_body
     * @return object
     */
    public function setContentBody($content_body) {
        $this->fields["content_body"] = $content_body;

        return $this;
    }

    /**
     * field info:
     *    name:       use_comment
     *    type:       tinyint(1)
     *    null:       NO
     *    default:    0
     *    extra:
     *    generated:  2013-12-28 07:34:15 am
     * @param $use_comment  Content iin use_comment
     * @return object
     */
    public function setUseComment($use_comment) {

        if (!isset($use_comment) || $use_comment == "") {
            $use_comment = "0";
        }
        $this->fields["use_comment"] = $use_comment;

        return $this;
    }

    /**
     * field info:
     *    name:       date_created
     *    type:       datetime
     *    null:       YES
     *    default:
     *    extra:
     *    generated:  2013-12-28 07:34:15 am
     * @param $date_created datetime Content iin date_created
     * @return object
     */
    public function setDateCreated($date_created) {
        if (!isset($date_created)) {
            $date_created = \M\Carbon::now();
        }
        $this->fields["date_created"] = $date_created;

        return $this;
    }

    /**
     * field info:
     *    name:       total_updated
     *    type:       int(11) unsigned
     *    null:       NO
     *    default:    0
     *    extra:
     *    generated:  2013-12-28 07:34:15 am
     * @param $total_updated int Content iin total_updated
     * @return object
     */
    public function setTotalUpdated($total_updated) {
        $total_updated = (int) $total_updated;

        if (!isset($total_updated) || $total_updated == "") {
            $total_updated = "0";
        }
        $this->fields["total_updated"] = $total_updated;

        return $this;
    }

    /**
     * field info:
     *    name:       views
     *    type:       int(11) unsigned
     *    null:       NO
     *    default:    0
     *    extra:
     *    generated:  2013-12-28 07:34:15 am
     * @param $views int Content iin views
     * @return object
     */
    public function setViews($views) {
        $views = (int) $views;

        if (!isset($views) || $views == "") {
            $views = "0";
        }
        $this->fields["views"] = $views;

        return $this;
    }

    /**
     * field info:
     *    name:       hits
     *    type:       int(11) unsigned
     *    null:       NO
     *    default:    0
     *    extra:
     *    generated:  2013-12-28 07:34:15 am
     * @param $hits int Content iin hits
     * @return object
     */
    public function setHits($hits) {
        $hits = (int) $hits;

        if (!isset($hits) || $hits == "") {
            $hits = "0";
        }
        $this->fields["hits"] = $hits;

        return $this;
    }

    /**
     * field info:
     *    name:       session_id
     *    type:       varchar(50)
     *    null:       YES
     *    default:
     *    extra:
     *    generated:  2013-12-28 07:34:15 am
     * @param $session_id string Content iin session_id
     * @return object
     */
    public function setSessionId($session_id) {
        $session_id = (string) $session_id;
        $this->fields["session_id"] = $session_id;

        return $this;
    }

    /**
     * field info:
     *    name:       session_time
     *    type:       varchar(50)
     *    null:       YES
     *    default:
     *    extra:
     *    generated:  2013-12-28 07:34:15 am
     * @param $session_time string Content iin session_time
     * @return object
     */
    public function setSessionTime($session_time) {
        $session_time = (string) $session_time;
        $this->fields["session_time"] = $session_time;

        return $this;
    }

    /**
     * field info:
     *    name:       is_adult
     *    type:       tinyint(1)
     *    null:       NO
     *    default:    0
     *    extra:
     *    generated:  2013-12-28 07:34:15 am
     * @param $is_adult  Content iin is_adult
     * @return object
     */
    public function setIsAdult($is_adult) {

        if (!isset($is_adult) || $is_adult == "") {
            $is_adult = "0";
        }
        $this->fields["is_adult"] = $is_adult;

        return $this;
    }

}

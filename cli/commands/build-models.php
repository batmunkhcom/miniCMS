<?php

/**
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
$model_export_dir = './models/';
//exec("chmod -R 777 " . $model_export_dir);

$all_tables = $db->fetchAllTables()->fetchAll();

$tables = array();

foreach ($all_tables as $k => $v) {

    //table neriig ingej avq bol avagdahgui n ..
    foreach ($v as $t) {
        $tables[$t] = array();
        $current_table = $t;
    }
//    echo "\n*******************" . $current_table . "**********************\n";

    $fields = $db->fetchAllFields($current_table)->fetchAll();
    foreach ($fields as $field) {
        $tables[$current_table][$field['Field']] = array(
            'name' => $field['Field'],
            'type' => $field['Type'],
            'null' => $field['Null'],
            'default' => $field['Default'],
            'extra' => $field['Extra'],
        );
//        echo json_encode($field);
    }
//    echo "\n";
    unset($current_table);
}

//table iig onooj ugsun bol zuvhun tuhain table iin model mapper iig uusgene
if (isset($argv[2])) {
    foreach ($tables as $k => $v) {
        if ($argv[2] != $k) {
            unset($tables[$k]);
        } else {
            echo "\nModel : " . $k . "";
        }
    }
}
echo "\n\n************************* Model generation starting...*************************\n\n";
/*
 * $tables n $tables[TABLENAME][FIELDNAME] = array('type','null','default','extra') gej orj irne
 */
print_r($tables['users']);
//generate Model class and mappers
$models = array();
$mappers = array();
$mapper_template = "<?php

/**
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace D\Mapper;

/**
 * {MODELNAME} Model iin Mapper n .
 */
class {MODELNAME}Mapper extends AbstractDataMapper {

protected \$entityTable = \"" . DB_PREFIX . "{TABLENAME}\";

    protected function loadEntity(array \$row) {
        return new \D\Model\{MODELNAME}(
                array(
                {FIELDS}
            )
        );
    }

}";

$i = 0;
foreach ($tables as $t => $fields) {
    $i++;
    //model ner iig yanzlah
    $t = trim($t, DB_PREFIX);

    $model_name = $t;
    if ($model_name{strlen($model_name) - 1} == 's') {
        if (substr($model_name, -3) == 'ies') {
            $model_name = substr($model_name, 0, -3) . 'y';
        } else {
            $model_name = substr($model_name, 0, -1);
        }
    }
    $model_name{0} = strtoupper($model_name{0});

    $models[$t]['Model'] .= "<?php"
            . "\n\n/**
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */\n\n";
    $models[$t]['Model'] .= "namespace \D\Model;";
    $models[$t]['Model'] .= "\n\n";
    $models[$t]['Model'] .= "/**
                            * " . $model_name . " model. " . $t . " table.
                            */";
    $models[$t]['Model'] .= "\n";
    $models[$t]['Model'] .= "class " . $model_name . " extends AbstractEntity {";
    $models[$t]['Model'] .= "\n/**\n"
            . "* " . $t . " table iin baganuud n " . $model_name . "Mapper deer davhar zaaj ugnu\n"
            . "*/\n";
    $models[$t]['Model'] .= "protected \$allowedFields = array(";

    $field_functions = '';
    //field uudiig zarlah. $allowedFields = array();
    foreach ($fields as $k => $v) {
        $models[$t]['Model'] .= "\n'" . $k . "',";
        $mapper_fields[$t] .= "\n\"" . $k . "\" => \$row[\"" . $k . "\"],";

        //function ii comment
        $field_functions .= db_create_field_comment($fields[$k], $k, $model_name);

        //field iin functiong uusgeh
        $field_functions .= db_create_model_function($fields[$k]);
        $field_functions .= "\n";
    }
    //suuliin , iig arilgana
    $models[$t]['Model'] = rtrim($models[$t]['Model'], ',');

    $models[$t]['Model'] .= ");\n\n";
    //allowedFields duusav


    $models[$t]['Model'] .= $field_functions;
    $models[$t]['Model'] .= "\n\n";
    $models[$t]['Model'] .= "}\n";

    $mapper_fields[$t] = rtrim($mapper_fields[$t], ',');
    $mappers[$t] = str_replace("{MODELNAME}", $model_name, $mapper_template);
    $mappers[$t] = str_replace("{TABLENAME}", $t, $mappers[$t]);
    $mappers[$t] = str_replace("{FIELDS}", $mapper_fields[$t], $mappers[$t]);


    //model file ruu bichih
    $model_file = fopen($model_export_dir . $model_name . '.php', 'w') or die('file opening error');
//    exec("chmod -R 777 " . $model_export_dir);
    fwrite($model_file, $models[$t]['Model']);
    fclose($model_file);
    echo $i . ". \t" . $t . " Model iig uusgelee\n";

    //mapper file ruu bichih
    $mapper_file = fopen($model_export_dir . 'Mappers/' . $model_name . 'Mapper.php', 'w') or die('file opening error');
//    exec("chmod -R 777 " . $model_export_dir);
    fwrite($mapper_file, $mappers[$t]);
    fclose($mapper_file);
    echo "\t" . $t . " Model iin Mapper iig uusgelee\n\n";



    unset($field_functions, $model_name, $model_file, $mapper_file);

//    echo $models[$t]['Model'];
}
//print_r($mappers);
echo "\n\n-------------------END OF SCRIPT---------------------\n\n";

<?php
/**
 * Created by PhpStorm.
 * User: borodulin
 * Date: 19.02.18
 * Time: 22:22
 */
namespace borodulin\testjson\models;

use yii\db\ActiveRecord;
use yii\db\JsonExpression;

/**
 * @property int $id
 * @property JsonExpression $data
 */
class JsonTable extends ActiveRecord
{
    public static function tableName()
    {
        return 'json_table';
    }
}
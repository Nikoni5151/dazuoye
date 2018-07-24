<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%wc_place}}".
 *
 * @property integer $placeid
 * @property string $placename
 * @property integer $number
 */
class WcPlace extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%wc_place}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['placeid', 'placename', 'number'], 'required'],
            [['placeid', 'number'], 'integer'],
            [['placename'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'placeid' => '场地ID',
            'placename' => '场地名称',
            'number' => '可容纳人数',
        ];
    }
}

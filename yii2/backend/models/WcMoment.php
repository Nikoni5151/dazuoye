<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%wc_moment}}".
 *
 * @property integer $momentid
 * @property string $describes
 * @property string $url
 */
class WcMoment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%wc_moment}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['describes', 'url'], 'required'],
            [['url'], 'string'],
            [['describes'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'momentid' => '精彩瞬间ID',
            'describes' => '文字描述',
            'url' => '外链地址',
        ];
    }
}

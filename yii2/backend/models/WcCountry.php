<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%wc_country}}".
 *
 * @property integer $cid
 * @property string $cname
 * @property integer $grade
 * @property string $flag
 */
class WcCountry extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%wc_country}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cname', 'flag'], 'required'],
            [['grade'], 'integer'],
            [['flag'], 'string'],
            [['cname'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cid' => '国家ID',
            'cname' => '国家名称',
            'grade' => '历史成绩',
            'flag' => '国旗',
        ];
    }
}

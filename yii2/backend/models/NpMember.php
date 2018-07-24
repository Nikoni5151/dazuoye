<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%np_member}}".
 *
 * @property integer $mid
 * @property string $mname
 * @property string $sex
 * @property string $hometown
 * @property string $sign
 * @property string $image
 */
class NpMember extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%np_member}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mid', 'mname', 'sex', 'hometown', 'image'], 'required'],
            [['mid'], 'integer'],
            [['image'], 'string'],
            [['mname', 'hometown'], 'string', 'max' => 20],
            [['sex'], 'string', 'max' => 2],
            [['sign'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'mid' => '成员学号',
            'mname' => '成员姓名',
            'sex' => '成员性别',
            'hometown' => '成员家乡',
            'sign' => '个性签名',
            'image' => '成员头像',
        ];
    }
}

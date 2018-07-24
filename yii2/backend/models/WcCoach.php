<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%wc_coach}}".
 *
 * @property integer $coachid
 * @property string $coachname
 * @property string $cname
 */
class WcCoach extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%wc_coach}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['coachname', 'cname'], 'required'],
            [['coachname', 'cname'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'coachid' => '主教练ID',
            'coachname' => '主教练姓名',
            'cname' => '主教练国籍',
        ];
    }
}

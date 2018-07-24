<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%wc_team}}".
 *
 * @property integer $tid
 * @property string $tname
 * @property string $grade
 * @property string $coachname
 * @property string $cname
 */
class WcTeam extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%wc_team}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tname', 'grade', 'coachname', 'cname'], 'required'],
            [['tname', 'grade', 'coachname', 'cname'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tid' => '球队ID',
            'tname' => '球队名称',
            'grade' => '成绩',
            'coachname' => '球队主教练',
            'cname' => '所属国家',
        ];
    }
}

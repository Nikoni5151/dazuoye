<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%wc_player}}".
 *
 * @property integer $pid
 * @property string $pname
 * @property integer $number
 * @property integer $tid
 * @property integer $goals
 * @property string $cname
 * @property string $club
 */
class WcPlayer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%wc_player}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pname', 'number', 'tid', 'cname'], 'required'],
            [['number', 'tid', 'goals'], 'integer'],
            [['pname', 'cname', 'club'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pid' => '球员ID',
            'pname' => '球员姓名',
            'number' => '球员编号',
            'tid' => '所属球队ID',
            'goals' => '进球数',
            'cname' => '球员国籍',
            'club' => '所属俱乐部',
        ];
    }
}

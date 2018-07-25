<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%wc_match}}".
 *
 * @property integer $matchid
 * @property string $hometeam
 * @property string $awayteam
 * @property string $date
 * @property integer $hscore
 * @property integer $ascore
 * @property string $place
 * @property string $level
 */
class WcMatch extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%wc_match}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hometeam', 'awayteam', 'date', 'hscore', 'ascore', 'place', 'level'], 'required'],
            [['date'], 'safe'],
            [['hscore', 'ascore'], 'integer'],
            [['hometeam', 'awayteam', 'place', 'level'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'matchid' => '比赛ID',
            'hometeam' => '主场队伍名称',
            'awayteam' => '客场队伍名称',
            'date' => '比赛日期',
            'hscore' => '主队得分',
            'ascore' => '客队得分',
            'place' => '比赛场地',
            'level' => '比赛级别',
        ];
    }
}

<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%np_message}}".
 *
 * @property integer $messageid
 * @property string $content
 * @property string $date
 */
class NpMessage extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%np_message}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content', 'date'], 'required'],
            [['date'], 'safe'],
            [['content'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'messageid' => '留言ID',
            'content' => '留言内容',
            'date' => '留言创建时间',
        ];
    }
}

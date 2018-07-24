<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\WcPlayer;

/**
 * WcPlayerSearch represents the model behind the search form about `backend\models\WcPlayer`.
 */
class WcPlayerSearch extends WcPlayer
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pid', 'number', 'tid', 'goals'], 'integer'],
            [['pname', 'cname', 'club'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = WcPlayer::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'pid' => $this->pid,
            'number' => $this->number,
            'tid' => $this->tid,
            'goals' => $this->goals,
        ]);

        $query->andFilterWhere(['like', 'pname', $this->pname])
            ->andFilterWhere(['like', 'cname', $this->cname])
            ->andFilterWhere(['like', 'club', $this->club]);

        return $dataProvider;
    }
}

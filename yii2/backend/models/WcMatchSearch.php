<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\WcMatch;

/**
 * WcMatchSearch represents the model behind the search form about `backend\models\WcMatch`.
 */
class WcMatchSearch extends WcMatch
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['matchid', 'hscore', 'ascore'], 'integer'],
            [['hometeam', 'awayteam', 'date', 'win'], 'safe'],
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
        $query = WcMatch::find();

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
            'matchid' => $this->matchid,
            'date' => $this->date,
            'hscore' => $this->hscore,
            'ascore' => $this->ascore,
        ]);

        $query->andFilterWhere(['like', 'hometeam', $this->hometeam])
            ->andFilterWhere(['like', 'awayteam', $this->awayteam])
            ->andFilterWhere(['like', 'win', $this->win]);

        return $dataProvider;
    }
}

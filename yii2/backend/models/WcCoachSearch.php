<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\WcCoach;

/**
 * WcCoachSearch represents the model behind the search form about `backend\models\WcCoach`.
 */
class WcCoachSearch extends WcCoach
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['coachid'], 'integer'],
            [['coachname', 'cname'], 'safe'],
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
        $query = WcCoach::find();

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
            'coachid' => $this->coachid,
        ]);

        $query->andFilterWhere(['like', 'coachname', $this->coachname])
            ->andFilterWhere(['like', 'cname', $this->cname]);

        return $dataProvider;
    }
}

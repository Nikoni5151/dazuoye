<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\WcTeam;

/**
 * WcTeamSearch represents the model behind the search form about `backend\models\WcTeam`.
 */
class WcTeamSearch extends WcTeam
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tid'], 'integer'],
            [['tname', 'grade', 'coachname', 'cname'], 'safe'],
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
        $query = WcTeam::find();

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
            'tid' => $this->tid,
        ]);

        $query->andFilterWhere(['like', 'tname', $this->tname])
            ->andFilterWhere(['like', 'grade', $this->grade])
            ->andFilterWhere(['like', 'coachname', $this->coachname])
            ->andFilterWhere(['like', 'cname', $this->cname]);

        return $dataProvider;
    }
}

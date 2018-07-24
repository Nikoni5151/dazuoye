<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\NpMember;

/**
 * NpMemberSearch represents the model behind the search form about `backend\models\NpMember`.
 */
class NpMemberSearch extends NpMember
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mid'], 'integer'],
            [['mname', 'sex', 'hometown', 'sign'], 'safe'],
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
        $query = NpMember::find();

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
            'mid' => $this->mid,
        ]);

        $query->andFilterWhere(['like', 'mname', $this->mname])
            ->andFilterWhere(['like', 'sex', $this->sex])
            ->andFilterWhere(['like', 'hometown', $this->hometown])
            ->andFilterWhere(['like', 'sign', $this->sign]);

        return $dataProvider;
    }
}

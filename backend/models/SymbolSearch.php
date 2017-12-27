<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Symbol;

/**
 * SymbolSearch represents the model behind the search form about `backend\models\Symbol`.
 */
class SymbolSearch extends Symbol
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'page'], 'integer'],
            [['uz_name', 'ru_name', 'en_name', 'x_name', 'img', 'link'], 'safe'],
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
        $query = Symbol::find();

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
            'id' => $this->id,
            'page' => $this->page,
        ]);

        $query->andFilterWhere(['like', 'uz_name', $this->uz_name])
            ->andFilterWhere(['like', 'ru_name', $this->ru_name])
            ->andFilterWhere(['like', 'en_name', $this->en_name])
            ->andFilterWhere(['like', 'x_name', $this->x_name])
            ->andFilterWhere(['like', 'img', $this->img])
            ->andFilterWhere(['like', 'link', $this->link]);

        return $dataProvider;
    }
}

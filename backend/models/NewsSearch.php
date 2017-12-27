<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\News;

/**
 * NewsSearch represents the model behind the search form about `backend\models\News`.
 */
class NewsSearch extends News
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'slider', 'active', 'show_n'], 'integer'],
            [[ 'id_category_news', 'uz_thema', 'ru_thema', 'en_thema', 'x_thema', 'uz_description', 'ru_description', 'en_description', 'x_description', 'uz_text', 'ru_text', 'en_text', 'x_text', 'date', 'img'], 'safe'],
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
        $query = News::find();

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

        $query->joinWith('categorNews');

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            //'id_category_news' => $this->id_category_news,
            'date' => $this->date,
            'slider' => $this->slider,
            'active' => $this->active,
            'show_n' => $this->show_n,
        ]);

        $query->andFilterWhere(['like', 'uz_thema', $this->uz_thema])
            ->andFilterWhere(['like', 'ru_thema', $this->ru_thema])
            ->andFilterWhere(['like', 'en_thema', $this->en_thema])
            ->andFilterWhere(['like', 'x_thema', $this->x_thema])
            ->andFilterWhere(['like', 'uz_description', $this->uz_description])
            ->andFilterWhere(['like', 'ru_description', $this->ru_description])
            ->andFilterWhere(['like', 'en_description', $this->en_description])
            ->andFilterWhere(['like', 'x_description', $this->x_description])
            ->andFilterWhere(['like', 'uz_text', $this->uz_text])
            ->andFilterWhere(['like', 'ru_text', $this->ru_text])
            ->andFilterWhere(['like', 'en_text', $this->en_text])
            ->andFilterWhere(['like', 'x_text', $this->x_text])
            ->andFilterWhere(['like', 'img', $this->img])
            ->andFilterWhere(['like', 'categor_news.name', $this->id_category_news]);

        return $dataProvider;
    }
}

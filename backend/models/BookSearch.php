<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Book;

/**
 * BookSearch represents the model behind the search form about `backend\models\Book`.
 */
class BookSearch extends Book
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'page', 'active'], 'integer'],
            [['uz_name', 'ru_name', 'en_name', 'x_name', 'uz_author', 'ru_author', 'en_author', 'x_author', 'link', 'img', 'date'], 'safe'],
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
        $query = Book::find();

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
            'date' => $this->date,
            'active' => $this->active,
        ]);

        $query->andFilterWhere(['like', 'uz_name', $this->uz_name])
            ->andFilterWhere(['like', 'ru_name', $this->ru_name])
            ->andFilterWhere(['like', 'en_name', $this->en_name])
            ->andFilterWhere(['like', 'x_name', $this->x_name])
            ->andFilterWhere(['like', 'uz_author', $this->uz_author])
            ->andFilterWhere(['like', 'ru_author', $this->ru_author])
            ->andFilterWhere(['like', 'en_author', $this->en_author])
            ->andFilterWhere(['like', 'x_author', $this->x_author])
            ->andFilterWhere(['like', 'link', $this->link])
            ->andFilterWhere(['like', 'img', $this->img]);

        return $dataProvider;
    }
}

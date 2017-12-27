<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Quotation;

/**
 * QuotationSearch represents the model behind the search form about `backend\models\Quotation`.
 */
class QuotationSearch extends Quotation
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'active'], 'integer'],
            [['uz_quotation', 'ru_quotation', 'en_quotation', 'x_quotation', 'uz_author', 'ru_author', 'en_author', 'x_author', 'uz_position', 'ru_position', 'en_position', 'x_position', 'img'], 'safe'],
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
        $query = Quotation::find();

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
            'active' => $this->active,
        ]);

        $query->andFilterWhere(['like', 'uz_quotation', $this->uz_quotation])
            ->andFilterWhere(['like', 'ru_quotation', $this->ru_quotation])
            ->andFilterWhere(['like', 'en_quotation', $this->en_quotation])
            ->andFilterWhere(['like', 'x_quotation', $this->x_quotation])
            ->andFilterWhere(['like', 'uz_author', $this->uz_author])
            ->andFilterWhere(['like', 'ru_author', $this->ru_author])
            ->andFilterWhere(['like', 'en_author', $this->en_author])
            ->andFilterWhere(['like', 'x_author', $this->x_author])
            ->andFilterWhere(['like', 'uz_position', $this->uz_position])
            ->andFilterWhere(['like', 'ru_position', $this->ru_position])
            ->andFilterWhere(['like', 'en_position', $this->en_position])
            ->andFilterWhere(['like', 'x_position', $this->x_position])
            ->andFilterWhere(['like', 'img', $this->img]);

        return $dataProvider;
    }
}

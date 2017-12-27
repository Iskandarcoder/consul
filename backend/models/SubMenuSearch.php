<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\SubMenu;

/**
 * SubMenuSearch represents the model behind the search form about `backend\models\SubMenu`.
 */
class SubMenuSearch extends SubMenu
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id',  'page', 'target', 'order_m', 'sidebar', 'active'], 'integer'],
            [['parent', 'uz_name', 'ru_name', 'en_name', 'x_name', 'link'], 'safe'],
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
        $query = SubMenu::find();

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

        $query->joinWith('menu');
        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
          //  'parent' => $this->parent,
            'page' => $this->page,
            'target' => $this->target,
            'order_m' => $this->order_m,
            'sidebar' => $this->sidebar,
            'active' => $this->active,
        ]);

        $query->andFilterWhere(['like', 'sub_menu.uz_name', $this->uz_name])
            ->andFilterWhere(['like', 'ru_name', $this->ru_name])
            ->andFilterWhere(['like', 'en_name', $this->en_name])
            ->andFilterWhere(['like', 'x_name', $this->x_name])
            ->andFilterWhere(['like', 'link', $this->link])
            ->andFilterWhere(['like', 'menu.uz_name', $this->parent]);

        return $dataProvider;
    }
}

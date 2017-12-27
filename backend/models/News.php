<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property integer $id
 * @property integer $id_category_news
 * @property string $uz_thema
 * @property string $ru_thema
 * @property string $en_thema
 * @property string $x_thema
 * @property string $uz_description
 * @property string $ru_description
 * @property string $en_description
 * @property string $x_description
 * @property string $uz_text
 * @property string $ru_text
 * @property string $en_text
 * @property string $x_text
 * @property string $date
 * @property string $img
 * @property integer $slider
 * @property integer $active
 * @property integer $show_n
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $file;

    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['slider', 'active', 'show_n'], 'integer'],
            [['id_category_news','uz_thema', 'uz_description'], 'required'],
            [['uz_thema', 'ru_thema', 'en_thema', 'x_thema', 'uz_description', 'ru_description', 'en_description', 'x_description', 'uz_text', 'ru_text', 'en_text', 'x_text'], 'string'],
            [['file'],'file'],
            [['date'], 'safe'],
            [['img'], 'string', 'max' => 5000],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_category_news' => 'Категория',
            'uz_thema' => 'Uz Thema',
            'ru_thema' => 'Ru Thema',
            'en_thema' => 'En Thema',
            'x_thema' => 'X Thema',
            'uz_description' => 'Uz Description',
            'ru_description' => 'Ru Description',
            'en_description' => 'En Description',
            'x_description' => 'X Description',
            'uz_text' => 'Uz Text',
            'ru_text' => 'Ru Text',
            'en_text' => 'En Text',
            'x_text' => 'X Text',
            'date' => 'Date',
            'img' => 'Images (width=555px; height=416px)',
            'slider' => 'Slider',
            'active' => 'Active',
            'show_n' => 'Show N',
            'file' => 'Images (width=555px; height=416px)',
        ];
    }

    public function getCategorNews(){
        return $this->hasOne(CategorNews::className(),['id'=>'id_category_news']);
    }
}

<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "book".
 *
 * @property integer $id
 * @property string $uz_name
 * @property string $ru_name
 * @property string $en_name
 * @property string $x_name
 * @property string $uz_author
 * @property string $ru_author
 * @property string $en_author
 * @property string $x_author
 * @property string $link
 * @property integer $page
 * @property string $img
 * @property string $date
 * @property integer $active
 */
class Book extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $file;
 
    public static function tableName()
    {
        return 'book';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uz_name', 'ru_name', 'en_name', 'x_name', 'uz_author', 'ru_author', 'en_author', 'x_author'], 'required'],
            [['page', 'active'], 'integer'],
            [['date'], 'safe'],
            [['file'],'file'],
            [['uz_name', 'ru_name', 'en_name', 'x_name'], 'string', 'max' => 2000],
            [['uz_author', 'ru_author', 'en_author', 'x_author'], 'string', 'max' => 100],
            [['link'], 'string', 'max' => 1000],
            [['img'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'uz_name' => 'Uz Name',
            'ru_name' => 'Ru Name',
            'en_name' => 'En Name',
            'x_name' => 'X Name',
            'uz_author' => 'Uz Author',
            'ru_author' => 'Ru Author',
            'en_author' => 'En Author',
            'x_author' => 'X Author',
            'link' => 'Link',
            'page' => 'Page',
            'img' => 'Img',
            'date' => 'Date',
            'active' => 'Active',
        ];
    }

     public function getPage(){
        return $this->hasOne(Page::className(),['id'=>'page']);
    }
}

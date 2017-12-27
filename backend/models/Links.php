<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "links".
 *
 * @property integer $id
 * @property string $uz_name
 * @property string $ru_name
 * @property string $en_name
 * @property string $x_name
 * @property string $uz_img
 * @property string $ru_img
 * @property string $en_img
 * @property string $x_img
 * @property string $link
 * @property integer $active
 */
class Links extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $fileuz;
    public $fileru;
    public $fileen;
    public $filex;
    public static function tableName()
    {
        return 'links';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uz_name', 'ru_name', 'en_name', 'x_name'], 'string'],
            [['uz_img', 'ru_img', 'en_img', 'x_img'], 'required'],
            [['active'], 'integer'],
            [['uz_img', 'ru_img', 'en_img', 'x_img'], 'string', 'max' => 500],
            [['link'], 'string', 'max' => 5000],
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
            'uz_img' =>'uz_img',
            'en_img' =>'en_img',
            'ru_img' =>'ru_img',
            'x_img' =>'x_img',
            'fileuz' => 'Файл uz',
            'fileru' => 'Файл ру',
            'fileen' => 'Файл en',
            'filex' => 'Файл x',
            'link' => 'Link',
            'active' => 'Active',
        ];
    }
}

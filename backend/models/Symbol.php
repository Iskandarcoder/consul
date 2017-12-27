<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "symbol".
 *
 * @property integer $id
 * @property string $uz_name
 * @property string $ru_name
 * @property string $en_name
 * @property string $x_name
 * @property string $img
 * @property string $link
 * @property integer $page
 */
class Symbol extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    public $file;
    
    public static function tableName()
    {
        return 'symbol';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uz_name', 'ru_name', 'en_name', 'x_name', 'img'], 'required'],
            [['link'], 'string'],
            [['page'], 'integer'],
            [['file'],'file'],
            [['uz_name', 'ru_name', 'en_name', 'x_name'], 'string', 'max' => 5000],
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
            'img' => 'Img',
            'link' => 'Link',
            'page' => 'Page',
        ];
    }
}

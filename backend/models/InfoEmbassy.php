<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "info_embassy".
 *
 * @property integer $id
 * @property string $uz_name
 * @property string $ru_name
 * @property string $en_name
 * @property string $x_name
 * @property string $uz_text
 * @property string $ru_text
 * @property string $en_text
 * @property string $x_text
 * @property string $img
 * @property string $date
 */
class InfoEmbassy extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'info_embassy';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uz_name', 'ru_name', 'en_name', 'x_name', 'img'], 'required'],
            [['uz_text', 'ru_text', 'en_text', 'x_text'], 'string'],
            [['date'], 'safe'],
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
            'uz_text' => 'Uz Text',
            'ru_text' => 'Ru Text',
            'en_text' => 'En Text',
            'x_text' => 'X Text',
            'img' => 'Img',
            'date' => 'Date',
        ];
    }
}

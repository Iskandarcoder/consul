<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "info_uzb".
 *
 * @property integer $id
 * @property string $uz_name
 * @property string $ru_name
 * @property string $en_name
 * @property string $x_name
 * @property string $link
 * @property integer $page
 * @property string $icon
 * @property integer $active
 */
class InfoUzb extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'info_uzb';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uz_name', 'ru_name', 'en_name', 'x_name'], 'required'],
            [['link'], 'string'],
            [['page', 'active'], 'integer'],
            [['uz_name', 'ru_name', 'en_name', 'x_name'], 'string', 'max' => 5000],
            [['icon'], 'string', 'max' => 500],
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
            'link' => 'Link',
            'page' => 'Page',
            'icon' => 'Icon',
            'active' => 'Active',
        ];
    }
}

<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "service".
 *
 * @property integer $id
 * @property string $uz_name
 * @property string $ru_name
 * @property string $en_name
 * @property string $x_name
 * @property string $uz_description
 * @property string $ru_description
 * @property string $en_description
 * @property string $x_description
 * @property string $icon
 * @property string $link
 * @property integer $page
 * @property integer $order_s
 * @property string $date
 * @property integer $active
 */
class Service extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'service';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uz_name', 'ru_name', 'en_name', 'x_name', 'icon', 'link'], 'required'],
            [['uz_description', 'ru_description', 'en_description', 'x_description'], 'string'],
            [['page', 'order_s', 'active'], 'integer'],
            [['date'], 'safe'],
            [['uz_name', 'ru_name', 'en_name', 'x_name', 'icon'], 'string', 'max' => 500],
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
            'uz_description' => 'Uz Description',
            'ru_description' => 'Ru Description',
            'en_description' => 'En Description',
            'x_description' => 'X Description',
            'icon' => 'Icon',
            'link' => 'Link',
            'page' => 'Page',
            'order_s' => 'Order S',
            'date' => 'Date',
            'active' => 'Active',
        ];
    }
}

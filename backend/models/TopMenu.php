<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "top_menu".
 *
 * @property integer $id
 * @property string $uz_name
 * @property string $ru_name
 * @property string $en_name
 * @property string $x_name
 * @property string $link
 * @property integer $page
 * @property integer $target
 * @property integer $order
 * @property integer $active
 */
class TopMenu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'top_menu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uz_name', 'ru_name', 'en_name', 'x_name'], 'required'],
            [['page', 'target', 'order', 'active'], 'integer'],
            [['uz_name', 'ru_name', 'en_name', 'x_name'], 'string', 'max' => 500],
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
            'link' => 'Link',
            'page' => 'Page',
            'target' => 'Target',
            'order' => 'Order',
            'active' => 'Active',
        ];
    }
}

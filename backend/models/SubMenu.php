<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "sub_menu".
 *
 * @property integer $id
 * @property integer $parent
 * @property string $uz_name
 * @property string $ru_name
 * @property string $en_name
 * @property string $x_name
 * @property string $link
 * @property integer $page
 * @property integer $target
 * @property integer $order_m
 * @property integer $sidebar
 * @property integer $active
 */
class SubMenu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sub_menu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent', 'page', 'target', 'order_m', 'sidebar', 'active'], 'integer'],
            [['uz_name', 'ru_name', 'en_name', 'x_name'], 'required'],
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
            'parent' => 'Menu',
            'uz_name' => 'Uz Name',
            'ru_name' => 'Ru Name',
            'en_name' => 'En Name',
            'x_name' => 'X Name',
            'link' => 'Link',
            'page' => 'Page',
            'target' => 'Target',
            'order_m' => 'Order M',
            'sidebar' => 'Sidebar',
            'active' => 'Active',
        ];
    }

    public function getMenu(){
        return $this->hasOne(Menu::className(), ['id'=>'parent']);
    }
}

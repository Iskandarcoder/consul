<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "quotation".
 *
 * @property integer $id
 * @property string $uz_quotation
 * @property string $ru_quotation
 * @property string $en_quotation
 * @property string $x_quotation
 * @property string $uz_author
 * @property string $ru_author
 * @property string $en_author
 * @property string $x_author
 * @property string $uz_position
 * @property string $ru_position
 * @property string $en_position
 * @property string $x_position
 * @property string $img
 * @property integer $active
 */
class Quotation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    public $file;
    public static function tableName()
    {
        return 'quotation';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uz_quotation', 'ru_quotation', 'en_quotation', 'x_quotation'], 'string'],
            [['uz_author', 'ru_author', 'en_author', 'x_author', 'uz_position', 'ru_position', 'en_position', 'x_position', 'img'], 'required'],
            [['active'], 'integer'],
            [['file'], 'file'],
            [['uz_author', 'ru_position', 'en_position', 'x_position', 'img'], 'string', 'max' => 500],
            [['ru_author', 'en_author', 'x_author'], 'string', 'max' => 100],
            [['uz_position'], 'string', 'max' => 5000],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'uz_quotation' => 'Uz Quotation',
            'ru_quotation' => 'Ru Quotation',
            'en_quotation' => 'En Quotation',
            'x_quotation' => 'X Quotation',
            'uz_author' => 'Uz Author',
            'ru_author' => 'Ru Author',
            'en_author' => 'En Author',
            'x_author' => 'X Author',
            'uz_position' => 'Uz Position',
            'ru_position' => 'Ru Position',
            'en_position' => 'En Position',
            'x_position' => 'X Position',
            'img' => 'Img',
            'active' => 'Active',
        ];
    }
}

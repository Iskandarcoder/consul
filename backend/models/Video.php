<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "video".
 *
 * @property integer $id
 * @property string $uz_name
 * @property string $ru_name
 * @property string $en_name
 * @property string $x_name
 * @property string $frame
 * @property string $date
 */
class Video extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'video';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uz_name', 'ru_name', 'en_name', 'x_name'], 'required'],
            [['frame'], 'string'],
            [['date'], 'safe'],
            [['uz_name', 'ru_name', 'en_name', 'x_name'], 'string', 'max' => 5000],
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
            'frame' => 'Frame',
            'date' => 'Date',
        ];
    }
}

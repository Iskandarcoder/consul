<?php

namespace backend\models;


use Yii;
$lang = Yii::$app->language;

/**
 * This is the model class for table "online".
 *
 * @property integer $id
 * @property string $fio
 * @property integer $reference_subject
 * @property string $telefon
 * @property string $email
 * @property string $reference_text
 * @property string $date
 */
class Online extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $verifyCode;

    public static function tableName()
    {
        return 'online';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fio', 'reference_subject', 'telefon', 'email', 'reference_text'], 'required'],
            [['reference_subject'], 'string'],
            [['reference_text'], 'string'],
            [['date'], 'safe'],
            [['fio'], 'string', 'max' => 100],
            [['telefon'], 'string', 'max' => 30],
            ['email', 'email'],
            ['verifyCode', 'captcha'],

        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fio' => Yii::t('app', 'fio'),
            'reference_subject' => Yii::t('app', 'reference_s'),
            'telefon' => Yii::t('app', 'tel'),
            'email' => Yii::t('app', 'email'),
            'reference_text' => Yii::t('app', 'reference_text'),
        ];
    }
}

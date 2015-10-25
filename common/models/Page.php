<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "page".
 *
 * @property integer $id
 * @property string $title
 * @property string $text
 * @property string $image
 * @property string $lang
 */
class Page extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'page';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'text'], 'required'],
            [['text', 'image', 'lang'], 'string'],
            [['title'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app/translations', 'ID'),
            'title' => Yii::t('app/translations', 'Title'),
            'text' => Yii::t('app/translations', 'Text'),
            'image' => Yii::t('app/translations', 'Image'),
            'lang' => Yii::t('app/translations', 'Lang'),
        ];
    }
}

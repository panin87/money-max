<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "categories".
 *
 * @property integer $id
 * @property string $name
 * @property integer $sub
 * @property integer $parent
 */
class Categories extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'categories';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['sub', 'parent'], 'integer'],
            [['name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
//    public function attributeLabels()
//    {
//        return [
//            'id' => Yii::t('app/translations', 'ID'),
//            'name' => Yii::t('app/translations', 'Name'),
//            'sub' => Yii::t('app/translations', 'Sub'),
//            'parent' => Yii::t('app/translations', 'Parent'),
//        ];
//    }
}

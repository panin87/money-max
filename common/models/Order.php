<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property integer $id
 * @property string $date
 * @property string $name
 * @property string $surname
 * @property string $phone
 * @property double $totalprice
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date', 'name', 'surname', 'phone'], 'required'],
            [['date'], 'safe'],
            [['totalprice'], 'number'],
            [['name', 'surname', 'phone'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app/translations', 'ID'),
            'date' => Yii::t('app/translations', 'Date'),
            'name' => Yii::t('app/translations', 'Name'),
            'surname' => Yii::t('app/translations', 'Surname'),
            'phone' => Yii::t('app/translations', 'Phone'),
            'totalprice' => Yii::t('app/translations', 'Totalprice'),
        ];
    }
}

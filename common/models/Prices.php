<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "prices".
 *
 * @property integer $id
 * @property integer $trip_id
 * @property integer $item_id
 * @property double $price
 */
class Prices extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'prices';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['trip_id', 'item_id'], 'integer'],
            [['price'], 'required'],
            [['price'], 'number']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'trip_id' => Yii::t('app', 'Trip ID'),
            'item_id' => Yii::t('app', 'Item ID'),
            'price' => Yii::t('app', 'Price'),
        ];
    }
}

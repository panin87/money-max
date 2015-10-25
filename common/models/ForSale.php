<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "for_sale".
 *
 * @property integer $id
 * @property integer $cat_id
 * @property double $price
 * @property string $currency
 * @property double $size
 * @property string $idenfiniter
 */
class ForSale extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'for_sale';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cat_id'], 'required'],
            [['cat_id'], 'integer'],
            [['price', 'size'], 'number'],
            [['idenfiniter'], 'string'],
            [['currency'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app/translations', 'ID'),
            'cat_id' => Yii::t('app/translations', 'Cat ID'),
            'price' => Yii::t('app/translations', 'Price'),
            'currency' => Yii::t('app/translations', 'Currency'),
            'size' => Yii::t('app/translations', 'Size'),
            'idenfiniter' => Yii::t('app/translations', 'Idenfiniter'),
        ];
    }
}

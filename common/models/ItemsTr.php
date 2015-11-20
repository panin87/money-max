<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "items_tr".
 *
 * @property integer $id
 * @property integer $item_id
 * @property string $name
 * @property string $type
 * @property string $lang
 */
class ItemsTr extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'items_tr';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['item_id'], 'integer'],
            [['lang'], 'required'],
            [['name', 'type'], 'string', 'max' => 255],
            [['lang'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'item_id' => Yii::t('app', 'Item ID'),
            'name' => Yii::t('app', 'Name'),
            'type' => Yii::t('app', 'Type'),
            'lang' => Yii::t('app', 'Lang'),
        ];
    }
}

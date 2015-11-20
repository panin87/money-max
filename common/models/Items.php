<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "items".
 *
 * @property integer $id
 * @property string $name
 * @property string $type
 * @property double $alowed_size
 * @property integer $trip_id
 *
 * @property Trips $trip
 */
class Items extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'items';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'type', 'alowed_size', 'trip_id'], 'required'],
            [['alowed_size'], 'number'],
            [['trip_id'], 'integer'],
            [['name', 'type'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'type' => Yii::t('app', 'Type'),
            'alowed_size' => Yii::t('app', 'Alowed Size'),
            'trip_id' => Yii::t('app', 'Trip ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTrip()
    {
        return $this->hasOne(Trips::className(), ['id' => 'trip_id']);
    }

    /*
     * Add translations
     * @return boolean
     */
    public function afterSave($insert, $changedAttributes) {
      parent::afterSave($insert, $changedAttributes);
      
    }
}

<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "trips".
 *
 * @property integer $id
 * @property string $from
 * @property string $to
 * @property string $departureTime
 * @property string $arrive
 * @property double $spent_time
 * @property integer $stops
 * @property double $stop_time
 *
 * @property Items[] $items
 */
class Trips extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trips';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['from', 'to', 'departureTime', 'arrive', 'spent_time'], 'required'],
            [['departureTime', 'arrive'], 'safe'],
            [['spent_time', 'stop_time'], 'number'],
            [['stops'], 'integer'],
            [['from', 'to'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'from' => Yii::t('app', 'From'),
            'to' => Yii::t('app', 'To'),
            'departureTime' => Yii::t('app', 'Departure Time'),
            'arrive' => Yii::t('app', 'Arrive'),
            'spent_time' => Yii::t('app', 'Spent Time'),
            'stops' => Yii::t('app', 'Stops'),
            'stop_time' => Yii::t('app', 'Stop Time'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getItems()
    {
        return $this->hasMany(Items::className(), ['trip_id' => 'id']);
    }
}

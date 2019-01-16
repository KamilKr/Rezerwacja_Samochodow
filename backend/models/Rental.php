<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "rental".
 *
 * @property int $rental_id
 * @property string $dropoff_date
 * @property string $pickup_date
 * @property int $car_id
 * @property int $user_id
 * @property int $department_id
 * @property double $total_cost
 *
 * @property Cars $car
 * @property User $user
 * @property Departments $department
 */
class Rental extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rental';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dropoff_date', 'pickup_date', 'car_id', 'user_id', 'department_id', 'total_cost'], 'required'],
            [['dropoff_date', 'pickup_date'], 'safe'],
            [['car_id', 'user_id', 'department_id'], 'integer'],
            [['total_cost'], 'number'],
            [['car_id'], 'unique'],
            [['user_id'], 'unique'],
            [['department_id'], 'unique'],
            [['car_id'], 'exist', 'skipOnError' => true, 'targetClass' => Cars::className(), 'targetAttribute' => ['car_id' => 'car_id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['department_id'], 'exist', 'skipOnError' => true, 'targetClass' => Departments::className(), 'targetAttribute' => ['department_id' => 'department_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'rental_id' => Yii::t('app', 'Rental ID'),
            'dropoff_date' => Yii::t('app', 'Dropoff Date'),
            'pickup_date' => Yii::t('app', 'Pickup Date'),
            'car_id' => Yii::t('app', 'Car ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'department_id' => Yii::t('app', 'Department ID'),
            'total_cost' => Yii::t('app', 'Total Cost'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCar()
    {
        return $this->hasOne(Cars::className(), ['car_id' => 'car_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepartment()
    {
        return $this->hasOne(Departments::className(), ['department_id' => 'department_id']);
    }
}

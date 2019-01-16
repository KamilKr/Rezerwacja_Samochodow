<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "rental".
 *
 * @property int $rental_id
 * @property string $dropoff_date
 * @property string $pickup_date
 * @property int $car_car_id
 * @property int $department_department_id
 * @property double $total_cost
 * @property int $user_id
 *
 * @property Cars $carCar
 * @property Departments $departmentDepartment
 * @property User $user
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
            [['dropoff_date', 'pickup_date', 'car_car_id', 'department_department_id', 'total_cost', 'user_id'], 'required'],
            [['dropoff_date', 'pickup_date'], 'safe'],
            [['car_car_id', 'department_department_id', 'user_id'], 'integer'],
            [['total_cost'], 'number'],
            [['car_car_id'], 'exist', 'skipOnError' => true, 'targetClass' => Cars::className(), 'targetAttribute' => ['car_car_id' => 'car_id']],
            [['department_department_id'], 'exist', 'skipOnError' => true, 'targetClass' => Departments::className(), 'targetAttribute' => ['department_department_id' => 'department_id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
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
            'car_car_id' => Yii::t('app', 'Car Car ID'),
            'department_department_id' => Yii::t('app', 'Department Department ID'),
            'total_cost' => Yii::t('app', 'Total Cost'),
            'user_id' => Yii::t('app', 'User ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarCar()
    {
        return $this->hasOne(Cars::className(), ['car_id' => 'car_car_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepartmentDepartment()
    {
        return $this->hasOne(Departments::className(), ['department_id' => 'department_department_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
	
}

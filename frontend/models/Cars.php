<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "cars".
 *
 * @property int $car_id
 * @property string $car_name
 * @property int $car_price
 * @property string $car_category
 * @property int $car_place
 *
 * @property Departments $departments
 * @property Rental $rental
 */
class Cars extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cars';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['car_name', 'car_price', 'car_category', 'car_place'], 'required'],
            [['car_price', 'car_place'], 'integer'],
            [['car_name', 'car_category'], 'string', 'max' => 100],
            
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'car_id' => Yii::t('app', 'Car ID'),
            'car_name' => Yii::t('app', 'Car Name'),
            'car_price' => Yii::t('app', 'Car Price'),
            'car_category' => Yii::t('app', 'Car Category'),
            'car_place' => Yii::t('app', 'Car Place'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepartments()
    {
        return $this->hasOne(Departments::className(), ['department_id' => 'car_place']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRental()
    {
        return $this->hasOne(Rental::className(), ['car_id' => 'car_id']);
    }
}

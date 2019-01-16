<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "departments".
 *
 * @property int $department_id
 * @property string $department_name
 * @property string $department_street
 * @property string $department_town
 *
 * @property Cars $department
 * @property Rental $rental
 */
class Departments extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'departments';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['department_id', 'department_name', 'department_street', 'department_town'], 'required'],
            [['department_id'], 'integer'],
            [['department_name', 'department_street', 'department_town'], 'string', 'max' => 100],
            [['department_id'], 'unique'],
            [['department_id'], 'exist', 'skipOnError' => true, 'targetClass' => Cars::className(), 'targetAttribute' => ['department_id' => 'car_place']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'department_id' => Yii::t('app', 'Department ID'),
            'department_name' => Yii::t('app', 'Department Name'),
            'department_street' => Yii::t('app', 'Department Street'),
            'department_town' => Yii::t('app', 'Department Town'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepartment()
    {
        return $this->hasOne(Cars::className(), ['car_place' => 'department_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRental()
    {
        return $this->hasOne(Rental::className(), ['department_id' => 'department_id']);
    }
}

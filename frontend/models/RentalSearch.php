<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Rental;

/**
 * RentalSearch represents the model behind the search form of `frontend\models\Rental`.
 */
class RentalSearch extends Rental
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rental_id', 'car_car_id', 'department_department_id'], 'integer'],
            [['dropoff_date', 'pickup_date'], 'safe'],
            [['total_cost'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Rental::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'rental_id' => $this->rental_id,
            'dropoff_date' => $this->dropoff_date,
            'pickup_date' => $this->pickup_date,
            'car_car_id' => $this->car_car_id,
            'department_department_id' => $this->department_department_id,
            'total_cost' => $this->total_cost,
        ]);

        return $dataProvider;
    }
}

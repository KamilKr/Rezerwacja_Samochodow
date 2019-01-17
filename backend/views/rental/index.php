<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\RentalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rentals';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rental-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Rental', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
			'rowOptions' => function($model){
				if($model->paid_status == 0){
					return['class'=>'danger'];
				} else
					{
					return['class'=>'success'];
				}
				
			},
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'rental_id',
            'dropoff_date',
            'pickup_date',
             'carCar.car_name',
            'departmentDepartment.department_name',
            'total_cost',
			'user.username',
            //'paid_status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

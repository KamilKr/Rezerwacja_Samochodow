<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\data\ActiveDataProvider;
use frontend\models\Rental;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\RentalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Your Financial Section';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rental-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Rental', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
	
	<?php $dataProvider = new ActiveDataProvider([
    'query' => rental::find()->
                  where(['user_id' =>  Yii::$app->user->identity->id ]),
]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
     
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

			'pickup_date',
            'dropoff_date',
            'carCar.car_name',
            'departmentDepartment.department_name',
            'total_cost',
			'user.username',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

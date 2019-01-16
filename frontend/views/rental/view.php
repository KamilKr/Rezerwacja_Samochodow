<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Rental */

$this->title = $model->rental_id;
$this->params['breadcrumbs'][] = ['label' => 'Rentals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rental-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Payment', ['delete', 'id' => $model->rental_id], [
            'class' => 'btn btn-success',
            'data' => [
                'confirm' => 'Please confirm payment',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
          'rental_id',
			'pickup_date',
            'dropoff_date',
            'carCar.car_name',
            'departmentDepartment.department_name',
			 'departmentDepartment.department_town',
            'total_cost',
			'user.username'
        ],
    ]) ?>

</div>

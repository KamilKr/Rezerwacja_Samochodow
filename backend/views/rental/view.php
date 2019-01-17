<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Rental */

$this->title = $model->rental_id;
$this->params['breadcrumbs'][] = ['label' => 'Rentals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rental-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->rental_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->rental_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'rental_id',
            'dropoff_date',
            'pickup_date',
           'carCar.car_name',
            'departmentDepartment.department_name',
			 'departmentDepartment.department_town',
            'total_cost',
            'user.username',
            'paid_status',
        ],
    ]) ?>

</div>

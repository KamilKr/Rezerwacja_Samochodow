<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Rental */

$this->title = 'Update Rental: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Rentals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->rental_id, 'url' => ['view', 'id' => $model->rental_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rental-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

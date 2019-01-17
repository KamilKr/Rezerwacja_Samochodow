<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Rental */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rental-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'dropoff_date')->textInput() ?>

    <?= $form->field($model, 'pickup_date')->textInput() ?>

    <?= $form->field($model, 'car_car_id')->textInput() ?>

    <?= $form->field($model, 'department_department_id')->textInput() ?>

    <?= $form->field($model, 'total_cost')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'paid_status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

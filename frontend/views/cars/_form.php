<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Cars */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cars-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'car_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'car_price')->textInput() ?>

    <?= $form->field($model, 'car_category')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'car_place')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

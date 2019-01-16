<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use frontend\models\Cars;
use dosamigos\datepicker\DatePicker;
use frontend\models\Departments;
use kartik\select2\Select2;
use common\models\User;
/* @var $this yii\web\View */
/* @var $model frontend\models\Rental */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rental-form">

    <?php $form = ActiveForm::begin(); ?>


		<?= $form->field($model, 'car_car_id')->widget(Select2::classname(), [
					'data' => ArrayHelper :: map(cars::find()->all(),'car_id','car_name'),
					'language' => 'en',
					'options' => ['placeholder' => 'Select a car', 'id' =>'carId'],
					'pluginOptions' => [
						'allowClear' => true
					],
	]); ?>

	<?= $form->field($model, 'department_department_id')->textInput([ 'readonly' => true,'placeholder'=>'Department Id '])?>

	<?= $form->field($model, 'total_cost')->textInput([ 'readonly' => true,'placeholder'=>'Cost per day']) ?>
	 	
		<?= $form->field($model, 'pickup_date')->widget(
    DatePicker::className(), [
        // inline too, not bad
         'inline' => false, 
         // modify template for custom rendering
        //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-m-d',
			'startDate'=>'0d'
        ]
]);?>
    <?= $form->field($model, 'dropoff_date')->widget(
    DatePicker::className(), [
        // inline too, not bad
         'inline' => false, 
         // modify template for custom rendering
        //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-m-d',
			'startDate'=>'+1d'
        ]
]);?>
	<?= $form->field($model, 'user_id')->widget(Select2::classname(), [
					'data' => ArrayHelper :: map(user::find()->all(),'id','username'),
					'language' => 'en',
					'options' => ['placeholder' => 'Select a user', 'id' =>'username'],
					'pluginOptions' => [
						'allowClear' => true
					],
	]); ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php
$script = <<< JS

$('#carId').change(function(){
	var carId = $(this).val();
	//alert(carId);
	$.get('index.php?r=cars/get-dep',{carId : carId}, function(data){
	var data = $.parseJSON(data);
	$('#rental-department_department_id').attr('value',data.car_place);
	$('#rental-total_cost').attr('value',data.car_price);
});
});

JS;
$this->registerJs($script);
?>

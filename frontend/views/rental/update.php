<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model frontend\models\Rental */

$this->title = 'Confirm Payment';
$this->params['breadcrumbs'][] = ['label' => 'Rentals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->rental_id, 'url' => ['view', 'id' => $model->rental_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rental-update">

    <h1><?= Html::encode($this->title) ?></h1>

     <?php $form = ActiveForm::begin(); ?>
		


<?= $form->field($model, 'paid_status')->hiddenInput(['value'=> '1'])->label(false); ?>
	<div class="form-group">
        <?= Html::submitButton('Confirm', ['class' => 'btn btn-success']) ?>
    </div>
	
	 <?php ActiveForm::end(); ?>

</div>

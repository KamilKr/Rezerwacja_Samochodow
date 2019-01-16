<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Cars */

$this->title = $model->car_id;
$this->params['breadcrumbs'][] = ['label' => 'Cars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cars-view">

    <h1>Car Info</h1>


   <?php
if(!Yii::$app->user->isGuest){
      echo Html::a('Rent', ['rental/create'], 
                  ['class' => 'btn btn-primary']);
}else {
	echo Html::a('Rent', ['site/login'], 
                  ['class' => 'btn btn-primary']);
}

		?>
</p>
	
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'car_name',
            'car_price' ,
            'car_category',
            'departments.department_name',
			'departments.department_town',
        ],
    ]) ?>

</div>

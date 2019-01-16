<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\CarsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cars';
$this->params['breadcrumbs'][] = $this->title;
$this->registerCssFile("/frontend/web/css/animate.css");
$this->registerCssFile("/frontend/web/css/prettyPhoto.css");
$this->registerCssFile("/frontend/web/css/price-range.css");
$this->registerCssFile("/frontend/web/css/responsive.css");
$this->registerCssFile("/frontend/web/css/main.css");
$this->registerCssFile("/frontend/web/css/bootstrap.min.css");
?>
<div class="cars-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

 
<p>
   <?php
if(!Yii::$app->user->isGuest){
    if(Yii::$app->user->identity->user_adm == true){
      echo Html::a('Add Car', ['create'], 
                  ['class' => 'btn btn-success']);
 
}}

		?>
</p>

		
  

    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemOptions' => ['class' => 'item'],
        'itemView' => function ($model, $key, $index, $widget) {
            return Html::a(Html::encode($model->car_name), ['view', 'id' => $model->car_id]);
        },
		
    ]) ?>
	


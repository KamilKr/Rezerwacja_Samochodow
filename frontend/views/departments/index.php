<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\DepartmentsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Departments';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="departments-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>
	
	<?php
if(!Yii::$app->user->isGuest){
    if(Yii::$app->user->identity->user_adm == true){
      echo Html::a('Add Department', ['create'], 
                  ['class' => 'btn btn-success']);
 
}}

		?>

   

    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemOptions' => ['class' => 'item'],
        'itemView' => function ($model, $key, $index, $widget) {
            return Html::a(Html::encode($model->department_name), ['view', 'id' => $model->department_id]);
        },
    ]) ?>
</div>

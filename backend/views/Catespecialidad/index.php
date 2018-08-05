<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\CatespecialidadSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Especialidad';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="catespecialidad-index">

    <center style="background-color: #85929E" > <h1><?= Html::encode($this->title) ?></h1></center>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Especialidad', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IDESPECIALIDAD',
            'IDMEDICO',
            'NOMBREESPECIALIDAD',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\CitasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Citas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="citas-index">

     <center style="background-color: #85929E" > <h1><?= Html::encode($this->title) ?></h1></center>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Citas', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IDCITA',
            'IDESPECIALIDAD',
            'FECHACREACION',
            'FECHACITA',
            'NOMBREPACIENTE',
            'CEDULA',
            'TELEFONO',
            'HORA',
            'ESTADO_CITA',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

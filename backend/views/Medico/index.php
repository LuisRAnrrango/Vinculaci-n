<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\MedicoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Médicos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="medico-index">

   <center style="background-color: #85929E" >  <h1><?= Html::encode($this->title) ?></h1></center>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Medico', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IDMEDICO',
            'NOMBRES_MEDICO',
            'APELLIDOS_MEDICO',
            'TELEFONO_MEDICO',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

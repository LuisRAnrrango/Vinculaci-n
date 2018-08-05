<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\Catespecialidad;
use backend\models\Medico;
use backend\models\Citas;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\CitasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */



$this->title = 'Citas Médicas ';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="citas-index">

   <center style="background-color: #85929E" >  <h1> <?= Html::encode($this->title) ?></h1></center>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

<!--    <p>
        <?= Html::a('Create Citas', ['create'], ['class' => 'btn btn-success']) ?>
    </p>-->
  <?php
//if ($model->NOMBREESPECIALIDAD=='Cardiología') {
    Pjax::begin(); 
  ?>
    
    
    
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        
        'columns' => [
         
             'IDCITA',
           'IDESPECIALIDAD',
         //   'FECHACREACION',
           // 'FECHACITA',
          //  'NOMBREPACIENTE',
            //'CEDULA',
           // 'TELEFONO',
           // 'HORA',
            // 'ESTADO_CITA',
         
            'HORA',
            'ESTADO_CITA',
                     
            [
                'class' => 'yii\grid\ActionColumn',
              
            'template'=>'{update}'
                ],
        ],
    ]); ?>
    
    
    
    
    <?php
//}
//else{
Pjax::end();
      ?>
    
<!--    <h1>Hola No hay citas para esta especialidad</h1>-->
     <?php
//    }
     ?>
</div>

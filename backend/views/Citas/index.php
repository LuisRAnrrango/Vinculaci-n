<?php

use yii\helpers\Html;
use yii\grid\GridView;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\CitasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Agendar Citas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="citas-index">

     <center style="background-color: #85929E" > <h1><?= Html::encode($this->title) ?></h1></center>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Citas', ['create'], ['class' => 'btn btn-success']) ?>
      
        <a href="http://localhost:81/Vinculaci-n/backend/views/Catespecialidad/pdf/reporteCITAS.php"><button class="btn btn-info pull-right">Reportes</button></a>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'rowOptions'=> function($model){
         if ($model -> ESTADO_CITA =='PENDIENTE') {
//                  GridView.Rows().Visible = True;            
                    return['class' => 'warning'];
                }else  if ($model -> ESTADO_CITA =='DISPONIBLE') {
//                  GridView.Rows().Visible = True;            
                    return['class' => 'success'];
                }
 return['class' => 'danger'];
 
        }, 
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'IDCITA',
//            'IDESPECIALIDAD',
            [
                'attribute'=>'IDESPECIALIDAD',
                'filter'=>array( "1"=>"Odontología","2"=>"Medicina General","3"=>"Ginecología","4"=>"Fisioterapia","5"=>"Oftalmología")
            ],
            //'FECHACREACION',
//            'FECHACITA',
                        [
                    'attribute'=>'FECHACITA',
                    'value'=>'FECHACITA',
                    'format'=>'raw',
                    'filter'=>DatePicker::widget([
    'model' => $searchModel,
    'attribute' => 'FECHACITA',
    'template' => '{addon}{input}',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd'
                          ]
])
                ],
            'HORA',
            'NOMBREPACIENTE',
            'CEDULA',
            'TELEFONO',
            
//            'ESTADO_CITA',
[
                'attribute'=>'ESTADO_CITA',
                'filter'=>array( "DISPONIBLE"=>"DISPONIBLE","PENDIENTE"=>"PENDIENTE","APROBADO"=>"APROBADO")
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

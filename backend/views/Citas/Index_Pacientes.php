<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\Catespecialidad;
use backend\models\Medico;
use backend\models\Citas;
use yii\widgets\Pjax;
use dosamigos\datepicker\DatePicker;



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
    <div class="col-lg-4">
                <h2>Instrucciones</h2>

                <p>    
         Para continuar con la reserva de sus cita médica debe tomar en cuenta que:<br> 
        1. Debe seleccionar una especialidad <br>
        2. Debe seleccionar una fecha<br>
        3. Debe escoger un horario disponible<br>
</p>

<!--                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>-->
            </div>
    <div class="col-lg-4">
                <h2></h2>

                <p>                        <img src="cruz.png"/>

</p>

<!--                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>-->
            </div>

   <!--<div class="container" style="background-color: #F5B7B1">-->
  <!-- Content here -->
  <div class="container-fluid">
 
<!--      <table>
          <td>
          <tr>
          <h3>ADVERTENCIA</h3>    
          </tr>            
          <tr>
          <h4>Para continuar con la reserva de sus citas médicas tomar en cuenta que: </h4>   
          </tr>
        
          <tr>
          <h5> Debe seleccionar una especialidad</h5>
          <h5> Debe seleccionar una fecha</h5>
          <h5> Debe escoger un horario disponible</h5>
 
          <img  src="images//backend/views/Citas/images/descarga.jpg"  />
          <img  src="images/descarga.jpg"  />
          </tr>

      </table>-->
        
      
</div>
 
</div>  
    
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'rowOptions'=> function($model){
         if ($model -> ESTADO_CITA !=='DISPONIBLE') {
//                  GridView.Rows().Visible = True;            
                    return['class' => 'danger'];
                }
 return['class' => 'success'];
 
        }, 
                
        'columns' => [
//           ['class' => 'yii\grid\SerialColumn'],
//             'IDCITA',
        //   'IDESPECIALIDAD',
         //   'FECHACREACION',
                   [
                'attribute'=>'IDESPECIALIDAD',
                'filter'=>array( "1"=>"Odontología","2"=>"Medicina General","3"=>"Ginecología","4"=>"Fisioterapia","5"=>"Oftalmología")
            ],
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
          //  'NOMBREPACIENTE',
            //'CEDULA',
           // 'TELEFONO',
           // 'HORA',
            // 'ESTADO_CITA',
         
            'HORA',
//            'ESTADO_CITA',

            
                     
            [
                ///---------
                'class' => 'yii\grid\ActionColumn',
            'template'=>'{update}',
                      'buttons' => [
                        'update' => function($url, $model) {
                if($model -> ESTADO_CITA !=='DISPONIBLE'){
                    return Html ::a(
                                            '</span> <span class="glyphicon glyphicon-minus-sign"></span>',
                                            $url, [
                                        'title' => 'Cita Reservada',
                            ]);
                }
                            return Html ::a(
                                            '<span class="glyphicon">Reservar </span> <span class="glyphicon glyphicon-check"></span>',
                                            $url, [
                                        'title' => 'Reservar Cita',
                            ]);
                        }
                    ]
                ],
        ],
    ]); ?>
    
    
    
    
    <?php
//}
//1
 

//else{
Pjax::end();
      ?>
    

    
</div>

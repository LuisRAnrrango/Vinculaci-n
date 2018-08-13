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
   <div class="container" style="background-color: #F5B7B1">
  <!-- Content here -->
  <div class="container-fluid">
 
      <table>
          <td>
          <tr>
          <h2>ADVERTENCIA:</h2>    
          </tr>
            <br/>
          <tr>
          <h4>Para continuar con la reserva de sus citas médicas tomar en cuenta que: </h4>   
          </tr>
        
          <tr>
          <h4> Elija las siguientes opciones segun número de Especialidad  </h4>
          </tr>
          <br/>
            <tr>
            <h5> 1 :Odontología  </h5>
           
            <h5> 2 : Medicina General </h5>
          
            <h5> 4 Fisioterapia :  </h5>
         
            <h5> 5 Oftalmología:  </h5>
            <br/>
          </tr>
          
          </td>
          <td>
          <tr>
              
          </tr>
          <tr>
              
          </tr>
          <tr>
<!--          <img  src="images//backend/views/Citas/images/descarga.jpg"  />-->
<!--          <img  src="images/descarga.jpg"  />-->
          </tr>
          <tr>
              
          </tr>
          </td>
      </table>
        
      
</div>
 
</div>
     <img  src="images/descarga.jpg"  /> 
     <?= Html::img('images/descarga.jpg', ['alt' => 'My logo']) ?>
    <?php
    
  ?>
    
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
//else{
Pjax::end();
      ?>
    

    
</div>

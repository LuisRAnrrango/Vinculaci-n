<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Citas */

$this->title = $model->IDCITA;
$this->params['breadcrumbs'][] = ['label' => 'Citas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="citas-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <center> <h1>Cruz Roja Ecuatoriana</h1></center> 
    <center><h2>Sistema de reserva de citas médicas online</h2></center> 
    <p>
        <?php
           if(Yii::$app->user->can('index-medico')){
               
            ?>
        <?= Html::a('Update', ['update', 'id' => $model->IDCITA], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->IDCITA], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
                <a href="http://localhost:81/Vinculaci-n/backend/web/index.php?r=citas%2Findex"><button class="btn-danger">Inicio</button></a>

         </p>
           <p>
           <?php
           
           }
           else{
               
              ?>
   <a class="btn btn-success" href="javascript:window.print()">Imprimir</a>
        
        
        
            <?php  }
            
          ?>
         
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'IDCITA',
            'IDESPECIALIDAD',
            'FECHACREACION',
            'FECHACITA',
            'NOMBREPACIENTE',
            'CEDULA',
            'TELEFONO',
            'HORA',
            'ESTADO_CITA',
        ],
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Citas */

$this->title = 'Registro de Datos: ' ;
$this->params['breadcrumbs'][] = ['label' => 'Citas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IDCITA, 'url' => ['view', 'id' => $model->IDCITA]];
$this->params['breadcrumbs'][] = 'Registro';
?>
<div class="citas-update">

    <h1><?= Html::encode($this->title) ?></h1>
<?php
        if(Yii::$app->user->can('update-citas')){
         
        ?>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
  <?php
    }else{
     
   ?>
        <?= $this->render('_form_Pacientes', [
        'model' => $model,
    ]) ?>  
   <?php 
    }?>
    
    
</div>

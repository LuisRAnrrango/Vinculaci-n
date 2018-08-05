<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Citas */

$this->title = 'Crear Citas';
$this->params['breadcrumbs'][] = ['label' => 'Citas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="citas-create">
       
  <?php
        if(Yii::$app->user->can('create-citasPartes')){
         
        ?>

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form_Secretaria', [
        'model' => $model,
    ]) ?>
 <?php
    }else
    {
    ?>
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
 <?php
    }
       ?>   
    
    
    
</div>

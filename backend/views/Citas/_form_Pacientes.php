<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Citas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="citas-form">

    
    <?php $form = ActiveForm::begin(); 
   
    ?>
<!--<input type="text" id="citas-nombrepaciente" class="form-control"
       name="Citas[NOMBREPACIENTE]" value="" maxlength="100" aria-invalid="false">-->

   <?php


if ($model->ESTADO_CITA=='DISPONIBLE') {
    ?>


   <?= $form->field($model, 'NOMBREPACIENTE')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'CEDULA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TELEFONO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'HORA')->textInput() ?>

  <?= $form->field($model, 'ESTADO_CITA')->dropDownList(['PENDIENTE'=>'PENDIENTE']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>   

    <?php ActiveForm::end(); ?>
<?php
} else {
   
  ?>
   
  
    
    <h1>Turno no disponible</h1>
          <h1>Por favor elija otro</h1>
            <a href="http://localhost:81/final/backend/web/index.php?r=citas%2Findex"><button class="btn-danger">Regresar</button></a>

<?php
}

?>
   
    
</div>

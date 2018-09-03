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


   <?= $form->field($model, 'NOMBREPACIENTE')->textInput(['minlength' => 8])->hint('Ingrese su nombre completo') ?>

    
    <?= $form->field($model, 'CEDULA')->textInput(['maxlength' => true])->hint('Ingrese su número de cédula correctamente') ?>

    <?= $form->field($model, 'TELEFONO')->textInput(['maxlength' => true])->hint('Ingrese su número telefónico de contacto') ?>

  <?= $form->field($model, 'ESTADO_CITA')->dropDownList(['PENDIENTE'=>'PENDIENTE']) ?>

            <a href="http://localhost:81/Vinculaci-n/backend/web/index.php?r=citas%2Findex"><button class="btn-danger">Cancelar</button></a>
            <p>
    <div class="form-group">
        <?= Html::submitButton('Reservar', ['class' => 'btn btn-success  btn-xs']) ?>
    </div>   

    <?php ActiveForm::end(); ?>
<?php
} else {
   
  ?>
   
  
    
    <h1>Turno no disponible</h1>
          <h1>Por favor elija otro</h1>
            <a href="http://localhost:81/Vinculaci-n/backend/web/index.php?r=citas%2Findex"><button class="btn-danger">Regresar</button></a>

<?php
}

?>
   
    
</div>

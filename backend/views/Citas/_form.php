<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Citas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="citas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'IDESPECIALIDAD')->textInput() ?>

    <?= $form->field($model, 'FECHACREACION')->textInput() ?>

    <?= $form->field($model, 'FECHACITA')->textInput() ?>

    <?= $form->field($model, 'NOMBREPACIENTE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CEDULA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TELEFONO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'HORA')->textInput() ?>

     <?= $form->field($model, 'ESTADO_CITA')->dropDownList(['DISPONIBLE'=>'DISPONIBLE','APROBADO'=>'APROBADO','PENDIENTE'=>'PENDIENTE','CANCELADA'=>'CANCELADA','FINALIZADA'=>'FINALIZADA']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

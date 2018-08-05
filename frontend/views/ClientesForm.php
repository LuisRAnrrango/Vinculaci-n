<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Clientes */
/* @var $form ActiveForm */
?>
<div class="ClientesForm">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'COD_CLIENTE') ?>
        <?= $form->field($model, 'CEDULA_CLIENTE') ?>
        <?= $form->field($model, 'NOMBRE_CLIENTE') ?>
        <?= $form->field($model, 'APELLIDO_CLIENTE') ?>
        <?= $form->field($model, 'DIRECCION_CLIENTE') ?>
        <?= $form->field($model, 'TELEFONO_CLIENTE') ?>
    
        <div class="form-group">
            <?= Html::submitButton(Yii::t('app', 'Submit'), ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- ClientesForm -->

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\search\CitasSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="citas-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'IDCITA') ?>

    <?= $form->field($model, 'IDESPECIALIDAD') ?>

    <?= $form->field($model, 'FECHACREACION') ?>

    <?= $form->field($model, 'FECHACITA') ?>

    <?= $form->field($model, 'NOMBREPACIENTE') ?>

    <?php // echo $form->field($model, 'CEDULA') ?>

    <?php // echo $form->field($model, 'TELEFONO') ?>

    <?php // echo $form->field($model, 'HORA') ?>

    <?php // echo $form->field($model, 'ESTADO_CITA') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

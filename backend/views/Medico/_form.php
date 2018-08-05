<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Medico */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="medico-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NOMBRES_MEDICO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'APELLIDOS_MEDICO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TELEFONO_MEDICO')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

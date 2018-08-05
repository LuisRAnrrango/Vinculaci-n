<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\search\MedicoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="medico-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'IDMEDICO') ?>

    <?= $form->field($model, 'NOMBRES_MEDICO') ?>

    <?= $form->field($model, 'APELLIDOS_MEDICO') ?>

    <?= $form->field($model, 'TELEFONO_MEDICO') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

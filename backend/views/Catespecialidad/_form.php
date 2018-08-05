<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Medico;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\Catespecialidad */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="catespecialidad-form">

    <?php $form = ActiveForm::begin(); ?>

      <?= $form->field($model, 'IDMEDICO')->dropDownList(
    ArrayHelper::map(Medico::find()->all(), 'IDMEDICO', 'NOMBRES_MEDICO'),
            ['promt'=>'Select MEDICO']) ?>

    <?= $form->field($model, 'NOMBREESPECIALIDAD')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

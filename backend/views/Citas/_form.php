<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
/* @var $this yii\web\View */
/* @var $model backend\models\Citas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="citas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'IDESPECIALIDAD')->textInput() ?>

         <?=
		$form-> field($model, 'FECHACITA')->widget(\yii\jui\DatePicker::classname(),[
		'dateFormat' => 'yyyy/MM/dd',
//                'dateFormat' => 'dd/MM/yyyy',
		'value' => date('d/m/Y'),
		'options' => ['style'=>'position: relative; z-index: 999','class'=>'form-conttrol']
		])
//            $form->field($model, 'FECHACITA')->widget(
//    DatePicker::className(), [
//        // inline too, not bad
//         'inline' => true, 
//         // modify template for custom rendering
//        'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
//        'clientOptions' => [
//            'autoclose' => true,
//            'format' => 'dd-M-yyyy'
//        ]
//]);
		?>

    <?= $form->field($model,'HORA')->widget(kartik\time\TimePicker::className(),[
		'pluginOptions' => ['minuteStep'=>5]
		]) ?>

    <?= $form->field($model, 'NOMBREPACIENTE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CEDULA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TELEFONO')->textInput(['maxlength' => true]) ?>

     <?= $form->field($model, 'ESTADO_CITA')->dropDownList(['DISPONIBLE'=>'DISPONIBLE','APROBADO'=>'APROBADO','PENDIENTE'=>'PENDIENTE','CANCELADA'=>'CANCELADA','FINALIZADA'=>'FINALIZADA']) ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success btn-xs']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

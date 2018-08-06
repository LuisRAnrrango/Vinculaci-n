<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use backend\models\Medico;
use backend\models\Catespecialidad;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Citas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="citas-form">

    
    <?php $form = ActiveForm::begin(); ?>

  
    
         <?= $form->field($model, 'IDESPECIALIDAD')->dropDownList(
    ArrayHelper::map(Catespecialidad::find()->all(), 'IDESPECIALIDAD', 'NOMBREESPECIALIDAD'),
            ['promt'=>'Select ESPECIALIDAD']) ?>

     <?=
		$form-> field($model, 'FECHACREACION')->widget(\yii\jui\DatePicker::classname(),[
		'dateFormat' => 'yyyy/dd/MM',
		'value' => date('d/m/Y'),
		'options' => ['style'=>'position: relative; z-index: 999','class'=>'form-conttrol']
		])
		?>

     <?=
		$form-> field($model, 'FECHACITA')->widget(\yii\jui\DatePicker::classname(),[
		'dateFormat' => 'yyyy/dd/MM',
		'value' => date('d/m/Y'),
		'options' => ['style'=>'position: relative; z-index: 999','class'=>'form-conttrol']
		])
		?>
        <?= $form->field($model, 'HORA')->textInput() ?>

         <?= $form->field($model, 'ESTADO_CITA')->dropDownList(['DISPONIBLE'=>'DISPONIBLE']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>   

    <?php ActiveForm::end(); ?>

   
    
</div>

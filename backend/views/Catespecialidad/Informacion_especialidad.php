<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap\Modal;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $model backend\models\Citas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="catespecialidad-form">

    
    <?php $form = ActiveForm::begin(); 
 Pjax::begin();
    ?>


          <h1>Las Especialidades que ofrece la institución son Exelentes</h1>
          <h2>Para mayor Información en:</h2>
          <a href="http://localhost:81/Vinculaci-n/backend/web/index.php?r=citas%2Findex"><button class="btn btn-info pull-right">Regresar</button></a>
         
<?php
Pjax::end();
?>
   
    
</div>

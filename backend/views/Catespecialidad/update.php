<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Catespecialidad */

$this->title = 'Update Catespecialidad: ' . $model->IDESPECIALIDAD;
$this->params['breadcrumbs'][] = ['label' => 'Catespecialidads', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IDESPECIALIDAD, 'url' => ['view', 'id' => $model->IDESPECIALIDAD]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="catespecialidad-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

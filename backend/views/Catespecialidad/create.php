<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Catespecialidad */

$this->title = 'Crear Especialidad';
$this->params['breadcrumbs'][] = ['label' => 'Catespecialidads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="catespecialidad-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

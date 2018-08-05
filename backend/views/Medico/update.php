<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Medico */

$this->title = 'Update Medico: ' . $model->IDMEDICO;
$this->params['breadcrumbs'][] = ['label' => 'Medicos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IDMEDICO, 'url' => ['view', 'id' => $model->IDMEDICO]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="medico-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Catespecialidad */

$this->title = $model->IDESPECIALIDAD;
$this->params['breadcrumbs'][] = ['label' => 'Catespecialidads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="catespecialidad-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->IDESPECIALIDAD], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->IDESPECIALIDAD], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'IDESPECIALIDAD',
            'IDMEDICO',
            'NOMBREESPECIALIDAD',
        ],
    ]) ?>

</div>

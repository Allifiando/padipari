<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Relawan */

$this->title = 'Update Relawan: ' . $model->id_relawan;
$this->params['breadcrumbs'][] = ['label' => 'Relawans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_relawan, 'url' => ['view', 'id' => $model->id_relawan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="relawan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

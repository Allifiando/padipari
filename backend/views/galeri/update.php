<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Galeri */

$this->title = 'Update Galeri: ' . $model->id_galeri;
$this->params['breadcrumbs'][] = ['label' => 'Galeris', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_galeri, 'url' => ['view', 'id' => $model->id_galeri]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="galeri-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

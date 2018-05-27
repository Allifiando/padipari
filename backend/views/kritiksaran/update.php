<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Kritiksaran */

$this->title = 'Kritik & Saran Dari ' . $model->nama_kritik_saran;
$this->params['breadcrumbs'][] = ['label' => 'Kritik & Saran', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_kritik_saran, 'url' => ['view', 'id' => $model->id_kritik_saran]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kritiksaran-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

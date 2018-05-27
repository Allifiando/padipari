<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Kritiksaran */

$this->title = $model->nama_kritik_saran;
$this->params['breadcrumbs'][] = ['label' => 'Kritik & Saran', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kritiksaran-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_kritik_saran], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_kritik_saran], [
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
            'id_kritik_saran',
            'nama_kritik_saran',
            'email_kritik_saran:email',
            'penj_kritik_saran',
        ],
    ]) ?>

</div>

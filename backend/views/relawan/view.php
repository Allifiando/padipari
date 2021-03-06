<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Relawan */

$this->title = $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Relawans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="relawan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_relawan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_relawan], [
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
            'id_relawan',
            'nama',
            'no_telp',
            'email:email',
            'line',
            'instagram',
            [
                'attribute'=>'agenda_id',
                'value'=>function($model){
                    return $model->getAgenda();
                }
            ],
            'tgl_daftar',
        ],
    ]) ?>

</div>

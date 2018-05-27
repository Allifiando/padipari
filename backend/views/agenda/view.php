<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Agenda */

$this->title = $model->nama_agenda;
$this->params['breadcrumbs'][] = ['label' => 'Agendas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="agenda-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_agenda], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_agenda], [
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
            'id_agenda',
            'nama_agenda',

            // 'id_galeri',
            [
                'attribute' => 'id_galeri',
                'format' => 'html',
                'value' => function($model) {
                    return $model->getImageUrl();
                }
            ],

            'waktu',
            'ket_agenda',
            'tempat',
            
            'create_at',
        ],
    ]) ?>

</div>

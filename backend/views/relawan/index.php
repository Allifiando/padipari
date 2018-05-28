<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\RelawanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Relawans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="relawan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Relawan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_relawan',
            'nama',
            'no_telp',
            'email:email',
            'line',
            'instagram',
            // 'agenda_id',
            'tgl_daftar',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

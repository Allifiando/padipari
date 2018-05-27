<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\KritiksaranSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kritik & Saran';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kritiksaran-index">

    <h1><?= $this->title ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Kritiksaran', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_kritik_saran',
            'nama_kritik_saran',
            'email_kritik_saran:email',
            'penj_kritik_saran',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

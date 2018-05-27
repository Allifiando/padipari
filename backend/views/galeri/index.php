<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\GaleriSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Galeris';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="galeri-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Galeri', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_galeri',
            // 'foto',
            [
                'attribute' => 'foto',
                'format' => 'html',
                'value' => function($model) {
                    return $model->getImageUrl();
                }
            ],
            'caption',
            'create_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

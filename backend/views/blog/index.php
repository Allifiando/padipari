<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\BlogSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Blogs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blog-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Blog', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_blog',
            'judul_blog',
            // 'deskripsi:ntext',

            // 'penulis',
            [
                'attribute' => 'penulis',
                'header' => 'Penulis',
                'filter' => $penulis,
                'format' => 'raw',
                'value' => function($model) {
                    return $model->penulis;
                }
            ],
            
            'tanggal_blog',
            // 'id_galeri',
            
            // 'publish',
            [
                'attribute'=>'publish',
                'header'=>'Publish',
                'filter' => ['y'=>'Active', 'n'=>'Deactive'],
                'format'=>'raw',    
                'value' => function($model, $key, $index) {   
                    if($model->publish == 'y') {
                        return 'Active';
                    }
                    else {   
                        return 'Deactive';
                    }
                },
            ],

            // buat tombol untuk publish / not
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{publish}',
                'buttons' => [
                    'publish' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-check"></span>', 
                            $url, [
                                'title' => Yii::t('app', 'Publish'),
                            ]
                        );
                    }
                ],
                'urlCreator' => function ($action, $model, $key, $index) {
                    if ($action === 'publish') {
                        return Url::to(['blog/publish', 'id'=>$model->id_blog]);
                    }
                }
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

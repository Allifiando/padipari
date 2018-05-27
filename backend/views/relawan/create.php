<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Relawan */

$this->title = 'Create Relawan';
$this->params['breadcrumbs'][] = ['label' => 'Relawans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="relawan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Kritiksaran */

$this->title = 'Create Kritik & Saran';
$this->params['breadcrumbs'][] = ['label' => 'Kritik & Saran', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kritiksaran-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

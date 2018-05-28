<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\KritiksaranSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kritiksaran-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_kritik_saran') ?>

    <?= $form->field($model, 'nama_kritik_saran') ?>

    <?= $form->field($model, 'email_kritik_saran') ?>

    <?= $form->field($model, 'penj_kritik_saran') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\RelawanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="relawan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_relawan') ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'no_telp') ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'line') ?>

    <?php // echo $form->field($model, 'instagram') ?>

    <?php // echo $form->field($model, 'agenda_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

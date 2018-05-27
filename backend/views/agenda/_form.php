<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Agenda */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="agenda-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_agenda')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tempat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'waktu')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'ket_agenda')->textArea(['rows' => '5'])->label('Deskripsi') ?>

    <?= $form->field($model, 'id_galeri')->dropDownList($model->dropDownList(), 
        ['prompt'=>'-select picture-'])->label('Gambar') ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

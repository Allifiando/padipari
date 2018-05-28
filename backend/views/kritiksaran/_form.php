<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Kritiksaran */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kritiksaran-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_kritik_saran')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email_kritik_saran')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'penj_kritik_saran')->textarea(['rows' => '5']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

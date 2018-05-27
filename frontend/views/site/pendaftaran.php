<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Pendaftaran Padi Pari';
?>

<section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="inner-heading">
              <h2>Pendfataran</h2>
            </div>
          </div>
          <div class="span8">
            <ul class="breadcrumb">
              <li><a href="#">Home </a><i class="icon-angle-right"></i></li>
              <li class="active">Pendaftaran</li>
            </ul>
          </div>
        </div>
      </div>
</section>
<section id="content">
    <div class="container">
        <div class="row">
          <div class="span6">
            <h4>Pendaftaran Relawan Padi Pari</h4>
            <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'nama')?>
            <?= $form->field($model, 'no_telp') ?>
            <?= $form->field($model, 'email') ?>
            <?= $form->field($model, 'line') ?>
            <?= $form->field($model, 'instagram') ?>

            <div class="form-group">
                <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
                <?= Html::a('Kembali', ['index'],['class' => 'btn btn-success'])?>
            </div>

        <?php ActiveForm::end(); ?>
          </div>
          <div class="span6">        
          <article>
              <div class="row">
                <div class="span8">
                  <div class="post-image">
                    <div class="post-heading">
                      <h3><?php echo $key['nama_agenda']?></h3>
                    </div>

                    <img src="<?php echo Yii::getAlias('@belakang').'/'.$key['foto'] ?>" alt="" />
                  </div>
                  <div class="meta-post">
                    <a href="#" class="author">By<br /> Admin</a>
                    <a href="#" class="date"><?php echo $key['create_at'] ?></a>
                  </div>
                  <div class="post-entry">
                    <p>
                      <?php echo $key['ket_agenda']?>
                    </p>
                    <a href="#" class="btn btn-color">Read more <i class="icon-angle-right"></i></a>
                  </div>
                </div>
              </div>
            </article>
          </div>
        </div>
        
    </div>
</section>
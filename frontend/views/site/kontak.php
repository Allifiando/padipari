<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Agenda Padi Pari';
?>

<section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="inner-heading">
              <h2>Temukan Kami di sini</h2>
            </div>
          </div>
          <div class="span8">
            <ul class="breadcrumb">
              <li><a href="index.html">Home</a> <i class="icon-angle-right"></i></li>
              <li class="active">Kontak</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section id="content">
      <div id="google-map" data-latitude="-7.317423" data-longitude="112.784205"></div>
      <div class="container">
        <div class="row">
          <div class="span8">
            <h5>Hubungi kami dengan mengisi formulir kontak di bawah ini</h5>
            <?php $form = ActiveForm::begin(['options'=>['id'=>'contactform','class'=>'contactForm','role'=>'form']]); ?>
            <div class='row'>
              <div class='span4 field form-group'>
                <?= $form->field($model, 'nama_kritik_saran')->textinput(['placeholder'=>'*Tuliskan nama anda'])?>
                <div class="validation"></div>
              </div>                          
              <div class='span4 field form-group'>
                <?= $form->field($model, 'email_kritik_saran')->textinput(['placeholder'=>'*Tuliskan alamat email anda'])?>
                <div class="validation"></div>
              </div>                          
              <div class='span8 margintop10 field form-group'>
                <?= $form->field($model, 'penj_kritik_saran')->textarea(['rows'=>12])?>
                <div class="validation"></div>
              </div>                          
            </div>

            <div class="form-group">
                <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
                <?= Html::a('Kembali', ['index'],['class' => 'btn btn-success'])?>
            </div>

        <?php ActiveForm::end(); ?>

            <!-- <form id="contactform" action="" method="post" role="form" class="contactForm">

              <div id="sendmessage">Pesan anda telah terkirim. Terima kasih!</div>
              <div id="errormessage"></div>

              <div class="row">                
                <div class="span4 field form-group">
                  <input type="text" name="email" placeholder="* Enter your email address" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="span8 margintop10 field form-group">
                  <input type="text" name="subject" placeholder="Enter your subject" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="span8 margintop10 field form-group">
                  <textarea rows="12" name="message" class="input-block-level" placeholder="* Your message here..." data-rule="required" data-msg="Please write something"></textarea>
                  <div class="validation"></div>

                  <p>
                    <button class="btn btn-success margintop10 pull-left" type="submit">Send message</button>
                    <span class="pull-right margintop20">* Please fill all required form field, thanks!</span>
                  </p>
                </div>
              </div>
            </form> -->
          </div>
          <div class="span4">
            <div class="clearfix"></div>
            <aside class="right-sidebar">

              <div class="widget">
                <h5 class="widgetheading">Informasi Kontak<span></span></h5>

                <ul class="contact-info">
                  <li><label>Alamat :</label> Jl Raya Kalirungkut No 90<br /> Surabaya - Indonesia</li>
                  <li><label>Telepon :</label>+62 878 5966 6299</li>
                  <li><label>Email : </label> padipari.pedulipendidikan@gmail.com</li>
                </ul>

              </div>
            </aside>
          </div>
        </div>
      </div>
    </section>
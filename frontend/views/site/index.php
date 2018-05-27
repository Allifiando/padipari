<?php

/* @var $this yii\web\View */
use yii\helpers\Html;

$this->title = 'Home Padi Pari';
?>
<!-- section intro -->
    <section id="intro">
      <div class="intro-content">
        <h2>Padi Pari</h2>
        <h3>Mari Membangun Pendidikan Indonesia</h3>
        <div>
          <?php echo Html::a('Mari Bergabung', ['site/agenda', 'id'=>'1'], ['class'=>'btn-get-started']);?>
        </div>
      </div>
    </section>
    <!-- /section intro -->

    <section id="content">
      <div class="container">


        <div class="row">
          <div class="span12">
            <div class="row">
              <div class="span4">
                <div class="box aligncenter">
                  <div class="icon">
                    <span class="badge badge-info badge-circled">1</span>
                    <i class="ico icon-book icon-5x"></i>
                  </div>
                  <div class="text">                    
                    <h4><strong>Bacalah Buku</strong></h4>
                    <p>
                    Sangat aneh jika umat Muhammad Shallallahu Alaihi wa Sallam tidak rajin membaca, padahal wahyu pertama yang diterima beliau adalah perintah: Iqra, Bacalah!!
                    </p>
                    <a href="#">Syaikh Fuad Shahih</a>
                  </div>
                </div>
              </div>

              <div class="span4">
                <div class="box aligncenter">
                  <div class="icon">
                    <span class="badge badge-success badge-circled">2</span>
                    <i class="ico icon-music icon-5x"></i>
                  </div>
                  <div class="text">
                    <h4><strong>Dengarlah Musik</strong></h4>
                    <p>
                    If I were not a physicist, I would probably be a musician. I often think in music. I live my daydreams in music. I see my life in terms of music
                    </p>
                    <a href="#">Albert Einstein</a>
                  </div>
                </div>
              </div>
              <div class="span4">
                <div class="box aligncenter">
                  <div class="icon">
                    <span class="badge badge-warning badge-circled">3</span>
                    <i class="ico icon-home icon-5x"></i>
                  </div>
                  <div class="text">
                    <h4><strong>Bersekolahlah</strong></h4>
                    <p>
                    Seseorang yang berhenti belajar adalah orang lanjut usia, meskipun umurnya masih remaja. Seseorang yang tidak pernah berhenti belajar akan selamanya menjadi pemuda
                    </p>
                    <a href="#">Henry Ford</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="offer">
      <div class="container">
        <div class="row">
          <div class="span12">
            <h3>Kegiatan Terakhir</h3>
            <div class="row">

              <div class="grid cs-style-3">              
              <?php foreach ($model as $key) { ?>
                <div class="span3">
                  <div class="item">
                    <figure>
                      <div><img src="<?php echo Yii::getAlias('@belakang/').$key->foto; ?>" alt=""></div>
                      <figcaption>                        
                        <p>
                          <a href="<?php echo Yii::getAlias('@belakang/').$key->foto; ?>" data-pretty="prettyPhoto[gallery1]" title='<?= $key->caption ?>'><i class="icon-zoom-in icon-circled icon-bglight icon-2x active"></i></a>
                        </p>
                      </figcaption>
                    </figure>
                  </div>
                </div>
              <?php } ?>                
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>
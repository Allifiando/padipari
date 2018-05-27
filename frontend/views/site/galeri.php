<?php

/* @var $this yii\web\View */

$this->title = 'Galeri Padi Pari';
?>

<section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="inner-heading">
              <h2>Galeri Padi Pari</h2>
            </div>
          </div>
          <div class="span8">
            <ul class="breadcrumb">
              <li><a href="index.html">Home </a><i class="icon-angle-right"></i></li>
              <li class="active">Galeri</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section id="content">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="clearfix"></div>
            <div class="row">
              <section id="projects">
                <ul id="thumbs" class="grid cs-style-3 portfolio">

                  <!-- Item Project and Filter Name -->
                  <?php foreach ($galeri as $key) { ?>
                  <li class="item-thumbs span4 design" data-id="id-0" data-type="web">
                    <div class="item">
                      <figure>
                        <div><img src="<?php echo Yii::getAlias('@belakang').'/'.$key['foto'] ?>" alt="" /></div>
                        <figcaption>                    
                          <p>
                            <a href="<?php echo Yii::getAlias('@belakang').'/'.$key['foto'] ?>" data-pretty="prettyPhoto[gallery1]" title="Portfolio caption here"><i class="icon-zoom-in icon-circled icon-bglight icon-2x active"></i></a>                            
                          </p>
                        </figcaption>
                      </figure>
                    </div>
                  </li>
                  <!-- End Item Project -->
                  <?php }?>                  
                </ul>
              </section>

            </div>
          </div>
        </div>
      </div>
    </section>
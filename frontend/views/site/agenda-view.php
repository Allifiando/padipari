<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\LinkPager;
$this->title = 'Agenda Padi Pari';
?>

<section id="inner-headline">
  <div class="container">
    <div class="row">
      <div class="span4">
        <div class="inner-heading">
          <h2>Agenda</h2>
        </div>
      </div>
      <div class="span8">
        <ul class="breadcrumb">
          <li><a href="index.html">Home </a><i class="icon-angle-right"></i></li>
          <li class="active">Agenda</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section id="content" style="padding-top: 0px;">
<div id="google-map" data-latitude="-7.317423" data-longitude="112.784205"></div>
  <div class="container">  
    <div class="row">
      <div class="span8">      
            <article>
              <div class="row">
                <div class="span8">
                  <div class="post-image">
                    <div class="post-heading">
                      <h3><?php echo $model['nama_agenda'] ?></h3>
                    </div>
                    
                    <img src="<?php echo Yii::getAlias('@belakang').'/'.$model['foto'] ?>" alt="" />
                  </div>
                  <div class="meta-post">
                    <a href="#" class="author">By<br /> Admin</a>
                    <a href="#" class="date"><?php echo $model['create_at'] ?></a>
                  </div>
                  <div class="post-entry">
                    <p>
                      <?php echo $model['ket_agenda'] ?>
                    </p>                    
                    <?php echo Html::a('Daftar <i class="icon-angle-right"></i>', ['site/pendaftaran','id'=>$model['id_agenda']],["class"=>"btn btn-success"]); ?>
                  </div>
                </div>
              </div>
            </article>                                    
          </div>
          <div class="span4">

            <aside class="right-sidebar">              

              <div class="widget">

                <h5 class="widgetheading">Agenda</h5>

                <ul class="cat">
                <?php foreach ($agenda as $key) { ?>
                  <li><i class="icon-angle-right"></i><?php echo Html::a($key['nama_agenda'],['site/agendaview','id'=>$key['id_agenda']]) ?></li>                                    
                <?php } ?>              
                </ul>
              </div>

              <div class="widget">

                <h5 class="widgetheading">Postingan Terbaru</h5>

                <ul class="cat">
                <?php foreach ($blog as $key) { ?>
                  <li><i class="icon-angle-right"></i><?php echo Html::a($key['judul_blog'],['site/blog','id'=>$key['id_blog']]) ?></li>                  
                <?php } ?>              
                </ul>
              </div>              

              <div class="widget">
              <h5 class="widgetheading">Twitter Padi Pari</h5>
              <a class="twitter-timeline" data-width="600" data-height="200" href="https://twitter.com/TwitterDev/lists/national-parks?ref_src=twsrc%5Etfw">A Twitter List by TwitterDev</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                <div class="clear"></div>
              </div>              
            </aside>
          </div>
        </div>
    </div>
  </div>
</section>
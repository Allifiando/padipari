<?php
use yii\helpers\Html;
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'Blog Padi Pari';
?>
<section id="inner-headline">
  <div class="container">
    <div class="row">
      <div class="span4">
        <div class="inner-heading">
          <h2>Blog</h2>
        </div>
      </div>
      <div class="span8">
        <ul class="breadcrumb">
          <li><a href="index.html">Home </a> <i class="icon-angle-right"></i></li>
          <li class="active">Blog</li>
        </ul>
      </div>
    </div>
  </div>
</section>
<section id="content">
  <div class="container">
    <div class="row">
      <div class="span8">
      <?php foreach ($blog as $key) { ?>
            <article>
              <div class="row">

                <div class="span8">
                  <div class="post-image">
                    <div class="post-heading">
                      <h3><?php echo $key['judul_blog']?></h3>
                    </div>

                    <img src="<?php echo Yii::getAlias('@belakang').'/'.$key['foto'] ?>" alt="" />
                  </div>
                  <div class="meta-post">
                    <a href="#" class="author">By<br /><?php echo $key['penulis']?></a>
                    <a href="#" class="date"><?php echo $key['create_at'] ?></a>
                  </div>
                  <div class="post-entry">
                    <p>
                      <?php echo $key['deskripsi']?>
                    </p>
                    <?php echo Html::a('Read more',['site/detailBlog'],['class'=>'btn btn-color']); ?>
                    <!-- <a href="#" class="btn btn-color">Read more <i class="icon-angle-right"></i></a>                     -->
                  </div>
                </div>
              </div>
            </article>
        <?php } ?>
        </div>
    </div>
  </div>
</section>
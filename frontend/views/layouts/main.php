<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    
</head>
<body>
<?php $this->beginBody() ?>
<div id="wrapper">
    <!-- start header -->
    <header>
      <div class="top">
        <div class="container">
          <div class="row">
            <div class="span6">
              <ul class="topmenu">
                <li><a href="#">Home</a> &#47;</li>
                <li><a href="#">Terms</a> &#47;</li>
                <li><a href="#">Privacy policy</a></li>
              </ul>
            </div>
            <div class="span6">

              <ul class="social-network">
                <li><a href="#" data-placement="bottom" title="Facebook"><i class="icon-circled icon-bglight icon-facebook"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Twitter"><i class="icon-circled icon-bglight icon-twitter"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Linkedin"><i class="icon-circled icon-linkedin icon-bglight"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Pinterest"><i class="icon-circled icon-pinterest  icon-bglight"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Google +"><i class="icon-circled icon-google-plus icon-bglight"></i></a></li>
              </ul>

            </div>
          </div>
        </div>
      </div>
      <div class="container">


      <div class="row nomargin">
      <div class="span4">
        <div class="logo">
        <h1>
          <?php echo Html::a('<i class="icon-tint"></i> PadiPari', ['site/index']); ?>
        </h1>
        </div>
      </div>
      <div class="span8">
        <div class="navbar navbar-static-top">
          <div class="navigation">
            <nav>
              <ul class="nav topnav">
                <li><?php echo Html::a('Home', ['site/index']); ?></li>
                <li><?php echo Html::a('Profil', ['site/profil']); ?></li>
                <li><?php echo Html::a('Agenda', ['site/agenda', 'id'=>'1']); ?></li>
                <li><?php echo Html::a('Blog', ['site/blog', 'id'=>'1']); ?></li>
                <li><?php echo Html::a('Galeri', ['site/galeri']); ?></li>
                <li><?php echo Html::a('Kontak', ['site/kontak']); ?></li>
              </ul>
            </nav>
          </div>
          <!-- end navigation -->
        </div>
      </div>
    </div>
  </div>
    </header>
    <!-- end header -->
    <?php echo $content ?>
    <!-- section intro -->
    

    <footer>
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="widget">
              <div class="footer_logo">
                <h3><?php echo Html::a('<i class="icon-tint"></i> PadiPari', ['site/index']); ?></h3>
              </div>
              <address>
							  <strong>Komunitas Padi Pari</strong><br>
  							Jl Raya Kalirungkut No 90<br>
  							Surabaya - Indonesia
  						</address>
              <p>
                <i class="icon-phone"></i> +62 878 5966 6299 <br>                
                <i class="icon-envelope-alt"></i> padipari.pedulipendidikan@gmail.com
              </p>
            </div>
          </div>
          <div class="span2">
            <div class="widget">
              <h5 class="widgetheading">Halaman</h5>
              <ul class="link-list">
                <li><?php echo Html::a('Home', ['site/index']); ?></li>
                <li><?php echo Html::a('Profil', ['site/profil']); ?></li>
                <li><?php echo Html::a('Agenda', ['site/agenda', 'id'=>'1']); ?></li>
                <li><?php echo Html::a('Blog', ['site/blog', 'id'=>'1']); ?></li>
                <li><?php echo Html::a('Galeri', ['site/galeri']); ?></li>
                <li><?php echo Html::a('Kontak', ['site/kontak']); ?></li>
              </ul>

            </div>
          </div>

          <div class="span6">
            <div class="widget">
              <h5 class="widgetheading">Twitter Padi Pari</h5>
              <a class="twitter-timeline" data-width="600" data-height="200" href="https://twitter.com/TwitterDev/lists/national-parks?ref_src=twsrc%5Etfw">A Twitter List by TwitterDev</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
          </div>        
        </div>
      </div>
      <div id="sub-footer">
        <div class="container">
          <div class="row">
            <div class="span6">
              <div class="copyright">
                <p><span>&copy; PadiPari Dev</span></p>
              </div>

            </div>

            <div class="span6">
              <div class="credits">
                <!--
                  All the links in the footer should remain intact.
                  You can delete the links only if you purchased the pro version.
                  Licensing information: https://bootstrapmade.com/license/
                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Remember
                -->
                Created by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

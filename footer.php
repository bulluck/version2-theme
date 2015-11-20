<?php if (!is_page('contact') and !is_page('privacy-policy')):?>
<section class="section-padding100 contact-recruit">
  <div class="container-c-narrow">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="col-xs-12 col-sm-12 col-lg-12 purewhitebg">
          <h3 class="condensed-bold black-text top-buffer-padding h3-v2">Contact us</h3>
          <h4 class="gray-text top-buffer-padding font-bold">
            マーケティングとテクノロジーで新たな価値を提供します。
          </h4>
          <p class="small-text top-buffer-padding">
            ブラックは、マーケティングとテクノロジーにおいて差別化を図っています。そして、想像を越える新たな価値を提供することで、皆様のビジネスに貢献できると信じています。この「受注率にコミットする」サイト/ランディングページをご提案します。
          </p>
          <div class="align-center bottom-buffer-padding top-buffer-padding">
            <a class="top-buffer btn btn-normal btn-lg" href="<?php echo site_url('/contact/');?>">
              <span class="small-text">
                <i class="fa fa-envelope-o" style="padding-right:15px"></i>まずはお問い合わせする<i class="fa fa-chevron-right" style="padding-left:10px;"></i>
              </span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>
<?php endif;?>
</div>
<!-- wrapperここまで -->

<div class="blackbg clearfix">
  <nav class="footernav">
    <?php
    wp_nav_menu(
      array(
      'container'  => '',
      'container_class' => '',
      'theme_location' => 'place_global'
      )
      )
    ;?>
  </nav>
</div>
<footer class="section-padding80 whitebg">
  <div class="container-center">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 align-center">
        <span class="small-heading condensed-bold">
          Bulluck Co., Ltd.
        </span>
      </div>
      <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 xs-t-buffer">
        <p class="small-text black-text">
        サイト制作/ランディングページ制作/アプリ開発/経営コンサルティング/プリシパルインベストメント
        </p>
      </div>
      <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 xs-t-buffer align-right">
        <a class="follow-twitter" href="https://twitter.com/bulluck_media">
            <i class="fa fa-twitter fa-2x"></i>
        </a>
        <a class="follow-fb" href="https://www.facebook.com/bulluck.co.jp/">
            <i class="fa fa-facebook-official fa-2x"></i>
        </a>
      </div>
    </div>
    <div class="row top-buffer">
      <div class="col-xs-12 col-lg-12 align-center">
        <span class="small-text condensed-normal">Copyright &copy; 2015, Bulluck.Co.,Ltd. All Rights Reserved.</span>
      </div>
    </div>
  </div>
  </div>
</footer>
<script src="<?php bloginfo('template_url');?>/js/bootstrap.offcanvas.js"></script>
<script src="<?php bloginfo('template_url');?>/js/function.js"></script>

<?php wp_footer();?>
</body>
</html>

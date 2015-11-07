
<section class="section-padding100 contact-recruit">
  <div class="container-center">
    <div class="row">
      <div class="col-lg-6">
        <div class="col-lg-12 purewhitebg">
          <h3 class="condensed-bold black-text top-buffer-pudding">CONTACT US</h3>
          <h4 class="gray-text top-buffer-pudding font-bold">
            ダミーテキストダミーテキスト
          </h4>
          <p class="small-text top-buffer-pudding">
            ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト
          </p>
          <div class="align-center bottom-buffer-pudding top-buffer-pudding">
            <a class="top-buffer btn btn-default btn-block" href="/service/">
              <span class="small-heading">
                <i class="fa fa-envelope-o" style="padding-right:30px"></i>Bulluckに連絡する<i class="fa fa-chevron-right" style="padding-left:10px;"></i>
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="col-lg-12 purewhitebg">
          <h3 class="condensed-bold black-text top-buffer-pudding">JOIN US</h3>
          <h4 class="gray-text top-buffer-pudding font-bold">
            ダミーテキストダミーテキスト
          </h4>
          <p class="small-text top-buffer-pudding">
            ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト
          </p>
          <div class="align-center bottom-buffer-pudding top-buffer-pudding">
            <a class="top-buffer btn btn-default btn-block" href="/service/">
              <span class="small-heading">
                <i class="fa fa-building" style="padding-right:30px"></i>Bulluckの仲間になる<i class="fa fa-chevron-right" style="padding-left:10px;"></i>
              </span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="blackbg">
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
    <div class="row">
      <div class="col-lg-4">
        <span class="small-heading condensed-bold">
          Bulluck
        </span>
      </div>
      <div class="col-lg-4">
        <p class="small-text black-text">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </p>
      </div>
    </div>
    <div class="row top-buffer">
      <div class="col-lg-12 align-center">
        <span class="small-text">Copyright &copy; 2015, Bulluck.Co.,Ltd. All Rights Reserved.</span>
      </div>
    </div>
  </div>
</footer>
<script src="<?php bloginfo('template_url');?>/js/function.js"></script>
<?php wp_footer();?>
</body>
</html>

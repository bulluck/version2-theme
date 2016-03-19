<?php get_header(); ?>
<div class="lower-top" id="blog">
<div class="section-table">
<div class="container-fluid s-table-cell">
    <div class="row">
    <div class="col-xs-12 top-buffer">
        <div class="large-heading condensed-bold align-center white-text">
            Solve it
        </div>
        <p class="top-buffer small-text white-text align-center">
            わからないことを、わかることに。
        </p>

    </div>
    </div>
</div>
</div>
        </div>
<section class="section-padding80">
    <div class="container-center purewhitebg">
        <div class="container-fluid">
            <div class="row breadcrumb-row">
                <div class="col-xs-12">
                    <div class="breadcrumbs">
<?php if (function_exists('bcn_display')) {
bcn_display();
}?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">

                    <article class="article col-xs-12 col-sm-8 col-sm-push-4">
<?php if (have_posts()) :
while (have_posts()) :
    the_post(); ?>
                            <h1 class="font-bold small-heading black-text pt-30"><?php the_title(); ?></h1>
                            <div class="data mt-30"><?php the_time('Y/m/d'); ?></div>
                            <div class="col-xs-12">
                                <?php echo custom_taxonomies_terms_links(); ?>    
                            </div>
                            <div class="col-xs-12 blog-list lighter-dark-bg pr-0 pl-0 mt-30 mb-30">
                            <div class="col-xs-6 mt-50 mb-50 pr-0 pl-0">
                            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                            <!-- ブラックメディア広告 -->
                            <ins class="adsbygoogle"
                            style="display:block"
                            data-ad-client="ca-pub-6631134636456513"
                            data-ad-slot="8035892386"
                            data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
                            </div>
                            <div class="col-xs-6 mt-50 mb-50 pl-5 pr-0">
                            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                            <!-- ブラックメディア広告 -->
                            <ins class="adsbygoogle"
                            style="display:block"
                            data-ad-client="ca-pub-6631134636456513"
                            data-ad-slot="8035892386"
                            data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
                            </div>
                            </div>
                            <div class="entry top-buffer"><?php the_content(); ?></div>

                            <div class="col-xs-12 lighter-dark-bg blog-list  pr-0 pl-0 mt-30 mb-30">
                            <div class="col-xs-12 col-sm-6 pr-0 pl-0 mt-50 mb-50">
                                <a href="https://docs.google.com/forms/d/1d9x_f_iik1NvJp1VTL_AMHQiZEwx8pyc-xyUA8spbfc/edit?usp=drive_web" target="_blank">
                                <img src="http://bulluck.co.jp/version2/wp-content/uploads/2016/03/nikki-co.png" alt="メルマガバナー">
                                </a>
                            </div>
                            <div class="col-sm-6 pl-5 pr-0 mt-50 mb-50  hidden-xs">
                            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                            <!-- ブラックメディア広告 -->
                            <ins class="adsbygoogle"
                            style="display:block"
                            data-ad-client="ca-pub-6631134636456513"
                            data-ad-slot="8035892386"
                            data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
                            </div>
                            </div>
    <div class="pagelink clearfix">
<?php
if (get_next_post()) {
    echo '<p class="nav-previous small-text black-text top-buffer">',next_post_link('%link', '<i class="fa fa-chevron-left" style="padding-right:10px;"></i>%title'),'</p>';
}
if (get_previous_post()) {
    echo '<p class="nav-next small-text black-text top-buffer">',previous_post_link('%link', '%title<i class="fa fa-chevron-right" style="padding-left:10px;"></i>'),'</p>';
}
?>
                                </div>
                                <?php endwhile; endif; ?>
                    </article>
                    <aside class="col-xs-12 col-sm-4 pt-30 pr-10 pl-10 col-sm-pull-8">
                        <?php get_template_part('sidebar'); ?>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>

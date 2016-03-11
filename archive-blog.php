<?php get_header(); ?>
<div class="lower-top" id="blog">
<div class="section-table">
<div class="container-fluid s-table-cell">
    <div class="row">
    <div class="col-xs-12 top-buffer">
        <h1 class="large-heading condensed-bold align-center">
            BLOG
        </h1>
        <p class="top-buffer small-text white-text align-center">
            Bulluck + BLOG = Bullog. いつでもブラックな情報を。
        </p>

    </div>
    </div>
</div>
</div>
        </div>
<section class="margin-t80">
    <div class="container-center">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">

                <div class="breadcrumbs bottom-buffer-padding">
<?php if (function_exists('bcn_display')) {
bcn_display();
}?>
</div>
                </div>
            </div>
            <div class="row">

                <div class="col-xs-12 col-sm-9 col-sm-push-3">
<?php if (have_posts()): ?>
<?php
$i=0;
while (have_posts()):
    $i++;
the_post(); ?>
<article class="col-xs-12 purewhitebg blog-list blglist-hv">

    <div class="col-xs-5 col-sm-3">
        <a href="<?php the_permalink();?>">
            <div class="blog-thumbnail top-buffer bottom-buffer">
                <img src="<?php echo catch_that_image(); ?>" alt="<?php the_title(); ?>" />
            </div>
        </a>
    </div>
    <div class="col-xs-7 col-sm-9 parent-relative">
        <p class="small-text top-buffer lighter-gray"><?php the_time('Y/m/d'); ?></p>
        <h3 class="smaller-p condensed-bold"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <?php echo custom_taxonomies_terms_links(); ?>
    </div>
</article>
<?php if($i == 10):?>
<div class="col-xs-12 blog-list lighter-dark-bg">

                            <div class="col-xs-6 mt-50 mb-50">
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
                            <div class="col-xs-6 mt-50 mb-50">
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
<?php $i=0;?>
</div>
<? endif ?>
<?php endwhile;
endif; ?>
<div class="col-xs-12">
<?php
//Pagenation 
if (function_exists("pagination")) {
    pagination($additional_loop->max_num_pages);
}
?>
</div>
</div>
<div class="col-xs-12 col-sm-3 col-sm-pull-9">
<?php get_template_part('sidebar');?>
</div>
                                        </div>
                                    </div>
                                </div>
</section>

<?php get_template_part('follow-area'); ?>

    <?php get_footer(); ?>

<?php
  $url_encode = urlencode(get_permalink());
  $title_encode = urlencode(get_the_title());
?>
<div class="container-fluid top-buffer">

<div class="row">
  <div>

<div class="share">
<div class="sns">
<ul class="clearfix sns-list top-buffer">
<!--ツイートボタン-->
<li class="twitter col-xs-3 col-sm-3">
<a class="btn btn-sm" href="http://twitter.com/intent/tweet?url=<?php echo $url_encode ?>&text=<?php echo $title_encode ?>&via=bulluck_media&tw_p=tweetbutton"><i class="fa fa-twitter"></i><?php if (function_exists('scc_get_share_twitter')) {
    echo (scc_get_share_twitter() == 0) ? '' : scc_get_share_twitter();
} ?></a>
</li>

<!--Facebookボタン-->
<li class="facebook col-xs-3 col-sm-3">
<a class="btn btn-sm" href="http://www.facebook.com/sharer.php?src=bm&u=<?php echo $url_encode;?>&t=<?php echo $title_encode;?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"><i class="fa fa-facebook"></i><?php if (function_exists('scc_get_share_facebook')) {
    echo (scc_get_share_facebook() == 0) ? '' : scc_get_share_facebook();
} ?></a>
</li>

<!--Google+1ボタン-->
<li class="googleplus col-xs-3 col-sm-3">
<a class="btn btn-sm" href="https://plus.google.com/share?url=<?php echo $url_encode;?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=500');return false;"><i class="fa fa-google-plus"></i><?php if (function_exists('scc_get_share_gplus')) {
    echo (scc_get_share_gplus() == 0) ? '' : scc_get_share_gplus();
} ?></a>
</li>

<!--はてブボタン-->
<!-- <li class="hatebu">
<a href="http://b.hatena.ne.jp/add?mode=confirm&url=<?php echo $url_encode ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=510');return false;" ><i class="fa fa-hatena"></i><?php if (function_exists('scc_get_share_hatebu')) {
    echo (scc_get_share_hatebu() == 0) ? '' : scc_get_share_hatebu();
} ?></a>
</li> -->

 <!--LINEボタン-->
<!-- <li class="line">
<a href="http://line.me/R/msg/text/?<?php echo $title_encode.'%0A'.$url_encode;?>">LINE</a>
</li> -->

<!--ポケットボタン-->
<li class="pocket col-xs-3 col-sm-3">
<a class="btn btn-sm" href="http://getpocket.com/edit?url=<?php echo $url_encode;?>&title=<?php echo $title_encode;?>" class="btn btn-sm" target="blank"><i>pocket</i>
  <?php if (function_exists('scc_get_share_pocket')) {
    echo (scc_get_share_pocket() == 0) ? '' : scc_get_share_pocket();
} ?>
</a></li>
</ul>
</div>
</div>
  </div>
</div>
</div>

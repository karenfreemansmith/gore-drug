<?php //Template Name: Masthead ?>
<div id="horizon">
  <h1 class="emblem gold"><?php echo get_field('emblem', $page->ID); ?></h1>
</div>

<div id="intro" class="clearfix" style="background:url(<?php echo get_field('stock', $page->ID); ?>) left top no-repeat; background-size:auto 75%;">
  
  <div class="col-md-4 col-md-offset-1 col-lg-3 col-lg-offset-3" id="intro-title">
    <h1><?php echo get_field('title', $page->ID); ?></h1>
  </div>

  <div class="col-md-7 col-lg-6 clearfix">

    <div class="col-sm-7 col-md-6 intro">
      <?php echo get_field('content', $page->ID); ?>
    </div>

    <div class="col-sm-5 col-md-6">
      <div class="bubble"><span style="background:url(<?php echo get_field('bubble', $page->ID); ?>) 50% 50% no-repeat; background-size:cover;"></span></div>
    </div>

  </div>

  <div class="col-sm-6 col-sm-offset-3 clearfix" id="intro-services">
    <div class="dot"><span class="fa fa-circle"></span></div>
    <h1 class="text-center"><?php echo get_field('subtitle', $page->ID); ?></h1>
  </div>

</div>
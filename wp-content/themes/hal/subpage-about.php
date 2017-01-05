<?php //Template Name: About ?>
<div id="about" class="clearfix">

  <div class="about-intro col-sm-8 col-sm-offset-2 clearfix">
    <h3><?php echo get_field('title', $page->ID); ?></h3>
    <div class="about-copy intro">
      <?php echo get_field('content', $page->ID); ?>
    </div>
  </div>

  <div class="clearfix"></div>

  <div class="about-stores clearfix">

    <?php $stores = get_field('location', $page->ID); $st = 1; $stt = 1; foreach($stores as $store) { ?>

    <div class="col-sm-4 about-store" style="background:url(<?php echo $store['image']; ?>) top center no-repeat; background-size:cover;">
      <div class="about-store-title">
        <span class="fa fa-map-marker"></span>
        <a href="#store-<?php echo $st++; ?>" data-toggle="modal"><?php echo apply_filters('the_content()', $store['title'] ); ?></a>
      </div>
    </div>

    <div class="modal fade" id="store-<?php echo $stt++; ?>" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4><?php echo $store['modal_title']; ?></h4>
          </div>
          
          <div class="clearfix about-store-modal">
            <?php echo apply_filters('the_content()', $store['store_info']); ?>
          </div>
        </div>
      </div>
    </div>

    <?php } ?>

  </div>

  <div class="col-sm-6 col-sm-offset-3 clearfix about-online">
    <h1 class="text-center">Visit our retail online sites.</h1>
  </div>
  
</div>


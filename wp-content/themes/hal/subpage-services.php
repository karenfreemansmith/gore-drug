<?php //Template Name: Services ?>
<div class="cards" id="services">

  <div class="card-nav">
    <nav class="emblem brown">
      <ul class="nav nav-pills">

<?php 

$subpages = get_pages('child_of='.$page->ID.'&sort_column=ID&sort_order=asc'); $i = 1;
  foreach($subpages as $subpage) { ?>

        <li role="presentation" class="<?php if($i == 1){ echo 'active'; } ?>"><a href="#tab-<?php echo $i++; ?>" role="tab" data-toggle="tab"><?php echo $subpage->post_title; ?></a></li>

<?php } ?>

      </ul>
    </nav>
  </div>

  <div class="clearfix">


    <div class="col-lg-10 col-lg-offset-1 card-holder clearfix tab-content">
      
      <?php $ii = 1; foreach($subpages as $subpage) { ?>

      <div class="card-layout clearfix tab-pane fade in <?php if($ii==1){ echo 'active'; } ?>" id="tab-<?php echo $ii++; ?>" role="tabpanel">

      <?php if(have_rows('lyt', $subpage->ID)) {

              while(have_rows('lyt', $subpage->ID)) : the_row();

              if(get_row_layout() == 'panels') {
        ?>

      <div class="col-sm-4 card-intro">
        <h2><?php echo get_sub_field('title'); ?></h2>
        <div class="intro">
          <?php echo get_sub_field('intro'); ?>
          <?php $btn = get_sub_field('button'); if($btn) { ?>
          <a href="<?php echo $btn[0]['url']; ?>" class="btn btn-act"><?php echo $btn[0]['label']; ?></a>
          <?php } ?>
        </div>
      </div>

      <div class="col-sm-8 card-content clearfix">

        <?php $panels = get_sub_field('panel'); foreach($panels as $panel) { ?>

        <div class="col-sm-4 card-item">
          <span class="fa <?php echo $panel['icon']; ?>"></span>
          <h3><?php echo $panel['title']; ?></h3>
          <div class="card-badge">
           <?php echo $panel['content']; ?>
          </div>
        </div>

        <?php } ?>

      </div>

      <?php } elseif(get_row_layout() == 'static') { ?>

      <div class="card-layout clearfix">

        <div class="col-sm-4 card-intro">
        <h2><?php echo get_sub_field('title'); ?></h2>
        <div class="intro">
          <?php echo get_sub_field('intro'); ?>

          <?php $btn = get_sub_field('button'); if($btn[0]['label']) { ?>
          <a href="<?php echo $btn[0]['url']; ?>" class="btn btn-act"><?php echo $btn[0]['label']; ?></a>
          <?php } ?>

        </div>
      </div>

      <div class="col-sm-8 card-content clearfix">

        <div class="col-md-8">
          <?php echo apply_filters('the_content()', get_sub_field('content') ); ?>
        </div>

        <div class="col-md-4">
            <?php $bubble = get_sub_field('bubble'); ?>
            <div class="bubble"><span style="background:url(<?php echo $bubble; ?>) 50% 50% no-repeat; background-size:cover;"></span></div>
        </div>

      </div>

      </div>

      <?php } ?>

      <?php endwhile; ?>

      <?php } ?>


      </div>

      <?php } ?>

    </div>

  </div>
  
</div>
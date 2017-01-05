<?php //Template Name: Contact ?>
<div id="locations" class="cards clearfix">

  <div class="card-nav">
    <nav class="emblem brown">
      <ul class="nav nav-pills">
      <?php $sites = get_field('websites', 'option'); foreach($sites as $site){ ?>
        <li><a href="<?php echo $site['site_url']; ?>"><?php echo $site['site_name']; ?></a></li>
      <?php } ?>
      </ul>
    </nav>
  </div>

  <div class="col-lg-10 col-lg-offset-1 card-holder clearfix">

      <div class="col-md-4 card-intro">
        <h2><?php echo get_field('title', $page->ID); ?></h2>
        <div class="intro">
          
          <?php echo apply_filters('the_content()', get_field('intro', $page->ID) ); ?>
          
          <div class="card-phone">
            <span class="fa fa-phone"></span>
            <a href="tel:<?php the_field('phone_number', 'option'); ?>"><strong><?php the_field('phone_number', 'option'); ?></strong></a>
            <em><?php echo get_field('hours', $page->ID); ?></em>
          </div>
        </div>
      </div>
      <div class="col-md-8 card-content clearfix">

        <div class="card-social">
        <?php $profiles = get_field('sm_profiles', 'option'); foreach($profiles as $profile) { ?>
          <a href="<?php echo $profile['profile_url']; ?>" class="social"><span class="fa <?php echo $profile['icon']; ?>"></span></a>
        <?php } ?>
        </div>

        <div class="card-form">
          <?php echo apply_filters('the_content()', get_field('content', $page->ID) ); ?>
        </div>

      </div>
    </div>

</div>
<?php
/**
 * Template Name: Hallers Pharmacy

 * @package WordPress
 * @subpackage Pharmacy_Express
 * @since Pharmacy Express 1.0
 */

get_header(); ?>

<?php get_template_part('/inc/head', '' ); ?>


<div id="horizon">
  <h1 class="emblem gold"><?php the_field('banner-text'); ?></h1>
</div>

<div id="intro" class="clearfix" style="background:url(<?php the_field('intro-background-image'); ?>) left top no-repeat; background-size:auto 75%;">
  
  <div class="col-md-4 col-md-offset-1 col-lg-3 col-lg-offset-3" id="intro-title">
    <h1><?php echo get_field('intro-headline', $page->ID); ?></h1>
  </div>

  <div class="col-md-7 col-lg-6 clearfix">

    <div class="col-sm-7 col-md-6 intro">
      <?php echo get_field('intro-content', $page->ID); ?>
    </div>

    <div class="col-sm-5 col-md-6">
      <div class="bubble"><span style="background:url(<?php echo get_field('intro-bubble-image', $page->ID); ?>) 50% 50% no-repeat; background-size:cover;"></span></div>
    </div>

  </div>

  <div class="col-sm-6 col-sm-offset-3 clearfix" id="intro-services">
    <div class="dot"><span class="fa fa-circle"></span></div>
    <h1 class="text-center"><?php echo get_field('intro-subheader', $page->ID); ?></h1>
  </div>

</div>

<?php // Services go here... ?>
<div class="cards" id="services">

  <div class="card-nav">
    <nav class="emblem brown">
      <ul class="nav nav-pills">
      	<?php 
        	 if( have_rows('services-section') ): 
        	 $i = 1;
        	 while ( have_rows('services-section') ) : the_row(); 
        	 if(get_sub_field('service-link')): 
      	?>
      	<li role="presentation" class="<?php if($i == 1){ echo 'active'; } ?>"><a href="#tab-<?php echo $i++; ?>" role="tab" data-toggle="tab"><?php the_sub_field('service-link'); ?></a></li>
      	<?php endif; ?>
      	<?php endwhile; ?>
      	<?php endif; ?>
      </ul>
    </nav>
  </div>
  
  <div class="clearfix">
  	<?php if( have_rows('services-section') ): ?>
  		<div class="col-lg-10 col-lg-offset-1 card-holder clearfix tab-content">
  	    <?php $j=1; while ( have_rows('services-section') ) : the_row(); ?>
        <div class="card-layout clearfix tab-pane fade in <?php if($j==1){ echo 'active'; } ?>" id="tab-<?php echo $j++; ?>" role="tabpanel">
    			<div class="col-sm-4 card-intro">
      			<?php if(get_sub_field('service-title')): ?>
      			    <h2><?php the_sub_field('service-title'); ?></h2>
      			<?php endif; ?>
      			<?php if(get_sub_field('service-intro')): ?>
      				<div class="intro">
      			    <p><?php the_sub_field('service-intro'); ?></p>
      			    <a href="<?php the_sub_field('service-action-url'); ?>" class="btn btn-act"><?php the_sub_field('service-action-label'); ?></a>
      			 </div>
      			<?php endif; ?>
    			</div>
    			<div class="col-sm-8 card-content clearfix">
    				<?php if( have_rows('service-sub-panels') ): ?>
      				<?php while ( have_rows('service-sub-panels') ) : the_row(); ?>
          			<div class="col-sm-4 card-item">
          				<?php if(get_sub_field('panel-icon')): ?>
          					<?php the_sub_field('panel-icon'); ?>
          				<?php endif; ?>
          				<?php if(get_sub_field('panel-title')): ?>
          				  <h3><?php the_sub_field('panel-title'); ?></h3>
          				 <?php endif; ?>
          				<?php if(get_sub_field('panel-content')): ?>
          				    <div class="card-badge">
          				      <?php the_sub_field('panel-content'); ?>
          				    </div>
          				<?php endif; ?>
          			</div>
          		<?php endwhile; ?>
          	<?php endif; ?>
          </div>
    		</div>
  	    <?php endwhile; ?>
      </div>
  	<?php endif; ?>
  </div>
</div>


<?php // FAQs go here... ?>
<div id="faq" class="clearfix">
  
  <div class="col-md-6 clearfix" id="faq-stock">
    <div class="col-sm-6 faq-stock-title"><h3>FAQ</h3></div>
    <div class="col-sm-6 faq-stock-intro intro"><?php echo get_field('faq-section-intro'); ?></div>
  </div>

  <div class="col-md-6 col-lg-5 col-lg-offset-1" id="faq-items" >

    <ul class="nav accordion" data-accordion-group="">
    	
    <?php if( have_rows('faqs') ): ?>
	    <?php while ( have_rows('faqs') ) : the_row(); ?>
        <li data-accordion="">
    			<?php if(get_sub_field('question')): ?>
    				<a href="#faq-items" data-control=""><?php the_sub_field('question'); ?></a>
    			<?php endif; ?>
	        <?php if(get_sub_field('answer')): ?>
	            <div data-content=""><p><?php the_sub_field('answer'); ?></p></div>
	        <?php endif; ?>
        </li>
	    <?php endwhile; ?>
	   <?php endif; ?>
	   
    </ul>
    
    <a href="#locations" class="btn btn-act dark">Still have questions? Contact Us.</a>

  </div>
  
</div>

<?php // About goes here... ?>
<div id="about" class="clearfix">

  <div class="about-intro col-sm-8 col-sm-offset-2 clearfix">
    <h3><?php the_field('about-title'); ?></h3>
    <div class="about-copy intro">
      <?php the_field('about-content'); ?>
    </div>
  </div>

  <div class="clearfix"></div>

  <div class="about-stores clearfix">

    <?php $stores = get_field('locations', $page->ID); $st = 1; $stt = 1; foreach($stores as $store) { ?>

    <div class="col-sm-4 about-store" style="background:url(<?php echo $store['location-image']; ?>) top center no-repeat; background-size:cover;">
      <div class="about-store-title">
        <span class="fa fa-map-marker"></span>
        <h4><a href="#store-<?php echo $stt++; ?>" data-toggle="modal"><?php echo apply_filters('the_content()', $store['location-title'] ); ?></a></h4>
      </div>
    </div>

    <div class="modal fade" id="store-<?php echo $st++; ?>" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4><?php echo $store['location-title']; ?></h4>
          </div>
          
          <div class="clearfix about-store-modal">
            <?php echo apply_filters('the_content()', $store['store-info']); ?>
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

<?php // Contact goes here... ?>
<div id="locations" class="cards clearfix">

  <div class="card-nav">
    <nav class="emblem brown">
      <ul class="nav nav-pills">
        <?php if( have_rows('sites') ): ?>
    	    <?php while ( have_rows('sites') ) : the_row(); ?>
            <li><a href="<?php the_sub_field('site_url'); ?>"><?php the_sub_field('site_name'); ?></a></li>
    	    <?php endwhile; ?>
    	   <?php endif; ?>
      </ul>
    </nav>
  </div>

  <div class="col-lg-10 col-lg-offset-1 card-holder clearfix">

      <div class="col-md-4 card-intro">
        <h2><?php echo get_field('contact-title'); ?></h2>
        <div class="intro">
          
          <?php echo apply_filters('the_content()', get_field('contact-info') ); ?>
          
          <div class="card-phone">
            <span class="fa fa-phone"></span>
            <a href="tel:<?php the_field('phone_number', 'option'); ?>"><strong><?php the_field('phone_number', 'option'); ?></strong></a>
            <em><?php echo get_field('contact-hours'); ?></em>
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
          <?php echo apply_filters('the_content()', get_field('contact-form') ); ?>
        </div>

      </div>
    </div>

</div>

<?php get_template_part('/inc/end','' ); ?>

<?php get_footer(); ?>
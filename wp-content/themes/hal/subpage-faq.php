<?php //Template Name: FAQ ?>
<div id="faq" class="clearfix">
  
  <div class="col-md-6 clearfix" id="faq-stock">
    <div class="col-sm-6 faq-stock-title"><h3>FAQ</h3></div>
    <div class="col-sm-6 faq-stock-intro intro"><?php echo get_field('intro', $page->ID); ?></div>
  </div>

  <div class="col-md-6 col-lg-5 col-lg-offset-1" id="faq-items" >

    <ul class="nav accordion" data-accordion-group="">
      <?php $items = get_field('item', $page->ID); foreach($items as $item) { ?>

      <li data-accordion="">

        <a href="#faq-items" data-control=""><?php echo $item['question']; ?></a>

        <div data-content=""><?php echo $item['answer']; ?></div>

      </li>
      <?php } ?>
    </ul>

    <a href="#locations" class="btn btn-act dark">Still have questions? Contact Us.</a>

  </div>
  
</div>
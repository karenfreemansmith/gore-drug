<?php get_header(); ?>
<?php 
  if (is_category()) { $archive = 'Archive for the '.single_cat_title().' category'; }
  elseif (is_tag()) { $archive = 'Post tagged '.single_tag_title().'.'; }
  elseif (is_day()) { $archive = 'Archive for'.the_time('F jS, Y'); }
  elseif (is_month()) { $archive = 'Archive for the '.the_time('F, Y'); }
  elseif (is_year()) { $archive = 'Archive for the '.the_time('Y'); }
  elseif (is_author()) { $archive = 'Archive by author '.the_author(); }
?>

<header></header>
<section></section>
<footer></footer>
          
<?php get_footer(); ?>
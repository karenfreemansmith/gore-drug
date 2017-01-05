<?php get_header(); ?>

<?php get_template_part('/inc/head', '' ); ?>

<?php 
$args = array(
  'sort_order' => 'asc' ,
  'sort_column' => 'menu_order' , 
  'post_status' => 'publish',
   );

$pages = get_pages($args);
  foreach($pages as $page) {
    $subpage = get_page_template_slug( $page->ID );
    if($subpage != '') {
    include(locate_template($subpage));
    }
  }

?>

<?php get_template_part('/inc/end','' ); ?>
					
<?php get_footer(); ?>

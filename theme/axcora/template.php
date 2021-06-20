<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
$innov_settings = Innovation_Settings();
include('header.inc.php'); 
?>
<div class="row">
<div class="col-12 col-md-12 p-3 p-md-5 text-center">
<h1 class="text-center"><strong><a class="logo" href="<?php get_page_url(); ?>"><?php get_page_title(); ?></a></strong></h1>
<p>
<a class="text-secondary" href="<?php get_site_url(); ?>">Home</a>
/ 
<?php Innovation_Parent_Link(get_parent(FALSE)); ?> <b class="text-secondary"><?php get_page_clean_title(); ?></b>
/ 
<a class="text-secondary" href="<?php get_site_url(); ?>"><?php get_site_name(); ?></a>
</p>
</div>
<?php get_page_content(); ?>
</div>
<?php include('footer.inc.php'); ?>
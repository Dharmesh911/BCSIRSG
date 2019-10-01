<?php global $base_url; ?>
<!-- #header -->
<header>
  <div class="container">
   <nav class="nav-block">   
        <div class="logo-block">          
		  <?php if ($logo) : ?>
			<a class="logo" href="<?php print $base_path ?>"><img src="<?php print($logo) ?>" alt="Header logo image"></a>
		  <?php endif; ?>          
        </div>
        <div class="menu-block">
			<?php if ($page['main_menu']): ?>
					<?php print render($page['main_menu']); ?>
			<?php endif; ?>
        </div>              
   </nav>
  </div>   
</header>

<!-- #header End-->
<!-- #banner -->
<div class="banner-inner">
   <div class="page-image">
   <?php if ($page['banner']): ?>
		<?php print render($page['banner']); ?>
<?php endif; ?>
   </div>
  <div class="page-title"><?php print $title ?></div>
</div>
<!--Banner End-->

<!-- #service -->
<section class="inner-section">
 <div class="container">
   <div class="row">
    <div class="col-xs-12 col-sm-5 col-md-4 inner-left">
	<?php if ($page['sidebar_first']): ?>
		<?php print render($page['sidebar_first']); ?>
<?php endif; ?>
	</div><!-- /.col-md-4 -->
	<div class="col-xs-12 col-sm-7 col-md-8 inner-right">
	<?php if ($tabs = render($tabs)): ?><div class="tabs"><?php print $tabs; ?></div><?php endif; ?>
			<?php if ($messages != ""): ?>
				<?php print $messages ?>
			<?php endif; ?>
			<?php if ($page['content_file']): ?>
		<div class="attach-file">
		<?php print render($page['content_file']); ?>
		</div>
	<?php endif; ?>
	<?php if ($page['content']): ?>
		<?php print render($page['content']); ?>
<?php endif; ?>
	</div><!-- /.col-md-8 -->
   </div><!-- /.row -->
 </div>
</section>
<!-- Services End-->
<!-- #footer -->
<footer>
  <div class="container">
   <div class="row">   
      <div class="col-xs-12 col-sm-8 col-md-8">
            <h2>Our Experties</h2> 
			<?php if ($page['footer_links']): ?>
			  <?php print render($page['footer_links']); ?>
		    <?php endif; ?>
     </div><!--.col-md-8-->  
        
      <div class="col-xs-12 col-sm-4 col-md-4">
       <div class="social-icon col-md-12">
           <h2>Follow Us</h2>
		   <?php if ($page['follow_us']): ?>
			   <?php print render($page['follow_us']); ?>
		   <?php endif; ?>
        </div><!--.social-icon--> 
       <div class="office-address col-md-12">
           <h2>Our Office</h2>
		   <?php if ($page['our_office']): ?>
               <?php print render($page['our_office']); ?>
           <?php endif; ?>
   </div><!--.office-address--> 
      </div><!--.col-md-4-->  
   </div><!--.row-->
  </div><!--.container-->       

<div class="copyright col-md-12 text-center">
  <?php if ($page['footer']): ?>
         <?php print render($page['footer']); ?>
  <?php endif; ?>
</div><!--.copyright--> 

</footer>
<!-- #footer end-->
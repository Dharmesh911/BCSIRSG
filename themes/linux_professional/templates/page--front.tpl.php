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
<!-- #header  End-->

<!-- #Banner -->
<section>
     <div class="banner">	
		<?php if ($page['slider']): ?>
			<?php print render($page['slider']); ?>
		<?php endif; ?>  
     </div> 
</section>
<!--Banner End-->

<?php if ($page['services']): ?>
<!-- #Service -->
<section class="service-block">
 <div class="container">
   <div class="row">
        <div class="col-lg-12 text-center"><h1>Our Services</h1></div>		
			<?php print render($page['services']); ?>       
        </div><!-- /.row -->
  </div>
</section>
<?php endif; ?>
<!-- Services End-->

<!-- #Mid content -->
<section class="about-block">
   <div class="container">
   <?php if ($page['home_about']): ?>
			<?php print render($page['home_about']); ?>
		<?php endif; ?>
   </div>   
</section>
<!-- Middle End-->

<!-- #Client block -->
<section class="comment-block">
   <div class="container">   
     <div class="row"> 
        <div class="col-md-7">
		<?php if ($page['client1']): ?>
			<?php print render($page['client1']); ?>
		<?php endif; ?>
        </div>       
        <div class="col-md-5 logo-slider">
         <div class="panel panel-default">
            <div class="panel-body">
             <?php if ($page['client2']): ?>
			   <?php print render($page['client2']); ?>
		     <?php endif; ?>
           </div>
         </div>
       </div>
     </div>  
   </div>   
</section>
<!-- #Client end -->

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
<!-- #footer end -->

				</div><!--/.main-inner-->
			</div><!--/.main-->	
		</div><!--/.container-inner-->
	</div><!--/.container-->
	
	<div class="clear"></div>
		
	
</div><!--/#wrapper-->
<?php if(get_locale() == 'ar'): ?>
	<?php include( get_stylesheet_directory() . '/includes/footer.php'); ?>    
<?php else: ?>
	<?php include( get_stylesheet_directory() . '/includes/en-footer.php'); ?>
<?php endif; ?>	
<!--/#footer-->

<?php wp_footer(); ?>

</div><!--my-container-->
</body>
</html>
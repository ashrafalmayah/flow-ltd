				</div><!--/.main-inner-->
			</div><!--/.main-->	
		</div><!--/.container-inner-->
	</div><!--/.container-->
	
	<div class="clear"></div>


</div><!--/#wrapper-->

		
<!-- 	WhatsApp Icon -->
	<a class="fixed bottom-8 sm:bottom-4 right-4 w-16 sm:w-16 z-50 sm:hover:-translate-y-3 transition" href="https://wa.me/+966590727730" target="blank">
		<img src="../assets/images/WhatsApp_icon.webp" width="64" height="64" alt="Whatsapp">
		<span class="absolute inset-[5px] -z-10 animate-ping bg-green-500 rounded-full"></span>
	</a>

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
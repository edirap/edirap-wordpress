<?php global $smartbiz; ?>
<div style="clear: both; height: 20px;">&nbsp;</div>
</div>
</div>
<b class="border_radius page" style="width:980px;margin:0 auto;"><b class="r5">&nbsp;</b><b class="r4">&nbsp;</b><b class="r3">&nbsp;</b><b class="r2">&nbsp;</b><b class="r1">&nbsp;</b></b>
<!-- End page -->
</div>

<div id="footer">
	<p><?php _e('Copyright', 'smartbiz'); ?> &copy; <?php echo date('Y'); ?><a href="<?php echo home_url(); ?>">
		<?php if ($smartbiz->copyrightName() != '') : ?>
			<?php echo $smartbiz->copyrightName(); ?>
		<?php else : ?>
            <?php bloginfo( 'name'); ?>
		<?php endif; ?></a><br />	
		Designed by <?php $smartbiz_theme=get_theme_data( get_template_directory().'/style.css' ); echo $smartbiz_theme['Author']; ?>. Powered by <a href="http://wordpress.org/">WordPress</a>.<br />
	</p>
	<?php wp_footer(); ?>
	<br>
	<?php
		if ($smartbiz->statisticsCode() != '') {
			echo $smartbiz->statisticsCode();
		}
	?>
</div>


</body>
</html>
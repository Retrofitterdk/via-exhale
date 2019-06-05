		<footer class="app-footer">

<?php the_biz_info(array('4', '<div id="fotter>', '</div>')) ?>

			<?php Exhale\Template\Footer::displayCredit() ?>

			<?php Hybrid\View\display( 'nav/menu', 'social', [ 'location' => 'social' ] ) ?>

		</footer>

</div><!-- .app -->

<?php wp_footer() ?>
</body>
</html>

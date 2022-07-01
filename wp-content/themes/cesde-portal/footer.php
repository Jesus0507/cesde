<?php
/**
 * Theme Footer.
 *
 * See also inc/template-parts/footer.php.
 *
 * @package Page Builder Framework
 */

defined( 'ABSPATH' ) || die( "Can't access directly" );

		do_action( 'wpbf_before_footer' );

		do_action( 'wpbf_footer' );

		do_action( 'wpbf_after_footer' );

		?>

	</div>

<?php do_action( 'wpbf_body_close' ); ?>
<div class="button-list-wrapper">
	<div id="social-widget" class="social-network-wrapper-widget">

	</div>
	<div class="button-trigger">
		<buttton 
			id="button-trigger" 
			class="circle social-element" 
			title="<?php printf(__('Abrir redes sociales', 'Thinkus-child')); ?>" >
				<i class="fa-solid fa-comments"></i>
		</buttton>
	</div>
</div>
<?php wp_footer(); ?>

</body>

</html>

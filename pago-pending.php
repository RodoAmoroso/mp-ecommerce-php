<?php require 'head.php'; ?>

<section class="gral-section" style="display:flex;width:100%;height:100%;top:0;left:0;position:fixed;align-items:center; justify-content:center">
	<div class="container">
		<h1 class="text-warning">Estamos procesando el pago.</h1>
		<p>Si todo está correcto, te haremos llegar un email con los detalles de tu compra.</p>

		<pre>
			<?php print_r($_GET); ?>
		</pre>

		<a href="." class="mercadopago-button" style="display:inline-block">Volver</a>
	</div>
</section>

<?php require 'footer.php'; ?>
<?php require 'head.php'; ?>

<section class="gral-section" style="display:flex;width:100%;height:100%;top:0;left:0;position:fixed;align-items:center; justify-content:center">
	<div class="container">
		<h1 class="text-success">Gracias por tu compra!</h1>
		<p>El pago ha sido acreditado y en breve te enviaremos los detalles de tu compra por email.</p>


		<pre>
			<?php print_r($_GET); ?>
		</pre>

		<a href="/" class="mercadopago-button" style="display:inline-block">Volver</a>
	</div>
</section>

<?php require 'footer.php'; ?>
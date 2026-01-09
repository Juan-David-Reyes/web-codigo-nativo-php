
<!-- <section class="home-hero gradient-bg">
  
		<div class="gradients-container">
			<div class="g1"></div>
			<div class="g2"></div>
			<div class="g3"></div>
			<div class="g4"></div>
			<div class="g5"></div>
		</div>

	<div class="content_cont">
		<h1>A place to develope your @proyect</h1>
		<div class="proyects">
			<div class="card">
				<img src="<?= URL_PATH ?>assets/images/imagen.jpg" width="500" height="500" alt="">
			</div>
			<div class="card">
				<img src="<?= URL_PATH ?>assets/images/imagen.jpg" width="500" height="500" alt="">
			</div>
			<div class="card">
				<img src="<?= URL_PATH ?>assets/images/imagen.jpg" width="500" height="500" alt="">
			</div>
			<div class="card">
				<img src="<?= URL_PATH ?>assets/images/imagen.jpg" width="500" height="500" alt="">
			</div>
			<div class="card">
				<img src="<?= URL_PATH ?>assets/images/imagen.jpg" width="500" height="500" alt="">
			</div>
			<div class="card">
				<img src="<?= URL_PATH ?>assets/images/imagen.jpg" width="500" height="500" alt="">
			</div>
		</div>

		<div class="desc-hero">
			<p>Diseñamos pensando en la experiencia que va a llevar a tus visitantes a elegirte por encima de la competencia.</p>

			<div class="ctas">
				<a href="" class="cta-green">Nuestros servicios</a>
				<a href="" class="cta">Nuestros servicios</a>
			</div>
		</div>
	</div>
</section> -->

<section class="slider-brands">

<h2 class="dark">Quienes nos han confiado sus proyectos</h2>
<div class="slider">
	<ul class="move">
		<!-- // primera vuelta -->
		<li class="box"><img width="120" height="60" src="<?= URL_PATH ?>assets/images/marcas/advancederma.png" alt="Logo Advanced Derma - Cliente Código Nativo" loading="lazy"></li>
		<li class="box"><img width="120" height="60" src="<?= URL_PATH ?>assets/images/marcas/apsap.png" alt="Logo APSAP - Cliente Código Nativo" loading="lazy"></li>
		<li class="box"><img width="120" height="60" src="<?= URL_PATH ?>assets/images/marcas/bbmaya.png" alt="Logo BB Maya - Cliente Código Nativo" loading="lazy"></li>
		<li class="box"><img width="120" height="60" src="<?= URL_PATH ?>assets/images/marcas/ccsolutions.png" alt="Logo CC Solutions - Cliente Código Nativo" loading="lazy"></li>
		<li class="box"><img width="120" height="60" src="<?= URL_PATH ?>assets/images/marcas/danielpsy.png" alt="Logo Daniel Psy - Cliente Código Nativo" loading="lazy"></li>
		<li class="box"><img width="120" height="60" src="<?= URL_PATH ?>assets/images/marcas/mielato.png" alt="Logo Mielato - Cliente Código Nativo" loading="lazy"></li>
		<li class="box"><img width="120" height="60" src="<?= URL_PATH ?>assets/images/marcas/nacionpodcast.png" alt="Logo Nación Podcast - Cliente Código Nativo" loading="lazy"></li>
		<li class="box"><img width="120" height="60" src="<?= URL_PATH ?>assets/images/marcas/paolaakl.png" alt="Logo Paola AKL - Cliente Código Nativo" loading="lazy"></li>
		<li class="box"><img width="120" height="60" src="<?= URL_PATH ?>assets/images/marcas/pazdesdeelvientre.png" alt="Logo Paz desde el Vientre - Cliente Código Nativo" loading="lazy"></li>
		<li class="box"><img width="120" height="60" src="<?= URL_PATH ?>assets/images/marcas/seonme.png" alt="Logo SeonMe - Cliente Código Nativo" loading="lazy"></li>

		<!-- //segunda vuelta -->

		<li class="box"><img width="120" height="60" src="<?= URL_PATH ?>assets/images/marcas/advancederma.png" alt="Logo Advanced Derma" loading="lazy"></li>
		<li class="box"><img width="120" height="60" src="<?= URL_PATH ?>assets/images/marcas/apsap.png" alt="Logo APSAP" loading="lazy"></li>
		<li class="box"><img width="120" height="60" src="<?= URL_PATH ?>assets/images/marcas/bbmaya.png" alt="Logo BB Maya" loading="lazy"></li>
		<li class="box"><img width="120" height="60" src="<?= URL_PATH ?>assets/images/marcas/ccsolutions.png" alt="Logo CC Solutions" loading="lazy"></li>
		<li class="box"><img width="120" height="60" src="<?= URL_PATH ?>assets/images/marcas/danielpsy.png" alt="Logo Daniel Psy" loading="lazy"></li>
		<li class="box"><img width="120" height="60" src="<?= URL_PATH ?>assets/images/marcas/mielato.png" alt="Logo Mielato" loading="lazy"></li>
		<li class="box"><img width="120" height="60" src="<?= URL_PATH ?>assets/images/marcas/nacionpodcast.png" alt="Logo Nación Podcast" loading="lazy"></li>
		<li class="box"><img width="120" height="60" src="<?= URL_PATH ?>assets/images/marcas/paolaakl.png" alt="Logo Paola AKL" loading="lazy"></li>
		<li class="box"><img width="120" height="60" src="<?= URL_PATH ?>assets/images/marcas/pazdesdeelvientre.png" alt="Logo Paz desde el Vientre" loading="lazy"></li>
		<li class="box"><img width="120" height="60" src="<?= URL_PATH ?>assets/images/marcas/seonme.png" alt="Logo SeonMe" loading="lazy"></li>
	</ul>
</div>

<script type="module">

	document.addEventListener('DOMContentLoaded', () => {
		const interBubble = document.querySelector('.interactive');
		let curX = 0;
		let curY = 0;
		let tgX = 0;
		let tgY = 0;

		function move() {
				curX += (tgX - curX) / 20;
				curY += (tgY - curY) / 20;
				if (interBubble) {
					interBubble.style.transform = `translate(${Math.round(curX)}px, ${Math.round(curY)}px)`;
				}
				requestAnimationFrame(() => {
						move();
				});
		}

		window.addEventListener('mousemove', (event) => {
				tgX = event.clientX;
				tgY = event.clientY;
		});

		move();
});

</script>

</section>

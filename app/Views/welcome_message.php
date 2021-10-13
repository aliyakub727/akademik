<?= $this->extend('template/template'); ?>

<?= $this->section('content'); ?>
<style>
	body {
		background-image: url(/img/bg12.png);
		background-position: top;
		background-repeat: no-repeat;
		background-size: 100vmax;

	}
</style>

<div class="custom-cover">
	<div class="container kotak">
		<div class="row kata justify-content-center">
			<div class="col-md-10 col-9 ">
				<h1>Suzuran High School</h1>
				<p>
					Sekolah ini adalah salah satu sekolah yang bergengsi di sekitar wilayah jakarta, yang berlokasi di sekitar jl halim xxxx yang memiliki beberapa jurusan yang terdiri dari teknologi komunikasi dan jaringan, MultiMedia, Administrasi perkantoran,Akuntansi dan Rekayasa Perangkat Lunax
				</p>
				<?php if (logged_in()) : ?>
					<a href="<?= base_url(); ?>/dashboard" class="tombol">Get Started</a>
				<?php else : ?>
					<a href="<?= base_url(); ?>/dashboard" class="tombol">Get Started</a>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?= $this->endsection(); ?>
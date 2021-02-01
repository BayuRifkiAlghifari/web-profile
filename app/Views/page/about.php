<?php  
	use App\Models\About;

	$data = About::all();
	$data = $data->fetch_assoc();
?>

<div class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url(<?= base_url ?>assets/front-end/images/bg-1.jpeg);" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="js-fullheight d-flex justify-content-center align-items-center">
		<div class="col-md-8 text text-center">
			<div class="img mb-4" style="background-image: url(<?= base_url ?>about/<?= $data['about_image'] ?>);"></div>
			<div class="desc">
				<h2 class="subheading" style="font-weight: bold;color: rgba(0, 0, 0, 0.6)">Hello I'm</h2>
				<h1 class="mb-4"><?= $data['about_name'] ?></h1>
				<p class="mb-4 text-bold" style="font-weight: bold;color: rgba(0, 0, 0, 0.6)"><?= $data['about_description'] ?></p>
			</div>
		</div>
	</div>
</div>

<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center mb-2">
      		<div class="col-md-7 heading-section text-center ftco-animate">
      			<h4>Social Media</h4>
        		<ul class="ftco-social mt-3">
	                <!-- <li class="ftco-animate"><a target="_blank" href="#"><span class="icon-twitter"></span></a></li> -->
	                <!-- <li class="ftco-animate"><a target="_blank" href="#"><span class="icon-facebook"></span></a></li> -->
	                <!-- <li class="ftco-animate"><a target="_blank" href="#"><span class="icon-instagram"></span></a></li> -->
	                <li class="ftco-animate"><a target="_blank" href="<?= $data['about_github'] ?>"><span class="icon-github"></span></a></li>
	            </ul>
      		</div>
    	</div>
	</div>
</section>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>Class Program</title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="assets/img/logo/logo2.png" rel="icon">
	<link href="assets/img/logo/logo2.png" rel="assets/img/logo/logo2.png">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="assets/vendor/aos/aos.css" rel="stylesheet">
	<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
	<!-- Include Bootstrap CSS and JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



	<link href=https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css>
	<link href=https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js>

	<!-- Template Main CSS File -->
	<link href="assets/css/style.css" rel="stylesheet">

	<!-- =======================================================
  * Template Name: BizLand
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+67F/mz5C5UmT7Bm4if5G5G2+IbbVYUew+OrCJ5t9n6E5DH" crossorigin="anonymous">
</head>
@extends('layout.header')
@section('content')



<body >
	<p class="text-center mt-2 mb-2">
		<b style="font-size: 30px">4300+ talks to Zona Media Group</b>
	  </p>
	  <p class="text-center">
		Jl. Band.Palmerah IV No.D 11B, Cemorokandang, Kec. Kedungkandang, Kota Malang, Jawa Timur 65139s
	  </p>	
	  {{-- <section id="search" class="search"> --}}
		<div style="background-color: #d3d3d3; padding: 20px;">
		  <div class="container">
			<form>
			  <div class="input-group mb-2">
				<input type="email" class="form-control" id="exampleInputEmail1" name="search" aria-describedby="emailHelp" placeholder="Search talks....">
				<button class="search-button" type="submit"><i class="bi bi-search"></i></button>
			  </div>
	  
			  <div class="row g-2">
				<div class="col-md">
				  <div class="form">
					<select class="form-select">
					  <option selected>Open this select menu</option>
					  <option value="1">One</option>
					  <option value="2">Two</option>
					  <option value="3">Three</option>
					</select>
				  </div>
				</div>
	  
				<div class="col-md">
				  <div class="form">
					<select class="form-select">
					  <option selected>Open this select menu</option>
					  <option value="1">One</option>
					  <option value="2">Two</option>
					  <option value="3">Three</option>
					</select>
				  </div>
				</div>
	  
				<div class="col-md">
				  <div class="form">
					<select class="form-select">
					  <option selected>Open this select menu</option>
					  <option value="1">One</option>
					  <option value="2">Two</option>
					  <option value="3">Three</option>
					</select>
				  </div>
				</div>
			  </div>
			</form>
		  </div>
		</div>
		<br>
	  {{-- Short By --}}
		<div class="container">
		  <div class="sortby">
			<div class="row g-3 align-items-center">
			  <div class="col-auto">
				<label for="sortby" class="col-form-label">Sort by :</label>
			  </div>
			  <div class="col-auto">
				<select id="sortby" class="form-select">
				  <option selected>Open this select menu</option>
				  <option value="1">One</option>
				  <option value="2">Two</option>
				  <option value="3">Three</option>
				</select>
			  </div>
			</div>
		  </div>
		</div>

{{-- Artikel --}}
	<section id="artikels" class="artikels">
		<div class="container">
			<div class="artikel-box">
				<div class="row">
					<div class="blog-item col-md-4 col-sm-4">
						<div class="blog-item-inner">
							<div class="itemBlogImg left-block">
								<div class="article-image banners">
									<a class="popup-gallery" href="assets/img/blog1.jpg">
										<img src="assets/img/blog1.jpg" alt="Baby Came Back! Missed Out? Grab Your">
									</a>
								</div>
							</div>
							<div class="itemBlogContent right-block">
								<div class="blog-content">
									<div class="media-content so-block">
										<h4 class="media-heading head-item">
											<a href="blog-detail.html" title="Aestibulum ipsum a orn..." target="_self">Aestibulum ipsum a orn...</a>
										</h4>
										<div class="description">
											Sed ut perspiciatis unde omnis iste natus error sit volup tatem ...
										</div>
										<div class="description">
											Posted Jan 2023
										</div>
										<!-- <div class="readmore">
											<a href="blog-detail.html" target="_self">Read more</a>
										</div> -->
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="blog-item col-md-4 col-sm-4">
						<div class="blog-item-inner">
							<div class="itemBlogImg left-block">
								<div class="article-image banners">
									<a class="popup-gallery" href="assets/img/blog1.jpg">
										<img src="assets/img/blog1.jpg" alt="Baby Came Back! Missed Out? Grab Your">
									</a>
								</div>
							</div>
							<div class="itemBlogContent right-block">
								<div class="blog-content">
									<div class="media-content so-block">
										<h4 class="media-heading head-item">
											<a href="blog-detail.html" title="Aestibulum ipsum a orn..." target="_self">Aestibulum ipsum a orn...</a>
										</h4>
										<div class="description">
											Sed ut perspiciatis unde omnis iste natus error sit volup tatem ...
										</div>
										<div class="description">
											Posted Jan 2023
										</div>
										<!-- <div class="readmore">
											<a href="blog-detail.html" target="_self">Read more</a>
										</div> -->
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="blog-item col-md-4 col-sm-4">
						<div class="blog-item-inner">
							<div class="itemBlogImg left-block">
								<div class="article-image banners">
									<a class="popup-gallery" href="assets/img/blog1.jpg">
										<img src="assets/img/blog1.jpg" alt="Baby Came Back! Missed Out? Grab Your">
									</a>
								</div>
							</div>
							<div class="itemBlogContent right-block">
								<div class="blog-content">
									<div class="media-content so-block">
										<!-- <div class="entry-meta clearfix">
											<div class="entry-date font-ct date-bottom">
												<i class="fa fa-calendar" aria-hidden="true"></i>11/11/2019
											</div>
											<div class="entry-comment">
												<i class="fa fa-commenting" aria-hidden="true"></i>2 Comments
											</div>
										</div> -->
										<h4 class="media-heading head-item">
											<a href="blog-detail.html" title="Aestibulum ipsum a orn..." target="_self">Aestibulum ipsum a orn...</a>
										</h4>
										<div class="description">
											Sed ut perspiciatis unde omnis iste natus error sit volup tatem ...
										</div>
										<!-- <div class="readmore">
											<a href="blog-detail.html" target="_self">Read more</a>
										</div> -->
										<div class="description">
											Posted Jan 2023
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="blog-item col-md-4 col-sm-4">
						<div class="blog-item-inner">
							<div class="itemBlogImg left-block">
								<div class="article-image banners">
									<a class="popup-gallery" href="assets/img/blog1.jpg">
										<img src="assets/img/blog1.jpg" alt="Baby Came Back! Missed Out? Grab Your">
									</a>
								</div>
							</div>
							<div class="itemBlogContent right-block">
								<div class="blog-content">
									<div class="media-content so-block">
										<!-- <div class="entry-meta clearfix">
											<div class="entry-date font-ct date-bottom">
												<i class="fa fa-calendar" aria-hidden="true"></i>11/11/2019
											</div>
											<div class="entry-comment">
												<i class="fa fa-commenting" aria-hidden="true"></i>2 Comments
											</div>
										</div> -->
										<h4 class="media-heading head-item">
											<a href="blog-detail.html" title="Aestibulum ipsum a orn..." target="_self">Aestibulum ipsum a orn...</a>
										</h4>
										<div class="description">
											Sed ut perspiciatis unde omnis iste natus error sit volup tatem ...
										</div>
										<!-- <div class="readmore">
											<a href="blog-detail.html" target="_self">Read more</a>
										</div> -->
										<div class="description">
											Posted Jan 2023
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="blog-item col-md-4 col-sm-4 clearfix">
						<div class="blog-item-inner">
							<div class="itemBlogImg left-block">
								<div class="article-image banners">
									<a class="popup-gallery" href="assets/img/blog1.jpg">
										<img src="assets/img/blog1.jpg" alt="Baby Came Back! Missed Out? Grab Your">
									</a>
								</div>
							</div>
							<div class="itemBlogContent right-block">
								<div class="blog-content">
									<div class="media-content so-block">
										<!-- <div class="entry-meta clearfix">
											<div class="entry-date font-ct date-bottom">
												<i class="fa fa-calendar" aria-hidden="true"></i>11/11/2019
											</div>
											<div class="entry-comment">
												<i class="fa fa-commenting" aria-hidden="true"></i>2 Comments
											</div>
										</div> -->
										<h4 class="media-heading head-item">
											<a href="blog-detail.html" title="Aestibulum ipsum a orn..." target="_self">Aestibulum ipsum a orn...</a>
										</h4>
										<div class="description">
											Sed ut perspiciatis unde omnis iste natus error sit volup tatem ...
										</div>
										<!-- <div class="readmore">
											<a href="blog-detail.html" target="_self">Read more</a>
										</div> -->
										<div class="description">
											Posted Jan 2023
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="blog-item col-md-4 col-sm-4">
						<div class="blog-item-inner">
							<div class="itemBlogImg left-block">
								<div class="article-image banners">
									<a class="popup-gallery" href="assets/img/blog1.jpg">
										<img src="assets/img/blog1.jpg" alt="Baby Came Back! Missed Out? Grab Your">
									</a>
								</div>
							</div>
							<div class="itemBlogContent right-block">
								<div class="blog-content">
									<div class="media-content so-block">
										<!-- <div class="entry-meta clearfix">
											<div class="entry-date font-ct date-bottom">
												<i class="fa fa-calendar" aria-hidden="true"></i>11/11/2019
											</div>
											<div class="entry-comment">
												<i class="fa fa-commenting" aria-hidden="true"></i>2 Comments
											</div>
										</div> -->
										<h4 class="media-heading head-item">
											<a href="blog-detail.html" title="Aestibulum ipsum a orn..." target="_self">Aestibulum ipsum a orn...</a>
										</h4>
										<div class="description">
											Sed ut perspiciatis unde omnis iste natus error sit volup tatem ...
										</div>
										<!-- <div class="readmore">
											<a href="blog-detail.html" target="_self">Read more</a>
										</div> -->
										<div class="description">
											Posted Jan 2023
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="blog-item col-md-4 col-sm-4">
						<div class="blog-item-inner">
							<div class="itemBlogImg left-block">
								<div class="article-image banners">
									<a class="popup-gallery" href="assets/img/blog1.jpg">
										<img src="assets/img/blog1.jpg" alt="Baby Came Back! Missed Out? Grab Your">
									</a>
								</div>
							</div>
							<div class="itemBlogContent right-block">
								<div class="blog-content">
									<div class="media-content so-block">
										<!-- <div class="entry-meta clearfix">
											<div class="entry-date font-ct date-bottom">
												<i class="fa fa-calendar" aria-hidden="true"></i>11/11/2019
											</div>
											<div class="entry-comment">
												<i class="fa fa-commenting" aria-hidden="true"></i>2 Comments
											</div>
										</div> -->
										<h4 class="media-heading head-item">
											<a href="blog-detail.html" title="Aestibulum ipsum a orn..." target="_self">Aestibulum ipsum a orn...</a>
										</h4>
										<div class="description">
											Sed ut perspiciatis unde omnis iste natus error sit volup tatem ...
										</div>
										<!-- <div class="readmore">
											<a href="blog-detail.html" target="_self">Read more</a>
										</div> -->
										<div class="description">
											Posted Jan 2023
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="blog-item col-md-4 col-sm-4">
						<div class="blog-item-inner">
							<div class="itemBlogImg left-block">
								<div class="article-image banners">
									<a class="popup-gallery" href="assets/img/blog1.jpg">
										<img src="assets/img/blog1.jpg" alt="Baby Came Back! Missed Out? Grab Your">
									</a>
								</div>
							</div>
							<div class="itemBlogContent right-block">
								<div class="blog-content">
									<div class="media-content so-block">
										<!-- <div class="entry-meta clearfix">
											<div class="entry-date font-ct date-bottom">
												<i class="fa fa-calendar" aria-hidden="true"></i>11/11/2019
											</div>
											<div class="entry-comment">
												<i class="fa fa-commenting" aria-hidden="true"></i>2 Comments
											</div>
										</div> -->
										<h4 class="media-heading head-item">
											<a href="blog-detail.html" title="Aestibulum ipsum a orn..." target="_self">Aestibulum ipsum a orn...</a>
										</h4>
										<div class="description">
											Sed ut perspiciatis unde omnis iste natus error sit volup tatem ...
										</div>
										<!-- <div class="readmore">
											<a href="blog-detail.html" target="_self">Read more</a>
										</div> -->
										<div class="description">
											Posted Jan 2023
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="blog-item col-md-4 col-sm-4">
						<div class="blog-item-inner">
							<div class="itemBlogImg left-block">
								<div class="article-image banners">
									<a class="popup-gallery" href="assets/img/blog1.jpg">
										<img src="assets/img/blog1.jpg" alt="Baby Came Back! Missed Out? Grab Your">
									</a>
								</div>
							</div>
							<div class="itemBlogContent right-block">
								<div class="blog-content">
									<div class="media-content so-block">
										<!-- <div class="entry-meta clearfix">
											<div class="entry-date font-ct date-bottom">
												<i class="fa fa-calendar" aria-hidden="true"></i>11/11/2019
											</div>
											<div class="entry-comment">
												<i class="fa fa-commenting" aria-hidden="true"></i>2 Comments
											</div>
										</div> -->
										<h4 class="media-heading head-item">
											<a href="blog-detail.html" title="Aestibulum ipsum a orn..." target="_self">Aestibulum ipsum a orn...</a>
										</h4>
										<div class="description">
											Sed ut perspiciatis unde omnis iste natus error sit volup tatem ...
										</div>
										<!-- <div class="readmore">
											<a href="blog-detail.html" target="_self">Read more</a>
										</div> -->
										<div class="description">
											Posted Jan 2023
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="blog-item col-md-4 col-sm-4">
						<div class="blog-item-inner">
							<div class="itemBlogImg left-block">
								<div class="article-image banners">
									<a class="popup-gallery" href="assets/img/blog1.jpg">
										<img src="assets/img/blog1.jpg" alt="Baby Came Back! Missed Out? Grab Your">
									</a>
								</div>
							</div>
							<div class="itemBlogContent right-block">
								<div class="blog-content">
									<div class="media-content so-block">
										<!-- <div class="entry-meta clearfix">
											<div class="entry-date font-ct date-bottom">
												<i class="fa fa-calendar" aria-hidden="true"></i>11/11/2019
											</div>
											<div class="entry-comment">
												<i class="fa fa-commenting" aria-hidden="true"></i>2 Comments
											</div>
										</div> -->
										<h4 class="media-heading head-item">
											<a href="blog-detail.html" title="Aestibulum ipsum a orn..." target="_self">Aestibulum ipsum a orn...</a>
										</h4>
										<div class="description">
											Sed ut perspiciatis unde omnis iste natus error sit volup tatem ...
										</div>
										<!-- <div class="readmore">
											<a href="blog-detail.html" target="_self">Read more</a>
										</div> -->

										<div class="description">
											Posted Jan 2023
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="blog-item col-md-4 col-sm-4">
						<div class="blog-item-inner">
							<div class="itemBlogImg left-block">
								<div class="article-image banners">
									<a class="popup-gallery" href="assets/img/blog1.jpg">
										<img src="assets/img/blog1.jpg" alt="Baby Came Back! Missed Out? Grab Your">
									</a>
								</div>
							</div>
							<div class="itemBlogContent right-block">
								<div class="blog-content">
									<div class="media-content so-block">
										<!-- <div class="entry-meta clearfix">
											<div class="entry-date font-ct date-bottom">
												<i class="fa fa-calendar" aria-hidden="true"></i>11/11/2019
											</div>
											<div class="entry-comment">
												<i class="fa fa-commenting" aria-hidden="true"></i>2 Comments
											</div>
										</div> -->
										<h4 class="media-heading head-item">
											<a href="blog-detail.html" title="Aestibulum ipsum a orn..." target="_self">Aestibulum ipsum a orn...</a>
										</h4>
										<div class="description">
											Sed ut perspiciatis unde omnis iste natus error sit volup tatem ...
										</div>
										<!-- <div class="readmore">
											<a href="blog-detail.html" target="_self">Read more</a>
										</div> -->
										<div class="description">
											Posted Jan 2023
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="blog-item col-md-4 col-sm-4">
						<div class="blog-item-inner">
							<div class="itemBlogImg left-block">
								<div class="article-image banners">
									<a class="popup-gallery" href="assets/img/blog1.jpg">
										<img src="assets/img/blog1.jpg" alt="Baby Came Back! Missed Out? Grab Your">
									</a>
								</div>
							</div>
							<div class="itemBlogContent right-block">
								<div class="blog-content">
									<div class="media-content so-block">
										<!-- <div class="entry-meta clearfix">
											<div class="entry-date font-ct date-bottom">
												<i class="fa fa-calendar" aria-hidden="true"></i>11/11/2019
											</div>
											<div class="entry-comment">
												<i class="fa fa-commenting" aria-hidden="true"></i>2 Comments
											</div>
										</div> -->
										<h4 class="media-heading head-item">
											<a href="blog-detail.html" title="Aestibulum ipsum a orn..." target="_self">Aestibulum ipsum a orn...</a>
										</h4>
										<div class="description">
											Sed ut perspiciatis unde omnis iste natus error sit volup tatem ...
										</div>
										<!-- <div class="readmore">
											<a href="blog-detail.html" target="_self">Read more</a>
										</div> -->

										<div class="description">
											Posted Jan 2023
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	{{-- Pervious --}}
	<div class="page-number mb-2">
		<a class="previous-page" href="previous-page.html">Previous</a>
		<span>1</span>
		<span>2</span>
		<span>3</span>
		<a class="next-page" style="margin-right: 8px" href="next-page.html">Next</a>
	</div>
	
	

	<!-- Vendor JS Files -->
	<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
	<script src="assets/vendor/aos/aos.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
	<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
	<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
	<script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
	<script src="assets/vendor/php-email-form/validate.js"></script>

	<!-- Template Main JS File -->
	<script src="assets/js/main.js"></script>

</body>

</html>
@endsection
@extends('master')
@section('title', 'Vegefoods Page')

@section('content')

	<section class="ftco-section ftco-category ftco-no-pt">
		<div class="container mt-5">
			<div class="row">
				<div class="col-md-8">
					<div class="row">
						<div class="col-md-6 order-md-last align-items-stretch d-flex">
							<div class="category-wrap-2 ftco-animate img align-self-stretch d-flex"
								style="background-image: url(images/category.jpg);">
								<div class="text text-center">
									<h2>Vegetables</h2>
									<p>Protect the health of every home</p>
									<p><a href="#" class="btn btn-primary">Shop now</a></p>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="category-wrap ftco-animate img mb-4 d-flex align-items-end"
								style="background-image: url(images/category-1.jpg);">
								<div class="text px-3 py-1">
									<h2 class="mb-0"><a href="#">Fruits</a></h2>
								</div>
							</div>
							<div class="category-wrap ftco-animate img d-flex align-items-end"
								style="background-image: url(images/category-2.jpg);">
								<div class="text px-3 py-1">
									<h2 class="mb-0"><a href="#">Vegetables</a></h2>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="category-wrap ftco-animate img mb-4 d-flex align-items-end"
						style="background-image: url(images/category-3.jpg);">
						<div class="text px-3 py-1">
							<h2 class="mb-0"><a href="#">Juices</a></h2>
						</div>
					</div>
					<div class="category-wrap ftco-animate img d-flex align-items-end"
						style="background-image: url(images/category-4.jpg);">
						<div class="text px-3 py-1">
							<h2 class="mb-0"><a href="#">Dried</a></h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center mb-3 pb-3">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<span class="subheading">Featured Products</span>
					<h2 class="mb-4">Our Products</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				@foreach($productList as $product)
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="product">
							<a href="{{ route('product.detail', $product->id) }}" class="img-prod"><img class="img-fluid" src="{{ $product->img}}"
									alt="Colorlib Template">
								<span class="status">30%</span>
								<div class="overlay"></div>
							</a>
							<div class="text py-3 pb-4 px-3 text-center">
								<h3><a href="{{ route('product.detail', $product->id) }}">{{ $product->name }}</a></h3>
								<div class="d-flex">
									<div class="pricing">
										<p class="price"><span class="mr-2 price-dc">$120.00</span><span
												class="price-sale">${{ $product->price }}</span></p>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</section>

	<section class="ftco-section img" style="background-image: url(images/bg_3.jpg);">
		<div class="container">
			<div class="row justify-content-end">
				<div class="col-md-6 heading-section ftco-animate deal-of-the-day ftco-animate">
					<span class="subheading">Best Price For You</span>
					<h2 class="mb-4">Deal of the day</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
					<h3><a href="#">Spinach</a></h3>
					<span class="price">$10 <a href="#">now $5 only</a></span>
					<div id="timer" class="d-flex mt-5">
						<div class="time" id="days"></div>
						<div class="time pl-3" id="hours"></div>
						<div class="time pl-3" id="minutes"></div>
						<div class="time pl-3" id="seconds"></div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section testimony-section">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-7 heading-section ftco-animate text-center">
					<span class="subheading">Testimony</span>
					<h2 class="mb-4">Our satisfied customer says</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
						live the blind texts. Separated they live in</p>
				</div>
			</div>
			<div class="row ftco-animate">
				<div class="col-md-12">
					<div class="carousel-testimony owl-carousel">
						<div class="item">
							<div class="testimony-wrap p-4 pb-5">
								<div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="icon-quote-left"></i>
									</span>
								</div>
								<div class="text text-center">
									<p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the
										countries Vokalia and Consonantia, there live the blind texts.</p>
									<p class="name">Garreth Smith</p>
									<span class="position">Marketing Manager</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap p-4 pb-5">
								<div class="user-img mb-5" style="background-image: url(images/person_2.jpg)">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="icon-quote-left"></i>
									</span>
								</div>
								<div class="text text-center">
									<p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the
										countries Vokalia and Consonantia, there live the blind texts.</p>
									<p class="name">Garreth Smith</p>
									<span class="position">Interface Designer</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap p-4 pb-5">
								<div class="user-img mb-5" style="background-image: url(images/person_3.jpg)">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="icon-quote-left"></i>
									</span>
								</div>
								<div class="text text-center">
									<p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the
										countries Vokalia and Consonantia, there live the blind texts.</p>
									<p class="name">Garreth Smith</p>
									<span class="position">UI Designer</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap p-4 pb-5">
								<div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="icon-quote-left"></i>
									</span>
								</div>
								<div class="text text-center">
									<p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the
										countries Vokalia and Consonantia, there live the blind texts.</p>
									<p class="name">Garreth Smith</p>
									<span class="position">Web Developer</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap p-4 pb-5">
								<div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="icon-quote-left"></i>
									</span>
								</div>
								<div class="text text-center">
									<p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the
										countries Vokalia and Consonantia, there live the blind texts.</p>
									<p class="name">Garreth Smith</p>
									<span class="position">System Analyst</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<hr>

	<section class="ftco-section ftco-partner">
		<div class="container">
			<div class="row">
				<div class="col-sm ftco-animate">
					<a href="#" class="partner"><img src="images/partner-1.png" class="img-fluid"
							alt="Colorlib Template"></a>
				</div>
				<div class="col-sm ftco-animate">
					<a href="#" class="partner"><img src="images/partner-2.png" class="img-fluid"
							alt="Colorlib Template"></a>
				</div>
				<div class="col-sm ftco-animate">
					<a href="#" class="partner"><img src="images/partner-3.png" class="img-fluid"
							alt="Colorlib Template"></a>
				</div>
				<div class="col-sm ftco-animate">
					<a href="#" class="partner"><img src="images/partner-4.png" class="img-fluid"
							alt="Colorlib Template"></a>
				</div>
				<div class="col-sm ftco-animate">
					<a href="#" class="partner"><img src="images/partner-5.png" class="img-fluid"
							alt="Colorlib Template"></a>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
		<div class="container py-4">
			<div class="row d-flex justify-content-center py-5">
				<div class="col-md-6">
					<h2 style="font-size: 22px;" class="mb-0">Subcribe to our Newsletter</h2>
					<span>Get e-mail updates about our latest shops and special offers</span>
				</div>
				<div class="col-md-6 d-flex align-items-center">
					<form action="#" class="subscribe-form">
						<div class="form-group d-flex">
							<input type="text" class="form-control" placeholder="Enter email address">
							<input type="submit" value="Subscribe" class="submit px-3">
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
@endsection
@extends('master')
@section('content')

	<section id="advertisement">
		<div class="container">
			<img src="http://demo.themeum.com/html/eshopper/images/shop/advertisement.jpg" alt="" style="display: none !important;">
		</div>
	</section>
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							@foreach($category as $ct)
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											{{$ct -> name}}
										</a>
									</h4>
								</div>
							</div>
							@endforeach
						</div><!--/category-productsr-->
					
						
						<div class="shipping text-center"><!--shipping-->
							<img src="./img/shipping.jpg" alt="">
						</div><!--/shipping-->
						
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>
						@foreach($products as $pr)
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="./img/{{$pr -> image}}" alt="">
										<h2>{{$pr -> price}}</h2>
										<p>{{$pr -> intro }}</p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>{{$pr -> price}}</h2>
											<p>{{$pr -> intro}}</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
									</div>
								</div>
								<!-- <div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="http://demo.themeum.com/html/eshopper/shop.html"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href="http://demo.themeum.com/html/eshopper/shop.html"><i class="fa fa-plus-square"></i>Add to compare</a></li>
									</ul>
								</div> -->
							</div>
						</div>
						@endforeach
						
						<br/>
						<br/>
						
						<div class="row" style="clear: both">
							{{$products -> links()}}
						</div>
					</div><!--features_items-->
				</div>
			</div>
		</div>
	</section>


@endsection
@extends('master')
@section('content')
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
								<!-- <div id="sportswear" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="http://demo.themeum.com/html/eshopper/blog.html">Nike </a></li>
											<li><a href="http://demo.themeum.com/html/eshopper/blog.html">Under Armour </a></li>
											<li><a href="http://demo.themeum.com/html/eshopper/blog.html">Adidas </a></li>
											<li><a href="http://demo.themeum.com/html/eshopper/blog.html">Puma</a></li>
											<li><a href="http://demo.themeum.com/html/eshopper/blog.html">ASICS </a></li>
										</ul>
									</div>
								</div> -->
							</div>

							@endforeach
						</div><!--/category-products-->


						<!-- <div class="brands_products"> --><!--brands_products-->
							<!-- <h2>Brands</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href="http://demo.themeum.com/html/eshopper/blog.html"> <span class="pull-right">(50)</span>Acne</a></li>
									<li><a href="http://demo.themeum.com/html/eshopper/blog.html"> <span class="pull-right">(56)</span>Grüne Erde</a></li>
									<li><a href="http://demo.themeum.com/html/eshopper/blog.html"> <span class="pull-right">(27)</span>Albiro</a></li>
									<li><a href="http://demo.themeum.com/html/eshopper/blog.html"> <span class="pull-right">(32)</span>Ronhill</a></li>
									<li><a href="http://demo.themeum.com/html/eshopper/blog.html"> <span class="pull-right">(5)</span>Oddmolly</a></li>
									<li><a href="http://demo.themeum.com/html/eshopper/blog.html"> <span class="pull-right">(9)</span>Boudestijn</a></li>
									<li><a href="http://demo.themeum.com/html/eshopper/blog.html"> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
								</ul>
							</div> -->
						<!-- </div> --><!--/brands_products-->
						
						<!-- <div class="price-range"> --><!--price-range-->
							<!-- <h2>Price Range</h2>
							<div class="well">
								 <div class="slider slider-horizontal" style="width: 163px;"><div class="slider-track"><div class="slider-selection" style="left: 41.6667%; width: 33.3333%;"></div><div class="slider-handle round left-round" style="left: 41.6667%;"></div><div class="slider-handle round" style="left: 75%;"></div></div><div class="tooltip top" style="top: -30px; left: 62.5833px;"><div class="tooltip-arrow"></div><div class="tooltip-inner">250 : 450</div></div><input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" style=""></div><br>
								 <b>$ 0</b> <b class="pull-right">$ 600</b>
							</div>
						</div> --><!--/price-range-->
						
						<div class="shipping text-center"><!--shipping-->
							<img src="./img/shipping.jpg" alt="">
						</div><!--/shipping-->
					</div>
				</div>
				<div class="col-sm-9">
					<div class="blog-post-area">
						<h2 class="title text-center">Latest From our Blog</h2>
						
						@foreach($product as $pr)
						<div class="single-blog-post">
							<h3>{{$pr -> name}}</h3>
							<div class="post-meta">
								<ul>
									<li><i class="fa fa-user"></i> Mac Doe</li>
									<li><i class="fa fa-calendar"></i> {{$pr -> create_at}}</li>
								</ul>
								<span>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half-o"></i>
								</span>
							</div>
							<a href="#">
								<img src="./img/{{$pr -> image}}"  alt="">
							</a>
							<p>{{$pr -> intro}}</p>
							<a class="btn btn-primary" href="#">Read More</a>
						</div>
						@endforeach
						<br/><br/>
						<div class="row" style="clear: both">
							{{$product ->links()}}
						</div>

						<!-- 
						<div class="single-blog-post">
							<h3>Girls Pink T Shirt arrived in store</h3>
							<div class="post-meta">
								<ul>
									<li><i class="fa fa-user"></i> Mac Doe</li>
									<li><i class="fa fa-clock-o"></i> 1:33 pm</li>
									<li><i class="fa fa-calendar"></i> DEC 5, 2013</li>
								</ul>
								<span>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-half-o"></i>
								</span>
							</div>
							<a href="http://demo.themeum.com/html/eshopper/blog.html">
								<img src="./img/blog-two.jpg" alt="">
							</a>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
							<a class="btn btn-primary" href="http://demo.themeum.com/html/eshopper/blog.html">Read More</a>
						</div>
						<div class="single-blog-post">
							<h3>Girls Pink T Shirt arrived in store</h3>
							<div class="post-meta">
								<ul>
									<li><i class="fa fa-user"></i> Mac Doe</li>
									<li><i class="fa fa-clock-o"></i> 1:33 pm</li>
									<li><i class="fa fa-calendar"></i> DEC 5, 2013</li>
								</ul>
								<span>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-half-o"></i>
								</span>
							</div>
							<a href="http://demo.themeum.com/html/eshopper/blog.html">
								<img src="./img/blog-three.jpg" alt="">
							</a>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
							<a class="btn btn-primary" href="http://demo.themeum.com/html/eshopper/blog.html">Read More</a>
						</div>
						<div class="pagination-area">
							<ul class="pagination">
								<li><a href="http://demo.themeum.com/html/eshopper/blog.html" class="active">1</a></li>
								<li><a href="http://demo.themeum.com/html/eshopper/blog.html">2</a></li>
								<li><a href="http://demo.themeum.com/html/eshopper/blog.html">3</a></li>
								<li><a href="http://demo.themeum.com/html/eshopper/blog.html"><i class="fa fa-angle-double-right"></i></a></li>
							</ul>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection

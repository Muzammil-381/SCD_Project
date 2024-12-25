<x-web-layout>
    <div class="hero-wrap hero-bread" style="background-image: url({{asset('assets/images/bg_6.jpg') }});">
	<!-- url({{asset('assets/images/bg_6.jpg') }}); -->
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Blog</span></p>
            <h1 class="mb-0 bread">Blog</h1>
          </div>
        </div>
      </div>
    </div>

		<section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
            <div class="sidebar-box ftco-animate">
              <h3 CLASS="heading">Your Orders</h3>
              @foreach($orders as $order)
              <div class="block-21 mb-4 d-flex">
                <div class="text">
                  <h3 class="heading-1">Order#{{ $order->id }}</h3>
                  <div class="meta">
                    <div><span class="icon-calendar"></span> {{ $order->product_id }}</div>
                    <div><span class="icon-chat"></span> Price: {{ $order->price}}</a></div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
        </div>
      </div>
    </section> <!-- .section -->
  </x-web-layout>
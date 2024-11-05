<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
    <a href="#" style="margin-right:25px; color:black" class="nav-item"><strong>CART</strong>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
        </svg>
    </a>
        <a class="navbar-brand" href="index.html">Mark-X</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mt-2 mx-5">
                <form class="d-flex" action="##" method="GET" style="max-width: 250px; width: 100%;">
            <input class="form-control me-2 rounded-pill px-2" type="search" placeholder="Search" aria-label="Search" name="query" 
           style="border: 1px solid white; background-color: transparent; color: white; padding-top: 4px; padding-bottom: 4px;">
             <button class="btn btn-primary rounded-pill px-3" type="submit">Go</button>
            </form>
                </li>
                <li class="nav-item active"><a href="/" class="nav-link"><b>Home</b></a></li>
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><b>Shop</b></a>
                    <div class="dropdown-menu" aria-labelledby="dropdown04">
                        <a class="dropdown-item" href="shop.html"><b>Shop</b></a>
                        <a class="dropdown-item" href="product-single.html"><b>Single Product</b></a>
                        <a class="dropdown-item" href="cart.html"><b>Cart</b></a>
                        <a class="dropdown-item" href="checkout.html"><b>Checkout</b></a>
                    </div>
                </li> -->
                <li class="nav-item"><a href="{{route('shop')}}" class="nav-link"><b>Shop</b></a></li>
				<li class="nav-item"><a href="{{route('about')}}" class="nav-link"><b>About</b></a></li>
                <li class="nav-item"><a href="/blog" class="nav-link"><b>Blog</b></a></li>
                <li class="nav-item"><a href="/login" class="nav-link"><b>Login</b></a></li>
                <li class="nav-item"><a href="/register" class="nav-link"><b>Sign-up</b></a></li>
                <!-- <li class="nav-item cta cta-colored"><a href="cart.html" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a></li> -->
            </ul>
        </div>
    </div>
</nav>
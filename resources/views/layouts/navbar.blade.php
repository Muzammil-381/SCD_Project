<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="/">Mark-X</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mt-2 mx-5">
                    <div class="search-container" style="position: relative; max-width: 250px; width: 100%;">
                        <input 
                            type="text" 
                            id="search_input" 
                            class="form-control me-2 rounded-pill px-2" 
                            placeholder="Search" 
                            aria-label="Search" 
                            name="query" 
                            style="border: 1px solid white; background-color: transparent; color: white; padding-top: 4px; padding-bottom: 4px;">
                        <ul id="search-results" class="list-group" style="position: absolute; top: 40px; left: 0; width: 100%; display: none; z-index: 1000; background: white; color: black;">
                            <!-- Matching results will be appended dynamically -->
                        </ul>
                    </div>
                </li>
                <li class="nav-item active"><a href="/" class="nav-link"><b>Home</b></a></li>
                <li class="nav-item"><a href="{{route('shop')}}" class="nav-link"><b>Shop</b></a></li>
                <li class="nav-item"><a href="{{route('about')}}" class="nav-link"><b>About</b></a></li>
                <li class="nav-item"><a href="/blog" class="nav-link"><b>Blog</b></a></li>
                @if(Auth::check())
                <li class="nav-item"><a href="{{ route('orders') }}" class="nav-link"><b>Orders</b></a></li>
                @endif
                <li class="nav-item"><a href="/login" class="nav-link"><b>Login</b></a></li>
                <li class="nav-item"><a href="/register" class="nav-link"><b>Sign-up</b></a></li>
                <li class="nav-item"><button id="cart_btn" class="nav-link"><b>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                    </svg>
                </b></button></li>
            </ul>
        </div>
    </div>
</nav>
<div class="modal fade" id="cart_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="cart_modal_Title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js" integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function () {
        $('#search_input').on('change', function () {
            let query = $(this).val();

            if (query.length > 0) {
                $.ajax({
                    url: "{{ route('search') }}", // Laravel route for search
                    method: "GET",
                    data: { query: query },
                    success: function (data) {
                        console.log(data);
                        let results = '';

                        if (data.length > 0) {
                            data.forEach(item => {
                                results += `
                                    <li class="list-group-item">
                                        <a href="{{ url('/productdetail/${item.id}') }}" style="text-decoration: none; color: black;">
                                            ${item.name}
                                        </a>
                                    </li>
                                `;
                            });
                        } else {
                            results = '<li class="list-group-item">No results found</li>';
                        }

                        $('#search-results').html(results).fadeIn();
                    }
                });
            } else {
                $('#search-results').fadeOut();
            }
        });

        $("#cart_btn").on('click', function(e){
            e.preventDefault();
            $("#cart_modal_Title").modal('show');
        })

        // Hide dropdown when clicking outside
        $(document).on('click', function (e) {
            if (!$(e.target).closest('.search-container').length) {
                $('#search-results').fadeOut();
            }
        });
    });
</script>

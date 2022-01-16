<x-app-layout>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Premier Fresh</title>
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="shortcut icon" href="{{asset('images/app/PF.png')}}" type="image/x-icon">
    </head>
    <body>
        <!-- Navigation Bar -->
        <nav class="navbar navbar-expand-lg fixed-top navbar-fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand ml-4" href="#">
                    <img src="{{asset('images/app/PF.png')}}" style="height: 6vh;" alt="...">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
    
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-2 mr-4">
                        <form class="form-inline my-2 my-lg-0">
                            <button class="btn btn-outline-light my-2 my-sm-0 button-search" type="submit">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="bg-dark" class="bi bi-search" viewBox="0 0 16 16">
                                      <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                </svg>
                              </button>
                              <input class="form-control mr-md-2 mr-5 text-search" type="search" placeholder="Search..." aria-label="Search">
                        </form>
                        <li class="nav-item active border-right">
                            <a class="nav-link px-3 mx-2 home" href="/dashboard">HOME<span class="sr-only">(current)</span></a>
                          </li>
                          <li class="nav-item dropdown border-right">
                            <a class="nav-link px-3 mx-2 dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                                PRODUCTS
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/bacon">BACON</a>
                                  <a class="dropdown-item" href="/ham">HAM</a>
                                  <a class="dropdown-item" href="/sausages">SAUSAGES</a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item" href="/other-products">OTHER PRODUCTS</a>
                            </div>
                        </li>
                          <li class="nav-item border-right">
                            <a class="nav-link px-3 mx-2 recipes" href="#">RECIPES</a>
                          </li>
                          <li class="nav-item border-right">
                            <a class="nav-link px-3 mx-2 about" href="#">ABOUT</a>
                         </li>
                          <li class="nav-item pr-5">
                            <a class="nav-link px-3 mx-2 mr-5 contact" href="#">CONTACT</a>
                          </li>
                          <li class="nav-item pl-lg-5 px-2 ml-1 dropdown border-right">
                            <a class="nav-link" href="{{ route('cart') }}"role="button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="text-dark" class="bi bi-cart4" viewBox="0 0 16 16">
                                    <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                                </svg>
                            </a>
                        </li>

                        <li class="nav-item px-2 dropdown">
                            <a class="nav-link" href="manageprofile.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->name}}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                
                                    <x-jet-responsive-nav-link href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-jet-responsive-nav-link>
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navigation Bar -->

        <!-- Other Pork Products -->
        <div class="container-fluid mt-5 my-5 py-5 title-product text-center">
            <h1 class="container mt-1">OTHER PORK PRODUCTS</h1>
            <div class="row py-5 mx-0 text-center">
                @foreach ($others as $other)
                <div class="col">
                    <div class="card mt-3">
                        <img src="/storage/images/{{$other->product_image}}" class="card-img-top imagesizes" alt="...">
                        <div class="card-body">
                            <p class="card-title mb-2 h6 text-dark" style="font-size: 0.9rem;">{{$other->product_name}}</p>
                            <div class="row mb-1">
                                <div class="col text-dark">
                                    <p class="card-text mb-0">&#8369; {{$other->product_price}}</p>
                                </div>  
                            </div>          
                            <a class="btn btn-outline-light btn-cart text-light" style="background-color: #000000;" href="{{ route('add.to.cart', $other->product_id) }}">ADD TO CART</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- End of Other Pork Products -->
    
        <!-- Footer -->
        <div class="container-fluid text-label" style="background-color: black;">
            <footer class="container py-5 text-left" style="background-color: black;">
                <div class="row" style="background-color: black;">
                    <div class="col-12 col-md">
                        <img src="{{asset('images/app/PF.png')}}" style="height: 14vh;" alt="...">
                          <small class="d-block mb-3 text-light footer-link">Delivers 100% humanely raised pork directly to you.</small>
                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" class="bi bi-facebook footer-link" viewBox="0 0 16 16">
                              <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                        </svg> &emsp;
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" class="bi bi-google footer-link" viewBox="0 0 16 16">
                              <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"/>
                        </svg> &emsp;
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" class="bi bi-twitter footer-link" viewBox="0 0 16 16">
                              <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                        </svg> &emsp;
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" class="bi bi-instagram footer-link" viewBox="0 0 16 16">
                              <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                        </svg>
                    </div> 
                    <div class="col-6 col-md">
                        <h5 class="text-light footer-link">BACON</h5>
                        <ul class="list-unstyled text-small">
                            <li><a class="text-light footer-link" href="#">American Premium Bacon</a></li>
                            <li><a class="text-light footer-link" href="#">Bacon Bits</a></li>
                            <li><a class="text-light footer-link" href="#">Bacon Chips</a></li>
                            <li><a class="text-light footer-link" href="#">Bacon Honeycured</a></li>
                            <li><a class="text-light footer-link" href="#">Bacon Regular</a></li>
                          </ul>
                    </div>
                    <div class="col-6 col-md">
                        <h5 class="text-light footer-link">HAM</h5>
                        <ul class="list-unstyled text-small">
                            <li><a class="text-light footer-link" href="#">Cooked Ham</a></li>
                            <li><a class="text-light footer-link" href="#">Luncheon Meat</a></li>
                          </ul>
                    </div>
                    <div class="col-6 col-md">
                          <h5 class="text-light footer-link">PORK</h5>
                          <ul class="list-unstyled text-small">
                            <li><a class="text-light footer-link" href="#">Pork BBQ Tapa</a></li>
                            <li><a class="text-light footer-link" href="#">Pork Sisig</a></li>
                            <li><a class="text-light footer-link" href="#">Pork Tocino</a></li>
                          </ul>
                    </div>
                    <div class="col-6 col-md">
                          <h5 class="text-light footer-link">SAUSAGE</h5>
                          <ul class="list-unstyled text-small">
                            <li><a class="text-light footer-link" href="#">Chorizo</a></li>
                            <li><a class="text-light footer-link" href="#">Longanisa</a></li>
                            <li><a class="text-light footer-link" href="#">Hamonada</a></li>
                          </ul>
                    </div>
                    <div class="col-6 col-md">
                          <h5 class="text-light footer-link">ABOUT</h5>
                          <ul class="list-unstyled text-small">
                            <li><a class="text-light footer-link" href="#">Team</a></li>
                            <li><a class="text-light footer-link" href="#">Locations</a></li>
                            <li><a class="text-light footer-link" href="#">Privacy</a></li>
                            <li><a class="text-light footer-link" href="#">Terms</a></li>
                          </ul>
                    </div>
                </div>
            </footer>
            <hr class="container px-0 horizontal-line">
            <div class="container text-label" style="background-color: black;">
                <div class="row" style="background-color: black;">
                    <div class="col-12">
                          <small class="d-block mb-3 text-light footer-link text-right">&copy; All Rights Reserved 2022</small>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Footer -->
    
        <!-- Back to Top -->
        <a href="#" id="toTopBtn" class="cd-top text-replace js-cd-top cd-top--is-visible cd-top--fade-out" data-abc="true" style="opacity: 0.7;"></a>
        <!-- Back to Top -->
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
        <script type="text/javascript">
            $(function () {
              $(document).scroll(function () {
                var $nav = $(".navbar-fixed-top");
                $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
              });
            });
        </script>
    </body>
    </html>
    
</x-app-layout>
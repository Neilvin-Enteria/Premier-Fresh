@extends('recipes.layout')

@section('nav')
{   <!-- Navigation Bar -->
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
                        <a class="nav-link px-3 mx-2 home" href="#">HOME<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown border-right">
                        <a class="nav-link px-3 mx-2 dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                            PRODUCTS
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">BACON</a>
                                <a class="dropdown-item" href="#">HAM</a>
                                <a class="dropdown-item" href="#">SAUSAGES</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">OTHER PRODUCTS</a>
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
                        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
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
    <!-- End Navigation Bar -->}
@endsection
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PF Admin</title>

    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
</head>

<body>    
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
    </nav>


    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item nav-profile">
                    <a href="#" class="nav-link">
                        <div class="nav-profile-text d-flex flex-column">
                            <span class="font-weight-bold mb-2">Neilvin Enteria</span>
                            <span class="text-secondary text-small">Admin</span>
                        </div>
                    </a>
                </li>
            </ul>
        </nav>


        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="page-header">
                    <h3 class="page-title">
                        <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> Dashboard
                    </h3>

                </div>
                <div class="row">

                    <div class="col-md-4 stretch-card grid-margin">
                        <div class="card bg-gradient-info card-img-holder text-white">
                            <div class="card-body">
                                <img src="{{asset('images/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image" />
                                <h4 class="font-weight-normal mb-3">Number of Products <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                                </h4>
                                <h2 class="mb-5">{{count($products)}}</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 stretch-card grid-margin">
                        <div class="card bg-gradient-success card-img-holder text-white">
                            <div class="card-body">
                                <img src="{{asset('images/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image" />
                                <h4 class="font-weight-normal mb-3">Number of Users <i class="mdi mdi-diamond mdi-24px float-right"></i>
                                </h4>
                                <h2 class="mb-5">{{count($users)}}</h2>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- content-wrapper ends -->

            {{-- Products --}}
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Registered Customers</h4>
                            </p>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th> ID </th>
                                        <th> Name </th>
                                        <th> Email </th>
                                        <th> Google ID </th>
                                        <th colspan="2"> Actions </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->google_id}}</td>
                                        <td>
                                            <form action="{{ route('user.delete', $user->id) }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                    <button type="submit" class="btn btn-outline-danger">Delete</button>
                                            </form>
                                    </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>

            {{-- Users --}}
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Products on Sale</h4>
                            </p>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th> ID </th>
                                        <th> Image </th>
                                        <th> Name </th>
                                        <th> Price </th>
                                        <th> Type </th>
                                        <th>Stock</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                            <td>{{$product->product_id}}</td>
                                            <td><img src="/storage/images/{{$product->product_image}}"></td>
                                            <td>{{$product->product_name}}</td>
                                            <td>{{$product->product_price}}</td>
                                            <td>{{$product->product_type}}</td>
                                            <td>{{$product->product_stock}}</td>
                                            <td>{{$product->product_description}}</td>
                                            <td>
                                                <a href="" class="btn btn-lg btn-outline-primary">Edit</a>
                                                <form action="{{route('products.destroy', $product->product_id)}}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-md btn-outline-danger">Delete</button>
                                                </form>
                                                
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>


        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>

    <script src="{{asset('js/app.js')}}"></script>

    <script>
        (function($) {
        'use strict';
        //Open submenu on hover in compact sidebar mode and horizontal menu mode
        $(document).on('mouseenter mouseleave', '.sidebar .nav-item', function(ev) {
            var body = $('body');
            var sidebarIconOnly = body.hasClass("sidebar-icon-only");
            var sidebarFixed = body.hasClass("sidebar-fixed");
            if (!('ontouchstart' in document.documentElement)) {
            if (sidebarIconOnly) {
                if (sidebarFixed) {
                if (ev.type === 'mouseenter') {
                    body.removeClass('sidebar-icon-only');
                }
                } else {
                var $menuItem = $(this);
                if (ev.type === 'mouseenter') {
                    $menuItem.addClass('hover-open')
                } else {
                    $menuItem.removeClass('hover-open')
                }
                }
            }
            }
        });
        $('.aside-toggler').click(function(){
            $('.chat-list-wrapper').toggleClass('slide')
        });
        })(jQuery);
    </script>

</body>

</html>
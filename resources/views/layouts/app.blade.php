<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WoHMS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link href="font-awesome-4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

    @livewireStyles
    <style>

      </style>
  </head>
  <body>
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="object_one"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_three"></div>
                <div class="object" id="object_four"></div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="col">
                <div class="row-6">
                    <div class="fullscreen-div">

                        @include('layouts.nav')
                        <div class="sidebar">
                            <button class="toggle-btn" onclick="toggleSidebar()">
                                <i class="fas fa-bars"><span class="toggle-label">   WHOMS</span></i>
                            </button>
                            <div class="profile text-bg-success  w-100 p-3 ">

                            <div class="profile-info">

                                <div class="user-details row">

                                    <div class="col">
                                        <div class="row d-flex justify-content-around">
                                            <img src="https://eforms.zesco.co.zm/storage/user_avatar/avatar5_1686906051.png" alt="User Avatar" class="avatar text-bg-success  ">
                                            <span class="username d-flex justify-content-around">User 1</span>
                                            <span class="user-role d-flex justify-content-around">Administrator</span>
                                        </div>


                                    </div>
                                    <div class="col d-flex justify-content-around ">
                                        <span><i class="fas fa-cog mt-3"></i></span>
                                        <span><i class="fas fa-user mt-3"></i></span>
                                        <span><i class="fas fa-sign-out-alt mt-3"></i></span>
                                    </div>


                                </div>
                            </div>
                            </div>


                            <ul class="menu">
                            <li><a href="{{route("dashboard")}}"><i class="fas fa-chart-line"></i><span class="menu-label">Dashboard</span></a></li>
                            <li><a href="{{route("index")}}"><i class="fas fa-file-invoice"></i><span class="menu-label">Invoices</span></a></li>
                            <li><a href="{{route("rejected")}}"><i class="fas fa-times-circle"></i><span class="menu-label">Rejected Invoices</span></a></li>
                            <li><a href="{{route("invoice")}}"><i class="fas fa-check-circle"></i><span class="menu-label">Submit Invoice</span></a></li>
                            <li><a href="{{route("report")}}"><i class="fas fa-file-alt"></i><span class="menu-label">Reports</span></a></li>
                            <li><a href="{{route("search")}}"><i class="fas fa-search"></i><span class="menu-label">Search</span></a></li>
                            <li class="dropdown">
                                <a href="#"><i class="fas fa-search"></i><span class="menu-label">Config</span></a></a>
                                <!--Start of Dropdown-->
                                <ul class="dropdown-nav">
                                    <li><a href="{{route("hospitals")}}">Hospitals</a></li>
                                    <li><a href="{{route("hospitals")}}">Hospital Types</a></li>
                                    <li><a href="{{route("employees")}}">Employees </a></li>


                                </ul>
                            </li>
                            </ul>
                        </div>




                            {{ $slot }}


                    </div>
                </div>
            <div class="row">

                @include('layouts.footer')
            </div>
        </div>
    </div>








    <script src="{{asset('js/app.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    @livewireScripts
  </body>
</html>


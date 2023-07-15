@extends('layout.app3')
@section('title,profilekoor')
@section('content')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <title>Document</title>
    <style>
        body {
          font-family: Arial, sans-serif;
          background-color: #f4f4f4;
          margin: 0;
          padding: 0;
        }
    
        .profile-container {
          max-width: 600px;
          margin: 0 auto;
          background-color: #fff;
          padding: 20px;
          border-radius: 5px;
          box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
    
        .profile-picture {
          width: 150px;
          height: 150px;
          border-radius: 50%;
          margin-bottom: 20px;
          background-size: cover;
        }
    
        .profile-name {
          font-size: 24px;
          font-weight: bold;
          margin-bottom: 10px;
        }
    
        .profile-description {
          font-size: 16px;
          color: #888;
          margin-bottom: 20px;
        }
    
        .profile-contact {
          font-size: 16px;
        }
    
        .profile-contact-item {
          margin-bottom: 10px;
        }
    
        .profile-contact-item .label {
          font-weight: bold;
        }
      </style>
</head>
<body>
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
    
    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <!-- Main-body start -->
            <div class="main-body">
                <div class="page-wrapper">
                    <!-- Page-header start -->
                    {{-- <div class="page-header card">
                        <div class="row align-items-end">
                            <div class="col-lg-8">
                                <div class="page-header-title">
                                    <i class="icofont icofont-table bg-c-blue"></i>
                                    <div class="d-inline">
                                        <h4>Tables</h4>
                                        <span>please add edit and delete!</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="page-header-breadcrumb">
                                   <ul class="breadcrumb-title">
                                    <li class="breadcrumb-item">
                                        <a href="index.html">
                                            <i class="icofont icofont-home"></i>
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#!">Table</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#!">Table</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <!-- Page-header end -->
                
                <!-- Page-body start -->
                <div class="page-body">
                    <!-- Basic table card start -->
                    <!-- Basic table card end -->
                    <!-- Inverse table card start -->
                    <!-- Inverse table card end -->
                    <!-- Hover table card start -->
                    <div class="profile-container">
                        <img class="profile-picture" src="{{ Auth()->user()->profile_photo_url }}" alt="Profile Picture">
                       <a href="/editguru"><i class="fa-solid fa-pen-to-square" style="position:absolute;left:74%;font-size:150%;top:15%"></i></a> 
          
                       <h1 class="profile-name"> {{Auth::user()->name}}</h1>
                       <p class="profile-description">{{Auth::user()->role}}</p>
                       <div class="profile-contact">
                        <div class="profile-contact-item">
                          <span>Nama:</span>  {{Auth::user()->name}}
                        </div>
                         <div class="profile-contact-item">
                           <span>Email:</span>  {{Auth::user()->email}}
                         </div>
                         {{-- <div class="profile-contact-item">
                           <span>Phone:</span> {{Auth::user()->phone}}
                         </div> --}}
                         {{-- <div class="profile-contact-item">
                           <span>Password:</span>  {{Auth::user()->password}}
                         </div> --}}
          
                        </div>
                      </div>
                    <!-- Hover table card end -->
                    <!-- Contextual classes table starts -->
                    <!-- Contextual classes table ends -->
                    <!-- Background Utilities table start -->
                    <!-- Background Utilities table end -->
                </div>
                <!-- Page-body end -->
            </div>
        </div>
        <!-- Main-body end -->
    
        <div id="styleSelector">
    
        </div>
    </div>
    </div>
        </div>
    </div>
</body>
</html>

@endsection
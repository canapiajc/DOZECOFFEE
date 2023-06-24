<!DOCTYPE html>
<html>
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Doze Cafe</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
                 <!-- SWEETALERT GUYS css -->
                 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" integrity="sha512-gOQQLjHRpD3/SEOtalVq50iDn4opLVup2TF8c4QPI3/NmUPNZOk2FG0ihi8oCU/qYEsw4P6nuEZT2lAG0UNYaw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- font css -->
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
   </head>
   <body>
      <div class="header_section header_bg">
         <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <a class="navbar-brand"href="index.html"><img src="images/logo.png"></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                        <a class="nav-link" href="redirect">Home</a>
                     </li>
                     <li class="nav-item ">
                        <a class="nav-link" href="about">About</a>
                     </li>
                     <li class="nav-item active">
                        <a class="nav-link" href="coffees">Coffees</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="shop">Shop</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="blog">Blog</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="contact">Contact</a>
                     </li>
                  </ul>
                  <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
               <a class="nav-link" href="{{url('showcart')}}">
                        <i class='fa fa-shopping-cart'>CART[{{$count}}]</i>
                    
                        </a>
                     </li>
                     <a class="nav-link" href="{{url('myorder')}}">
                      
                        <i class='fa fa-shopping-bag'>MyOrder[{{$counts}}]</i>
                        </a>
                     </li>
                        <!-- Authentication Links -->
                        <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                     
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                    </ul>
               </div>
            </nav>
         </div>
      <!-- header section end -->
      <!-- coffee section start -->
      <div class="coffee_section layout_padding">
         <div class="container">
            <div class="row">
               <h1 class="coffee_taital">OUR Coffee OFFER</h1>
               <div class="bulit_icon"><img src="images/bulit-icon.png"></div>
            </div>
         </div>
         <div class="coffee_section_2">
            <div id="main_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container-fluid">
                        <div class="row">
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><img src="images/img-1.png"></div>
                              
                              <h3 class="types_text">CAPPUCCINO</h3>
                            
                              <div class="read_bt"><a href="#">Read More</a></div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><img src="images/img-2.png"></div>
                              <h3 class="types_text">FLAT WHITE</h3>
                    
                              <div class="read_bt"><a href="#">Read More</a></div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><img src="images/img-3.png"></div>
                              <h3 class="types_text">AMERICANO</h3>
                             
                              <div class="read_bt"><a href="#">Read More</a></div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><img src="images/img-4.png"></div>
                              <h3 class="types_text">LONG MACCHIATO</h3>
                              <div class="read_bt"><a href="#">Read More</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container-fluid">
                        <div class="row">
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><img src="images/img-1.png"></div>
                              <h3 class="types_text">TYPES OF COFFEE</h3>
                              <p class="looking_text">looking at its layout. The point of</p>
                              <div class="read_bt"><a href="#">Read More</a></div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><img src="images/img-2.png"></div>
                              <h3 class="types_text">BEAN VARIETIES</h3>
                              <p class="looking_text">looking at its layout. The point of</p>
                              <div class="read_bt"><a href="#">Read More</a></div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><img src="images/img-3.png"></div>
                              <h3 class="types_text">COFFEE & PASTRY</h3>
                              <p class="looking_text">looking at its layout. The point of</p>
                              <div class="read_bt"><a href="#">Read More</a></div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><img src="images/img-4.png"></div>
                              <h3 class="types_text">COFFEE TO GO</h3>
                              <p class="looking_text">looking at its layout. The point of</p>
                              <div class="read_bt"><a href="#">Read More</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container-fluid">
                        <div class="row">
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><img src="images/img-1.png"></div>
                              <h3 class="types_text">TYPES OF COFFEE</h3>
                              <p class="looking_text">looking at its layout. The point of</p>
                              <div class="read_bt"><a href="#">Read More</a></div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><img src="images/img-2.png"></div>
                              <h3 class="types_text">BEAN VARIETIES</h3>
                              <p class="looking_text">looking at its layout. The point of</p>
                              <div class="read_bt"><a href="#">Read More</a></div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><img src="images/img-3.png"></div>
                              <h3 class="types_text">COFFEE & PASTRY</h3>
                              <p class="looking_text">looking at its layout. The point of</p>
                              <div class="read_bt"><a href="#">Read More</a></div>
                           </div>
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><img src="images/img-4.png"></div>
                              <h3 class="types_text">COFFEE TO GO</h3>
                              <p class="looking_text">looking at its layout. The point of</p>
                              <div class="read_bt"><a href="#">Read More</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
               <i class="fa fa-arrow-left"></i>
               </a>
               <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
               <i class="fa fa-arrow-right"></i>
               </a>
            </div>
         </div>
      </div>
      <!-- coffee section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
               <h1 class="address_text">Address</h1>
                  <p class="footer_text">F.R HIDALGO STREET QUIAPO MANILA</p>
                  <div class="location_text">
                     <ul>
                        <li>
                           <a href="#">
                           <i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left_10">+63975123533</span>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           <i class="fa fa-envelope" aria-hidden="true"></i><span class="padding_left_10">DozeCafe@gmail.com</span>
                           </a>
                        </li>
                     </ul>
                  </div>
                  <div class="form-group">
                     <textarea class="update_mail" placeholder="Your Email" rows="5" id="comment" name="Your Email"></textarea>
                     <div class="subscribe_bt"><a href="#"><img src="images/teligram-icon.png"></a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 col-sm-12">
                  <p class="copyright_text">2023 All Rights Reserved. Doze Cafe </p>
               </div>
               <div class="col-lg-6 col-sm-12">
                  <div class="footer_social_icon">
                     <ul>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
	  <script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{ asset('assets/js/jquery-3.7.0.min.js')}}"></script>
   </body>
</html>
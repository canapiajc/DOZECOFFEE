
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
      <div class="header_section">
         <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <a class="navbar-brand"href="index.html"><img src="images/logo.png"></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item ">
                        <a class="nav-link" href="redirect">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="about">About</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="coffees">Coffees</a>
                     </li>
                     <li class="nav-item active" >
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
                   
                     </li>
                     <a class="nav-link" href="{{url('myorder')}}">
                      
                      <i class='fa fa-shopping-bag'>MyOrder[{{$counts}}]</i>
                      </a>
                     
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
         @include('sweetalert::alert')
		 <div class="card">
	<!-- product -->
	<h3 class="card-header">
    Product(s)
  </h3>
  <div class="pv-5">
  <div class="container">
		<div class="row">
      @foreach($data as $product)
				<div class="col-md-3 mt-3">
               <div class="card">
						<img height="50px" width="500 px" src="/productimage/{{$product->image}}" alt="Product Image"> 
                  <div class="card-body">
                     <h2>  {{ $product->title}} </h2>
                     <h4>  Price: {{ $product->price}} </h4>
                     <h5>  Description: {{ $product->description}} </h5>
                     <form action="{{url('addcart',$product->id)}}" method="POST">
                                    @csrf
						<input type="number" value="1" value="1" style="width:100px" name="quantity"></input>
						<input type="submit" class="btn btn-success" value="ADD CART"></input>
							
		
						</form>
                  </div>
				   </div>
            </div>
	
	@endforeach      
	
   <!--  SCRIPT FOR SWEETALERT MWA!!! -->
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
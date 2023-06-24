
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
                     <li class="nav-item active">
                        <a class="nav-link" href="redirect">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="about">About</a>
                     </li>
                     <li class="nav-item">
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
                 
                     </li>
                     <a class="nav-link" href="{{url('showcart')}}">
                        <i class='fa fa-shopping-cart'>CART[{{$count}}]</i>
                     </li>
                     <a class="nav-link" href="{{url('myorder')}}">
                      
                        <i class='	fas fa-shopping-bag'>MyOrder[{{$counts}}]</i>
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
         
         <div class="card">
  <h3 class="card-header">
    My ORDER(s)
  </h3>
  
  @if(Session::has('message'))
                   
                   <div class="alert alert-success">
                   <button type="button" class="close"   data-dismiss="alert">x</button>
                   {{Session::get('message')}}
          
                   </div>
               @endif
  <div class="card-body">
  <table class="table">
  
  <thead>
    <tr>   
                        <th scope="col">Product</th>    
                        <th scope="col">Quantity</th>           
                        <th scope="col">Price</th>   
                        <th scope="col">Total</th>
                        <th scope="col">Status</th>   
                        <th scope="col">Date</th>   
    </tr>
    <form action="{{url('order')}}" method="post" enctype="multipart/form-data">
    @csrf   
    @php $total = 0; @endphp
    @foreach($order as $orders)

                    <tbody>
                    <tr>
                    
                    <td>{{$orders->product_name}}</td>
                    <td>{{$orders->quantity}}</td>
                    <td>{{$orders->price}}</td>
                    <td>{{$orders->total}}</td>
                    <td>{{$orders->status}}</td>
                    <td>{{$orders->created_at}}</td>
                
                    </tr>
                    @php $total +=  (int)$orders->quantity * (int)$orders->price ; @endphp
                    <tbody>
               
                 
 
  
                    </div>
                
                    </form>  
                    @endforeach 
  </thead>
  <div class="card-footer">

  <!-- <p style="text-align:center" >
    <a  class="fas fa-ship" href="http//www.google.com">TO SHIP[{{$countss}}]</a> 
    <a class="fas fa-heart" href="Contact Us">TO RECEIVE[{{$counts}}]</a>
    <a class="fas fa-bookmark" href="Contact Us">HISTORY[{{$counts}}]</a>
    
</p> -->
 
 <script>
 
 </script>
  </div>
</div>
    <div>


   
                    
    @if ($errors->any())
                    <div class="alert alert-warning">
                        @foreach ($errors->all() as $error)
                            <div>{{$error}}</div>
                        @endforeach
                    </div>
                    @endif
           
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script>    
      function ConfirmDelete()
    {
      return confirm("Are you sure you want to Cancel All?");
      alert($tt);
    
    }
    function ConfirmCancel()
    {
      return confirm("Are you sure you want to Cancel All?");
    }
</script>   



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
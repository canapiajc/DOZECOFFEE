
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
                  <li class="nav-item">
               <a class="nav-link" href="{{url('showcart')}}">
                        <i class='fa fa-shopping-cart'>CART[{{$count}}]</i>
                     </li>
                     <a class="nav-link" href="{{url('myorder')}}">
                      
                        <i class='fa fa-shopping-cart'>MyOrder[{{$counts}}]</i>
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
 

<!-- Modal -->

         <div class="card">
  <h3 class="card-header">
    My Cart(s)
  </h3>
  
@include('sweetalert::alert')
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

      <th scope="col">Product Name</th>
      <th scope="col">Product Image</th>
      <th scope="col">Quantity</th>
      <th scope="col">PRICE</th>
      <th scope="col">ACTION</th>
   
    </tr>
   
    <tbody>

    
    <a class="btn btn-success"   style="margin-right: 10px;"  data-toggle="modal" data-target="#exampleModalLong">PROCEED TO CHECK OUT</a>
                    <a type="button" href="{{url('cancel')}}" class="btn btn-danger" Onclick="return ConfirmCancel();" >CANCEL
                    </a>
    <form action="{{url('order')}}" method="post" enctype="multipart/form-data">
    @csrf   
    @php $total = 0; @endphp
    @foreach ($cart as $carts)
    <tr>
      <td style="padding:10px; font-size: 20px;"> {{$carts->product_title}}
      <input type="text" name="productname[]" value=" {{$carts->product_title}}" hidden > 
      </td>
      <td>  
      <img height="50px" width="50 px"src="/productimage/{{$carts->image}}" >
      </td>

      <td>
<!--   <div class="mt-2">
      <div class="input-group">
<button class="btn btn1" wire:click="decrementQuantity"> <i class="fa fa-minus"> </i> </button>
<input type="text" wire:model="quantityCount " value="{{$carts->quantityCount}}" class="input-quantity">
<button class="btn btn1" wire:click="incrementQuantity "> <i class="fa fa-plus"> </i> </button>
        </div>
       </div> -->
      <input type="text" name="quantity[]" value="({{$carts->quantity}})" hidden>
      ({{$carts->quantity}})
      </td>
      <td>
      <input type="text" name="price[]" value="  ₱{{$carts->price}}"hidden>
      ₱{{$carts->price}}
      </td>
  
    
      <td><a type="button"  class="btn btn-danger" Onclick="confirmation(event);" href="{{url('delete',$carts->id)}}">Remove</a></td>
    </tr>
    @php $total +=  $carts->quantity * $carts->price ; @endphp
    <input type="text" name="total[]" value="₱{{$total}}" hidden > 

    </tbody>
    
                    </div>
                    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">INFORMATION!</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{url('order')}}" method="post" enctype="multipart/form-data">
  <div class="form-row align-items-center">
    <div class="col-auto">
    <label>Name:</label>
      <input type="text" class="form-control mb-2" id="inlineFormInput" value="{{$carts->name}}">
    </div>
    <div class="col-auto">
    <label>Address:</label>
      <input type="text" class="form-control mb-2" id="inlineFormInput" value="{{$carts->address}}">
    </div>
    <div class="col-auto">
    <label>Phone Number</label>
      <input type="text" class="form-control mb-2" id="inlineFormInput" value="{{$carts->phone}}">
    </div>
    <div class="col-auto">
    <label>Baranggay</label>
      <input type="text" name="brgy[]" class="form-control mb-2" id="inlineFormInput" value=""required>
    </div>
    <div class="col-auto">
    <label>Zip Code</label>
      <input type="text" name="zip[]" class="form-control mb-2" id="inlineFormInput" value=""required>
    </div>
    <div class="col-auto">
      <label>Total Price</label>
      <input type="text" class="form-control mb-2" id="inlineFormInput" value="{{$total}}">
      </div>
      <div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
  <label class="form-check-label" for="exampleRadios1">
    Cash On Delivery
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
  <label class="form-check-label" for="exampleRadios1">
    Gcash Payment
  </label>
  
</div>


    </div>
  
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success" >Check Out!</button>
      </div>
   
    @endforeach
   
  </div>
  
</form>
      </div>
      
    </div>
  </div>
</div>
                    </form>   
  </thead>
  <div class="card-footer">
  <h4> Total Price: ₱{{$total}} </h4>
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
      function trybo(){
 swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this imaginary file!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    swal("Poof! Your imaginary file has been deleted!", {
      icon: "success",
    });
  } else {
    swal("Your imaginary file is safe!");
  }
});
      }


      
      function confirmation(ev) {
        ev.preventDefault();
        var urlToRedirect = ev.currentTarget.getAttribute('href');  
        console.log(urlToRedirect); 
        swal({
          title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this imaginary file!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
        })
        .then((willCancel) => {
            if (willCancel) {
              
  window.location.href = urlToRedirect;
               
            }  


        });

        
    }
</script>
@if(Session::has('message'))
<script> 

swal("YEY!!","{{Session::get('message')}}",'success',{
  button:"okay"
});
</script>
@endif
 <!--  SCRIPT FOR SWEETALERT MWA!!! -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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
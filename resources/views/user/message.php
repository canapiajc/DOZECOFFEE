<?php 
if(isset($_SESSION['message'])) :
?>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Hey!</strong> <?= $_SESSION['message']; ?>
    <button type="close" class="btn-close" data-bs-dismiss="alert" aria-label="Close">x</button>
</div>
<?php 
unset($_SESSION['message']);
endif;
?>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 <?php
  if(isset($_SESSION['messages']))
  {
  ?>
   <script>
      swal({
     title: "<?php echo $_SESSION['messages'];?>",
     icon: "<?php echo $_SESSION['messages1'];?>",
     button: "Close",
        });
    </script> 
    <?php
    unset($_SESSION['messages']);
  }
    ?>
    <?php



  if(isset($_SESSION['delete']))
  {
  ?>
   <script>
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
    </script> 
    <?php
    unset($_SESSION['delete']);
  }
    ?>
 

<!DOCTYPE html>
<html lang="en">
  <head>
  <meta name="csrf-token" content="SbgBYp8VHB9dD0gcABbRCPK1IgTIlPd3pIddZHmb">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <link rel="icon" href="http://127.0.0.1:8000/assets/images/favicon.png" type="image/x-icon">
    
    <link rel="shortcut icon" href="http://127.0.0.1:8000/assets/images/favicon.png" type="image/x-icon">
    <title>Shaheen Group of Companies</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="../../css2.css?family=Montserrat:wght@200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
    

    
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/assets/css/font-awesome.css">
    
    <!-- Themify icon-->
   
    <link rel="stylesheet" type="text/css" href=" http://127.0.0.1:8000/assets/css/vendors/themify.css">
    <!-- Feather icon-->
    
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/assets/css/vendors/feather-icon.css&quot;">
   
    <link rel="stylesheet" type="text/css" href=" http://127.0.0.1:8000/assets/css/vendors/scrollbar.css">
   
    <link rel="stylesheet" type="text/css" href=" http://127.0.0.1:8000/assets/css/vendors/js-datatables/style.css">
    
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/assets/css/vendors/animate.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/assets/css/vendors/bootstrap.css">
    <!-- App css-->
    
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/assets/css/style.css">
    
    <!-- Responsive css-->
   
    <link rel="stylesheet" type="text/css" href=" http://127.0.0.1:8000/assets/css/responsive.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
  </head>
  <body> 
 

  <!-- loader starts-->
    
    <!-- loader ends-->
    <!-- tap on top starts-->
    <div class="tap-top"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-up"><polyline points="17 11 12 6 7 11"></polyline><polyline points="17 18 12 13 7 18"></polyline></svg></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper">
      <div class="container-fluid p-0">
        <div class="row">
          <div class="col-12">     
            <div class="login-card login-dark">
              <div>
                <div>
                    <a class="logo" href="index.html">
                        <img class="img-fluid for-light w-75" src="../assets/images/logo/logo.png" alt="looginpage">
                    </a>
                </div>
                <div class="login-main"> 
                 


      <form method="POST" action="{{ route('password.update') }}"  class="theme-form">
                        @csrf

    <input type="hidden" name="token" value="{{ request()->token }}">
                    <h4>Reset Your Password</h4>
                    
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                    
                    <h6 class="mt-4">Create Your Password</h6>

                    <div class="form-group">
                      <label class="col-form-label">email</label>
                      <div class="form-input position-relative">
                        <input class="form-control" type="email" name="email" required="" placeholder="*********">
                        
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-form-label">New Password</label>
                      <div class="form-input position-relative">
                        <input class="form-control" type="password" name="password" required="" placeholder="*********">
                        
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-form-label">Retype Password</label>
                      <input class="form-control" type="password" name="password_confirmation" required="" placeholder="*********">
                    </div>
                    <div class="form-group mb-0">
                      <div class="checkbox p-0">
                      
                      </div>
                      <button class="btn btn-primary btn-block w-100" type="submit">Reset Password                          </button>
                    </div>
                    
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src=" http://127.0.0.1:8000/assets/js/jquery.min.js"></script>
  <!-- Bootstrap js-->
  
  <script src="http://127.0.0.1:8000/assets/js/bootstrap/bootstrap.bundle.min.js"></script>
  <!-- feather icon js-->
  
  <script src="http://127.0.0.1:8000/assets/js/icons/feather-icon/feather.min.js"></script>
  
  <script src="http://127.0.0.1:8000/assets/js/icons/feather-icon/feather-icon.js"></script>
  <!-- scrollbar js-->
  
  <script src="http://127.0.0.1:8000/assets/js/scrollbar/simplebar.js"></script>
  
  <script src="http://127.0.0.1:8000/assets/js/scrollbar/custom.js"></script>
  
  <!-- Sidebar jquery-->
  <script src="http://127.0.0.1:8000/assets/js/config.js"></script>
  
  <!-- Plugins JS start-->
  <script src="http://127.0.0.1:8000/assets/js/sidebar-menu.js"></script>
 
 
  <script src=" http://127.0.0.1:8000/assets/js/sidebar-pin.js"></script>
 
  <script src=" http://127.0.0.1:8000/assets/js/header-slick.js"></script>
  
  <script src="http://127.0.0.1:8000/assets/js/chart/apex-chart/apex-chart.js"></script>
  <!-- calendar js-->
  
  <script src="http://127.0.0.1:8000/assets/js/dashboard/default.js"></script>
  
  <script src="http://127.0.0.1:8000/assets/js/custom-list-product.js"></script>
  
  <!-- Plugins JS Ends-->
  <!-- Theme js-->
 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <script src=" http://127.0.0.1:8000/assets/js/script.js"></script>
  <script>new WOW().init();</script>
  
  
 
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
  <script>
    document.getElementById('delete-button').addEventListener('click', function(e) {
        e.preventDefault(); // Prevent the default button action

        const url = this.getAttribute('data-url');

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                // Perform the action if confirmed
                fetch(url, {
                    method: 'GET',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    }
                }).then(response => {
                    if (response.ok) {
                        Swal.fire(
                            'Deleted!',
                            'Your item has been deleted.',
                            'success'
                        );
                        // Optionally, redirect or reload the page
                        window.location.reload();
                    } else {
                        Swal.fire(
                            'Error!',
                            'There was a problem deleting the item.',
                            'error'
                        );
                    }
                }).catch(error => {
                    Swal.fire(
                        'Error!',
                        'There was a problem deleting the item.',
                        'error'
                    );
                });
            }
        });
    });
</script>


<script>
  $(document).ready(function() {
        });
</script>

<script>
  $(document).ready( function() {
    $(document).on('change', '.btn-file :file', function() {
  var input = $(this),
    label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
  input.trigger('fileselect', [label]);
  });

  $('.btn-file :file').on('fileselect', function(event, label) {
      
      var input = $(this).parents('.input-group').find(':text'),
          log = label;
      
      if( input.length ) {
          input.val(log);
      } else {
          if( log ) alert(log);
      }
    
  });
  function readURL(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          
          reader.onload = function (e) {
              $('#img-upload').attr('src', e.target.result);
          }
          
          reader.readAsDataURL(input.files[0]);
      }
  }

  $("#imgInp").change(function(){
      readURL(this);
  }); 	
});
</script>
</body>
</html>
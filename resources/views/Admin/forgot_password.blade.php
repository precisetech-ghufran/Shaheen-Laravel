<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
    
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
    <title>Shaheen Group of Companies</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="../../css2.css?family=Montserrat:wght@200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
    

    
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css') }}">
    
    <!-- Themify icon-->
   
    <link rel="stylesheet" type="text/css" href=" {{ asset('assets/css/vendors/themify.css') }}">
    <!-- Feather icon-->
    
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/feather-icon.css') }}">
   
    <link rel="stylesheet" type="text/css" href=" {{ asset('assets/css/vendors/scrollbar.css') }}">
   
    <link rel="stylesheet" type="text/css" href=" {{ asset('assets/css/vendors/js-datatables/style.css') }}">
    
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/bootstrap.css') }}">
    <!-- App css-->
    
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    
    <!-- Responsive css-->
   
    <link rel="stylesheet" type="text/css" href=" {{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
  </head>
  <body> 
 <!-- loader starts-->
 <div class="loader-wrapper">
    <div class="loader"> 
      <div class="loader4"></div>
    </div>
  </div>
  <!-- loader ends-->
  <!-- tap on top starts-->
  <div class="tap-top"><i data-feather="chevrons-up"></i></div>
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
           

                  <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                  <h6 class="mt-4">Reset Your Password Through Email</h6>
                  <br/>
                  <div class="form-group">
                    <label class="col-form-label">Enter Your Email</label>
                    <div class="form-input position-relative">
                      <input class="form-control" type="email" name="email" required="" placeholder="enter your email"/>
                      @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                    </div>
                  </div>
              
                  <div class="form-group mb-0">
                    {{-- <div class="checkbox p-0">
                      <input id="checkbox1" type="checkbox">
                      <label class="text-muted" for="checkbox1">Remember password</label>
                    </div> --}}
                    <br/>
                    <button class="btn btn-primary btn-block w-100" type="submit">Send Email                          </button>
                  </div>

                </form>

                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
                




                  <p class="mt-4 mb-0 text-center">Already have an password?<a class="ms-2" href="{{route('login')}}">Sign in</a></p>
              
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- latest jquery-->
   
  <script src=" {{ asset('assets/js/jquery.min.js') }}"></script>
  <!-- Bootstrap js-->
  
  <script src="{{ asset('assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
  <!-- feather icon js-->
  
  <script src="{{ asset('assets/js/icons/feather-icon/feather.min.js') }}"></script>
  
  <script src="{{ asset('assets/js/icons/feather-icon/feather-icon.js') }}"></script>
  <!-- scrollbar js-->
  
  <script src="{{ asset('assets/js/scrollbar/simplebar.js') }}"></script>
  
  <script src="{{ asset('assets/js/scrollbar/custom.js') }}"></script>
  
  <!-- Sidebar jquery-->
  <script src="{{ asset('assets/js/config.js') }}"></script>
  
  <!-- Plugins JS start-->
  <script src="{{ asset('assets/js/sidebar-menu.js') }}"></script>
 
 
  <script src=" {{ asset('assets/js/sidebar-pin.js') }}"></script>
 
  <script src=" {{ asset('assets/js/header-slick.js') }}"></script>
  
  <script src="{{ asset('assets/js/chart/apex-chart/apex-chart.js') }}"></script>
  <!-- calendar js-->
  
  <script src="{{ asset('assets/js/dashboard/default.js') }}"></script>
  
  <script src="{{ asset('assets/js/custom-list-product.js') }}"></script>
  
  <!-- Plugins JS Ends-->
  <!-- Theme js-->
 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <script src=" {{ asset('assets/js/script.js') }}"></script>
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
      @if(session('success'))
          Swal.fire({
              toast: true,
              position: 'top-end',
              icon: 'success',
              title: "{{ session('success') }}",
              showConfirmButton: false,
              timer: 3000,
              timerProgressBar: true
          });
      @elseif(session('error'))
          Swal.fire({
              toast: true,
              position: 'top-end',
              icon: 'error',
              title: "{{ session('error') }}",
              showConfirmButton: false,
              timer: 3000,
              timerProgressBar: true
          });
      @endif
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
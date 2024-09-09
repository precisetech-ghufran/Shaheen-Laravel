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
      <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css" rel="stylesheet">

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
    <!-- DataTables CSS -->
    <link href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- DataTables Bootstrap 5 Integration CSS -->
    <link href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css" rel="stylesheet">
     <style>
        /* Hide the "Show entries" dropdown */
        .dataTables_length {
            display: none;
        }
    </style>
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
  <div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page Header Start-->

        @include('admin.header', ['auth_user' => $auth_user])


    <!-- Page Header Ends   -->
    <!-- Page Body Start-->
    <div class="page-body-wrapper">
      <!-- Page Sidebar Start-->
      
       @include('admin.sidebar') 
   
      <!-- Page Sidebar Ends-->
      @yield('content')
      <!-- footer start-->
     @include('admin.footer')

  </div>
    


    <!-- latest jquery-->
   
    <script src=" {{ asset('assets/js/jquery.min.js') }}"></script>
    <!-- Bootstrap js-->
    
    <script src="{{ asset('assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <!-- feather icon js-->
        <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
    <!-- DataTables Bootstrap 5 Integration JS -->
    <script src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap5.min.js"></script>
    
    <script src="{{ asset('assets/js/icons/feather-icon/feather.min.js') }}"></script>
    
    <script src="{{ asset('assets/js/icons/feather-icon/feather-icon.js') }}"></script>
    <!-- scrollbar js-->
    
    <script src="{{ asset('assets/js/scrollbar/simplebar.js') }}"></script>
    
    <script src="{{ asset('assets/js/scrollbar/custom.js') }}"></script>
     <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
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

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.getElementById('delete-selected').addEventListener('click', function(e) {
        e.preventDefault(); // Prevent default form submission

        // Get the form and checkboxes with class 'delete-checkbox'
        const form = document.getElementById('bulk-delete-form');
        const checkboxes = document.querySelectorAll('.delete-checkbox:checked');
        
        if (checkboxes.length === 0) {
            Swal.fire({
                icon: 'warning',
                title: 'No items selected',
                text: 'Please select at least one item to delete.'
            });
            return;
        }

        // Confirm deletion
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
                // Ensure the form is correctly referenced and submit
                if (form && typeof form.submit === 'function') {
                    form.submit();
                } else {
                    console.error('Form is not correctly referenced or form.submit is not a function');
                }
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



<script>
    document.addEventListener('DOMContentLoaded', function () {
        const checkAll = document.getElementById('checkAll');
        const checkboxes = document.querySelectorAll('.permission-checkbox');

        // Toggle all checkboxes when "Check All" is clicked
        checkAll.addEventListener('change', function() {
            checkboxes.forEach(function(checkbox) {
                checkbox.checked = checkAll.checked;
            });
        });

        // Monitor changes in individual checkboxes
        checkboxes.forEach(function(checkbox) {
            checkbox.addEventListener('change', function() {
                // Check if all checkboxes are selected
                checkAll.checked = document.querySelectorAll('.permission-checkbox:checked').length === checkboxes.length;
            });
        });

        // Initial state check
        checkAll.checked = document.querySelectorAll('.permission-checkbox:checked').length === checkboxes.length;
    });
</script>

 <script>
        $(document).ready(function() {
            $('#example').DataTable();
                paging: false,

        });
    </script>
  


<script>
$(document).ready(function() {
    $('#stateid').change(function() {
        let stateId = $(this).val();
        let cityDropdown = $('#cityid');
        
        // Clear previous cities
        cityDropdown.empty().append('<option value="">Select City</option>');

        if (stateId) {
            $.ajax({
                url: "{{ route('cities.byState') }}",
                type: 'GET',
                data: { state_id: stateId },
                success: function(response) {
                    if (response.cities.length > 0) {
                        $.each(response.cities, function(index, city) {
                            cityDropdown.append('<option value="' + city.id + '">' + city.name + '</option>');
                        });
                    } else {
                        cityDropdown.append('<option value="">No cities available</option>');
                    }
                },
                error: function(xhr) {
                    console.log(xhr.responseText); // Check the console for any errors
                }
            });
        }
    });
});
</script>


<script>
    $(document).ready(function() {
        $('.select2').select2({
            placeholder: 'Select an option',
            allowClear: true
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        // When state is changed
        $('#state_id').on('change', function() {
            var stateId = $(this).val();
            if(stateId) {
                // Make AJAX request to get cities based on selected state
                $.ajax({
                    url: '/get-cities/' + stateId,
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        $('#city_id').empty();  // Clear existing options
                        $('#city_id').append('<option value="">Select City</option>');  // Add placeholder
                        $.each(data, function(key, value) {
                            $('#city_id').append('<option value="' + value.id + '">' + value.name + '</option>');
                        });
                    }
                });
            } else {
                $('#city_id').empty();  // If no state selected, empty the city dropdown
                $('#city_id').append('<option value="">Select City</option>');
            }
        });
    });
</script>
  </body>
</html>
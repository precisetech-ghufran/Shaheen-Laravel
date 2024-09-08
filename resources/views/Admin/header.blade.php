<div class="page-header">
    <div class="header-wrapper row m-0">
      <form class="form-inline search-full col" action="#" method="get">
        <div class="form-group w-100">
          <div class="Typeahead Typeahead--twitterUsers">
            <div class="u-posRelative"> 
              <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search Riho .." name="q" title="" autofocus="">
              <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading... </span></div><i class="close-search" data-feather="x"></i>
            </div>
            <div class="Typeahead-menu"> </div>
          </div>
        </div>
      </form>
      <div class="header-logo-wrapper col-auto p-0">  
        <div class="logo-wrapper">
          <a href="index.html">
           
            <img class="img-fluid for-light"  src="{{asset('ssets/images/logo/logo_dark.png')}}" alt="logo-light">
           
            <img class="img-fluid for-dark"src="{{asset('assets/images/logo/logo.png')}}" alt="logo-dark">
          </a>
        </div>
        <div class="toggle-sidebar">
          <i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i></div>
      </div>
      <div class="left-header col-xxl-5 col-xl-6 col-lg-5 col-md-4 col-sm-3 p-0">
        <div>
          <a class="toggle-sidebar" href="#">
            <i class="iconly-Category icli"></i>
          </a>
          <div class="d-flex align-items-center gap-2 ">
            <h4 class="f-w-600">Welcome Shaheen Group</h4>
              <img class="mt-0" src="{{asset('assets/images/hand.gif')}}" alt="hand-gif">
              
          </div> 
        </div>
        <div class="welcome-content d-xl-block d-none">
          <span class="text-truncate col-12">
            Here’s what’s happening with your store today.
          </span>
        </div>
      </div>
      <div class="nav-right col-xxl-7 col-xl-6 col-md-7 col-8 pull-right right-header p-0 ms-auto">
        <ul class="nav-menus"> 
          <li class="d-md-block d-none"> 
            <div class="form search-form mb-0">
              <div class="input-group"><span class="input-icon">

      <form method="GET" action="{{ route('search') }}" class="d-flex">
    <div class="input-group">
        <!-- Search Input -->
        <input type="text" class="form-control" name="query" placeholder="Search..." required>
        
        <!-- Hidden Input for Table -->
        <input type="hidden" name="table" value="{{ isset($table) ? $table : '' }}">

        <!-- Search Button with Icon -->
        <button class="btn btn-outline-secondary" type="submit">
            <i class="bi bi-search"></i> <!-- Bootstrap search icon -->
        </button>
    </div>
</form>

                  <!-- <svg>
                    <use href="../assets/svg/icon-sprite.svg#search-header"></use>
                  </svg>
                  <input class="w-100" type="search1" placeholder="Search">
                </span> -->
              </div>
            </div>
          </li>
          <li class="d-md-none d-block"> 
            <div class="form search-form mb-0">
              <div class="input-group">
                <span class="input-show"> 
                  <svg id="searchIcon">
                    <use href="../assets/svg/icon-sprite.svg#search-header"></use>
                  </svg>
                  <div id="searchInput">
                    <input type="search" placeholder="Search">
                  </div>
                </span>
              </div>
            </div>
          </li>
          <li> 
            <div class="mode">
              <i class="moon" data-feather="moon"></i>
            </div>
          </li>
          <li class="profile-nav onhover-dropdown"> 
          
            <div class="media profile-media"> <img class="b-r-10"  
              src="{{ $auth_user->profile_image ? asset('uploads/' . $auth_user->profile_image) : asset('assets/images/download.png') }}"  alt="not found" class="img-fluid rounded-circle" style="width: 30px; height: 30px;" >
              <div class="media-body d-xxl-block d-none box-col-none">
                <div class="d-flex align-items-center gap-2">
                  <span>{{$auth_user->roles->pluck('name')->implode(', ') }} </span>
                  <i class="middle fa fa-angle-down"> </i>
                </div>
                <p class="mb-0 font-roboto">Admin</p>
              </div>
            </div>
             <ul class="profile-dropdown onhover-show-div">
              <li><a href="{{route('user_profile_view',$auth_user->id)}}"><i data-feather="user"></i><span>My Profile</span></a></li>
           <li> <a href="{{route('updatePassword',$auth_user->id)}}"> <i data-feather="settings"></i><span>Update Password</span></a></li>
              <li> <a href="#"> <i data-feather="settings"></i><span>Settings</span></a></li>
              <li>
                
                <form method="POST" action="{{ route('logout') }}">
                  @csrf

                  <a class="btn btn-pill btn-outline-primary btn-sm" href="route('logout')"
                  onclick="event.preventDefault();
                              this.closest('form').submit();">Log Out</a>
              </form>
                
                
                
           </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
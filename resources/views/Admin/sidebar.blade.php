<div class="sidebar-wrapper" data-layout="stroke-svg">
          <div class="logo-wrapper">
            <a href="index.html">
             
              <img class="img-fluid w-75"  src="{{asset('assets/images/logo/logo.png')}}" alt=""></a>
            <div class="back-btn">
              <i class="fa fa-angle-left"></i>
            </div>
            <div class="toggle-sidebar">
              <i class="status_toggle middle sidebar-toggle" data-feather="grid"></i>
            </div>
          </div>
          <div class="logo-icon-wrapper">
            <a href="index.html">
              <img class="img-fluid" src="../assets/images/logo/logo-icon.png" alt="">
            </a>
          </div>
          <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow">
              <i data-feather="arrow-left"></i>
            </div>
            <div id="sidebar-menu">
              <ul class="sidebar-links" id="simple-bar">
                <li class="back-btn">
                  <a href="index.html">
                    <img class="img-fluid" src="../assets/images/logo/logo-icon.png" alt="">
                  </a>
                  <div class="mobile-back text-end">
                    <span>Back </span>
                    <i class="fa fa-angle-right ps-2" aria-hidden="true"></i>
                  </div>
                </li>
                <li class="pin-title sidebar-main-title">
                  <div> 
                     <h6>Pinned</h6>
                  </div>
                </li>
                <li class="sidebar-main-title">
                  <div>
                    <h6 class="lan-1">General</h6>
                  </div>
                </li>
                <li class="sidebar-list">
                  <i class="fa fa-thumb-tack"></i>
                  <a class="sidebar-link sidebar-title link-nav" href="{{route('Dashboard')}}">
                    <svg class="stroke-icon">
                      <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                    </svg>
                    <svg class="fill-icon">
                      <use href="../assets/svg/icon-sprite.svg#fill-home"></use>
                    </svg>
                    <span class="lan-3">
                      Dashboard
                    </span>
                  </a>
                </li>
               
        


                 <li class="sidebar-list">
                  <i class="fa fa-thumb-tack"></i>
                  <a class="sidebar-link sidebar-title" href="#">
                    <svg class="stroke-icon"> 
                      <use href="../assets/svg/icon-sprite.svg#stroke-user"></use>
                    </svg>
                    <svg class="fill-icon">
                      <use href="../assets/svg/icon-sprite.svg#fill-user"></use>
                    </svg>
                    <span>Stores</span>
                   </a>
                  <ul class="sidebar-submenu">
                    <li> <a href="{{route('stores.index')}}">Stores</a></li>
                     <li> <a href="#">Store Partners</a></li>
                      <li> <a href="#">Store GM</a></li>
                       <li> <a href="#">Store Pnl</a></li>

                   
                  </ul>
                </li>





                  <li class="sidebar-list">
                  <i class="fa fa-thumb-tack"></i>
                  <a class="sidebar-link sidebar-title" href="#">
                    <svg class="stroke-icon"> 
                      <use href="../assets/svg/icon-sprite.svg#stroke-user"></use>
                    </svg>
                    <svg class="fill-icon">
                      <use href="../assets/svg/icon-sprite.svg#fill-user"></use>
                    </svg>
                    <span>Partners</span>
                   </a>
                  <ul class="sidebar-submenu">
                    <li> <a href="{{route('partners.index')}}">Partners</a></li>
                      <li> <a href="#">Partner Contribution</a></li>
                        <li> <a href="#">Partner Withdrawal</a></li>
                          <li> <a href="#">Intra Partners Transfer</a></li>
                   
                  </ul>
                </li>







                  <li class="sidebar-list">
                  <i class="fa fa-thumb-tack"></i>
                  <a class="sidebar-link sidebar-title" href="#">
                    <svg class="stroke-icon"> 
                      <use href="../assets/svg/icon-sprite.svg#stroke-user"></use>
                    </svg>
                    <svg class="fill-icon">
                      <use href="../assets/svg/icon-sprite.svg#fill-user"></use>
                    </svg>
                    <span>Proposed</span>
                   </a>
                  <ul class="sidebar-submenu">
                    <li> <a href="#">Proposed Site</a></li>
                          <li> <a href="#">Lease Process</a></li>
                                <li> <a href="#">Pre Construction</a></li>
                                      <li> <a href="#">Construction</a></li>
                                            <li> <a href="#">Open For Business</a></li>
                   
                  </ul>
                </li>



                  <li class="sidebar-list">
                  <i class="fa fa-thumb-tack"></i>
                  <a class="sidebar-link sidebar-title" href="#">
                    <svg class="stroke-icon"> 
                      <use href="../assets/svg/icon-sprite.svg#stroke-user"></use>
                    </svg>
                    <svg class="fill-icon">
                      <use href="../assets/svg/icon-sprite.svg#fill-user"></use>
                    </svg>
                    <span>Taxes</span>
                   </a>
                  <ul class="sidebar-submenu">
                    <li> <a href="#">Sales Tax </a></li>
                    <li> <a href="#">Corporate Tax </a></li>
                     <li> <a href="#">K-1 </a></li>
                  </ul>
                </li>


                  <li class="sidebar-list">
                  <i class="fa fa-thumb-tack"></i>
                  <a class="sidebar-link sidebar-title" href="#">
                    <svg class="stroke-icon"> 
                      <use href="../assets/svg/icon-sprite.svg#stroke-user"></use>
                    </svg>
                    <svg class="fill-icon">
                      <use href="../assets/svg/icon-sprite.svg#fill-user"></use>
                    </svg>
                    <span>Sales</span>
                   </a>
                  <ul class="sidebar-submenu">
                    <li> <a href="#">Sale Store</a></li>
                    <li> <a href="#">Buyer Payment</a></li>
                     <li> <a href="#">Buyer Payment Ledger</a></li>
                  </ul>
                </li>


                  <li class="sidebar-list">
                  <i class="fa fa-thumb-tack"></i>
                  <a class="sidebar-link sidebar-title" href="#">
                    <svg class="stroke-icon"> 
                      <use href="../assets/svg/icon-sprite.svg#stroke-user"></use>
                    </svg>
                    <svg class="fill-icon">
                      <use href="../assets/svg/icon-sprite.svg#fill-user"></use>
                    </svg>
                    <span>Attachments</span>
                   </a>
                  <ul class="sidebar-submenu">
                    <li> <a href="#">General Attachments</a></li>
                    <li> <a href="#">Search Attachments</a></li>
                  </ul>
                </li>


                  <li class="sidebar-list">
                  <i class="fa fa-thumb-tack"></i>
                  <a class="sidebar-link sidebar-title" href="#">
                    <svg class="stroke-icon"> 
                      <use href="../assets/svg/icon-sprite.svg#stroke-user"></use>
                    </svg>
                    <svg class="fill-icon">
                      <use href="../assets/svg/icon-sprite.svg#fill-user"></use>
                    </svg>
                     <span>Vendors</span>
                   </a>
                  <ul class="sidebar-submenu">
                    <li> <a href="{{Route('Vendors.index')}}">Vendors</a></li>
                   <li> <a href="#"> Vendor Bills </a></li>
                   <li> <a href="{{Route('vendor-groups.index')}}">Vendor Group  </a></li>
                  </ul>
                </li>


                  <li class="sidebar-list">
                  <i class="fa fa-thumb-tack"></i>
                  <a class="sidebar-link sidebar-title" href="#">
                    <svg class="stroke-icon"> 
                      <use href="../assets/svg/icon-sprite.svg#stroke-user"></use>
                    </svg>
                    <svg class="fill-icon">
                      <use href="../assets/svg/icon-sprite.svg#fill-user"></use>
                    </svg>
                    <span>Expenses</span>
                   </a>
                  <ul class="sidebar-submenu">
                    <li> <a href="{{route('project_dev_exp.index')}}">Development Expenses  </a></li>
                     <li> <a href="{{route('expense_heads.index')}}">Expense Head  </a></li>
                   

                   
                  </ul>
                </li>


               

              <li class="sidebar-list">
                  <i class="fa fa-thumb-tack"></i>
                  <a class="sidebar-link sidebar-title link-nav" href="{{route('master_file.index')}}">
                    <svg class="stroke-icon">
                      <use href="../assets/svg/icon-sprite.svg#stroke-task"></use>
                    </svg>
                    <svg class="fill-icon">
                      <use href="../assets/svg/icon-sprite.svg#fill-task"> </use>
                    </svg>
                    <span>Master File</span>
                  <div class="according-menu"><i class="fa fa-angle-right"></i></div></a>
                </li>



                  <li class="sidebar-list">
                  <i class="fa fa-thumb-tack"></i>
                  <a class="sidebar-link sidebar-title" href="#">
                    <svg class="stroke-icon"> 
                      <use href="../assets/svg/icon-sprite.svg#stroke-user"></use>
                    </svg>
                    <svg class="fill-icon">
                      <use href="../assets/svg/icon-sprite.svg#fill-user"></use>
                    </svg>
                    <span>Reports</span>
                   </a>
                  <ul class="sidebar-submenu">
                    <li> <a href="#">Reports</a></li>
                   
                  </ul>
                </li>
              

                    <li class="sidebar-list">
                  <i class="fa fa-thumb-tack"></i>
                  <a class="sidebar-link sidebar-title" href="#">
                    <svg class="stroke-icon"> 
                      <use href="../assets/svg/icon-sprite.svg#stroke-user"></use>
                    </svg>
                    <svg class="fill-icon">
                      <use href="../assets/svg/icon-sprite.svg#fill-user"></use>
                    </svg>
                    <span>Users Managment</span>
                   </a>
                  <ul class="sidebar-submenu">
                       <li> <a href="{{route('all.roles')}}">Manage User Role</a></li>
                     <li> <a href="{{route('all.users')}}"> Manage User Accounts</a></li>
                          <li> <a href="{{route('add.permission')}}"> Manage Permissions</a></li>
                    <li> <a href="{{route('auth_admin_add_new_user')}}">Add New User </a></li>
                  </ul>
                </li>

               
              </ul>
              <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </div>
          </nav>
        </div> 
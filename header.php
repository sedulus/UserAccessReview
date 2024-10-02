<?php 
	$headerObjectUser = new user();
    $headerObjectUser->table ='Users';	 
	$headerUserID = isset($_SESSION['user_id'])? $_SESSION['user_id'] : '';
    $headerUserType = isset($_SESSION['user_type'])? $_SESSION['user_type'] : '';

    $HeaderUser =$headerObjectUser->getSingleUser($headerUserID); //var_dump($user);
?>
<!-- sidebar menu start -->
  <div class="sidebar-menu sticky-sidebar-menu">

    <!-- logo start -->
	<!-- 
    <div class="logo">
      <h1><a href="#">UAR</a></h1>
    </div>
	-->
	  
  <!-- if logo is image enable this -->
    <!-- image logo -->
    
	  <div class="logo">
      <a href="#">
        <img src="assets/images/logo.png?76" alt="<?php echo $config['orgName']?>" title="UAR" class="img-fluid" style="height:70px;" />
      </a>
    </div>
    <!-- //image logo -->

    <div class="logo-icon text-center">
      <a href="./dashboard" title="logo"><img src="assets/images/logo.png?99" alt="logo-icon"> </a>
    </div>
	 
    <!-- //logo end -->

	  
	  
	  
	  
    <div class="sidebar-menu-inner">

      <!-- sidebar nav start -->
      <ul class="nav nav-pills nav-stacked custom-nav">
        <li><a href="dashboard"><i class="fa fa-dashboard"></i><span> Dashboard</span></a>
        </li>
		  
        <li class="menu-list">
          <a href="#"><i class="fa fa-users"></i>
            <span>My Clients <i class="lnr lnr-chevron-right"></i></span></a>
          <ul class="sub-menu-list">
            <li><a href="new-client">Add Client</a> </li>
            <li><a href="view-client">View Client</a> </li>
			 <li><a href="new-client-admin">Add Client-Admin</a></li>
			<li><a href="view-client-admin">View Client-Admin</a></li>
          
          </ul>
        </li>
		  
		    <li class="menu-list">
          <a href="#"><i class="fa fa-desktop"></i>
            <span>Resource Apps<i class="lnr lnr-chevron-right"></i></span></a>
          <ul class="sub-menu-list">
            <li><a href="new-resource-app">Create New App</a> </li>
            <li><a href="view-resource-app">View Resource Apps</a> </li>
            <!--<li><a href="view-app-admin">Resource App-Admin</a></li>-->
          </ul>
        </li>
		  		  
		    <li class="menu-list">
          <a href="#"><i class="fa fa-cogs fa-spin"></i>
            <span>UAR Instances<i class="lnr lnr-chevron-right"></i></span></a>
          <ul class="sub-menu-list">
			<li><a href="view-uar-instance">View Instances</a> </li>
			<li><a href="instance-report">Manage Report</a></li>
			<li><a href="new-uar-instance">Create Instance</a> </li>
          </ul>
        </li>
		  
		  
		      <li class="menu-list">
          <a href="#"><i class="fa fa-folder"></i>
            <span>File Repository<i class="lnr lnr-chevron-right"></i></span></a>
          <ul class="sub-menu-list">
           	 <li><a href="file-uploader">File Uploader</a></li>
			  <li><a href="view-files">View Repository</a></li>
			 <li><a href="file-request">Request File</a></li>
			 <li><a href="file-template">File Template</a></li>
			  
          </ul>
        </li>
		  
		  
	<?php if(in_array($headerUserType,array('org','multiuser'))): ?>
         <li class="menu-list">
          <a href="#"><i class="fa fa-user-circle"></i>
            <span>Manage Users <i class="lnr lnr-chevron-right"></i></span></a>
          <ul class="sub-menu-list">
			  <li><a href="add-user">Add User</a></li>
            <li><a href="user">View Users</a></li>
          </ul>
        </li>
		  
		  
		  <li class="menu-list">
          <a href="#"><i class="fa fa-lock"></i>
            <span>Role & Permission <i class="lnr lnr-chevron-right"></i></span></a>
          <ul class="sub-menu-list">
			<li><a href="role">Role</a> </li>
			<li><a href="role-priviledge">Permission</a></li>
          </ul>
        </li>
	<?php endif ?>
        <li><a href="report"><i class="fa fa-warning"></i> <span>Over Due Review</span></a></li>
		  
		  
        <li class="menu-list">
          <a href="#"><i class="fa fa-cog"></i>
            <span>System Settings<i class="lnr lnr-chevron-right"></i></span></a>
          <ul class="sub-menu-list">
            <!--<li><a href="">File Category</a> </li>-->
			<li><a href="audit">System Audit</a> </li>
			 <!-- <li><a href="configuration">Configuration</a> </li>-->
          </ul>
        </li>
      </ul>
      <!-- //sidebar nav end -->
      <!-- toggle button start -->
      <a class="toggle-btn">
        <i class="fa fa-angle-double-left menu-collapsed__left"><span>Minimize Menu</span></i>
        <i class="fa fa-angle-double-right menu-collapsed__right"></i>
      </a>
      <!-- //toggle button end -->
    </div>
  </div>
  <!-- //sidebar menu end -->
  
	
	<!-- header-starts -->
  <div class="header sticky-header">

    <!-- notification menu start -->
    <div class="menu-right">
      <div class="navbar user-panel-top">
        <div class="search-box">
          <form action="#search-results.html" method="get">
            <input class="search-input" placeholder="Search Here..." type="search" id="search">
            <button class="search-submit" value=""><span class="fa fa-search"></span></button>
          </form>
        </div>
        <div class="user-dropdown-details d-flex">
         
          <div class="profile_details">
            <ul>
              <li class="dropdown profile_details_drop">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="dropdownMenu3" aria-haspopup="true"
                  aria-expanded="false">
                  <div class="profile_img">
                    <img src="assets/images/photo/<?php echo $HeaderUser['Photo']  ?>" class="rounded-circle" alt="" />
                    <div class="user-active">
                      <span></span>
                    </div>
                  </div>
                </a>
                <ul class="dropdown-menu drp-mnu" aria-labelledby="dropdownMenu3">
                  <li class="user-info">
                    <h5 class="user-name"><?php echo $_SESSION['user_name']?></h5>
                    <span class="status ml-2"><?php echo 'UAR Analyst'?></span>
                  </li>
                  <li> <a href="myProfile"><i class="lnr lnr-user"></i>My Profile</a> </li>
                  <li> <a href="myPassword"><i class="lnr lnr-lock"></i>Change Password</a> </li>
                 
                  <li class="logout"> <a href="./?p=logout"><i class="fa fa-power-off"></i> Logout</a> </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!--notification menu end -->
  </div>
  <!-- //header-ends -->

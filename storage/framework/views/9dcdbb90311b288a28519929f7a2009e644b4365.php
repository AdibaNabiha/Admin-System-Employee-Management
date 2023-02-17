<?php echo e(View:: make('title')); ?>

<header id="header" class="header fixed-top d-flex align-items-center">

<div class="d-flex align-items-center justify-content-between">
  <a href="/index" class="logo d-flex align-items-center">
    <img src="img/logo.png" alt="">
    <span class="d-none d-lg-block">Vars</span>
  </a>
  <i class="bi bi-list toggle-sidebar-btn"></i>
</div><!-- End Logo -->

<div class="search-bar">
  <form class="search-form d-flex align-items-center" method="POST" action="#">
    <input type="text" name="query" placeholder="Search" title="Enter search keyword">
    <button type="submit" title="Search"><i class="bi bi-search"></i></button>
  </form>
</div><!-- End Search Bar -->

<nav class="header-nav ms-auto">
  <ul class="d-flex align-items-center">

    <li class="nav-item d-block d-lg-none">
      <a class="nav-link nav-icon search-bar-toggle " href="#">
        <i class="bi bi-search"></i>
      </a>
    </li><!-- End Search Icon-->


    <li class="nav-item dropdown pe-3">

    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
        <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo e(session()->get('user')->name); ?></span>
      </a><!-- End Profile Iamge Icon -->

      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
        <li class="dropdown-header">
          <h6><?php echo e(session()->get('user')->name); ?></h6>
          <span><?php echo e(session()->get('user')->position); ?></span>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="/userprofile">
            <i class="bi bi-person"></i>
            <span>My Profile</span>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
        <a class="dropdown-item d-flex align-items-center" href="/userprofile">
            <i class="bi bi-gear"></i>
            <span>Account Settings</span>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="/logout">
            <i class="bi bi-box-arrow-right"></i>
            <span>Logout</span>
          </a>
        </li>

      </ul><!-- End Profile Dropdown Items -->
    </li><!-- End Profile Nav -->

  </ul>
</nav><!-- End Icons Navigation -->

</header><!-- End Header -->


<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">
<li class="nav-heading">General</li>
  <li class="nav-item">
    <a class="nav-link collapsed " href="/index">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="/userprofile">
      <i class="bi bi-person"></i>
      <span>User</span>
    </a>
  </li><!-- End Profile Page Nav -->

  <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="/employeeslist">
          <i class="bi bi-people"></i><span>Employees</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/employeesadd">
              <i class="bi bi-circle"></i><span>Add New Employee</span>
            </a>
          </li>
          <li>
            <a href="/employeeslist">
              <i class="bi bi-circle"></i><span>Employees List</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->


  <li class="nav-heading">Support</li>
  <li class="nav-item">
    <a class="nav-link" href="/faq">
      <i class="bi bi-question-circle"></i>
      <span>F.A.Q</span>
    </a>
  </li><!-- End Profile Page Nav -->
</ul>
</aside><!-- End Sidebar-->

<main id="main" class="main">

<div class="pagetitle">
    <h1>F.A.Q</h1>
    <nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/index">Home</a></li>
        <li class="breadcrumb-item active">F.A.Q</li>
    </ol>
    </nav>
</div><!-- End Page Title -->

<div class="card">
  <div class="card-body">
    <h5 class="card-title">Example Help Center</h5>

<div class="accordion accordion-flush" id="faq-group-1">
  
<div class="accordion-item">
    <h2 class="accordion-header"> 
        <button class="accordion-button collapsed" data-bs-target="#faqsOne-1" type="button" data-bs-toggle="collapse"> How to manage user profile? </button>
    </h2>
    <div id="faqsOne-1" class="accordion-collapse collapse" data-bs-parent="#faq-group-1"><div class="accordion-body"> Click on user at the sidebar menu and access to edit profile tab in user page. After you edit and save your profile, make sure to login again.</div></div></div>
   
    <div class="accordion-item">
      <h2 class="accordion-header">
         <button class="accordion-button collapsed" data-bs-target="#faqsOne-2" type="button" data-bs-toggle="collapse"> How to add new employee? </button>
    </h2>
    <div id="faqsOne-2" class="accordion-collapse collapse" data-bs-parent="#faq-group-1">
    <div class="accordion-body"> Click on employee at the sidebar menu, then click on add employee.</div></div></div>
    
    <div class="accordion-item">
      <h2 class="accordion-header"> 
        <button class="accordion-button collapsed" data-bs-target="#faqsOne-3" type="button" data-bs-toggle="collapse"> How to view employee list </button>
      </h2>
    <div id="faqsOne-3" class="accordion-collapse collapse" data-bs-parent="#faq-group-1"><div class="accordion-body"> Click on employee at the sidebar menu and click on employee list</div></div></div>
    
    <div class="accordion-item">
      <h2 class="accordion-header"> 
        <button class="accordion-button collapsed" data-bs-target="#faqsOne-4" type="button" data-bs-toggle="collapse"> How to edit employee profile? </button>
      </h2>
         
    <div id="faqsOne-4" class="accordion-collapse collapse" data-bs-parent="#faq-group-1">
      <div class="accordion-body">  Click on employee at the sidebar menu and click on employee list. In the table hover to an edit icon, click the icon and you will able to edit employee profile   </div></div></div>
         
      <div class="accordion-item">
          <h2 class="accordion-header"> 
            <button class="accordion-button collapsed" data-bs-target="#faqsOne-5" type="button" data-bs-toggle="collapse"> How to view employee profile? </button>
      </h2>
         <div id="faqsOne-5" class="accordion-collapse collapse" data-bs-parent="#faq-group-1">
          <div class="accordion-body">Click on employee at the sidebar menu and click on employee list. In the table, hover to a view icon, click the icon and you will able to view employee profile  </div></div></div>

         <div class="accordion-item">
          <h2 class="accordion-header"> 
            <button class="accordion-button collapsed" data-bs-target="#faqsOne-6" type="button" data-bs-toggle="collapse"> How to delete employee profile? </button>
      </h2>
         <div id="faqsOne-6" class="accordion-collapse collapse" data-bs-parent="#faq-group-1"><div class="accordion-body">Click on employee at the sidebar menu and click on employee list. In the table, hover to a delete icon, click the icon and you be able to delete employee profile  </div></div></div></div></div></div>

<?php echo e(View:: make('footer')); ?><?php /**PATH C:\xampp\htdocs\final-project\resources\views/faq.blade.php ENDPATH**/ ?>
<?php echo e(View:: make('title')); ?>

 <!-- ======= Header ======= -->
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
          <a class="dropdown-item d-flex align-items-center" href="/useredit">
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
        <a class="nav-link" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="/employeeslist">
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

  <li class="nav-item">
    <a class="nav-link collapsed" href="/calendar">
      <i class="bi bi-calendar-date"></i>
      <span>Calendar</span>
    </a>
  </li><!-- End Profile Page Nav -->

  

  <li class="nav-heading">Support</li>
  <li class="nav-item">
    <a class="nav-link collapsed" href="">
      <i class="bi bi-gear"></i>
      <span>Settings</span>
    </a>
  </li><!-- End Profile Page Nav -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="">
      <i class="bi bi-question-circle"></i>
      <span>F.A.Q</span>
    </a>
  </li><!-- End Profile Page Nav -->
</ul>
</aside><!-- End Sidebar-->

<main id="main" class="main">

<div class="pagetitle">
  <h1>Employees List</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/index">Home</a></li>
      <li class="breadcrumb-item"><a href="/employeeslist">Employees</a></li>
      <li class="breadcrumb-item"><a href="/employeeslist">Employees List</a></li>
      <li class="breadcrumb-item active">Employee Profile</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">View Employee Profile</h5>

          <section class="section profile">
  <div class="row">
    <div class="col-xl-4">

      <div class="card">
        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
        <style>
        h2 {
            text-align: center;
            }
        </style>

          <h2><?php echo e($users->name); ?></h2>
          <h3><?php echo e($users->position); ?></h3>
          <div class="social-links mt-2">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
      </div>

    </div>

<div class="col-xl-8">

<div class="card">
<div class="card-body pt-3">
    <!-- Bordered Tabs -->
    <ul class="nav nav-tabs nav-tabs-bordered">
    <li class="nav-item">
        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
    </li>
    </ul>

<div class="tab-content pt-2">
<div class="tab-pane fade show active profile-overview" id="profile-overview">
<div id="app">
          <?php echo $__env->make('flashmessage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          <?php echo $__env->yieldContent('content'); ?>
          </div>
    <h5 class="card-title">About</h5>
    <p class="small fst-italic">This is an example of employee profile</p>

    <h5 class="card-title">Employee Profile Details</h5>
    <?php if(!empty($users)): ?>
    <div class="row">
    <div class="col-lg-3 col-md-4 label ">Full Name</div>
    <div class="col-lg-9 col-md-8"> <?php echo e($users->name); ?></div>
    </div>

    <div class="row">
    <div class="col-lg-3 col-md-4 label">Email</div>
    <div class="col-lg-9 col-md-8"><?php echo e($users->email); ?></div>
    </div>

    <div class="row">
    <div class="col-lg-3 col-md-4 label">Gender</div>
    <div class="col-lg-9 col-md-8"><?php echo e($users->gender); ?></div>
    </div>

    <div class="row">
    <div class="col-lg-3 col-md-4 label">Date of Birth</div>
    <div class="col-lg-9 col-md-8"><?php echo e($users->dob); ?></div>
    </div>

    <div class="row">
    <div class="col-lg-3 col-md-4 label">Address</div>
    <div class="col-lg-9 col-md-8"><?php echo e($users->address); ?></div>
    </div>

    <div class="row">
    <div class="col-lg-3 col-md-4 label">Phone Number</div>
    <div class="col-lg-9 col-md-8"><?php echo e($users->phone); ?></div>
    </div>

    <div class="row">
    <div class="col-lg-3 col-md-4 label">Position</div>
    <div class="col-lg-9 col-md-8"><?php echo e($users->position); ?></div>
    </div>

    <div class="row">
    <div class="col-lg-3 col-md-4 label">Start Date</div>
    <div class="col-lg-9 col-md-8"><?php echo e($users->startdate); ?></div>
    </div>

    <div class="row">
    <div class="col-lg-3 col-md-4 label">Created Date</div>
    <div class="col-lg-9 col-md-8"><?php echo e($users->created_at); ?></div>
    </div>

    <div class="row">
    <div class="col-lg-3 col-md-4 label">Updated Date</div>
    <div class="col-lg-9 col-md-8"><?php echo e($users->updated_at); ?></div>
    </div>

    <div class="text-center">
    <button type="button" onclick="window.location='/employeeslist'" class="btn btn-secondary">Back</button>
    </div>
    <?php else: ?>
    <td>No Record Found</td>
    <?php endif; ?>

</div>


<?php echo e(View:: make('footer')); ?><?php /**PATH C:\xampp\htdocs\final-project\resources\views/employeesview.blade.php ENDPATH**/ ?>
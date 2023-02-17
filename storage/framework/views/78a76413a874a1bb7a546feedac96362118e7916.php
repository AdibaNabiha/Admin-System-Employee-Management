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
        <img src="img/profile-img.jpg" alt="Profile" class="rounded-circle">
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
    <a class="nav-link collapsed" href="/index">
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
        <a class="nav-link  collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="/jobs">
          <i class="bi bi-briefcase"></i><span>Jobs</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/jobsadd">
              <i class="bi bi-circle"></i><span>Add New Job</span>
            </a>
          </li>
          <li>
            <a href="/jobs">
              <i class="bi bi-circle"></i><span>Jobs List</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="/candidates">
      <i class="bi bi-person-circle"></i>
      <span>Candidates</span>
    </a>
  </li><!-- End Profile Page Nav -->

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
      <li class="breadcrumb-item "><a href="/employeeslist">Employees List</a></li>
      <li class="breadcrumb-item active">Update Employee Profile</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Edit Employee Profile</h5>


<!-- Floating Labels Form -->

<form class="row g-3"  action ="employeesedit?rid=<?php echo e($users->id); ?>" method="post">
<?php echo csrf_field(); ?>
<div class="row mb-3">
<div class="col-md-8 col-lg-9">
  <img src="img/profile-img.jpg" alt="Profile">
  <div class="pt-2">
    <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
    <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
  </div>
</div>
</div>
<div class="col-md-12">
    <div class="form-floating">
    <input type="text" class="form-control" placeholder="Full Name" value="<?php echo e($users->name); ?>" name="fullname" required>
    <label for="floatingName">Full Name</label>
    </div>
</div>

<div class="col-md-6">
    <div class="form-floating">
    <input type="email" class="form-control" id="floatingEmail" placeholder="Email" value="<?php echo e($users->email); ?>" name="email" required>
    <label for="floatingEmail">Email</label>
    </div>
</div>

<div class="col-md-6">
    <div class="form-floating">
    <input type="type" class="form-control" id="floatingPassword" placeholder="Password" value="<?php echo e($users->password); ?>" name="password" required>
    <label for="floatingPassword">Password</label>
    </div>
</div>

<div class="col-md-6">
    <div class="form-floating mb-3">
    <select class="form-select" id="floatingSelect" aria-label="Gender" name="gender" required >
        <?php if($users->gender=='Male'): ?>
        <option value="Male" name="gender" selected>Male</option>
        <option value="Female">Female</option>
        <?php else: ?>
        <option value="Male" name="gender">Male</option>
        <option value="Female" name="gender" selected>Female</option>
        <?php endif; ?>
    </select>
    <label for="floatingSelect">State</label>
    </div>
</div>      

<div class="col-md-6">
    <div class="col-md-12">
    <div class="form-floating">
        <input class="form-control" id="floatingSelect" type="date" name="dob" value="<?php echo e($users->dob); ?>" required>
        <label for="floatingDob">Date of Birth</label>
    </div>
    </div>
</div>

<div class="col-12">
    <div class="form-floating">
    <textarea class="form-control" placeholder="Address" id="floatingTextarea" style="height: 100px;" name="address" required><?php echo e($users->address); ?></textarea>
    <label for="floatingTextarea">Address</label>
    </div>
</div>

<div class="col-md-4">
    <div class="form-floating">
    <input type="text" class="form-control" id="floatingPhone" placeholder="Phone Number" value="<?php echo e($users->phone); ?>" name="phone" required>
    <label for="floatingPhone">Phone Number</label>
    </div>
</div>

<div class="col-md-4">
    <div class="form-floating">
    <input type="text" class="form-control" id="floatingPosition" placeholder="Position" value="<?php echo e($users->position); ?>" name="position" required>
    <label for="floatingPosition">Position</label>
    </div>
</div>

<div class="col-md-4">
    <div class="col-md-12">
    <div class="form-floating">
        <input class="form-control" id="floatingSD" type="date" name="startdate" value="<?php echo e($users->startdate); ?>" required>
        <label for="floatingSD">Start Date</label>
    </div>
    </div>
</div>

<div class="text-center">
    <button type="submit" class="btn btn-primary">Update</button>
    <button type="button" onclick="javascript:history.back()" class="btn btn-secondary">Back</button>
</div>
</form><!-- End floating Labels Form -->

<?php echo e(View:: make('footer')); ?><?php /**PATH C:\xampp\htdocs\final-project\resources\views/employeesedit.blade.php ENDPATH**/ ?>
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
    <a class="nav-link" href="/candidates">
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
  <h1>Jobs List</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/index">Home</a></li>
      <li class="breadcrumb-item">Candidates</li>
      <li class="breadcrumb-item active">Candidates List</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
<div id="app">
          <?php echo $__env->make('flashmessage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          <?php echo $__env->yieldContent('content'); ?>
          </div>
<section class="section">
  <div class="row">
      <div class="card">
        <div class="card-body">
        
          <h5 class="card-title">Vars Jobs List</h5>
          
          
          <!-- Table with hoverable rows -->
          <table class="table table-hover">
          <?php if(count($can)): ?>
            <thead>
              <tr>
            </tr>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Full Name</th>
                <th scope="col">Email</th>
                <th scope="col">Message</th>
                <th scope="col">CV</th>
                <th scope="col">Created Date</th>
                <th scope="col">Updated Date</th>
                <th scope="col">Action</th>

              </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $can; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
              <td><?php echo e($loop->iteration); ?></td>
              <td><a href="candidatesview?rid=<?php echo e($c->name); ?>"><?php echo e($c->name); ?></td>
              <td><?php echo e($c->Email); ?></td>
              <td><?php echo e($c->Message); ?></td>
              <td><?php echo e($c->cv); ?></td>
              <td><?php echo e($c->created_at ? date('D, d F Y',strtotime($c->created_at)) : 'N/A'); ?></td>
              <td><?php echo e($c->updated_at ? date('D, d F Y',strtotime($c->updated_at)) : 'N/A'); ?></td>
              <td>
              <a href="/candidatesview?rid=<?php echo e($c->name); ?>"> <i class="ri-file-list-line" style="color: rgb(54, 53, 53);" title="View Profile"></i></a>
              </td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
          <style>
         .h-5 {
             height: 1em;
         }


        .leading-5 {
            padding: 0.8em;
        }
        .center {
  text-align: center;
}
        </style>
        
        

        <div class="center">
            <br>
        <tr><td>
                  <?php echo e($can->appends(['c'=> Request::get('c')])->links()); ?>

        </td></tr>
        </div> 
           
          <!-- End Table with hoverable rows -->
      </div>
    </div>
  </div>
</section>
<?php else: ?>
            <td>No Record Found</td>
            <?php endif; ?>
</main><!-- End #main -->
<?php echo e(View:: make('footer')); ?>


<?php /**PATH C:\xampp\htdocs\final-project\resources\views/candidates.blade.php ENDPATH**/ ?>
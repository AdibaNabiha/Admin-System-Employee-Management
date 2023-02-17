{{View:: make('title')}}
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
        <span class="d-none d-md-block dropdown-toggle ps-2">{{ session()->get('user')->name}}</span>
      </a><!-- End Profile Iamge Icon -->

      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
        <li class="dropdown-header">
          <h6>{{ session()->get('user')->name}}</h6>
          <span>{{ session()->get('user')->position}}</span>
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
    <a class="nav-link collapsed" href="/index">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->

  <li class="nav-item">
    <a class="nav-link" href="/userprofile">
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
  <h1>Profile</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/index">Home</a></li>
      <li class="breadcrumb-item">User</li>
      <li class="breadcrumb-item active">Profile</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

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

          <h2>{{ session()->get('user')->name}}</h2>
          <h3>{{ session()->get('user')->position}}</h3>
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

        <li class="nav-item">
          <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
        </li>

      </ul>
      <div class="tab-content pt-2">

        <div class="tab-pane fade show active profile-overview" id="profile-overview">
        <div id="app">
          @include('flashmessage')
          @yield('content')
          </div>
    
          <h5 class="card-title">About</h5>
          <p class="small fst-italic">This is an example of admin profile. Edit profile is working but need to login again after update profile</p>

          <h5 class="card-title">User Profile Details</h5>
        
          <div class="row">
            <div class="col-lg-3 col-md-4 label ">Full Name</div>
            <div class="col-lg-9 col-md-8">{{ session()->get('user')->name}}</div>
          </div>

          <div class="row">
            <div class="col-lg-3 col-md-4 label">Email</div>
            <div class="col-lg-9 col-md-8">{{ session()->get('user')->email}}</div>
          </div>

          <div class="row">
            <div class="col-lg-3 col-md-4 label">Gender</div>
            <div class="col-lg-9 col-md-8">{{ session()->get('user')->gender}}</div>
          </div>

          <div class="row">
            <div class="col-lg-3 col-md-4 label">Date of Birth</div>
            <div class="col-lg-9 col-md-8">{{ session()->get('user')->dob}}</div>
          </div>

          <div class="row">
            <div class="col-lg-3 col-md-4 label">Address</div>
            <div class="col-lg-9 col-md-8">{{ session()->get('user')->address}}</div>
          </div>

          <div class="row">
            <div class="col-lg-3 col-md-4 label">Phone</div>
            <div class="col-lg-9 col-md-8">{{ session()->get('user')->phone}}</div>
          </div>

          <div class="row">
            <div class="col-lg-3 col-md-4 label">Position</div>
            <div class="col-lg-9 col-md-8">{{ session()->get('user')->position}}</div>
          </div>

          <div class="row">
            <div class="col-lg-3 col-md-4 label">Created Date</div>
            <div class="col-lg-9 col-md-8">{{ session()->get('user')->created_at ? date('D, d F Y',strtotime($user->created_at)) : 'N/A'}}</div>
          </div>

          <div class="row">
            <div class="col-lg-3 col-md-4 label">Updated Date</div>
            <div class="col-lg-9 col-md-8">{{ session()->get('user')->updated_at ? date('D, d F Y',strtotime($user->updated_at)) : 'N/A'}}</div>
          </div>
          

        </div>

        <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

          <!-- Profile Edit Form -->
          <form class="row g-3"  action ="userprofile?rid={{ session()->get('user')->id }}" method="post" enctype="multipart/form-data">
          @csrf   
             
            <div class="row mb-3">
              <label  class="col-md-4 col-lg-3 col-form-label">Full Name</label>
              <div class="col-md-8 col-lg-9">
                <input name="fullname" type="text" class="form-control" placeholder="Full Name" value="{{ session()->get('user')->name}}"  required>
              </div>
            </div>

            <div class="row mb-3">
              <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Password</label>
              <div class="col-md-8 col-lg-9">
                <input type="password" class="form-control" id="myInput" name="password" value="{{ $user->password}}" >
                <input class="form-check-input" type="checkbox" value="true" id="rememberMe" onclick="myFunction()">
                <label class="form-check-label" for="rememberMe">&nbspShow Password</label>

              </div>
            </div>

            <div class="row mb-3">
            <label  class="col-md-4 col-lg-3 col-form-label">Email</label>
              <div class="col-md-8 col-lg-9">
              <div class="input-group has-validation">
              <span class="input-group-text" id="inputGroupPrepend">@</span>
                <input name="email" type="email" class="form-control" placeholder="Email" value="{{ session()->get('user')->email}}" required>
              </div>  
              </div>
            </div>

            <div class="row mb-3">
            <label  class="col-md-4 col-lg-3 col-form-label">Gender</label>
              <div class="col-md-8 col-lg-9">
                
              <select class="form-select" name="gender" required>
                @if($user->gender=='Male')
                <option value="Male" name="gender" selected>Male</option>
                <option value="Female">Female</option>
                @else
                <option value="Male" name="gender">Male</option>
                <option value="Female" name="gender" selected>Female</option>
                @endif
              </select>
              </div>
            </div>

            <div class="row mb-3">
             <label class="col-md-4 col-lg-3 col-form-label">Date of Birth</label>
              <div class="col-md-8 col-lg-9">
              <input class="form-control" type="date" name="dob" value="{{ session()->get('user')->dob}}">
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-md-4 col-lg-3 col-form-label">Address</label>
              <div class="col-md-8 col-lg-9">
              <textarea class="form-control" type="text" name="address" required>{{ session()->get('user')->address}}</textarea>
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-md-4 col-lg-3 col-form-label">Phone Number</label>
              <div class="col-md-8 col-lg-9">
              <input type="text" class="form-control" name="phone" value="{{ session()->get('user')->phone}}" required>
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-md-4 col-lg-3 col-form-label">Position</label>
              <div class="col-md-8 col-lg-9">
              <input type="text"  class="form-control" name="position" value="{{session()->get('user')->position}}" required>
              </div>
            </div>

            <div class="text-center">
              <button type="submit" class="btn btn-primary">Save Changes</button>            
            </div>
          </form><!-- End Profile Edit Form -->

        </div>

    </div>
  </div>  
</div>
</section>
</main><!-- End #main -->

<!-- ======= Footer ======= -->
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

{{View:: make('footer')}}
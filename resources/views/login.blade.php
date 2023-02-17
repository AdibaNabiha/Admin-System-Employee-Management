@extends('header')
@section('login')
{{View:: make('title')}}
<main class="form-signin w-100 m-auto">
<form action="login" method="post">
@csrf
<div class="container">


    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
    <div class="container">
    
        <div class="row justify-content-center">  
        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
        <div id="app">
        @include('flashmessage')
        @yield('content')
        </div>
            <div class="d-flex justify-content-center py-4">
            <a href="index.html" class="logo d-flex align-items-center w-auto">
                <img src="img/logo.png" alt="">
                <span class="d-none d-lg-block">Vars</span>
            </a>
            </div>
            <!-- End Logo -->
<div class="card mb-3">
    <div class="card-body">
            <div class="pt-4 pb-2">
            <h5 class="card-title text-center pb-0 fs-4">Login</h5>
            <p class="text-center small">Enter your username & password to login</p>
            </div>

        <form class="row g-3 needs-validation" novalidate>
            <label for="yourUsername" class="form-label">Email</label>
                    <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                    <input type="text" name="email" class="form-control" required>
                    <div class="invalid-feedback">Please enter your email.</div>
                    </div>
            <br>

                <label for="yourPassword" class="form-label">Password</label>
                <input type="password" name="password" id="myInput" class="form-control" required>
                <input class="form-check-input" type="checkbox" value="true" id="rememberMe" onclick="myFunction()">
                <label class="form-check-label" for="rememberMe">&nbspShow Password</label>
                <div class="invalid-feedback">Please enter your password!</div>
            <br>
            <br>


                <button class="btn btn-primary w-100" type="submit">Login</button>
                 <p class="small mb-0">Don't have account? <a href="/signup">Create an account</a></p>    
        </form>

        
    </div>
</div>

</section>

</div>
</form>
</main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

{{View:: make('footer')}}
@endsection

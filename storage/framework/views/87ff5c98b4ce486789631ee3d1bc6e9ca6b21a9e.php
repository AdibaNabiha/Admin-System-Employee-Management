<?php echo e(View:: make('title')); ?>

<main class="form-signin w-100 m-auto">
<form action="signup" method="post">
<?php echo csrf_field(); ?>
<div class="container">

<section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
<div class="container">
<div class="row justify-content-center">
    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

    <div id="app">
        <?php echo $__env->make('flashmessage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('content'); ?>
    </div>  
    <div class="d-flex justify-content-center py-4">
        <a href="index.html" class="logo d-flex align-items-center w-auto">
        <img src="img/logo.png" alt="">
        <span class="d-none d-lg-block">Vars</span>
        </a>
    </div><!-- End Logo -->

<div class="card mb-3">
    <div class="card-body">

        <div class="pt-4 pb-2">
            <h5 class="card-title text-center pb-0 fs-4">Register</h5>
            <p class="text-center small">Enter your personal details to register account</p>
        </div>

        <form class="row g-3 needs-validation" novalidate>

        <div class="col-12">
            <a class="btn btn-light" href="https://accounts.google.com/v3/signin/identifier?dsh=S2114796561%3A1673573683519314&continue=https%3A%2F%2Fwww.google.com%3Fhl%3Den-US&ec=GAlA8wE&hl=en&flowName=GlifWebSignIn&flowEntry=AddSession">
                <img width="19px" alt="Google sign-up" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/512px-Google_%22G%22_Logo.svg.png" />
                &nbsp; Register with Google
            </a>
            &nbsp
            <a href="https://www.facebook.com/">
                <img width="19px" alt="Facebook sign-up" src="img/facebook.png" />
                </a>
                &nbsp;
                <a href="https://www.linkedin.com/">
                <img width="19px" alt="Linkedin sign-up" src="img/linkedin.png" />
                </a>
        </div>
        <br>
<!-- 
        <div class="col-12">
            <label class="form-label">Passport Photo</label>
            <input type="file"  class="form-control" name="photo" required>
            <div class="invalid-feedback">Upload your passport photo</div>
        </div> -->
        
        <div class="col-12">
            <label class="form-label">Full Name</label>
            <input type="text"  class="form-control" name="fullname" required>
            <div class="invalid-feedback">Please enter your name!</div>
        </div>
        <br>
        <div class="col-12">
            <label class="form-label">Email</label>
            <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend">@</span>
            <input type="emal"  class="form-control" name="email" required>
            <div class="invalid-feedback">Please enter your email!</div>
            </div>
        </div>
        <br>

        <div class="col-12">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" id="myInput" name="password"  required>
            <div class="invalid-feedback">Please enter your password!</div>
            <input class="form-check-input" type="checkbox" value="true" id="rememberMe" onclick="myFunction()">
            <label class="form-check-label" for="rememberMe">&nbspShow Password</label>
        </div>
        <br>

        <div class="col-12">
            <label class="form-label">Gender</label>
            <select class="form-select" name="gender" required>
                <option>Select your gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>       
            <div class="invalid-feedback">Please select your gender!</div>
        </div>
        <br>

        <div class="col-12">
            <label class="form-label">Date of Birth</label>
            <input class="form-control" type="date" name="dob">
            <div class="invalid-feedback">Please select your date of birth</div>
        </div>
        <br>

        <div class="col-12">
            <label class="form-label">Address</label>
            <textarea type="text" class="form-control" name="address"  required></textarea>
            <div class="invalid-feedback">Please enter your address!</div>
        </div>
        <br>

        <div class="col-12">
             <label class="form-label">Phone</label>
            <input type="text" class="form-control" name="phone" required>
            <div class="invalid-feedback">Please enter your phone number!</div>
        </div>
        <br>

        <div class="col-12">
            <label class="form-label">Position</label>
            <input type="text"  class="form-control" name="position" required>
            <div class="invalid-feedback">Please enter your position!</div>
        </div>
        <div class="col-12">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" value=""  name="terms" required>
            <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
            <div class="invalid-feedback">You must agree before submitting.</div>
            </div>
        </div>
        <br>

        <div class="col-12">
            <button type="submit" class="btn btn-primary w-100" >Register</button>
        </div>
        <div class="col-12">
            <p class="small mb-0">Already have an account? <a href="/">Log in</a></p>
        </div>
        </form>

        </div>
    </div>

</section>

</div>
</form>
</main>
<?php echo e(View:: make('footer')); ?><?php /**PATH C:\xampp\htdocs\final-project\resources\views/signup.blade.php ENDPATH**/ ?>
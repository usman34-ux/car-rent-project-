<?php
  // Configuration Variables
  $REGISTER_PREFIX = 'views/layouts/register';
  $REGISTER_ASSETS = 'assets/register_form';

  // Layout Initial
  include "$REGISTER_PREFIX/layout_start.php";
?>
<div class="limiter">
  <!-- Container -->
  <div class="container-login100">
    <!-- Background Image -->
    <div class="login100-more" style="background-image: url('<?=$REGISTER_ASSETS?>/images/bg-01.jpg');"></div>

    <!-- Form -->
    <div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
      <form class="login100-form validate-form" action="registration.php" method="POST">
        <span class="login100-form-title p-b-59">
          Register
        </span>

        <!-- First Name -->
        <div class="wrap-input100 validate-input" data-validate="Name is required">
          <span class="label-input100">First Name</span>
          <input class="input100" type="text" name="fname" placeholder="First Name" required>
          <span class="focus-input100"></span>
        </div>
        <!-- Last Name -->
        <div class="wrap-input100 validate-input" data-validate="Name is required">
          <span class="label-input100">Last Name</span>
          <input class="input100" type="text" name="lname" placeholder="Last name" required>
          <span class="focus-input100"></span>
        </div>

        <!-- Emali Address -->
        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
          <span class="label-input100">Email Address</span>
          <input class="input100" type="text" name="email" placeholder="Email Addess" required>
          <span class="focus-input100"></span>
        </div>

        <!-- CNIC -->
        <div class="wrap-input100 validate-input" data-validate="Username is required">
          <span class="label-input100">CNIC</span>
          <input class="input100" type="text" name="cnic" placeholder="Your CNIC" required>
          <span class="focus-input100"></span>
        </div>

        <!-- Phone No -->
        <div class="wrap-input100 validate-input" data-validate="Username is required">
          <span class="label-input100">Phone No</span>
          <input class="input100" type="text" name="phone" placeholder="Phone Number" required>
          <span class="focus-input100"></span>
        </div>

        <!-- Address -->
        <div class="wrap-input100 validate-input" data-validate="Username is required">
          <span class="label-input100">Address</span>
          <!-- <input class="input100" type="text" name="username" placeholder="Username..."> -->
          <textarea class="input100" style="height: 100px;" name="address" placeholder="Address" required></textarea>
          <span class="focus-input100"></span>
        </div>

        <div class="wrap-input100 validate-input" data-validate = "Password is required">
          <span class="label-input100">Password</span>
          <input class="input100" type="password" name="passcode" placeholder="*************" required>
          <span class="focus-input100"></span>
        </div>

        <div class="wrap-input100 validate-input" data-validate = "Repeat Password is required">
          <span class="label-input100">Repeat Password</span>
          <input class="input100" type="password" name="cpasscode" placeholder="*************" required>
          <span class="focus-input100"></span>
        </div>

        <!-- Terms of Services -->
        <div class="flex-m w-full p-b-33">
          <div class="contact100-form-checkbox">
            <input class="input-checkbox100" id="ckb1" type="checkbox" name="terms" required>
            <label class="label-checkbox100" for="ckb1">
              <span class="txt1">
                I agree to the
                <a href="#" class="txt2 hov1">
                  Terms of User
                </a>
              </span>
            </label>
          </div>
        </div>

        <div class="container-login100-form-btn">
          <!-- Submit Button -->
          <div class="wrap-login100-form-btn">
            <div class="login100-form-bgbtn"></div>
            <button class="login100-form-btn" type="submit">
              Register
            </button>
          </div>

          <!-- Login Button -->
          <a href="login.php" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
            Login
            <i class="fa fa-long-arrow-right m-l-5"></i>
          </a>
        </div>
      </form>
    </div>
  </div>
</div>

<?php
  // Layout End
  include "$REGISTER_PREFIX/layout_end.php";
?>
<?php
    include 'header.php';
?>
    <!--Register Form Section-->
    <div class="register-box">
        <div class="app-row-center">
            <div class="app-col">
                <h1 class="text-center">Sign Up Here</h1>
                <form action="register.php" method="POST">
                <div class="mb-3">
                    
                    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name.."  value="<?php echo $firstname ; ?>">
                    <?php if ( !empty($firstnameErr) ): ?>
                      <div class="form-errors"> <?php echo $firstnameErr; ?> </div>
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                   
                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name.." value="<?php echo $lastname ; ?>">
                    <?php if ( !empty($lastnameErr) ): ?>
                      <div class="form-errors"> <?php echo $lastnameErr; ?> </div>
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email.." value="<?php echo $email ; ?>">
                    <?php if ( !empty($emailErr) ): ?>
                      <div class="form-errors"> <?php echo $emailErr; ?> </div>
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                   
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password.." value="<?php echo $password ; ?>">
                    <?php if ( !empty($passwordErr) ): ?>
                      <div class="form-errors"> <?php echo $passwordErr; ?> </div>
                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <input type="submit" class="btn btn-primary app-btn" value="Register" name="register-submit">  
                </div>
                </form>
                <p class="acct">Have an account? <a href="login.php">Login Here</a></p>
            </div>
        </div>
    </div> 
<?php 
    include 'footer.php';
?>
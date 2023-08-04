<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
   <!-- Bootstrap CSS -->
   <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/login.css" rel="stylesheet">

  <!-- Jquery 3.4.1 -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- sales JS -->
  <script src="js/login.js"></script>	
</head>
<body>
  <div class="container form-login">
    <?php if(\Session::has('danger')): ?>
        <div class="alert alert-danger alert-dismissible fade show">
            <?php echo e(\Session::get('danger')); ?>

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
             </button>
        </div>
    <?php endif; ?>
    <div class="row">
      <div id="login_img" class="col-12 col-md-5">
          <div class="img_wrap">
              <img src="<?php echo e(asset('images/logo.png')); ?>"   alt="Starboard Asia" class="imagesLogo1">
          </div>
      </div>
      <div id="login_frm" class="col-12 col-md-7">
        <form action="<?php echo e(asset ('/login')); ?>" method="post">
          <?php echo csrf_field(); ?>
          <div class="form-group">
              <label for="u_user"><b>User name</b></label>
              <input type="text" class="form-control <?php echo e(($errors->first('u_user')) ? 'is-invalid'  :''); ?>" 
              id="u_user" name="u_user" value="<?php echo e(old('u_user')); ?>">
              <div class="invalid-feedback">
                  <?php $__errorArgs = ['u_user'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <?php echo e($message); ?>

                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>


          </div>
          <div class="form-group">
              <label for="u_pw"><b>Password</b></label>
              <input type="password" class="form-control <?php echo e(($errors->first('u_pw')) ? 'is-invalid'  :''); ?>" 
              id="u_pw" name="u_pw" value="<?php echo e(old('u_pw')); ?>">
              <div class="invalid-feedback">
                  <?php $__errorArgs = ['u_pw'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <?php echo e($message); ?>

                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
          </div>
          <div class="form-btn">
              <button type="submit" class="btn login_us">Login</button>
              
              
                
                  
                  
                  
                  
                    
                  
                
              
          </div>
          
        </form>
      </div>
    </div>
  </div>
</body>
</html>
<?php /**PATH /Users/SelinaNguyen/Documents/SBA/SBA_Interview/resources/views/pages/login.blade.php ENDPATH**/ ?>
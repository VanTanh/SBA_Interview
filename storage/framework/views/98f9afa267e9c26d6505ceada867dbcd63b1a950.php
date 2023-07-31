<?php if(Session::get('user') == null): ?>
<script type="text/javascript">
    window.location = "<?php echo e(url('/login')); ?>" //if not login -> back to login page
</script>
<?php endif; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <title><?php echo $__env->yieldContent('title'); ?></title>

    <!-- CSS  -->
    <base href="<?php echo e(asset('')); ?>">
      
    <!-- font-awesome CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap CSS -->


    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- master CSS -->
    <link href="css/master.css" rel="stylesheet">
    <!-- sales CSS -->
    <link href="css/sales.css" rel="stylesheet">
    <!-- staff CSS -->
    <link href="css/staff.css" rel="stylesheet">
    <!-- course CSS -->
    <link href="css/course.css" rel="stylesheet">
    <!-- jquery CSS -->
	  <link href="css/jquery-ui.css" rel="stylesheet">
      <!-- sales CSS -->
      <link href="css/sales.css" rel="stylesheet">


	  <!-- JavaScript-->
	  <!-- Jquery 3.4.1 -->
    <script src="js/jquery-3.4.1.min.js"></script>
	  <script src="js/jquery-ui.js"></script>
    <!-- moment JS -->
    <script src="js/moment.min.js"></script>
    <!-- numeraljs -->
    <script src="js/numeral.min.js"></script>
    <!-- Bootstrap JS  -->
    <script src="js/bootstrap.js"></script>
    <!-- Master JS  -->
    
    <!-- sales JS -->
    
      <script src="js/page.js"></script>
    <!-- Datatable JS -->
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>


      
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" integrity="sha256-yMjaV542P+q1RnH6XByCPDfUFhmOafWbeLPmqKh11zo=" crossorigin="anonymous" />
      
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      
      <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js" integrity="sha256-4iQZ6BVL4qNKlQ27TExEhBN1HFPvAvAMbFavKKosSWQ=" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js" integrity="sha256-5YmaxAwMjIpMrVlK84Y/+NjCpKnFYa8bWWBbUHSBGfU=" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.js" integrity="sha256-2JRzNxMJiS0aHOJjG+liqsEOuBb6++9cY4dSOyiijX4=" crossorigin="anonymous"></script>



  </head>
  <body>
  
  <div class="container-fluid">
      <div class="row header-wrap">
          <div class="col-md-3 col-lg-2 col-sm-12 float-md-left float-sm-none">
              <div  class="logo1 center_content">
                  <img src="images/logo.png"  width="100%" alt="" class="img-responsive">
              </div>
          </div>
          <div id="title1" class="col-lg-6 col-md-5 col-sm-12 float-md-left float-sm-none">
              <div id="title_cls1" class="title_cls1 text-md-left text-center">Interview Management</div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 ">
                  <div  class="row" >
                      <div class="col-12 col-md-11">
                          <div class="text-center text-md-right">
                              <?php if(Session::get('user')): ?>
                                  <?php echo e(Session::get('user')->u_name); ?>

                              <?php endif; ?>
                              <img src="images/user.svg"  class=" " style="width: 50px;margin:0  20px;">
                              <a id="user-logout1" class="user-logout1" href="<?php echo e(asset('/logout')); ?>">Logout</a>
                          </div>
                      </div>
                  </div>
              
          </div>
      </div>
      <div class="row d-block d-lg-none">
        <div class="col-12 ">
                  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
                      <a class="navbar-brand" href="#">Menu</a>
                      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                      </button>

                      <div class="navbar-collapse collapse" id="navbarColor03" style="">
                          <ul class="navbar-nav mr-auto">
                              <li class="nav-item <?php echo e((request()->is('interview-management*')) ? 'active' : ''); ?>">
                                  <a class="nav-link " href="interview-management">Interview Management <?php if((request()->is('interview-management*'))): ?> <span class="sr-only">(current)</span><?php endif; ?></a>
                              </li>
                              <li class="nav-item <?php echo e((request()->is('tech-list*')) ? 'active' : ''); ?>">
                                  <a class="nav-link " href="tech-list">Skill questions <?php if((request()->is('tech-list*'))): ?> <span class="sr-only">(current)</span><?php endif; ?></a>
                              </li>
                              <li class="nav-item <?php echo e((request()->is('iq-list*')) ? 'active' : ''); ?>">
                                  <a class="nav-link " href="iq-list">IQ questions <?php if((request()->is('iq-list*'))): ?> <span class="sr-only">(current)</span><?php endif; ?></a>
                              </li>
                              <li class="nav-item <?php echo e((request()->is('result-list*')) ? 'active' : ''); ?>">
                                  <a class="nav-link " href="result-list">Results <?php if((request()->is('result-list*'))): ?> <span class="sr-only">(current)</span><?php endif; ?></a>
                              </li>
                              <li class="nav-item <?php echo e(route('adminME')); ?>">
                                  <a class="nav-link " href="<?php echo e(route('adminME')); ?>">Mail/Export</a></li>
                              </li>
                          </ul>

                      </div>
                  </nav>
              </div>
      </div>


    
        
            
        
        
        
        
        
            
            
            
            
        
        
        
            
        
        
        
          
        
  	
    

    <div class="row">
        <div class="col-2 d-lg-block d-none res-menu">
          <div class="menu">
            <ul class="menu-left">
                <li><a class="<?php echo e((request()->is('interview-management*')) ? 'active' : ''); ?>" href="interview-management">Interview Management</a></li>
                <li><a class="<?php echo e((request()->is('tech-list*')) ? 'active' : ''); ?>" href="tech-list">Skill questions</a></li>
                <li><a class="<?php echo e((request()->is('iq-list*')) ? 'active' : ''); ?>" href="iq-list">IQ questions</a></li>
                <li><a class="<?php echo e((request()->is('result-list*')) ? 'active' : ''); ?>" href="result-list">Results</a></li>
                <li><a href="<?php echo e(route('adminME')); ?>">Mail/Export</a></li>
            </ul>

          </div>

        </div>
        <div class="col-12 col-lg-10 bg-white">
          <div class="main ml-0 ml-lg-3 p-0 pt-2 p-lg-1">
    		    <?php echo $__env->yieldSection(); ?>
    		    <?php echo $__env->yieldContent('content'); ?>
          </div>
        </div>
    </div>
  </div>
  </body>
</html>

<?php /**PATH D:\StarBoardAsia\SBAinterview\resources\views/master.blade.php ENDPATH**/ ?>
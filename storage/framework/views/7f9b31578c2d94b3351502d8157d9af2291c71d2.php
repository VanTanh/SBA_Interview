<?php if(Session::get('user') == null): ?>
<script type="text/javascript">
    window.location = "<?php echo e(url('/login')); ?>" //if not login -> back to login page
</script>
<?php endif; ?>
<!DOCTYPE html>
<html lang="en">
<head>
            <meta charset="utf-8">

            <meta http-equiv="X-UA-Compatible" content="IE=edge">

            <meta name="viewport" content="width=device-width, initial-scale=1"> 

            <title><?php echo $__env->yieldContent('title'); ?></title>
            <script src="https://cdn.tailwindcss.com"></script>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" integrity="sha256-yMjaV542P+q1RnH6XByCPDfUFhmOafWbeLPmqKh11zo=" crossorigin="anonymous" />

             <!-- Font Awesome -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <!-- CSS  -->
            <base href="<?php echo e(asset('')); ?>">
            
            <!-- font-awesome CSS -->
            <link href="css/font-awesome.min.css" rel="stylesheet">
            <!-- Bootstrap CSS -->


            <link href="css/bootstrap.min.css" rel="stylesheet">
            <!-- master CSS -->
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
  
  <div class="lg:ml-[128px]">
    <div id="sidebar" class="hidden lg:block">
        <div class="z-50 mr-[247px] top-0 left-0 bg-white pt-4 transition-transform xl:translate-x-0 border-r border-solid w-[247px] font-poppins fixed">
                <div class="ml-1" id="menuList">
                    <div class="ml-[40px] icons inline-flex pb-2">
                        <img class="w-[167px] h-[80px] p-r" src="images/Logo.jpg" alt="Starboard">
                    </div>
                    <a href="<?php echo e(url('')); ?>" class="items-center hover:text-white">
                        <div class="flex flex-row  gap-2 ml-[16px] w-[215px] h-[40px] menu hover:bg-[#1900D5] hover:text-white items-center cursor-pointer mt-4 mb-2 rounded py-2 px-4 text-sm/[16px] font-[500] text-gray-custom leading-3">
                                <div class="mr-1">
                                    <i class="fas fa-home"></i>
                                </div>
                                <span class="text-sm font-medium">Dashboard</span>
                        </div>
                    </a>
                    <a href="<?php echo e(url('')); ?>" class="items-center hover:text-white">
                        <div class="flex flex-row  gap-2 ml-[16px] w-[215px] h-[40px] menu hover:bg-[#1900D5] hover:text-white items-center cursor-pointer mt-4 mb-2 rounded py-2 px-4 text-sm/[16px] font-[500] text-gray-custom leading-3">
                            <div class="mr-1">
                                <i class="fas fa-chart-pie"></i>
                            </div>
                            <span class="text-sm font-medium">Analytics</span>
                        </div>
                    </a>
                    <a href="<?php echo e(url('')); ?>" class="items-center hover:text-white">
                        <div class="flex flex-row  gap-2 ml-[16px] w-[215px] h-[40px] menu hover:bg-[#1900D5] hover:text-white items-center cursor-pointer mt-4 mb-2 rounded py-2 px-4 text-sm/[16px] font-[500] text-gray-custom leading-3">
                            <div class="mr-1">
                                <i class="fas fa-box"></i>
                            </div>
                            <span class="text-sm font-medium">Project</span>
                        </div>
                    </a>
                    <a href="<?php echo e(url('')); ?>" class="items-center hover:text-white">
                        <div class="flex flex-row  gap-2 ml-[16px] w-[215px] h-[40px] menu hover:bg-[#1900D5] hover:text-white items-center cursor-pointer mt-4 mb-2 rounded py-2 px-4 text-sm/[16px] font-[500] text-gray-custom leading-3">
                            <div class="mr-1">
                                <i class="fas fa-wallet"></i>
                            </div>
                            <span class="text-sm font-medium">Check in/Out</span>
                        </div>
                    </a>
                    <a href="<?php echo e(url('')); ?>" class="items-center hover:text-white">
                        <div class="flex flex-row  gap-2 ml-[16px] w-[215px] h-[40px] menu hover:bg-[#1900D5] hover:text-white items-center cursor-pointer mt-4 mb-2 rounded py-2 px-4 text-sm/[16px] font-[500] text-gray-custom leading-3">
                            <div class="mr-1">
                                <i class="fas fa-user-circle"></i>
                            </div>
                            <span class="text-sm font-medium">Staff List</span>
                        </div>
                    </a>
                    <a href="<?php echo e(url('')); ?>" class="items-center hover:text-white">
                        <div class="flex flex-row  gap-2 ml-[16px] w-[215px] h-[40px] menu hover:bg-[#1900D5] hover:text-white items-center cursor-pointer mt-4 mb-2 rounded py-2 px-4 text-sm/[16px] font-[500] text-gray-custom leading-3">
                            <div class="mr-1">
                                <i class="fas fa-th"></i>
                            </div>
                            <span class="text-sm font-medium">Leave Management</span>
                        </div>
                    </a>
                    <a href="<?php echo e(url('/interview')); ?>" class="items-center hover:text-white">
                        <div class="flex flex-row  gap-2 ml-[16px] w-[215px] h-[40px] menu hover:bg-[#1900D5] hover:text-white items-center cursor-pointer mt-4 mb-2 rounded py-2 px-4 text-sm/[16px] font-[500] text-gray-custom leading-3">
                            <div class="mr-1">
                                <i class="fas fa-cog"></i>
                            </div>
                            <span class="text-sm font-medium">Interview</span>
                        </div>
                    </a>
                    <a href="<?php echo e(url('')); ?>" class="items-center hover:text-white">
                        <div class="flex flex-row  gap-2 ml-[16px] w-[215px] h-[40px] menu hover:bg-[#1900D5] hover:text-white items-center cursor-pointer mt-4 mb-2 rounded py-2 px-4 text-sm/[16px] font-[500] text-gray-custom leading-3">
                            <div class="mr-1">
                                <i class="fas fa-cog"></i>
                            </div>
                            <span class="text-sm font-medium">Setting</span>
                        </div>
                    </a>
                    <div class="border-t"></div>
                    <a href="<?php echo e(asset('/logout')); ?>" class="items-center hover:text-white">
                        <div class="flex flex-row  gap-2 ml-[16px] w-[215px] h-[40px] menu hover:bg-[#1900D5] hover:text-white items-center cursor-pointer mt-4 mb-2 rounded py-2 px-4 text-sm/[16px] font-[500] text-gray-custom leading-3">
                            <div class="mr-1">
                                <i class="fa-solid fa-right-from-bracket"></i>
                            </div>
                            <span class="text-sm font-medium">Logout</span>
                        </div>
                    </a>
                </div>
        </div>
    </div>
    <div id="Content" class="">
        <div class="lg:ml-28 z-20 fixed top-0 w-full flex flex-row items-center bg-white min-[1024px]:hidden">
            <button id="toggleSidebar" class="ml-8   bg-white">
                <i class="fa-solid fa-bars text-2xl mt-2"></i> 
            </button>
            <div class="icons inline-flex pb-2 mt-4 bg-white max-[1024px]:ml-8">
                <img class="w-28 h-14 pr-2" src="images/Logo.jpg" alt="Starboard">
            </div>
        </div>
        <div class="lg:ml-28 bg-white z-10 max-[1024px]:mt-16 sticky top-0 max-[1024px]:top-16">
            <div class="flex flex-row justify-between items-center px-4 h-[110px] bg-white">
                <div class="font-bold text-xl mb-2 ml-1">Interview Management</div>
                <div class="flex items-center">
                    <img src="images/user.svg" class="w-10 h-10 mx-2" alt="User">
                    <?php if(Session::get('user')): ?>
                        <?php echo e(Session::get('user')->u_name); ?>

                    <?php endif; ?>
                </div>
            </div>
        </div>

        <div class="lg:ml-28 bg-white">
            <div class="col-12 bg-slate-100 w-screen">
                <div class="ml-0 ml-lg-3 p-0 pt-2 p-lg-1">
                    <?php echo $__env->yieldSection(); ?>
                    <?php echo $__env->yieldContent('content'); ?>
                </div>
            </div>
        </div>

    </div>

  </div>
  <script src="js/master.js"></script>
</body>
</html><?php /**PATH /Users/SelinaNguyen/Documents/SBA/SBA_Interview/resources/views/master.blade.php ENDPATH**/ ?>
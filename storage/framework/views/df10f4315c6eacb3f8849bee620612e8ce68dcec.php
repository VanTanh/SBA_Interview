<header class="header">
     <div class="user_info">
            <div class="wrap_box">
                <div class="text-center text-md-right">
                    <?php if(Session::get('user')): ?>
                        <?php echo e(Session::get('user')->u_name); ?>

                    <?php endif; ?>
                     <img src="<?php echo e(asset('images/user.svg')); ?>"  class=" " style="width: 50px;margin:0  20px;">
                    <a id="user-logout1" class="user-logout1" href="<?php echo e(asset('/logout')); ?>">Logout</a>
                </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="logo">
                    <img src="<?php echo e(asset('images/logo.png')); ?>" alt="Starboard Asia" class="imagesLogo">
                    <div><strong>Starboard Asia Co.,Ltd.</strong></div>
                    <div><i class="fa fa-map-marker" aria-hidden="true"></i> 2F QTSC 1 Bldg,Hail 14,Quang Trung Software City,Tan Chanh Hiep Ward,District 12, Ho Chi Minh City, Vietnam</div>
                </div>
            </div>
        </div>
    </div>
    
</header><?php /**PATH /Users/SelinaNguyen/Documents/SBA/SBA_Interview/resources/views/user/includes/header.blade.php ENDPATH**/ ?>
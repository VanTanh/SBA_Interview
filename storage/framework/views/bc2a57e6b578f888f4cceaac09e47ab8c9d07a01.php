<?php $__env->startSection('title', 'Interview Management'); ?>
<?php $__env->startSection('content'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./assets/Image/peace.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="text-[16px] h-screen">
        <h1 class="text-[24px] ml-16 mt-[42px] max-[640px]:ml-36">
            Interview Menu
        </h1>
        <div class="ml-[50px] lg:ml-[97px] max-[640px]:flex-col">
            <div class="flex flex-1 max-[640px]:flex-col">
                <div>
                <a class="<?php echo e((request()->is('interview-management*')) ? 'active' : ''); ?>" href="<?php echo e(url('/interview-management')); ?>">
                    <button class="mt-[46px] bg-[#0028B6] hover:bg-[#FE881C] text-white font-bold w-24 max-[640px]:w-64 max-[640px]:ml-16 sm:w-52  lg:w-64 h-[64px] text-center rounded">
                        Interview List
                    </button>
                </a>
                </div>
                <div class="ml-24">
                    <a class="<?php echo e((request()->is('tech-list*')) ? 'active' : ''); ?>" href="<?php echo e(url('/tech-list')); ?>">
                        <button class="mt-[46px] bg-[#0028B6] hover:bg-[#FE881C] text-white font-bold w-24 max-[640px]:w-64 max-[640px]:ml-16 sm:w-52  lg:w-64 h-[64px] text-center rounded">
                            Skill Question List
                        </button>
                    </a>

                </div>
            </div>
            <div class="flex flex-1 max-[640px]:flex-col">
                <div>
                     <a class="<?php echo e((request()->is('iq-list*')) ? 'active' : ''); ?>" href="<?php echo e(url('/iq-list')); ?>">
                        <button class="mt-[46px] bg-[#0028B6] hover:bg-[#FE881C] text-white font-bold w-24 max-[640px]:w-64 max-[640px]:ml-16 sm:w-52  lg:w-64 h-[64px] text-center rounded">
                            IQ Question List
                        </button>
                    </a>

                </div>
                <div class="ml-24">
                    <a class="<?php echo e((request()->is('result-list*')) ? 'active' : ''); ?>" href="<?php echo e(url('/result-list')); ?>">
                        <button class="mt-[46px] bg-[#0028B6] hover:bg-[#FE881C] text-white font-bold w-24 max-[640px]:w-64 max-[640px]:ml-16 sm:w-52  lg:w-64 h-[64px] text-center rounded">
                            Result
                        </button>
                    </a>
                </div>
            </div>
            <div>
                <a  href="<?php echo e(route('adminME')); ?>">
                    <button class="mt-[46px] bg-[#0028B6] hover:bg-[#FE881C] text-white font-bold w-24 max-[640px]:w-64 max-[640px]:ml-16 sm:w-52  lg:w-64 h-[64px] text-center rounded">
                        Mail/Export
                    </button>
                </a>

            </div>
        </div>
    </div>
</body>
</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/SelinaNguyen/Documents/SBA/SBA_Interview/resources/views/pages/Interview.blade.php ENDPATH**/ ?>
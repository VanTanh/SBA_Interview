
<?php $__env->startSection('menu'); ?>
<?php $__env->startSection('title','IQ questions'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('title\',\'IQ questions'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="">
        <div class="header-index">
        <div class="header-title">
                    <span>IQ questions</span>
                </div>
            <a class="btn btn-primary add-new-btn" href="<?php echo e(url('iq-list/new')); ?>" role="button">Create new</a>
            <?php if(\Session::has('success')): ?>
                <div class=" alert alert-success alert-dismissible fade show mt-2 mt-md-0">
                    <?php echo e(\Session::get('success')); ?>

                </div>    
            <?php endif; ?>
        </div>



        <?php if(isset($list_iq) && $list_iq_count > 0): ?>
        <div class="row">
            <div class="col-12">
        <div class="table-responsive">
            <table id ="table_list_iq" class="table table-bordered table-hover ">
                <thead class="table-header">
                    <tr>
                        <th width="5%" scope="col">No.</th>
                        <th width="30%" scope="col">Content</th>
                        <th width="20%" scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php
                        $page = request()->get("page");
                        if ($page)
                            $index = $page * 10 - 9;
                        else
                            $index = 1;

                    ?>



                    <?php $__currentLoopData = $list_iq; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $iq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th width="5%"><?php echo e($index < 10 ? '0' . $index : $index); ?></th>
                            <td width="10%" class="iq_content_style text-left pl-2 pr-2"><?php echo html_entity_decode($iq->content); ?></td>
                            <td id="link" width="10%"><a href="<?php echo e(url('iq-list/edit/' . $iq->id)); ?>">Edit  </a> /&nbsp;
                            <a href="<?php echo e(url('iq-option-list/'.$iq->id)); ?>">Options management</a> /
                                <a href="<?php echo e(url('iq-list/delete/' . $iq->id.'/'.$current_page)); ?>" style="color: red;" onclick="return confirm('Are you sure to delete this item?')">Delete</a>
                            </td>
                        </tr>
                        <?php
                            $index++;
                        ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            </div>
            </div>
            </div>
            <div class="pagination-container">
                <div><?php echo e($list_iq->links()); ?></div>
            </div>
            <?php else: ?>
            <div class="row">
                <div class="md-12">
                    <div class="padding-20">
                        There are no results
                    </div>

                </div>
            </div>
        <?php endif; ?>
    </div>
    <style type="text/css">

        .iq_content_style img{
            max-width: 100%;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\StarBoardAsia\SBAinterview\resources\views/pages/iq_list.blade.php ENDPATH**/ ?>
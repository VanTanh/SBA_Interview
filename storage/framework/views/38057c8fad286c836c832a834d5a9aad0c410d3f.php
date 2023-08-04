<?php $__env->startSection('title','Skill questions'); ?>
<?php $__env->startSection('menu'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('menu'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="h-screen">
        <div class="header-index">
        <div class="header-title">
                    <span>Skill questions</span>
                </div>
            <a class="btn btn-primary add-new-btn d-none d-md-block" href="<?php echo e(url('tech-list/new')); ?>" role="button">Create new</a>
            <div class=" d-block d-md-none mt-2">
                 <a class="btn btn-primary add-new-btn" href="<?php echo e(url('tech-list/new')); ?>" role="button">Create new</a>  
            </div>
            <?php if(\Session::has('success')): ?>
                <div class=" alert alert-success alert-dismissible fade show mt-2 mt-md-0 ">
                
                    <?php echo e(\Session::get('success')); ?>

                </div>    
            <?php endif; ?>

        </div>
        <div class="card card-default mb-4">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <form method="get" id="search_form" action="">
                            <?php echo csrf_field(); ?>

                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group ">
                                        <label for="type">SKill</label>
                                        <div class="d-block">
                                            <div class="d-inline-block align-middle"><select class="form-control" name="type" >
                                                    <option value="" >Please choose a skill</option>
                                                    <?php $__currentLoopData = $cst_lang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>{
                                                    <option value="<?php echo e($k); ?>" <?php echo e(old('type',$req_arr['type']) == $k ? "selected"  : ""); ?>><?php echo e($v); ?></option>
                                                    }
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select></div>

                                            <div class="d-inline-block align-middle"> <button type="submit" name="submit" class="btn btn-primary">Search</button></div>
                                        </div>
                                        </div>

                                </div>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>


        <?php if(isset($list_tech) && $list_tech_count > 0): ?>
        <div class="row">
            <div class="col-12">
        <div class="table-responsive ">
            <table id ="table_list_tech" class="table table-bordered table-hover ">
                <thead class="table-header">
                    <tr>
                        <th width="5%" scope="col">No.</th>
                        <th width="30%" scope="col">Content</th>
                        <th width="30%" scope="col">Skill</th>
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



                    <?php $__currentLoopData = $list_tech; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tech): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th width="5%"><?php echo e($index < 10 ? '0' . $index : $index); ?></th>
                            <td width="10%" class="text-left pl-2 pr-2"><?php echo $tech->content; ?></td>
                            <td width="10%"><?php echo e($tech->type); ?></td>
                            <td id="link" width="10%"><a href="<?php echo e(url('tech-list/edit/' . $tech->id)); ?>">Edit  </a> /&nbsp;<a href="<?php echo e(url('tech-list/delete/' . $tech->id.'/'.$current_page)); ?>" style="color: red;"  onclick="return confirm('Are you sure to delete this item?')">Delete</a></td>
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
                <div><?php echo e($list_tech->appends(Request::except('page'))->links()); ?></div>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/SelinaNguyen/Documents/SBA/SBA_Interview/resources/views/pages/tech_list.blade.php ENDPATH**/ ?>
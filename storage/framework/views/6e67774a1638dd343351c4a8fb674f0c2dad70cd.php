<?php $__env->startSection('menu'); ?>
<?php $__env->startSection('title','Test result list'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('title\',\'Test result list'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="h-screen">
        <div class="header-index">
        <div class="header-title">
                    <span>Test result list</span>
                </div>
            
            
                
                    
                
            
        </div>
        <div class="card card-default mb-4">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <form method="get" id="search_form" action="">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <label for="firstname">First name</label>
                                        <input type="text" class="form-control" id="candidate_firstname"  name="candidate_firstname" value="<?php echo e(old('candidate_firstname',$req_arr['candidate_firstname'])); ?>" placeholder="First name">
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <label for="lastname">Last name</label>
                                        <input type="text" class="form-control" id="candidate_lastname"  name="candidate_lastname" value="<?php echo e(old('candidate_lastname',$req_arr['candidate_lastname'])); ?>" placeholder="Last name">
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input type="text" class="form-control" id="candidate_address"  name="candidate_address" value="<?php echo e(old('candidate_address',$req_arr['candidate_address'])); ?>" placeholder="Address">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <label for="tel">Tel</label>
                                        <input type="text" class="form-control <?php echo e(($errors->first('candidate_tel')) ? 'is-invalid'  :''); ?>" id="candidate_tel" name="candidate_tel" value="<?php echo e(old('candidate_tel',$req_arr['candidate_tel'])); ?>" placeholder="Tel">
                                        <div class="invalid-feedback">
                                            <?php $__errorArgs = ['candidate_tel'];
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
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <label for="mail">Mail</label>
                                        <input type="text" class="form-control <?php echo e(($errors->first('candidate_mail')) ? 'is-invalid'  :''); ?>" id="candidate_mail" name="candidate_mail" value="<?php echo e(old('candidate_mail',$req_arr['candidate_mail'])); ?>"  placeholder="Mail">
                                        <div class="invalid-feedback">
                                            <?php $__errorArgs = ['candidate_mail'];
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
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <label for="language">Language</label>
                                        <select class="form-control" name="candidate_language" >
                                            <option value="0" >Please choose language</option>
                                            <?php $__currentLoopData = $cst_lang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>{
                                            <option value="<?php echo e($k); ?>" <?php echo e(old('candidate_language',$req_arr['candidate_language']) == $k ? "selected"  : ""); ?>><?php echo e($v); ?></option>
                                            }
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                
                                    
                                        
                                        
                                    
                                
                                <div class="col-12">
                                    <button type="submit" name="submit" class="btn btn-primary">Search</button>
                                    <a role="button" href="<?php echo e(url('result-list')); ?>" class="btn btn-secondary btn-form" >Reset</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <?php if(isset($list_result) && $list_result_count > 0): ?>
        <div class="row">
            <div class="col-12">
        <div class="table-responsive">
            <table id ="table_list_result" class="table table-bordered table-hover ">
                <thead class="table-header">
                    <tr>
                        <th width="5%" scope="col">No.</th>
                        <th width="10%" scope="col">Candidate ID</th>
                        <th width="10%" scope="col">First name</th>
                        <th width="10%" scope="col">Last name</th>
                        <th width="10%" scope="col">Tel</th>
                        <th width="10%" scope="col">Address</th>
                        <th width="10%" scope="col">Mail</th>
                        <th width="10%" scope="col">Language</th>
                        <th width="10%" scope="col">DOB</th>
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
                    function getProgammingLanguage($lang,$lang_arr){
                        $lg = '';
                        foreach ($lang_arr as $k => $v){
                            if($lang == $k){
                            $lg = $v;
                            }
                        }
                        return $lg;
                    }

                    ?>



                    <?php $__currentLoopData = $list_result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th width="5%"><?php echo e($index < 10 ? '0' . $index : $index); ?></th>
                            <td width="10%"><?php echo e($result->candidate_id); ?></td>
                            <td width="10%"><?php echo e($result->candidate_firstname); ?></td>
                            <td width="10%"><?php echo e($result->candidate_lastname); ?></td>
                            <td width="10%"><?php echo e($result->candidate_tel); ?></td>
                            <td width="10%"><?php echo e($result->candidate_address); ?></td>
                            <td width="10%"><?php echo e($result->candidate_mail); ?></td>
                            <td width="10%"><?php echo e(getProgammingLanguage($result->candidate_language ,$cst_lang)); ?></td>
                            <td width="10%"><?php echo e($result->candidate_dob); ?></td>
                            <td id="link" width="20%">
                                <a href="<?php echo e(url('result-iq/' . $result->id)); ?>">IQ Test result  </a> /
                                <a href="<?php echo e(url('result-tech/'.$result->id)); ?>" style="color: <?php echo e($result->is_marked ? 'red' : ''); ?>">Tech test result</a>
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
                <div><?php echo e($list_result->appends(Request::except('page'))->links()); ?></div>
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
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/SelinaNguyen/Documents/SBA/SBA_Interview/resources/views/pages/result_list.blade.php ENDPATH**/ ?>
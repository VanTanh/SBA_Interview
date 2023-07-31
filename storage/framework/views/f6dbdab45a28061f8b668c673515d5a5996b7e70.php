
<?php $__env->startSection('title','Candidate Registration'); ?>
<?php $__env->startSection('menu'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('menu'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="">
        <div class="row">
            <div id="staff_new_edit_frm" class="col-xl-10 col-lg-12 col-md-12 col-sm-12">
                <h2 class="border-bottom">
                    Candidate Registration
                </h2>
                <?php if(\Session::has('success')): ?>
                    <div class=" alert alert-success alert-dismissible fade show mt-2 mt-md-0">
                        <?php echo e(\Session::get('success')); ?>

                    </div>
                <?php endif; ?>
                <form method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend w-25">
                                <span class="input-group-text">Candidate ID</span>
                            </div>
                            <input type="text" readonly  class="form-control form-control " name="candidate_id" value="<?php echo e($candidate_id); ?>">
                            <input  type="hidden"  class="form-control form-control " name="in_id" value="<?php echo e($candidate_id); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend w-25">
                                <span class="input-group-text">CV No.</span>
                            </div>
                            <input type="text"  class="form-control form-control " name="in_cvno" value="<?php echo e(old('in_cvno')); ?>">

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend w-25">
                                <span class="input-group-text">CV channel</span>
                            </div>
                            <div class="form-control wrapper-select">
                                <select class="select-cvchannel" name="in_cvchannel">
                                    <option value="0">Please choose CV channel</option>
                                    <?php $__currentLoopData = $cst_cvchannel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kcn => $vcn): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($kcn); ?>" <?php echo e($kcn == old('in_cvchannel') ? 'selected' : ''); ?>>
                                            <?php echo e($vcn); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend w-25">
                                <span class="input-group-text">CV link</span>
                            </div>
                            <input type="text"  class="form-control" name="in_cvlink" value="<?php echo e(old('in_cvlink')); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend w-25">
                                <span class="input-group-text">Last name<span class="text-danger"> *</span></span>
                            </div>
                            <input type="text" maxlength="200" class="form-control <?php echo e(($errors->first('in_lastname')) ? 'is-invalid'  :''); ?>"
                                   name="in_lastname" value="<?php echo e(old('in_lastname')); ?>" >
                            <div class="invalid-feedback">
                                <?php $__errorArgs = ['in_lastname'];
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
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend w-25">
                                <span class="input-group-text">First name<span class="text-danger"> *</span></span>
                            </div>
                            <input type="text" maxlength="200" class="form-control <?php echo e(($errors->first('in_firstname')) ? 'is-invalid'  :''); ?>"
                                name="in_firstname" value="<?php echo e(old('in_firstname')); ?>" >
                            <div class="invalid-feedback">
                                <?php $__errorArgs = ['in_firstname'];
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

                    
                        
                            
                                
                            
                            
                        
                    
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend w-25">
                                <span class="input-group-text">DOB</span>
                            </div>
                            
                            <input id="in_dob"  type="text" class="form-control datetimepicker-input-dob <?php echo e(($errors->first('in_dob')) ? 'is-invalid'  :''); ?>"
                                   name="in_dob"  value="<?php echo e(old('in_dob')); ?>">
                            <div class="input-group-append" data-target="#in_dob" onclick="$('#in_dob').focus();">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                            <div class="invalid-feedback">
                                <?php $__errorArgs = ['in_dob'];
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

                    <div class="form-group">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend w-25">
                                <span class="input-group-text">Salary(VNĐ/USD)</span>
                            </div>
                            <input type="text"  class="form-control <?php echo e(($errors->first('in_salary')) ? 'is-invalid'  :''); ?> "  name="in_salary" value="<?php echo e(old('in_salary')); ?>" >
                            <div class="invalid-feedback">
                                <?php $__errorArgs = ['in_salary'];
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


                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend w-25">
                                <span class="input-group-text">Education</span>
                            </div>
                            <textarea class="form-control"  name="in_education" rows=4><?php echo e(old('in_education')); ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend w-25">
                                <span class="input-group-text">Experience</span>
                            </div>
                            <textarea class="form-control"  name="in_experience" rows=4><?php echo e(old('in_experience')); ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend w-25">
                                <span class="input-group-text">Skill<span class="text-danger"> *</span></span>
                            </div>
                            <div class="form-control wrapper-select">
                                <select class="select-language" name="in_language">
                                    <?php $__currentLoopData = $cst_lang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $klg => $vlg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($klg); ?>" <?php echo e($klg == old('in_language') ? 'selected' : ''); ?> >
                                            <?php echo e($vlg); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend w-25">
                                <span class="input-group-text">University</span>
                            </div>
                            <textarea class="form-control"  name="in_university" rows=4><?php echo e(old('in_university')); ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend w-25">
                                <span class="input-group-text">Mail</span>
                            </div>
                            <input type="text"  class="form-control <?php echo e(($errors->first('in_mail')) ? 'is-invalid'  :''); ?> "  name="in_mail" value="<?php echo e(old('in_mail')); ?>" >
                            <div class="invalid-feedback">
                                <?php $__errorArgs = ['in_mail'];
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

                    <div class="form-group">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend w-25">
                                <span class="input-group-text">Tel</span>
                            </div>
                            <input type="text" maxlength="15" class="form-control  <?php echo e(($errors->first('in_tel')) ? 'is-invalid'  :''); ?> "  name="in_tel" value="<?php echo e(old('in_tel')); ?>" >
                            <div class="invalid-feedback">
                                <?php $__errorArgs = ['in_tel'];
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
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend w-25">
                                <span class="input-group-text">Address</span>
                            </div>
                            <input type="text"  class="form-control "  name="in_address" value="<?php echo e(old('in_address')); ?>" >

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend w-25">
                                <span class="input-group-text">Status</span>
                            </div>
                            <div class="form-control wrapper-select">
                                <select class="select-status" name="in_status">
                                    <option value="0">Please choose a status</option>
                                    <?php $__currentLoopData = $cst_status; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kst => $vst): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($kst); ?>" <?php echo e($kst == old('in_status') ? 'selected' : ''); ?>>
                                            <?php echo e($vst); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend w-25">
                                <span class="input-group-text">Interview time</span>
                            </div>
                            <input type="text"  class="form-control "  name="in_time" value="<?php echo e(old('in_time')); ?>"  id='in_time'>
                            <div class="input-group-append" data-target="#in_time" onclick="$('#in_time').focus();">
                                <span class="input-group-text"><i class="far fa-clock"></i></span>
                            </div>

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend w-25">
                                <span class="input-group-text">Interview date</span>
                            </div>
                            
                            <input id="in_date" readonly type="text" class="form-control datetimepicker-input"
                                   name="in_date" autocomplete="off" value="<?php echo e(old('in_date', $currentTime)); ?>">
                            <div class="input-group-append" data-target="#in_date" onclick="$('#in_date').focus();">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend w-25">
                                <span class="input-group-text">Note</span>
                            </div>
                            <textarea class="form-control"  name="in_note" rows=4 ><?php echo e(old('in_note')); ?></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend w-25">
                                <span class="input-group-text">Extra skill</span>
                            </div>
                            <textarea class="form-control"  name="in_extraskill" rows=4><?php echo e(old('in_extraskill')); ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend w-25">
                                <span class="input-group-text">Personality</span>
                            </div>
                            <textarea class="form-control"  name="in_personality" rows=4><?php echo e(old('in_personality')); ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="firstname">Attach CV file :</label>
                        <div class=" justify-content-center my-auto">
                            <div class="">
                                <label for="upload" class="btn btn-sm btn-primary">Upload Image</label>
                                <input type="file" class="text-center form-control-file custom_file" id="upload" name="in_file">
                                <label for="file_default">No File Choosen </label>
                                <label for="file_name"><b></b></label>
                            </div>
                            <input type="hidden" name="temp_file_old" value="<?php echo e(session::get('file_data_old')); ?>" >
                            <input type="hidden" name="temp_file_new" value="<?php echo e(session::get('file_data_old')); ?>" >
                            <!-- <input id="upload" name="in_file" value="" type="file" class="file align-middle d-inline-block" data-show-preview="false"> -->
                        </div>
                    </div>

                    
                        
                            
                                
                            
                            
                                
                            
                        
                    

                    <div class="form-group-button">
                        <button type="submit" class="btn btn-primary btn-form btn-left">Create new</button>
                        <button type="submit" name="continuos" class="btn btn-primary btn-form btn-left">Continuous Create New</button>
                        <a role="button" href="<?php echo e(url('interview-management')); ?>" class="btn btn-secondary btn-form" >Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <style>
        .custom_file {
            margin: auto;
            opacity: 0;
            position: absolute;
            z-index: -1;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){

            <?php if(session::get('file_data_old')): ?>
            $("label[for='file_name'] b").html("<?php echo e(session::get('file_data_old')); ?>");
            $("label[for='file_default']").text('Selected File: ');

            <?php endif; ?>
            $('#upload').change(function() {
                var filename = $('#upload').val();
                if (filename.substring(3,11) == 'fakepath') {
                    filename = filename.substring(12);
                }
                var file_lable =  $("label[for='file_name'] b").html();
                // if(file_lable != ""){
                //     $("label[for='file_default']").text('No File Choosen');
                //     $("label[for='file_name'] b").html('');
                //    // $("input[name='temp_file_new']").val('');
                // }
                // For Remove fakepath

                $("label[for='file_name'] b").html(filename);
                $("label[for='file_default']").text('Selected File: ');
                if (filename == "") {
                    $("label[for='file_default']").text('No File Choosen');
                }
                // var file_lable =  $("label[for='file_name'] b").html();
                // //if()
            });

            $('#upload').click(function() {
                var filename = $('#upload').val();
                var filename = $('#upload').val();
                if (filename.substring(3,11) == 'fakepath') {
                    filename = filename.substring(12);
                } // For Remove fakepath
                if (filename == "") {
                    $("label[for='file_default']").text('No File Choosen');
                    $("label[for='file_name'] b").html('');
                    $("input[name='temp_file_new']").val('');
                }
                //
                // var file_lable =  $("label[for='file_name'] b").html();
                // if(filename == "" ){
                //     if(file_lable != ""){
                //         //$("label[for='file_name'] b").html(file_lable);
                //         $("label[for='file_default']").text('No File Choosen');
                //     }else{
                //         $("label[for='file_default']").text('No File Choosen');
                //     }
                // }else{
                //     $("label[for='file_name'] b").html(filename);
                //     $("label[for='file_default']").text('Selected File: ');
                // }

            })

        })
    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\StarBoardAsia\SBAinterview\resources\views/pages/interviewer_new.blade.php ENDPATH**/ ?>
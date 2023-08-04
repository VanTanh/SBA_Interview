<?php $__env->startSection('headInclude'); ?>
<link href="<?php echo e(URL::asset('frontEnd/datetimepicker/css/bootstrap-datetimepicker.min.css')); ?>" rel="stylesheet" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">CANDIDATE INFORMATION</h2>
            </div>
            <div class="col-md-12">
                <div class="panel-body">
                    <?php echo e(Form::open(['route'=>['postUserHome'], 'method' => 'POST', 'class'=>'infoForm', 'autocomplete' => 'off'])); ?>

                    <div class="infouser">
                        <?php if($errors->any()): ?>
                            <div class="alert alert-danger">
                                <ul>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                        <table class="table table-bordered table-striped" id="users">
                            <tbody>
                                <tr>
                                    <td style="width: 30%;">Candidate ID <span style="color:red">(*)</span></td>
                                    <td class="candidateid">
                                        <input type="text" name="candidate_id" value="<?php echo e(old('candidate_id')); ?>" id="candidate_id" required>
                                        <div class="alert alert-danger" role="alert" style="display:none" id="errorcandi">Candidate not found</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 30%;">Last Name</td>
                                    <td>
                                        <input type="text" name="lastname" value="<?php echo e(old('lastname')); ?>" id="lastname">
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 30%;">First Name</td>
                                    <td>
                                        <input type="text" name="firstname" value="<?php echo e(old('firstname')); ?>" id="firstname">
                                    </td>
                                </tr>                                
                                <tr>
                                    <td>Address</td>
                                    <td><input type="text" name="address" value="<?php echo e(old('address')); ?>" id="address"></td>
                                </tr>
                                <tr>
                                    <td>Birthday</td>
                                    <td><input type="text" name="dob" value="<?php echo e(old('dob')); ?>" id="dob" data-date-format="DD-MM-YYYY" placeholder="dd-mm-yyyy"></td>
                                </tr>
                                <tr>
                                    <td>Tel</td>
                                    <td><input type="text" name="tel" value="<?php echo e(old('tel')); ?>" id="tel"></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><input type="text" name="email" value="<?php echo e(old('email')); ?>" id="email"></td>
                                </tr>
                                <tr>
                                    <td>Programing Language <span style="color:red">(*)</span></td>
                                    <td>
                                        <select name="selecttest" id="in_language">
                                            <option value="0">-- Select the test</option>
                                            <option value="1" <?php if(old('selecttest') == 1): ?> selected <?php endif; ?>><?php echo e(Config::get('constants.LANGUAGE.1')); ?></option>
                                            <option value="2" <?php if(old('selecttest') == 2): ?> selected <?php endif; ?>><?php echo e(Config::get('constants.LANGUAGE.2')); ?></option>
                                            <option value="3" <?php if(old('selecttest') == 3): ?> selected <?php endif; ?>><?php echo e(Config::get('constants.LANGUAGE.3')); ?></option>
                                        </select>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-responsive button-alignment btn-primary" style="margin-bottom:7px;" data-toggle="button">SENT</button>
                    </div>
                    <?php echo e(Form::close()); ?>

                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footInclude'); ?>
<script src="<?php echo e(URL::asset('js/moment.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(URL::asset('frontEnd/datetimepicker/js/bootstrap-datetimepicker.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(URL::asset('js/user.js')); ?>" type="text/javascript"></script>
<script>
    $(document).ready(function(){
        $('#candidate_id').on('keyup', function(){
            var is = $(this);
            var id = $('#candidate_id').val();
            if(id == ""){
                $('#errorcandi').css('display','none');
            }else{
                $.ajax({
                    type: 'GET',
                    url: '<?php echo e(Request::root()); ?>/ung-vien/load-candidate/' + id,
                    success: function(msg){
                        
                        if(msg != "error"){
                            var d = "", r = "";
                            if(msg.in_dob != null){
                                 d = msg.in_dob.split('-');
                                 r = d[2] + "-" + d[1] + "-" + d[0];
                            }else{
                                d = "";
                            }
                            $('#firstname').val(msg.in_firstname);
                            $('#lastname').val(msg.in_lastname);
                            $('#address').val(msg.in_address);
                            $('#dob').val(r);
                            $('#tel').val(msg.in_tel);
                            $('#email').val(msg.in_mail);                            
                            $('#in_language').val(msg.in_language.toString());
                            $('#errorcandi').css('display','none');
                        }else{
                            $('#errorcandi').css('display','block');
                            $('#firstname').val("");
                            $('#lastname').val("");
                            $('#address').val("");
                            $('#dob').val("");
                            $('#tel').val("");
                            $('#email').val("");
                            $('#in_language').val(0);
                        }
                    }
                });
            }
        });
        //
        $("#dob").datetimepicker({
            format: 'DD-MM-YYYY',
            widgetPositioning:{
                vertical:'bottom'
            },
            useCurrent: false,
        });
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.includes.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/SelinaNguyen/Documents/SBA/SBA_Interview/resources/views/user/home.blade.php ENDPATH**/ ?>
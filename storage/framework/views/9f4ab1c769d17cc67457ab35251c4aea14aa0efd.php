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
        <div class="p-0 p-md-3 h-screen">
            <div class="header-index d-block d-md-flex">
                <div class="header-title">
                    <span style="font-weight: bold; padding: 20px 0; display:block">Send Mail/Export</span>
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
                                                <label for="cvno">CV No.</label>
                                                <input type="text" class="form-control" id="in_cvno"  name="in_cvno" value="<?php echo e(old('in_cvno',$req_arr['in_cvno'])); ?>" placeholder="CV No.">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="form-group">
                                                <label for="language">CV channel</label>
                                                <select class="form-control" name="in_cvchannel" >
                                                    <option value="0" >Please choose CV channel</option>
                                                    <?php $__currentLoopData = $cst_cvchannel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k1 => $v1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>{
                                                    <option value="<?php echo e($k1); ?>" <?php echo e(old('in_cvchannel',$req_arr['in_cvchannel']) == $k1 ? "selected"  : ""); ?>><?php echo e($v1); ?></option>
                                                    }
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="form-group">
                                                <label for="firstname">First name</label>
                                                <input type="text" class="form-control" id="in_firstname"  name="in_firstname" value="<?php echo e(old('in_firstname',$req_arr['in_firstname'])); ?>" placeholder="First name">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-md-4">
                                            <div class="form-group">
                                                <label for="lastname">Last name</label>
                                                <input type="text" class="form-control" id="in_lastname"  name="in_lastname" value="<?php echo e(old('in_lastname',$req_arr['in_lastname'])); ?>" placeholder="Last name">
                                            </div>
                                        </div>
                                        
                                            
                                                
                                                
                                                
                                                    
                                                    
                                                    
                                                
                                            
                                        
                                        <div class="col-12 col-md-4">
                                            <div class="form-group">
                                                <label for="mail">Mail</label>
                                                <input type="text" class="form-control <?php echo e(($errors->first('in_mail')) ? 'is-invalid'  :''); ?>" id="in_mail" name="in_mail" value="<?php echo e(old('in_mail',$req_arr['in_mail'])); ?>"  placeholder="Mail">
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
                                        <div class="col-12 col-md-4">
                                            <div class="form-group">
                                                <label for="language">Skill</label>
                                                <select class="form-control" name="in_language" >
                                                    <option value="0" >Please choose skill</option>
                                                    <?php $__currentLoopData = $cst_lang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>{
                                                    <option value="<?php echo e($k); ?>" <?php echo e(old('in_language',$req_arr['in_language']) == $k ? "selected"  : ""); ?>><?php echo e($v); ?></option>
                                                    }
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-md-4">
                                            <div class="form-group">
                                                <label for="status">Status</label>
                                                <select class="form-control" name="in_status" >
                                                    <option value="0" >Please choose a status</option>
                                                    <?php $__currentLoopData = $cst_status; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k2 => $v2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>{
                                                    <option value="<?php echo e($k2); ?>" <?php echo e(old('in_status',$req_arr['in_status']) == $k2 ? "selected"  : ""); ?>><?php echo e($v2); ?></option>
                                                    }
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="form-group">
                                                <label for="status">Test time from</label>
                                                <div class="input-group mb-3">
                                                    <input type="text" name="date_from" class="form-control datetimepicker-input" value="<?php echo e(old('date_from')); ?>" id="date_from" data-date-format="DD-MM-YYYY">
                                                    <div class="input-group-append" data-target="#date_from" onclick="$('#date_from').focus();">
                                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="form-group">
                                                <label for="status">Test time to</label>
                                                <div class="input-group mb-3">
                                                    <input type="text" name="date_to" value="<?php echo e(old('date_to')); ?>" class="form-control datetimepicker-input" id="date_to" data-date-format="DD-MM-YYYY">
                                                    <div class="input-group-append" data-target="#date_from" onclick="$('#date_from').focus();">
                                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" name="submit" class="btn btn-primary">Search</button>
                                            <a role="button" href="<?php echo e(url('interview-management')); ?>" class="btn btn-secondary btn-form" >Reset</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row-->
                <div class="row">
                    <div class="col-lg-12">
                        <?php if($errors->any()): ?>
                            <div class="alert alert-danger">
                                <ul>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                        <?php if(Session::has('doneMessage')): ?>
                            <div class="alert alert-success" role="alert"><?php echo e(Session::get('doneMessage')); ?></div>
                        <?php endif; ?>
                        <form method="POST" action="<?php echo e(route('postadminSentMail')); ?>" class="form-admin">
                        <?php echo csrf_field(); ?>
                        <div class="panel panel-success filterable" style="overflow:auto;">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                <button name="sent" value="sent" type="submit" class="btn btn-responsive button-alignment btn-primary" style="margin-bottom:7px;" data-toggle="button">Send Mail</button>
                                <button name="export" value="export" type="submit" class="btn btn-responsive button-alignment btn-primary" style="margin-bottom:7px;" data-toggle="button">Export</button>
                                </h3>
                            </div>
                            <div class="panel-body table-responsive">
                                <table class="table table-striped table-bordered" id="table2">
                                    <thead>
                                        <tr>
                                            <th>
                                                <label class="ui-check m-a-0">
                                                    <input type="checkbox" id="selectAll" />
                                                    <input type="hidden" id="seletitem" name="seletitem" >
                                                </label>
                                            </th>
                                            <th>N0.1</th>
                                            <th>Candidate_id</th>
                                            <th>CV No.</th>
                                            <th>CV Channel</th>
                                            <th>Last name</th>
                                            <th>First name</th>
                                            <th>Mail</th>
                                            <th>Skill</th>
                                            <th>Note</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $cnt = 1; ?>

                            <?php
                                function getStatusInterview_lay($status,$status_arr){

                                  $status_res = '';
                                  foreach ($status_arr as $key => $val){
                                      if ($status == $key){
                                          $status_res = $val;
                                      }
                                  }
                                  return $status_res;

                              }
                           function getCVChannel_lay($channel,$channel_arr){
                               $channel_text = '';
                               foreach ($channel_arr as $kcn => $vcn){
                                   if($channel == $kcn){
                                       $channel_text = $vcn;
                                   }
                               }
                               return $channel_text;
                           }
                           function getLanguage_lay($lang,$lang_arr){
                               $lag = '';
                               foreach ($lang_arr as $klg => $vlg){
                                   if($lang == $klg){
                                       $lag = $vlg;
                                   }
                               }
                               return $lag;
                           }
                            ?>
                                        <?php $__currentLoopData = $list_interviewers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td>
                                                <label class="ui-check m-a-0">    
                                                    <input type="checkbox" class="itemcheck" value="<?php echo e($item->in_id); ?>" />
                                                </label>
                                            </td>
                                            <td><?php echo e($cnt); ?></td>
                                            <td><?php echo e($item->in_id); ?></td>
                                            <td><?php echo e($item->in_cvno); ?></td>
                                            <td><?php echo e(getCVChannel_lay($item->in_cvchannel,$cst_cvchannel)); ?></td>
                                            <td><?php echo e($item->in_lastname); ?></td>
                                            <td><?php echo e($item->in_firstname); ?></td>
                                            <td><?php echo e($item->in_mail); ?></td>
                                            <td><?php echo e(getLanguage_lay($item->in_language ,$cst_lang)); ?></td>
                                            <td><?php echo e($item->in_note); ?></td>
                                            <td><?php echo e(getStatusInterview_lay($item->in_status,$cst_status)); ?></td>
                                        </tr>  
                                        <?php $cnt++; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                      
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        </form>
                </div>
          </div>
  </div>
    <script src="<?php echo e(URL::asset('/js/jquery-3.4.1.min.js')); ?>"></script>
    <script src="js/bootstrap.js"></script>
    <script src="css/datatable/jquery.dataTables.js"></script>
    <script src="css/datatable/dataTables.bootstrap.js"></script>
    <script src="<?php echo e(URL::asset('js/moment.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(URL::asset('frontEnd/datetimepicker/js/bootstrap-datetimepicker.min.js')); ?>" type="text/javascript"></script>
  
 
<script>
    $(document).ready(function(){
        //
        $("#date_to").datetimepicker({
            format: 'DD-MM-YYYY',
            widgetPositioning:{
                vertical:'bottom'
            },
            useCurrent: false,
        });
        $("#date_from").datetimepicker({
            format: 'DD-MM-YYYY',
            widgetPositioning:{
                vertical:'bottom'
            },
            useCurrent: false,
        });
    });
</script>
<script>
    $(document).ready(function() {
        //re-order columns
        var oTable = $('#table2').dataTable({
            responsive:true,
            "lengthChange": false,
            "searching": false,
            "ordering": false,
        });
        var allPages = oTable.fnGetNodes();
        var arrall = [];
        $('body').on('click', '#selectAll', function () {
            var all = $('input[type="checkbox"]', allPages);
            if ($(this).hasClass('allChecked')) {
                all.prop('checked', false);
                all.each(function(){
                    arrall = [];
                });
            } else {
                all.prop('checked', true);
                all.each(function(){
                    arrall.push($(this)[0].value);
                });
            }
            $(this).toggleClass('allChecked');
            $('#seletitem').val(arrall);
        });
        //        
        var arr = [];
        oTable.on('click','.itemcheck',function(){
            var all = $('input[type="checkbox"]', allPages);
            all.each(function(){
                if($(this)[0].checked == true){
                    if(arr.indexOf($(this)[0].value) == -1){
                        arr.push($(this)[0].value);
                    }
                }else{
                    if(arr.indexOf($(this)[0].value) != -1){
                        var index = arr.indexOf($(this)[0].value);
                        arr.splice(index,1);
                    }
                }
            })
            $('#seletitem').val(arr);
        });
    });
  </script>

</body>
</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/SelinaNguyen/Documents/SBA/SBA_Interview/resources/views/pages/adminME.blade.php ENDPATH**/ ?>
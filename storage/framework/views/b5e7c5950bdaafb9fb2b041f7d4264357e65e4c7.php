
<?php $__env->startSection('title','Interview Management'); ?>
<?php $__env->startSection('menu'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('menu'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="p-0 p-md-3">
        <div class="header-index d-block d-md-flex">
            <div class="header-title">
                        <span>Interview Management</span>
            </div>
                <a class="btn btn-primary add-new-btn d-none d-md-block" href="<?php echo e(url('interview-management/new')); ?>" role="button">Create new</a>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary  d-none d-md-block" data-toggle="modal" data-target=".bd-example-modal-lg">Report test result</button>
                <div class=" d-block d-md-none mt-2">
                    <a class="btn btn-primary add-new-btn" href="<?php echo e(url('interview-management/new')); ?>" role="button">Create new</a>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Report test result</button>
                </div>
                <?php if(\Session::has('success')): ?>
                    <div class=" alert alert-success alert-dismissible fade show mt-2 mt-md-0">
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
                                <div class="col-12 col-md-4">
                                    <div class="form-group">
                                        <label for="inid">Candidate_id</label>
                                        <input type="text" class="form-control" id="in_id"  name="in_id" value="<?php echo e(old('in_id',$req_arr['in_id'])); ?>" placeholder="Candidate_id">
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
                                            
                                            <input id="date_from" readonly type="text" class="form-control datetimepicker-input"
                                                   name="date_from" autocomplete="off" value="<?php echo e(old('date_from', $req_arr['date_from'])); ?>">
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
                                            
                                            <input id="date_to" readonly type="text" class="form-control datetimepicker-input"
                                                   name="date_to" autocomplete="off" value="<?php echo e(old('date_to', $req_arr['date_to'])); ?>">
                                            <div class="input-group-append" data-target="#date_to" onclick="$('#date_to').focus();">
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
       


        <?php if(isset($list_interviewers) && $list_interviewers_count > 0): ?>
        <div class="row">
            <div class="col-12">
                    <div class="table-responsive">
                        <table id ="table_interview" class="table table-bordered table-hover ">
                            <thead class="table-header">
                            <tr>
                                <th width="5%" scope="col">No.</th>
                                <th width="10%" scope="col">Candidate_id</th>
                                <th width="10%" scope="col">CV No. </th>
                                <th width="10%" scope="col">CV Channel</th>
                                <th width="10%" scope="col">Last name</th>
                                <th width="10%" scope="col">First name</th>
                                
                                <th width="5%" scope="col">Skill</th>
                                
                                <th width="20%" scope="col">Note</th>
                                <th width="10%" scope="col">Status</th>
                                <th width="10%" scope="col">Action</th>
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

                            <?php $__currentLoopData = $list_interviewers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $interviewer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <tr>
                                    <th width="5%"><?php echo e($index < 10 ? '0' . $index : $index); ?></th>
                                    <td width="10%"><?php echo e($interviewer->in_id); ?></td>
                                    <td width="10%"><?php echo e($interviewer->in_cvno); ?></td>
                                    <td width="10%"><?php echo e(getCVChannel_lay($interviewer->in_cvchannel,$cst_cvchannel)); ?></td>
                                    <td width="10%"><?php echo e($interviewer->in_lastname); ?></td>
                                    <td width="10%"><?php echo e($interviewer->in_firstname); ?></td>
                                    
                                    <td width="5%"><?php echo e(getLanguage_lay($interviewer->in_language ,$cst_lang)); ?></td>
                                    
                                    <td width="10%"><?php echo e($interviewer->in_note); ?></td>
                                    <td width="10%"><?php echo e(getStatusInterview_lay($interviewer->in_status,$cst_status)); ?></td>
                                    <td id="link" width="10%"><a href="<?php echo e(url('interview-management/edit/' . $interviewer->in_id)); ?>">Edit /
                                        </a>&nbsp;<a href="<?php echo e(url('interview-management/delete/' . $interviewer->in_id).'/'.$current_page); ?>" style="color: red;"  onclick="return confirm('Are you sure to delete this item?')">Delete</a></td>
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
                <div><?php echo e($list_interviewers->appends(Request::except('page'))->links()); ?></div>
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
    <script>
        $('#myModal').on('shown.bs.modal', function () {
            $('#myInput').trigger('focus')
        })
    </script>

    <!-- Modal -->
    <div class="modal fade bd-example-modal-lg"  id="chartModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Report test result</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div id="app">
                  <div id="chart">
                      <apexchart type="bar" height="" id="chart_report" :options="chartOptions" :series="series"></apexchart>
                    </div>
                </div>

            </div>
        </div>
    </div>


    
    
    <!-- Modal -->
    <script type="text/javascript">
  window.onload = function () {
    new Vue({
        el: '#app',
        components: {
          apexchart: VueApexCharts,
        },
        data: {
          
          series: [{
            name: 'IQ',
            data: [
            <?php $__currentLoopData = $list_candidate_score; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $candidate_score): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $iq_score = $candidate_score->iq_score;                   
                    echo $iq_score.',';
                ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            ]
          }, {
            name: 'Skill',
            data: [
                <?php $__currentLoopData = $list_candidate_score; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $candidate_score): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $skill_score = $candidate_score->tech_score;
                        echo $skill_score.',';
                    ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            ]
          },
          
          ],
          chartOptions: {
            chart: {
              type: 'bar',
              height: 350,
              stacked: true,
              toolbar: {
                show: true
              },
                zoom: {
                    enabled: true,
                    type: 'x',
                    resetIcon: {
                        offsetX: -10,
                        offsetY: 0,
                        fillColor: '#fff',
                        strokeColor: '#37474F'
                    },
                    selection: {
                        background: '#90CAF9',
                        border: '#0D47A1'
                    }
                },
            },

            responsive: [{
             breakpoint: 480,
              options: {
                legend: {
                  position: 'bottom',
                  offsetX: -10,
                  offsetY: 0
                }
              }
            }],
            plotOptions: {
              bar: {
                horizontal: false,
              },
            },
            colors: ['#4F81BC', '#C0504E'
        ],
            xaxis: {
              //stype: 'category',
            labels: {
                        rotate: -45
                      },
              categories: [
                <?php $__currentLoopData = $list_candidate_score; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $candidate_score): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $xaxis_name = '"'.$candidate_score->in_lastname.' '.$candidate_score->in_firstname.'"';
                        echo $xaxis_name.',';
                    ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

              ],
                tickPlacement: 'on'
            },
            
            legend: {
              position: 'right',
              offsetY: 40
            },
            fill: {
              opacity: 1
            }
          },
          
          
        },
        
      })

  }
       
    </script>
    <script>
      window.Promise ||
        document.write(
          '<script src="https://cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.min.js"><\/script>'
        )
      window.Promise ||
        document.write(
          '<script src="https://cdn.jsdelivr.net/npm/eligrey-classlist-js-polyfill@1.2.20171210/classList.min.js"><\/script>'
        )
      window.Promise ||
        document.write(
          '<script src="https://cdn.jsdelivr.net/npm/findindex_polyfill_mdn"><\/script>'
        )
    </script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue-apexcharts"></script>
    
     <style>

        #chart {
            /*max-width: 100%;*/
            position: relative;
          margin: 35px auto;
          /*overflow-x: auto;*/
    }
         #chart_report{
             /*width: 2200px;*/
             width: 100%;
             height: 100%;
             /*height: 350px;*/
         }

    </style>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\StarBoardAsia\SBAinterview\resources\views/pages/interview_management.blade.php ENDPATH**/ ?>
<?php $__env->startSection('title','IQ question registration'); ?>
<?php $__env->startSection('menu'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('menu'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="h-screen">
        <div class="row">
            <div id="staff_new_edit_frm" class="col-xl-10 col-lg-12 col-md-12 col-sm-12">
                <h2 class="border-bottom">
                   IQ question registration
                </h2>
                <?php if(\Session::has('success')): ?>
                    <div class=" alert alert-success alert-dismissible fade show mt-2 mt-md-0">
                        <?php echo e(\Session::get('success')); ?>

                    </div>
                <?php endif; ?>
                <form method="post">
                    <?php echo csrf_field(); ?>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">IQ Question Content</span>
                            </div>
                            <textarea class="form-control <?php echo e(($errors->first('content')) ? 'is-invalid'  :''); ?> " id="question_content"  name="content" rows=4><?php echo e(old('content')); ?></textarea>
                            <div class="invalid-feedback">
                                <?php $__errorArgs = ['content'];
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

                    <div class="form-group-button">
                        <button type="submit" class="btn btn-primary btn-form btn-left">Create new</button>
                        <button type="submit" name="continuos" class="btn btn-primary btn-form btn-left">Continuous Create New</button>
                        <a role="button" href="<?php echo e(url('iq-list')); ?>" class="btn btn-secondary btn-form" >Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
    <script>
        var options = {
            filebrowserBrowseUrl: '<?php echo e(asset('ckfinder/ckfinder.html')); ?>',
            filebrowserImageBrowseUrl: '<?php echo e(asset('ckfinder/ckfinder.html?type=Images')); ?>',
            filebrowserFlashBrowseUrl: '<?php echo e(asset('ckfinder/ckfinder.html?type=Flash')); ?>',
            filebrowserUploadUrl: '<?php echo e(asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files')); ?>',
            filebrowserImageUploadUrl: '<?php echo e(asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images')); ?>',
            filebrowserFlashUploadUrl: '<?php echo e(asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash')); ?>',
            width: "100%",
            height: "500px"
        };
        CKEDITOR.replace( 'question_content', options);

    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/SelinaNguyen/Documents/SBA/SBA_Interview/resources/views/pages/iq_question_new.blade.php ENDPATH**/ ?>
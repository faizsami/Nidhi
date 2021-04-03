<?php $__env->startSection('page_name', 'Add New Employee'); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('layouts.response', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

 <!-- BEGIN: Content-->
 <div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- users edit start -->
            <section class="app-user-edit">
                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-pills" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center active" id="account-tab" data-toggle="tab" href="#account" aria-controls="account" role="tab" aria-selected="true">
                                    <i data-feather="user"></i><span class="d-none d-sm-block">Branch Info</span>
                                </a>
                            </li>

                        </ul>

                        <div class="tab-content">
                            <!-- Account Tab starts -->
                            <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">

                                <!-- users edit account form start -->
                                <form method ='post' action="<?php echo e(url('/admin/addbranch')); ?>" class="form-validate">
                                    <?php echo csrf_field(); ?>

                                    <div class="row">
                                        <div class="col-12">
                                            <h4 class="mb-1">
                                                <i data-feather="user" class="font-medium-4 mr-25"></i>
                                                <span class="align-middle">Branch Information</span>
                                            </h4>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                            <label class="form-label" for="name">Branch Name</label>
                                            <input type="text" name="branch_name" id="name" class="form-control" placeholder="Branch Name" required />
                                            <?php if($errors->has('branch_name')): ?>
                                            <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
                                                <strong><?php echo e($errors->first('branch_name')); ?></strong>
                                            </p>
                                             <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                            <label class="form-label" for="vertical-modern-username">Address</label>
                                            <input type="number" id="mobile" name="address" class="form-control"   placeholder="Address" required />
                                            <?php if($errors->has('address')): ?>
                                            <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
                                                <strong><?php echo e($errors->first('address')); ?></strong>
                                            </p>
                                             <?php endif; ?>
                                        </div>

                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                            <label class="form-label" for="name">City</label>
                                            <input type="text" name="city" id="email" class="form-control" placeholder="City" required />
                                            <?php if($errors->has('city')): ?>
                                            <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
                                                <strong><?php echo e($errors->first('city')); ?></strong>
                                            </p>
                                             <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                            <label class="form-label" for="name">Mobile Number</label>
                                            <input type="text" name="contact" id="email" class="form-control" placeholder="+91" required />
                                            <?php if($errors->has('contact')): ?>
                                            <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
                                                <strong><?php echo e($errors->first('contact')); ?></strong>
                                            </p>
                                             <?php endif; ?>
                                            </div>
                                        </div>



                                            </div>
                                        </div>


                                            <div class="col-12 d-flex flex-sm-row flex-column mt-2">
                                                <button type="submit" class="btn btn-primary mb-1 mb-sm-0 mr-0 mr-sm-1">Save Changes</button>
                                                <button type="reset" class="btn btn-outline-secondary">Reset</button>
                                            </div>


                                    </div>

                                <!-- users edit account form ends -->
                            </div>
                            <!-- Account Tab ends -->






                        </div>
                    </div>
                </div>
            </section>
            <!-- users edit ends -->

        </div>
    </div>
</div>
</form>
<!-- END: Content-->



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Laravel\Nidhi\resources\views/Admin/create_branch.blade.php ENDPATH**/ ?>
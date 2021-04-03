<?php $__env->startSection('page_name', 'Add New Employee'); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('layouts.response', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

   <!-- BEGIN: Vendor CSS-->

    <!-- END: Vendor CSS-->

    <!-- BEGIN: Page CSS-->


    <!-- END: Page CSS-->

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
                                        <i data-feather="user"></i><span class="d-none d-sm-block">Persional Info</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center" id="social-tab" data-toggle="tab" href="#social" aria-controls="social" role="tab" aria-selected="false">
                                        <i data-feather="share-2"></i><span class="d-none d-sm-block">Bank Detail</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center" id="information-tab" data-toggle="tab" href="#documents" aria-controls="documents" role="tab" aria-selected="false">
                                        <i data-feather="info"></i><span class="d-none d-sm-block">Document Info</span>
                                    </a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <!-- Account Tab starts -->
                                <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">

                                    <!-- users edit account form start -->
                                    <form method ='post' action="<?php echo e(url('/admin/createemp')); ?>" class="form-validate">
                                        <?php echo csrf_field(); ?>

                                        <div class="row">
                                            <div class="col-12">
                                                <h4 class="mb-1">
                                                    <i data-feather="user" class="font-medium-4 mr-25"></i>
                                                    <span class="align-middle">Persional Information</span>
                                                </h4>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="form-label" for="name">Name</label>
                                                <input type="text" name="name" id="name" class="form-control" placeholder="johndoe"  />
                                                <?php if($errors->has('name')): ?>
                                                <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
                                                    <strong><?php echo e($errors->first('name')); ?></strong>
                                                </p>
                                                 <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="form-label" for="vertical-modern-username">Mobile</label>
                                                <input type="number" id="mobile" name="mobile" class="form-control"   placeholder="+91" required />
                                                <?php if($errors->has('mobile')): ?>
                                                <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
                                                    <strong><?php echo e($errors->first('mobile')); ?></strong>
                                                </p>
                                                 <?php endif; ?>
                                            </div>

                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="form-label" for="name">Email</label>
                                                <input type="text" name="email" id="email" class="form-control" placeholder="johndoe"  />
                                                <?php if($errors->has('name')): ?>
                                                <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
                                                    <strong><?php echo e($errors->first('name')); ?></strong>
                                                </p>
                                                 <?php endif; ?>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label for="birth">Birth date</label>
                                                 <input id="fp-default" type="text" class="form-control flatpickr-basic"   name="dob"     onchange="myFunction(this.value);"  placeholder="YYYY-MM-DD" required />
                                                 <?php if($errors->has('dob')): ?>
                                                 <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
                                                     <strong><?php echo e($errors->first('dob')); ?></strong>
                                                 </p>
                                                  <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                <label class="form-label" for="vertical-modern-last-name">Age</label>
                                                <input type="text" id="age" name="age" class="form-control"  required readonly />
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="form-group ">
                                                    <label class="d-block ">Gender</label>
                                                    <div class="custom-control custom-radio custom-control-inline mt-1">
                                                        <input type="radio" id="male" name="gender" class="custom-control-input"required />
                                                        <label class="custom-control-label " for="male">Male</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="female" name="gender" class="custom-control-input" checked />
                                                        <label class="custom-control-label" for="female">Female</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="female" name="gender" class="custom-control-input" checked />
                                                        <label class="custom-control-label" for="other">Others</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                <label class="form-label" for="address">Address</label>
                                                <input type="text" name="address" id="address" class="form-control" placeholder="johndoe"required />

                                            </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                <label class="form-label"  for="vertical-modern-last-name">City</label>
                                             <select class="form-control" id="city" name="city"required disabled>
                                               <option label="Select City"></option>

                                             </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                <label class="form-label" for="vertical-modern-last-name">Pin</label>
                                                <input type="text" id="vertical-modern-last-name" name="zip_code" class="form-control" placeholder="247001" required/>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                <label class="form-label"  for="vertical-modern-last-name">state</label>
                                             <select class="select2 form-control form-control-lg" id="state" name="state" onchange=" updateCity(this.value)" required>
                                                <option label="Select state"></option>
                                                 <?php ($state=App\Models\State::where('country_id','101')->get()->all()); ?>
                                                 <?php $__currentLoopData = $state; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $states): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                 <option value="<?php echo e($states->id); ?>"><?php echo e($states->name); ?></option>
                                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                             </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="form-label" for="vertical-modern-last-name">Gardian</label>

                                                <select class="form-control" name= "gardian" required>
                                                    <option label="Select Gardian"></option>
                                                    <option value="22">Father</option>
                                                    <option value="23">Husband</option>

                                                </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="form-label" for="vertical-modern-last-name">Higher Education</label>
                                       <select class="form-control" name= "higher_edu" required>
                                           <option label="Select Education"></option>
                                           <option value="22">10th</option>
                                           <option value="23">12th</option>
                                           <option value="24">Post Graduate</option>
                                           <option value="24">Graduate</option>
                                           <option value="25">Master</option>
                                       </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="form-label" for="vertical-modern-last-name">Profession</label>
                                                <input type="text" id="vertical-modern-last-name" name="profeesion" class="form-control" placeholder="Work"required />
                                                </div>
                                            </div>

                                                <div class="col-12">
                                                    <h4 class="mb-1 mt-1">
                                                        <i data-feather="user" class="font-medium-4 mr-25"></i>
                                                        <span class="align-middle">Nominees Information</span>
                                                    </h4>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="form-group">
                                                        <label for="birth">Nominees Name</label>
                                                        <input id="birth" type="text" class="form-control birthdate-picker" name="nom_name" placeholder="Nominess Name" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="form-group">
                                                        <label for="mobile">Age</label>
                                                        <input id="mobile" type="text" class="form-control" name="age" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="form-group">
                                                        <label for="website">Relation</label>
                                                        <input id="website" type="text" class="form-control" placeholder="Relation" name="relation" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="form-group">
                                                    <label for="address-1">Address</label>
                                                        <input id="address-1" type="text" class="form-control"  name="address" />
                                                    </div>
                                                </div>


                                                <!-- <div class="col-12">
                                                    <h4 class="mb-1 mt-2">
                                                        <i data-feather="map-pin" class="font-medium-4 mr-25"></i>
                                                        <span class="align-middle">Address</span>
                                                    </h4>
                                                </div> -->
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="form-group">
                                                        <label for="address-1">Pin</label>
                                                        <input id="address-1" type="text" class="form-control" value="A-65, Belvedere Streets" name="pin" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="form-group">
                                                        <label for="address-2">State</label>
                                                        <input id="address-2" type="text" class="form-control" name="state"placeholder="T-78, Groove Street" />
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



                                <!-- Social Tab starts -->
                                <div class="tab-pane" id="social" aria-labelledby="Bank Detail-tab" role="tabpanel">
                                    <!-- users edit social form start -->

                                        <div class="row">
                                            <div class="col-lg-4 col-md-6 form-group">
                                                <label for="twitter-input">Bank Name</label>
                                                <div class="input-group input-group-merge">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon3">

                                                        </span>
                                                    </div>
                                                    <input id="twitter-input" type="text" class="form-control" name="bank_name"value="" placeholder="" aria-describedby="basic-addon3" />
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 form-group">
                                                <label for="facebook-input">Account Holder Name</label>
                                                <div class="input-group input-group-merge">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon4">

                                                        </span>
                                                    </div>
                                                    <input id="facebook-input" type="text" class="form-control"  name="ac_holder_name" value="" placeholder="" aria-describedby="basic-addon4" />
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 form-group">
                                                <label for="instagram-input">Account Number</label>
                                                <div class="input-group input-group-merge">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon5">

                                                        </span>
                                                    </div>
                                                    <input id="instagram-input" type="text" name="ac_num" class="form-control" value="" placeholder="" aria-describedby="basic-addon5" />
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 form-group">
                                                <label for="github-input">Branch</label>
                                                <div class="input-group input-group-merge">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon9">

                                                        </span>
                                                    </div>
                                                    <input id="github-input" type="text" class="form-control" name="branch" value="" placeholder="" aria-describedby="basic-addon9" />
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 form-group">
                                                <label for="codepen-input">IFSC Code</label>
                                                <div class="input-group input-group-merge">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon12">

                                                        </span>
                                                    </div>
                                                    <input id="codepen-input" type="text" class="form-control" name="ifsc_code" value="" placeholder="" aria-describedby="basic-addon12" />
                                                </div>
                                            </div>


                                            <div class="col-12 d-flex flex-sm-row flex-column mt-2">
                                                <button type="submit" class="btn btn-primary mb-1 mb-sm-0 mr-0 mr-sm-1">Save Changes</button>
                                                <button type="reset" class="btn btn-outline-secondary">Reset</button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- users edit social form ends -->
                                </div>
                                <!-- Social Tab ends -->
                                 <!-- Information Tab starts -->
                                 <div class="tab-pane" id="documents" aria-labelledby="documents-tab" role="tabpanel">
                                    <!-- users edit Info form start -->
                                    <form class="form-validate">
                                        <div class="row mt-1">
                                            <div class="col-12">
                                                <h4 class="mb-1">
                                                    <i data-feather="user" class="font-medium-4 mr-25"></i>
                                                    <span class="align-middle">Documents Information</span>
                                                </h4>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                <label class="form-label" for="vertical-modern-twitter">Document Type</label>
                                       <select class="form-control" >
                                           <option label="Select Documnet"></option>
                                           <option value="22">Aadhar Card</option>
                                           <option value="23">Pan Card</option>

                                       </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                <label class="form-label" for="vertical-modern-facebook">Document No.</label>
                                       <input type="text" id="vertical-modern-facebook" name="docu_number"class="form-control" placeholder="Branch" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                <label class="form-label" name="front_image" for="vertical-modern-google">Front Image </label>
                                       <div class="custom-file">
                                                   <input type="file" class="custom-file-input" id="customFile">
                                                   <label class="custom-file-label" for="customFile">Choose file</label>
                                       </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                <label class="form-label" name="front_image"  for="vertical-modern-google">Front Image </label>
                                       <div class="custom-file">
                                                   <input type="file" class="custom-file-input" id="customFile">
                                                   <label class="custom-file-label" for="customFile">Choose file</label>
                                       </div>
                                                </div>
                                            </div>


                                            <!-- <div class="col-12">
                                                <h4 class="mb-1 mt-2">
                                                    <i data-feather="map-pin" class="font-medium-4 mr-25"></i>
                                                    <span class="align-middle">Address</span>
                                                </h4>
                                            </div> -->


                                            <div class="col-12 d-flex flex-sm-row flex-column mt-2">
                                                <button type="submit" class="btn btn-primary mb-1 mb-sm-0 mr-0 mr-sm-1">Save Changes</button>
                                                <button type="reset" class="btn btn-outline-secondary">Reset</button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- users edit Info form ends -->
                                </div>
                                <!-- Information Tab ends -->

                            </div>
                        </div>
                    </div>
                </section>
                <!-- users edit ends -->

            </div>
        </div>
    </div>
    <!-- END: Content-->


    <script>
        function updateCity(val){

        $.ajax({
        type:'get',
        url:'/getcity',
        data:"_token=d<?php echo csrf_token(); ?>&id="+ val+"",
        dataType: 'json',
        success:function(data)
        {
            debugger;
            $("#city").empty();
            $("#city" ).prop( "disabled", false );
            $.each(data,function(key,value){
            $("#city").append($('<option></option>').val(key).html(value));
                  });

        },
        error:function(error){
            alert("error");
        }
      });

        }




       function myFunction(val) {

         var calculatedDob = GetAge(val);
        $("#age").val(calculatedDob);
       }

       function GetAge(dateString) {

      var today = new Date();
      var birthDate = new Date(dateString);
      var age = today.getFullYear() - birthDate.getFullYear();
      var m = today.getMonth() - birthDate.getMonth();
      if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
          age--;
      }
      return age;
  }
   </script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Laravel\Nidhi\resources\views/Admin/create_emp.blade.php ENDPATH**/ ?>
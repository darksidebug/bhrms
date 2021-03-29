        <div class="container sign-up">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <h4>Personal Information</h4>
                    <div class="personal_info">
                        <div class="form-group">
                            <label for="">Student ID Number: </label>
                            <input type="text" class="form-control ln" placeholder="Student ID Number">
                        </div>
                        <div class="form-group">
                            <label for="">Fullname: (Lastname, Firstname Middlename)</label>
                            <input type="text" class="form-control ln" placeholder="Fullname">
                        </div>
                        <div class="form-group">
                            <label for="">Complete Address:</label>
                            <input type="text" class="form-control mn" placeholder="Address">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <h4>User Confirmation</h4>
                    <div class="user_confirm">
                        <div class="form-group">
                            <label for="">Username/Student ID</label>
                            <input type="text" class="form-control ln" placeholder="Username/Student ID">
                        </div>
                        <div class="form-group">
                            <label for="">Password:</label>
                            <input type="password" class="form-control fn" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="">Confirm Password</label>
                            <input type="password" class="form-control mn" placeholder="Confirm Password">
                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
            <div align="center">
                <button href="#" class="btn btn-warning"><i class="fa fa-pencil"></i> SIGN UP</button>
                <h5>Already have an account?<a href="<?= base_url(); ?>pages/form/sign-in"> Sign-in Here</a></h5>
            </div>
            <p class="text-center">&copy 2020 - All Rights Reserved</p>
        </div>
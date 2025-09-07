<div class="modal fade" id="signup-modal" tabindex="-1" role="dialog" aria-labelledby="signup-heading" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="signup-heading">
                    <i class="fas fa-user-plus mr-2"></i>Signup
                </h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form id="signup-form" class="form" role="form" method="post" action="api/signup_submit.php" autocomplete="off">
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-user"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" name="full_name" placeholder="Full Name" maxlength="30" required>
                    </div>

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-phone-alt"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" name="phone" placeholder="Phone Number" maxlength="10" minlength="10" pattern="\d{10}" required>
                    </div>

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-envelope"></i>
                            </span>
                        </div>
                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                    </div>

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-lock"></i>
                            </span>
                        </div>
                        <input type="password" class="form-control" name="password" placeholder="Password (min 6 chars)" minlength="6" required>
                    </div>

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-university"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control" name="college_name" placeholder="College Name" maxlength="150" required>
                    </div>

                    <div class="form-group">
                        <span>I'm a</span>
                        <div class="form-check form-check-inline ml-3">
                            <input type="radio" class="form-check-input" id="gender-male" name="gender" value="male" required>
                            <label class="form-check-label" for="gender-male">Male</label>
                        </div>
                        <div class="form-check form-check-inline ml-3">
                            <input type="radio" class="form-check-input" id="gender-female" name="gender" value="female">
                            <label class="form-check-label" for="gender-female">Female</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-primary">
                            <i class="fas fa-user-plus mr-1"></i> Create Account
                        </button>
                    </div>
                    <div id="signup-error" class="alert alert-danger d-none"></div>
                </form>
            </div>

            <div class="modal-footer">
                <span>Already have an account?
                    <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#login-modal">Login</a>
                </span>
            </div>
        </div>
    </div>
</div>
<script>
document.getElementById('signup-form').addEventListener('submit', function(e) {
    var password = document.querySelector('input[name="password"]').value;
    if (password.length < 6) {
        e.preventDefault();
        var errorDiv = document.getElementById('signup-error');
        errorDiv.textContent = "Password must be at least 6 characters.";
        errorDiv.classList.remove('d-none');
    }
});
</script>

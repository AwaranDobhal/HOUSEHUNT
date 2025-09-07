<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-heading" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="login-heading">
                    <i class="fas fa-sign-in-alt mr-2"></i>Login
                </h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form id="login-form" class="form" role="form" method="post" action="api/login_submit.php" autocomplete="on">
                    <div class="input-group form-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-light">
                                <i class="fas fa-user"></i>
                            </span>
                        </div>
                        <input type="email" class="form-control" name="email" placeholder="Email" required autofocus>
                    </div>

                    <div class="input-group form-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-light">
                                <i class="fas fa-lock"></i>
                            </span>
                        </div>
                        <input type="password" class="form-control" name="password" placeholder="Password" minlength="6" required>
                    </div>

                    <div class="form-group d-flex justify-content-between align-items-center mb-2">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="rememberMe" name="remember">
                            <label class="form-check-label" for="rememberMe">Remember me</label>
                        </div>
                        <a href="#" class="text-primary" data-dismiss="modal" data-toggle="modal" data-target="#forgot-modal">Forgot password?</a>
                    </div>

                    <div id="login-error" class="alert alert-danger d-none" role="alert"></div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-primary">
                            <i class="fas fa-sign-in-alt mr-1"></i>Login
                        </button>
                    </div>
                </form>
            </div>

            <div class="modal-footer justify-content-center">
                <span>
                    Don't have an account?
                    <a href="#" class="font-weight-bold text-primary" data-dismiss="modal" data-toggle="modal" data-target="#signup-modal">Register here</a>
                </span>
            </div>
        </div>
    </div>
</div>

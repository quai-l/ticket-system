<div class="modal fade" id="loginModal" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header bg-dark text-white">
                <h3 class="modal-title">Login</h3>

                <button type="button"
                        class="btn-close btn-close-white"
                        data-bs-dismiss="modal">
                </button>
            </div>

            <div class="modal-body p-5">

                <div class="text-center mb-5">

                    <button class="btn btn-warning px-4 me-2">
                        E-mail
                    </button>

                    <button class="btn btn-dark px-4">
                        Mobile
                    </button>

                </div>

                <form method="POST"
                      action="index.php?a=auth&action=login">

                    <div class="mb-4">

                        <input type="email"
                               name="email"
                               class="form-control form-control-lg"
                               placeholder="Email">

                    </div>

                    <div class="mb-3">

                        <input type="password"
                               name="password"
                               class="form-control form-control-lg"
                               placeholder="Please Enter Password">

                    </div>

                    <div class="d-flex justify-content-between mb-4">

                        <div>

                            <input type="checkbox"
                                   id="remember">

                            <label for="remember">
                                Remember me
                            </label>

                        </div>

                        <a href="#">
                            Forgot password
                        </a>

                    </div>

                    <div class="text-center">

                        <button type="submit"
                                class="btn btn-warning px-5">
                            Login
                        </button>

                    </div>

                </form>

                <div class="text-center mt-5">

                    Don't have an account?

                    <a href="index.php?a=auth&action=register">
                        Sign up
                    </a>

                </div>

                <div class="text-center mt-5 text-secondary">

                    TRC © <?= date('Y') ?>

                </div>

            </div>

        </div>
    </div>
</div>
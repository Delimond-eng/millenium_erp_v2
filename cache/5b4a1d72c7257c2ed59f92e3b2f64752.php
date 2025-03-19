


<?php $__env->startSection("content"); ?>
<div class="authincation d-flex flex-column flex-lg-row flex-column-fluid">
    <div class="login-aside text-center d-none d-sm-flex flex-column flex-row-auto">
        <div class="d-flex flex-column-auto flex-column pt-lg-40 pt-15">
            <div class="text-center mb-4 pt-5">
                    <!-- <a href="index-2.html"><img src="assets/images/logo-full.png" class="dark-login" alt=""></a>
                    <a href="index-2.html"><img src="assets/images/logo-full-white.png" class="light-login" alt=""></a> -->
            </div>
            <h3 class="mb-2">Bienvenue sur MERP V.0.2 !</h3>
            <p>Veuillez vous connecter avec <br> vos identifiants d'authentification !</p>
        </div>
        <div class="aside-image" style="background-image:url(assets/images/pic1.svg);"></div>
    </div>
    <div class="container flex-row-fluid d-flex flex-column justify-content-center position-relative overflow-hidden p-7 mx-auto">
        <div class="d-flex justify-content-center h-100 align-items-center">
            <div class="authincation-content style-2">
                <div class="row no-gutters">
                    <div class="col-xl-12">
                        <div class="auth-form">
                            <div class="text-center d-block d-lg-none mb-4 pt-5">
                                <a href="index-2.html"><img src="assets/images/logo-full.png" class="dark-login" alt=""></a>
                                <a href="index-2.html"><img src="assets/images/logo-full-white.png" class="light-login" alt=""></a>
                            </div>

                            <h4 class="text-center mb-4">Connexion</h4>
                            <form action="/">
                                <div class="mb-3">
                                    <label class="mb-1 form-label">Email</label>
                                    <input type="email" class="form-control" placeholder="exemple@domain">
                                </div>
                                <div class="mb-3">
                                    <label class="mb-1 form-label">Mot de passe</label>
                                    <div class="position-relative">
                                        <input type="password" id="dz-password" class="form-control" placeholder="Entrer le mot de passe...">
                                        <span class="show-pass eye">
                                            <i class="fa fa-eye-slash"></i>
                                            <i class="fa fa-eye"></i>
                                        </span>
                                    </div>
                                </div>
                                
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-block">Connecter</button>
                                </div>
                            </form>
                            <div class="new-account mt-3">
                                <p>Vous n'avez pas de compte millenium ERP ? <a class="text-primary" href="/sign_up">Créez un compte</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.auth", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Delimond\Documents\DEVFOLDER\PHP\erpa-v2\src\Views/auth/login.blade.php ENDPATH**/ ?>
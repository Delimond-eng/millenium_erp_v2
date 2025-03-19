


<?php $__env->startSection("content"); ?>
<div class="authincation d-flex flex-column flex-lg-row flex-column-fluid">
    <div class="login-aside text-center d-none d-sm-flex flex-column flex-row-auto">
        <div class="d-flex flex-column-auto flex-column pt-lg-40 pt-15">
            <div class="text-center mb-4 pt-5">
                    <!-- <a href="index-2.html"><img src="assets/images/logo-full.png" class="dark-login" alt=""></a>
                    <a href="index-2.html"><img src="assets/images/logo-full-white.png" class="light-login" alt=""></a> -->
            </div>
            <h3 class="mb-2">Bienvenue sur MERP V.0.2 !</h3>
            <p>Vous êtes nouveau ? <br> Veuillez créer un compte pour votre entreprise !</p>
        </div>
        <div class="aside-image" style="background-image:url(assets/images/chef1.gif);"></div>
    </div>
    <div class="container flex-row-fluid d-flex flex-column justify-content-center position-relative overflow-hidden p-7 mx-auto">
        <div class="d-flex justify-content-center h-100 align-items-center">
            <div class="style-2">
                <div class="row no-gutters d-flex justify-content-center h-100 align-items-center">
                    <div class="col-xl-10">
                        <div class="auth-form">
                            <div class="text-center d-block d-lg-none mb-4 pt-5">
                                <a href="index-2.html"><img src="assets/images/logo-full.png" class="dark-login" alt=""></a>
                                <a href="index-2.html"><img src="assets/images/logo-full-white.png" class="light-login" alt=""></a>
                            </div>

                            <h4 class="text-center mb-4">Inscription</h4>
                            <form action="/" class="row g-2">
                                <div class="col-md-6">
                                    <label class="mb-1 form-label">Nom de la société</label>
                                    <input type="text" class="form-control" placeholder="Nom de votre société">
                                </div>
                                <div class="col-md-6">
                                    <label class="mb-1 form-label">Email</label>
                                    <input type="email" class="form-control" placeholder="exemple@domain">
                                </div>
                                <div class="col-md-6">
                                    <label class="mb-1 form-label">Téléphone</label>
                                    <input type="tel" class="form-control" placeholder="Tél...">
                                </div>
                                <div class="col-md-6">
                                    <label class="mb-1 form-label">Adresse</label>
                                    <input type="text" class="form-control" placeholder="Adresse de votre société...">
                                </div>
                                <div class="col-md-6">
                                    <label class="mb-1 form-label">ID NAT</label>
                                    <input type="text" class="form-control" placeholder="ID NAT...">
                                </div>
                                <div class="col-md-6">
                                    <label class="mb-1 form-label">RCCM</label>
                                    <input type="text" class="form-control" placeholder="RCCM...">
                                </div>
                                <div class="col-md-6">
                                    <label class="mb-1 form-label">N° IMPOT</label>
                                    <input type="text" class="form-control" placeholder="N° Impot...">
                                </div>
                                <div class="col-md-6">
                                    <label class="mb-1 form-label">Mot de passe</label>
                                    <div class="position-relative">
                                        <input type="password" id="dz-password" class="form-control" placeholder="Entrer le mot de passe...">
                                        <span class="show-pass eye">
                                            <i class="fa fa-eye-slash"></i>
                                            <i class="fa fa-eye"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-12">
								  <label for="formFile" class="form-label">Logo de la société</label>
								  <input class="form-control" type="file" id="formFile">
								</div>
                                
                                <div class="text-center col-md-12">
                                    <button type="submit" class="btn btn-primary btn-block">M'inscrire</button>
                                </div>
                            </form>
                            <div class="new-account mt-3 text-center">
                                <p>Vous avez un compte millenium ERP ? <a class="text-primary" href="/login">Connectez-vous</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.auth", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Delimond\Documents\DEVFOLDER\PHP\erpa-v2\src\Views/auth/register.blade.php ENDPATH**/ ?>
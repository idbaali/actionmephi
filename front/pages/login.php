<?php
//$title = "Esapce d'administration du site";
//require_once 'function/login.func.php';
//require_once 'header.php'; 
if(isset($_SESSION['admin'])){
    header('Location:/back/pages/dashboard');
}
?>

<div class="row mt-5">
    <div class="col-md-8 offset-2 form-login">
        <?php
        if(isset($_POST['btn_login'])){

            $email = htmlspecialchars(trim($_POST['email']));
            $password = htmlspecialchars(trim($_POST['password']));
            
            if(empty($email) || empty($password)){
                ?>
            <div class="alert alert-danger">vous devriez remplir tous les champs requis!</div>
            <?php
            }
            else if(is_login($email,$password) == 0){
                ?>
                <div class="alert alert-danger">Vos Identifiants ne vous permets pas de se connecter; Réessayer svp</div>
                <?php
            }else{ 
                //$info = is_connected($email, $password);
                //$_SESSION['nom']= $info->nom;
                $_SESSION['admin']= $email;
                //$_SESSION['image']= $info->image;
                //header("Location:/admin/dashboard");
                ?>
                <script>document.location.replace("/back/pages/dashboard")</script>
                <?php
            }
        }
        ?>
        <h2>Vos Identifiants</h2>
        <form action="" method="POST" class="">
            <div class="form-outline">
                <label class="form-label" for="form1"><i class="far fa-user trailing mr-2"></i>votre E-mail / Identifiant</label>
                <input type="email" id="form1" name="email" class="form-control form-icon-trailing" />
                
            </div><br>
            <div class="form-outline">
                <label class="form-label" for="typePassword"><i class="fas fa-key trailing mr-2"></i>votre mot de passe</label>
                <input type="password" id="typePassword" name="password" class="form-control" />
                
            </div><br>
            <button type="submit" name="btn_login" class="btn btn-primary mb-2 btn-lg">Valider</button>
        </form>
    </div>    
</div>


 

        Login
        <div class="d-flex col-12 col-lg-5 align-items-center p-sm-5 p-4">
          <div class="w-px-400 mx-auto">
           
            <!-- /Logo -->
            <h3 class="mb-1 fw-bold">W.Collections 👋</h3>
            
      <!-- Ici -->


     
            <?php //flash(); ?>
            
            <p class="mb-4">Veuillez vous connecter à votre compte et commencer l'aventure</p>

            <form id="formAuthentication" class="mb-3" action="/login-action" method="POST">
              <div class="mb-3">
                <label for="email" class="form-label">E-mail ou nom d'utilisateur</label>
                <input
                  type="text"
                  class="form-control"
                  id="email"
                  name="email-username"
                  placeholder="E-mail ou nom d'utilisateur"
                  autofocus
                />
              </div>
              <div class="mb-3 form-password-toggle">
                <div class="d-flex justify-content-between">
                  <label class="form-label" for="password">Mot de passe</label>
                  <a href="auth-forgot-password-cover.html">
                    <small>Mot de passe oublié ?</small>
                  </a>
                </div>
                <div class="input-group input-group-merge">
                  <input
                    type="password"
                    id="password"
                    class="form-control"
                    name="password"
                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                    aria-describedby="password"
                  />
                  <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                </div>
              </div>
              <div class="mb-3">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="remember-me" />
                  <label class="form-check-label" for="remember-me"> Souviens-toi de moi </label>
                </div>
              </div>
              <button class="btn btn-primary d-grid w-100">s'identifier</button>
              
            </form>
            
            <p class="text-center">
              <span>Nouveau sur notre plateforme ?</span>
              <a href="auth-register-cover.html">
                <span>Créer un compte</span>
              </a>
            </p>

            <div class="divider my-4">
              <div class="divider-text">ou</div>
            </div>

            <div class="d-flex justify-content-center">
              <a href="javascript:;" class="btn btn-icon btn-label-facebook me-3">
                <i class="tf-icons fa-brands fa-facebook-f fs-5"></i>
              </a>

              <a href="javascript:;" class="btn btn-icon btn-label-google-plus me-3">
                <i class="tf-icons fa-brands fa-google fs-5"></i>
              </a>

              <a href="javascript:;" class="btn btn-icon btn-label-twitter">
                <i class="tf-icons fa-brands fa-twitter fs-5"></i>
              </a>
            </div>
          </div>
        </div> 
    



        <!-- /Login -->



<body class="bg-accpunt-pages">

		
        <div class="overlay-video" id="video"></div>


		<!-- HOME -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="wrapper-page">

                            <div class="account-pages">
                                <div class="account-box">
                                    <div class="account-logo-box">
                                        <h2 class="text-uppercase text-center">
                                            
                                                <span><img src="assets/images/wortex/wortex.png" alt="" ></span>
                                    
                                        </h2>
                                        
                                    
                                        
                                    </div>
                                    <div class="account-content">
                                    
                                    	<div class="alert alert-danger text-center error-login">
                                          E-mail ou senha inválidos!
                                        </div>
                                    	
                                        <form class="form-horizontal" id="FormLogin" action="<?php echo ADMIN_WORTEX ?>controlers/login/login.php">

											
                                            <div class="form-group m-b-20 row">
                                                <div class="col-12">
                                                    <label for="emailaddress">E-mail</label>
                                                    <input class="form-control" type="email" id="email-login-admin" required placeholder="Informe seu e-mail" name="email_login_admin" value="<?php if(isset($_COOKIE['usuario_admin_wortex'])){echo $_COOKIE['usuario_admin_wortex'];} ?>" <?php if(!isset($_COOKIE['usuario_admin_wortex'])){echo 'autofocus'; } ?>>
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-20" id="recolhe-esqueci-senha01">
                                                <div class="col-12">
                                                    <a data-type="recuperar" href="javascript:void();" class="text-muted pull-right esqueci-senha"><small>Esqueceu a senha?</small></a>
                                                    <label for="password">Senha</label>
                                                    <input class="form-control" type="password" required id="senha-login-admin" name="senha_login_admin" placeholder="Informe a senha" <?php if(isset($_COOKIE['usuario_admin_wortex'])){echo 'autofocus'; } ?>>
                                                </div>
                                            </div>

                                           

                                            <div class="form-group row text-center m-t-10">
                                                <div class="col-12">
                                                    <button class="btn btn-block btn-success waves-effect waves-light" type="submit" id="button-login-adm">LOGIN</button>
                                                   
                                                    <a data-type="retorno" href="javascript:void();" class="text-muted pull-left esqueci-senha retorno-senha"><small>VOLTAR</small></a>
                                                    
                                                </div>
                                            </div>

                                        </form>

                                        <div class="row m-t-20">
                                            <div class="col-sm-12 text-center">
                                                <p class="text-muted"><b>Wortex Commerce</b> &copy; Copyright <?php echo date("Y"); ?></p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- end card-box-->


                        </div>
                        <!-- end wrapper -->

                    </div>
                </div>
            </div>
        </section>
        <!-- END HOME -->
        

       
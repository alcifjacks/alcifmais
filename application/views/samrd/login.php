<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title><?= $this->config->item('app_name') ?> </title>
    <link rel="icon" type="image/x-icon" href="<?= base_url() ?>assets/img/favicon.png"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="<?= base_url() ?>bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/css/authentication/form-1.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/forms/theme-checkbox-radio.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/forms/switches.css">
</head>

<body class="form">

    <div id="loginbox" class="form-container">
        <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container">
                    <div class="form-content">

                        <h1 class="">ALCIFMAIS <span class="brand-name">RD</span></h1>
                        <p class="signup-link"></a></p>
                        <form class="text-left" id="formLogin" method="post" action="<?= site_url('login/verificarLogin') ?>">
                            
                            <?php if ($this->session->flashdata('error') != null) { ?>
                                <div class="alert alert-danger">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <?= $this->session->flashdata('error'); ?>
                                </div>
                            <?php } ?>
                            
                            <div class="form">

                                <div id="username-field" class="field-wrapper input">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                    <input id="email" name="email" type="text" placeholder="Email" />
                                </div>

                                <div id="password-field" class="field-wrapper input mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                    <input id="password" name="senha" type="password" placeholder="Senha" />
                                </div>
                                
                                <div class="d-sm-flex justify-content-between">
                                    <div class="field-wrapper toggle-pass">
                                        <p class="d-inline-block">Mostrar Senha</p>
                                        <label class="switch s-primary">
                                            <input type="checkbox" id="toggle-password" class="d-none">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                    <div class="field-wrapper">
                                        <button id="btn-acessar" type="submit" class="btn btn-primary" value="">Entrar</button>
                                    </div>
                                    
                                </div>
                                
                                <div class="field-wrapper text-center keep-logged-in">
                                    <div class="n-chk new-checkbox checkbox-outline-primary">
                                        <label class="new-control new-checkbox checkbox-outline-primary">
                                          <input type="checkbox" class="new-control-input">
                                          <span class="new-control-indicator"></span>Manter Logado
                                        </label>
                                    </div>
                                </div>

                                <div class="field-wrapper">
                                    <a href="auth_pass_recovery.html" class="forgot-pass-link">Esqueceu a senha?</a>
                                </div>

                            </div>
                        </form>                        
                        <p class="terms-conditions text-center">© 2021 Todos Direitos Reservados. <a href="www.alcifmais.com.br">ALCIFMAIS</a> <br>Feito com <font color="red"> ❤ </font></a></p>

                    </div>                    
                </div>
            </div>
        </div>
        <div class="form-image">
            <div class="l-image">
            </div>
        </div>
    </div>
   
    <a href="#notification" id="call-modal" role="button" class="btn" data-toggle="modal" style="display: none ">Notificação</a>
    <div class="modal fade" id="notification" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Falha na Autenticação</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                    </button>
                </div>
                <div class="modal-body">
                    <h5 class="modal-heading mb-4 mt-2" id="message">Os dados de acesso estão incorretos, por favor tente novamente!</h5>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" data-dismiss="modal"><i class="flaticon-cancel-12"></i>Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="<?= base_url() ?>assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="<?= base_url() ?>bootstrap/js/popper.min.js"></script>
    <script src="<?= base_url() ?>bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/js/validate.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            $('#email').focus();
            $("#formLogin").validate({
                rules: {
                    email: {
                        required: true,
                        email: true
                    },
                    senha: {
                        required: true
                    }
                },
                messages: {
                    email: {
                        required: 'Campo Requerido.',
                        email: 'Insira Email válido'
                    },
                    senha: {
                        required: 'Campo Requerido.'
                    }
                },
                submitHandler: function(form) {
                    var dados = $(form).serialize();
                    $('#btn-acessar').addClass('disabled');
                    $('#progress-acessar').removeClass('hide');

                    $.ajax({
                        type: "POST",
                        url: "<?= site_url('login/verificarLogin?ajax=true'); ?>",
                        data: dados,
                        dataType: 'json',
                        success: function(data) {
                            if (data.result == true) {
                                window.location.href = "<?= site_url('samrd'); ?>";
                            } else {


                                $('#btn-acessar').removeClass('disabled');
                                $('#progress-acessar').addClass('hide');
                                
                                $('#message').text(data.message || 'Os dados de acesso estão incorretos, por favor tente novamente!');
                                $('#call-modal').trigger('click');
                            }
                        }
                    });

                    return false;
                },

                errorClass: "help-inline",
                errorElement: "span",
                highlight: function(element, errorClass, validClass) {
                    $(element).parents('.control-group').addClass('error');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).parents('.control-group').removeClass('error');
                    $(element).parents('.control-group').addClass('success');
                }
            });

        });
    </script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="<?= base_url() ?>assets/js/authentication/form-1.js"></script>

</body>

</html>

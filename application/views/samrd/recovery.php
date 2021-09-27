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

                    <h1 class="">Esqueceu a senha?</h1>
                        <p class="signup-link">Digite seu e-mail e as instruções serão enviadas para você!</p>
                        <form class="text-left" id="formRecover" method="post" action="<?= site_url('recovery/verificarLogin') ?>">
                            
                            <?php if ($this->session->flashdata('error') != null) { ?>
                                <div class="alert alert-danger">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <?= $this->session->flashdata('error'); ?>
                                </div>
                            <?php } ?>

                            <div class="form">

                                <div id="username-field" class="field-wrapper input">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-at-sign"><circle cx="12" cy="12" r="4"></circle><path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path></svg>
                                    <input id="email" name="email" type="text" value="" placeholder="Email">
                                </div>
                                <div class="d-sm-flex justify-content-between">
                                    <div class="field-wrapper">
                                        <button id="btn-recovery" type="submit" class="btn btn-primary" value="">Recuperar</button>
                                    </div>                                    
                                </div>

                            </div>
                        </form>
                                             
                        <p class="terms-conditions">© 2021 Todos Direitos Reservados. <a href="www.alcifmais.com.br">ALCIFMAIS</a> <!--a href="javascript:void(0);">Cookie Preferences</a>, <a href="javascript:void(0);">Privacy</a>, and <a href="javascript:void(0);">Terms</a>.</p-->

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
            $("#formRecover").validate({
                rules: {
                    email: {
                        required: true,
                        email: true
                    }
                },
                messages: {
                    email: {
                        required: 'Campo Requerido.',
                        email: 'Insira Email válido'
                    }
                },
                submitHandler: function(form) {
                    var dados = $(form).serialize();
                    $('#btn-recovery').addClass('disabled');
                    $('#progress-recovery').removeClass('hide');

                    $.ajax({
                        type: "POST",
                        url: "<?= site_url('recovery/verificarLogin?ajax=true'); ?>",
                        data: dados,
                        dataType: 'json',
                        success: function(data) {
                            if (data.result == true) {
                                window.location.href = "<?= site_url('samrd'); ?>";
                            } else {


                                $('#btn-recovery').removeClass('disabled');
                                $('#progress-recovery').addClass('hide');
                                
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

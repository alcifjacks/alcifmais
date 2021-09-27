<script src="<?php echo base_url() ?>assets/js/jquery.mask.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/sweetalert2.all.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/funcoes.js"></script>

<div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
    <div class="account-settings-container layout-spacing layout-top-spacing">
        <div class="account-content">
            <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                    <?php if ($custom_error != '') {
                        echo '<div class="alert alert-danger">' . $custom_error . '</div>';
                    } ?>
                        <form action="<?php echo current_url(); ?>" id="formUsuario" method="post" class="section contact">
                            <div class="info">
                                <h5 class="">Adicionar Usuário</h5>
                                <div class="row">
                                    <div class="col-md-11 mx-auto">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="nome">Nome<span class="required">*</span></label>
                                                    <input type="text" class="form-control mb-4" id="nome" type="text" name="nome" value="<?php echo set_value('nome'); ?>" >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="email">Email<span class="required">*</span></label>
                                                    <input id="email" class="form-control mb-4" type="text" name="email" value="<?php echo set_value('email'); ?>" />
                                                </div>
                                            </div>    
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="senha">Senha<span class="required">*</span></label>
                                                    <input id="senha" class="form-control mb-4" type="password" name="senha" value="<?php echo set_value('senha'); ?>" placeholder="Não preencha se não quiser alterar." />
                                                    <i class="icon-exclamation-sign tip-top" title="Se não quiser alterar a senha, não preencha esse campo."></i>
                                                </div>
                                            </div> 
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="dataExpiracao">Expira em<span class="required">*</span></label>
                                                    <input id="dataExpiracao" class="form-control mb-4" type="date" name="dataExpiracao" value="<?php echo set_value('dataExpiracao'); ?>" />
                                                </div>
                                            </div>      
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="situacao">Situação*</label>
                                                    <select class="form-control" name="situacao" id="situacao">
                                                        <option value="1">Ativo</option>
                                                        <option value="0">Inativo</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="permissoes_id">Permissão*</label>
                                                    <select class="form-control" name="permissoes_id" id="permissoes_id">
                                                        <?php foreach ($permissoes as $p) {
                                                            echo '<option value="' . $p->idPermissao . '">' . $p->nome . '</option>';
                                                        } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions m-2">
                                <div class="span12">
                                    <div class="span6 offset3">
                                        <button type="submit" class="btn btn-success">Adicionar</button>
                                        <a href="<?php echo base_url() ?>index.php/usuarios" id="" class="btn btn-dark"><i class="fas fa-backward"></i> Voltar</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo base_url() ?>assets/js/jquery.validate.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

        $('#formUsuario').validate({
            rules: {
                nome: {
                    required: true
                },
                email: {
                    required: true
                },
                senha: {
                    required: true
                },
                dataExpiracao: {
                    required: true
                },
                situacao: {
                    required: true
                },
                permissoes_id: {
                    required: true
                },
            },
            messages: {
                nome: {
                    required: 'Campo Requerido.'
                },
                email: {
                    required: 'Campo Requerido.'
                },
                senha: {
                    required: 'Campo Requerido.'
                },
                dataExpiracao: {
                    required: 'Campo Requerido.'
                }, 
                situacao: {
                    required: 'Campo Requerido.'
                }, 
                permissoes_id: {
                    required: 'Campo Requerido.'
                },                 
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

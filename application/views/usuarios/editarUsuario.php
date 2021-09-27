<script src="<?php echo base_url() ?>assets/js/jquery.mask.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/sweetalert2.all.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/funcoes.js"></script>
            <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
                <div class="account-settings-container layout-top-spacing">

                    <div class="account-content">
                        <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                    <form action="<?php echo current_url(); ?>" id="formUsuario" method="post" class="section contact">
                                        <div class="info">
                                            <h5 class="">Editar Usuário</h5>
                                            <div class="row">
                                                <div class="col-md-11 mx-auto">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <?php echo form_hidden('idUsuarios', $result->idUsuarios) ?>
                                                                <label for="nome">Nome<span class="required">*</span></label>
                                                                <input type="text" class="form-control mb-4" id="nome" type="text" name="nome" value="<?php echo $result->nome; ?>" >
                                                            </div>
                                                        </div>                      
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="email">Email<span class="required">*</span></label>
                                                                <input id="email" class="form-control mb-4" type="text" name="email" value="<?php echo $result->email; ?>" />
                                                            </div>
                                                        </div>    
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="senha">Senha</label>
                                                                <input id="senha" class="form-control mb-4" type="password" name="senha" value="" placeholder="Não preencha se não quiser alterar." />
                                                                <i class="icon-exclamation-sign tip-top" title="Se não quiser alterar a senha, não preencha esse campo."></i>
                                                            </div>
                                                        </div> 
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="dataExpiracao">Expira em<span class="required">*</span></label>
                                                                <input id="dataExpiracao" class="form-control mb-4" type="date" name="dataExpiracao" value="<?php echo $result->dataExpiracao; ?>" />
                                                            </div>
                                                        </div>      
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="country">Situação</label>
                                                                <select class="form-control" name="situacao" id="situacao">
                                                                    <?php if ($result->situacao == 1) {
                                                                        $ativo = 'selected';
                                                                        $inativo = '';
                                                                    } else {
                                                                        $ativo = '';
                                                                        $inativo = 'selected';
                                                                    } ?>
                                                                    <option value="1" <?php echo $ativo; ?>>Ativo</option>
                                                                    <option value="0" <?php echo $inativo; ?>>Inativo</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="country">Permissão</label>
                                                                <select class="form-control" name="permissoes_id" id="permissoes_id">
                                                                    <?php foreach ($permissoes as $p) {
                                                                    if ($p->idPermissao == $result->permissoes_id) {
                                                                        $selected = 'selected';
                                                                    } else {
                                                                        $selected = '';
                                                                    }
                                                                    echo '<option value="' . $p->idPermissao . '"' . $selected . '>' . $p->nome . '</option>';
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
                                                    <button type="submit" class="btn btn-success"> Alterar</button>
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
                dataExpiracao: {
                    required: true
                },
                telefone: {
                    required: true
                },
                email: {
                    required: true
                },
               
            },
            messages: {
                nome: {
                    required: 'Campo Requerido.'
                },
                dataExpiracao: {
                    required: 'Campo Requerido.'
                },
                telefone: {
                    required: 'Campo Requerido.'
                },
                email: {
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
                                        
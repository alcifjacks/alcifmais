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
                        <form action="<?php echo current_url(); ?>" id="formDevedor" method="post" class="section contact">
                            <div class="info">
                                <h5 class="">Cadastro de Devedor</h5>
                                <div class="row">
                                    <div class="col-md-11 mx-auto">
                                        <div class="row">
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="nomeDevedor">Nome/Razão Social<span class="required">*</span></label>
                                                    <input type="text" class="form-control mb-4" id="nomeDevedor" name="nomeDevedor" value="<?php echo set_value('nomeDevedor'); ?>" >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="cnpf_cnpj">CPF/CNPJ<span class="required">*</span></label>
                                                    <input type="text" class="form-control mb-4" id="cnpf_cnpj" name="cnpf_cnpj" value="<?php echo set_value('cnpf_cnpj'); ?>" >
                                                </div>
                                            </div>                                            
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="idExterno">ID Externo<span class="required">*</span></label>
                                                    <input type="text" class="form-control mb-4" id="idExterno" name="idExterno" value="<?php echo set_value('idExterno'); ?>" >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="telefone">Telefone<span class="required">*</span></label>
                                                    <input type="tel" class="form-control mb-4" id="telefone" name="telefone" value="<?php echo set_value('telefone'); ?>" >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="nascimento">Data Nascimento<span class="required">*</span></label>
                                                    <input type="date" class="form-control mb-4" id="nascimento" name="nascimento" value="<?php echo set_value('dataNascimento'); ?>" >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="cep">CEP<span class="required">*</span></label>
                                                    <input type="text" class="form-control mb-4" id="cep" name="cep" value="<?php echo set_value('cep'); ?>" >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="endereco">Endereço<span class="required">*</span></label>
                                                    <input type="text" class="form-control mb-4" id="endereco" name="endereco" value="<?php echo set_value('endereco'); ?>" >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="numero">Número<span class="required">*</span></label>
                                                    <input type="text" class="form-control mb-4" id="numero" name="numero" value="<?php echo set_value('numero'); ?>" >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="complemento">Complemento<span class="required">*</span></label>
                                                    <input type="text" class="form-control mb-4" id="complemento" name="complemento" value="<?php echo set_value('complemento'); ?>" >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="bairro">Bairro<span class="required">*</span></label>
                                                    <input class="form-control mb-4" id="bairro" type="text" name="bairro" value="<?php echo set_value('bairro'); ?>" >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="cidade">Cidade<span class="required">*</span></label>
                                                    <input class="form-control mb-4" id="cidade" type="text" name="cidade" value="<?php echo set_value('cidade'); ?>" >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="estado">Estado<span class="required">*</span></label>
                                                    <input type="text" class="form-control mb-4" id="estado" name="estado" value="<?php echo set_value('estado'); ?>" >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="gerente">Gerente<span class="required">*</span></label>
                                                    <input type="text" class="form-control mb-4" id="gerente" name="gerente" value="<?php echo set_value('gerente'); ?>" >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="regional">Regional<span class="required">*</span></label>
                                                    <input type="text" class="form-control mb-4" id="regional" name="regional" value="<?php echo set_value('regional'); ?>" >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="superintendente">Superintendente<span class="required">*</span></label>
                                                    <input type="text" class="form-control mb-4" id="superintendente" name="superintendente" value="<?php echo set_value('superintendente'); ?>" >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="advogado">Advogado<span class="required">*</span></label>
                                                    <input type="text" class="form-control mb-4" id="advogado" name="advogado" value="<?php echo set_value('advogado'); ?>" >
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
                                        <a href="<?php echo site_url() ?>/devedores" id="" class="btn btn-dark"><i class="fas fa-backward"></i> Voltar</a>
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

        $('#formDevedor').validate({
            rules: {
                nomeDevedor: {
                    required: true
                },
                cnpf_cnpj: {
                    required: true
                },
                idExterno: {
                    required: true
                },
                telefone: {
                    required: true
                },
                nascimento: {
                    required: true
                },
                cep: {
                    required: true
                },
                endereco: {
                    required: true
                },
                numero: {
                    required: true
                },
                complemento: {
                    required: true
                },
                bairro: {
                    required: true
                },
                cidade: {
                    required: true
                },
                estado: {
                    required: true
                },
                gerente: {
                    required: true
                },
                regional: {
                    required: true
                },
                superintendente: {
                    required: true
                },
                regional: {
                    required: true
                },
                advogado: {
                    required: true
                },
            },
            messages: {
                nomeDevedor: {
                    required: 'Campo Requerido.'
                },
                cnpf_cnpj: {
                    required: 'Campo Requerido.'
                },
                idExterno: {
                    required: 'Campo Requerido.'
                },
                telefone: {
                    required: 'Campo Requerido.'
                },
                nascimento: {
                    required: 'Campo Requerido.'
                },
                cep: {
                    required: 'Campo Requerido.'
                },
                endereco: {
                    required: 'Campo Requerido.'
                },
                numero: {
                    required: 'Campo Requerido.'
                },
                complemento: {
                    required: 'Campo Requerido.'
                },
                bairro: {
                    required: 'Campo Requerido.'
                },
                cidade: {
                    required: 'Campo Requerido.'
                },
                estado: {
                    required: 'Campo Requerido.'
                },
                gerente: {
                    required: 'Campo Requerido.'
                },
                regional: {
                    required: 'Campo Requerido.'
                },
                superintendente: {
                    required: 'Campo Requerido.'
                },
                regional: {
                    required: 'Campo Requerido.'
                },
                advogado: {
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

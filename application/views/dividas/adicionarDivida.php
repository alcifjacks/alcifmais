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
                                <h5 class="">Cadastro de Dívidas</h5>
                                <div class="row">
                                    <div class="col-md-11 mx-auto">
                                        <div class="row">
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="nomeDevedor">Devedor<span class="required">*</span></label>
                                                    <input type="text" class="form-control mb-4" id="nomeDevedor" name="nomeDevedor" value="<?php echo set_value('nomeDevedor'); ?>" >
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
                                                    <label for="contrato">Contrato<span class="required">*</span></label>
                                                    <input type="text" class="form-control mb-4" id="contrato" name="contrato" value="<?php echo set_value('contrato'); ?>" >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="dt_principal">Data Principal<span class="required">*</span></label>
                                                    <input type="tel" class="form-control mb-4" id="dt_principal" name="dt_principal" value="<?php echo set_value('dt_principal'); ?>" >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="vlrprincipal">R$ Valor Principal<span class="required">*</span></label>
                                                    <input type="date" class="form-control mb-4" id="vlrprincipal" name="vlrprincipal" value="<?php echo set_value('vlr_principal'); ?>" >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="multa">% Multa<span class="required">*</span></label>
                                                    <input type="text" class="form-control mb-4" id="multa" name="multa" value="<?php echo set_value('multa'); ?>" >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="moradiaria">R$ Mora Diária<span class="required">*</span></label>
                                                    <input type="text" class="form-control mb-4" id="moradiaria" name="moradiaria" value="<?php echo set_value('mora_diaria'); ?>" >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="observacoes">Observações<span class="required">*</span></label>
                                                    <input type="text" class="form-control mb-4" id="observacoes" name="observacoes" value="<?php echo set_value('observacoes'); ?>" >
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
                                        <a href="<?php echo site_url() ?>/dividas" id="" class="btn btn-dark"><i class="fas fa-backward"></i> Voltar</a>
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

        $('#formDividas').validate({
            rules: {
                nomeDevedor: {
                    required: true
                },
                idExterno: {
                    required: true
                },
                contrato: {
                    required: true
                },
                dt_principal: {
                    required: true
                },
                vlrprincipal: {
                    required: true
                },
                multa: {
                    required: true
                },
                moradiaria: {
                    required: true
                },
                observacoes: {
                    required: true
                },
            },
            messages: {
                nomeDevedor: {
                    required: 'Campo Requerido.'
                },
                idExterno: {
                    required: 'Campo Requerido.'
                },
                contrato: {
                    required: 'Campo Requerido.'
                },
                dt_principal: {
                    required: 'Campo Requerido.'
                },
                vlrprincipal: {
                    required: 'Campo Requerido.'
                },
                multa: {
                    required: 'Campo Requerido.'
                },
                moradiaria: {
                    required: 'Campo Requerido.'
                },
                observacoes: {
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

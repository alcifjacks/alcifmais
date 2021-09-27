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
                        <form action="<?php echo current_url(); ?>" id="formStatus" method="post" class="section contact">
                            <div class="info">
                                <h5 class="">Adicionar Status</h5>
                                <div class="row">
                                    <div class="col-md-11 mx-auto">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="descricao">Descrição<span class="required">*</span></label>
                                                    <input type="text" class="form-control mb-4" id="descricao" name="descricao" value="<?php echo set_value('descricao'); ?>" >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="country">Finalizar*</label>
                                                    <select class="form-control" name="finalizar" id="finalizar">
                                                        <option value="1">SIM</option>
                                                        <option value="0">NÃO</option>
                                                    </select>
                                                </div>
                                            </div> 
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="ordem">Ordem<span class="required">*</span></label>
                                                    <input id="ordem" class="form-control mb-4" type="text" name="ordem" value="<?php echo set_value('ordem'); ?>" />
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
                                        <a href="<?php echo base_url() ?>index.php/status" id="" class="btn btn-dark"><i class="fas fa-backward"></i> Voltar</a>
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

        $('#formStatus').validate({
            rules: {
                descricao: {
                    required: true
                },
                finalizar: {
                    required: true
                },
                ordem: {
                    required: true
                },
            },
            messages: {
                descricao: {
                    required: 'Campo Requerido.'
                },
                finalizar: {
                    required: 'Campo Requerido.'
                },
                ordem: {
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

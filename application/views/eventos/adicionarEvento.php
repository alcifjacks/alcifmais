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
                                                                <label for="acao">Ação<span class="required">*</span></label>
                                                                <input id="acao" class="form-control mb-4" type="text" name="acao" value="<?php echo set_value('acao'); ?>" />
                                                            </div>
                                                        </div>                       
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="mostrar_inicio">Mostrar Início</label>
                                                                <select class="form-control" name="mostrar_inicio" id="mostrar_inicio">
                                                                    <option value="1">SIM</option>
                                                                    <option value="0">NÃO</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="agendamento">Agendamento</label>
                                                                <select class="form-control" name="agendamento" id="agendamento">
                                                                    <option value="1">SIM</option>
                                                                    <option value="0">NÃO</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="atualiza_status">Atualiza Status</label>
                                                                <select class="form-control" name="atualiza_status" id="atualiza_status">
                                                                    <option value="1">SIM</option>
                                                                    <option value="0">NÃO</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="muda_evento">Muda Evento</label>
                                                                <select class="form-control" name="muda_evento" id="muda_evento">
                                                                    <option value="1">SIM</option>
                                                                    <option value="0">NÃO</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="excluir_parcelas">Excluir Parcelas</label>
                                                                <select class="form-control" name="excluir_parcelas" id="excluir_parcelas">
                                                                    <option value="1">SIM</option>
                                                                    <option value="0">NÃO</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="hs_sla">Horas SLA<span class="required">*</span></label>
                                                                <input id="hs_sla" class="form-control mb-4" type="text" name="hs_sla" value="<?php echo set_value('hs_sla'); ?>" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="status_id">Status Eventos</label>
                                                                <select class="form-control" name="status_id" id="status_id">
                                                                    <?php foreach ($status as $s) {
                                                                        echo '<option value="' . $s->idStatus . '">' . $s->descricao . '</option>';
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

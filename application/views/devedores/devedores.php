            <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
                <div class="">
                    <div class="widget-box">
                        <div class="widget-title">
                            <span class="icon">
                                <i class="fas fa-align-justify"></i>
                            </span>
                            <h5>Devedor</h5>
                        </div>
                        <div class="widget-content ">
                        <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'aDevedor')) { ?>
                            <a href="<?php echo base_url(); ?>index.php/devedores/adicionar" class="btn btn-success"><i class="fas fa-plus"></i> Adicionar Devedor</a>
                        <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
                    <div class="col-lg-12">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-content widget-content-area">
                                <table id="style-3" class="table style-3 table-hover">
                                    <thead>
                                        <tr>
                                            <th class="checkbox-column text-center"> # </th>
                                            <th class="text-center">Nome Devedor</th>
                                            <th class="text-center">ID Externo</th>
                                            <th class="text-center">CPF/CNPJ</th>
                                            <th class="text-center">Data Cadastro</th>
                                            <th class="text-center">Nome Gerente</th>
                                            <th class="text-center">E-mail</th>
                                            <th class="text-center dt-no-sorting">Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            
                                            foreach ($results as $d) {
                                                echo '<tr>';
                                                echo '<td>' . $d->idDevedor . '</td>';
                                                echo '<td>' . $d->nomeDevedor . '</td>';
                                                echo '<td>' . $d->idExterno . '</td>';
                                                echo '<td>' . $d->cpf_cnpj . '</td>';
                                                echo '<td>' . $d->dt_cadastro . '</td>';
                                                echo '<td>' . $d->nome_gerente . '</td>';
                                                echo '<td>' . $d->email . '</td>';
                                                echo '<td>';
                                                if ($this->permission->checkPermission($this->session->userdata('permissao'), 'eDevedor')) {
                                                echo '<a href="' . base_url() . 'index.php/devedores/editar/' . $d->idDevedores . '" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-6 mb-1"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>';
                                                }
                                                if ($this->permission->checkPermission($this->session->userdata('permissao'), 'dDevedor')) {
                                                echo '<a href="#modal-excluir" role="button" data-toggle="modal" status="' . $d->idDevedor . '" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-6 mb-1"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></a>';
                                                }
                                                echo '</td>';
                                                echo '</tr>';
                                        } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

<!-- Modal -->
                <div class="modal fade" id="modal-excluir" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <form action="<?php echo base_url() ?>index.php/devedores/excluir" method="post">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="myModalLabelTitle">Atenção!!!</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <input type="hidden" id="idDevedor" name="id" value="" />
                                    <h5 class="modal-text">Deseja realmente excluir este devedor?</h5>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-dark" data-dismiss="modal" aria-hidden="true"><i class="flaticon-cancel-12"></i> Cancelar</button>
                                    <button type="button" class="btn btn-danger">Excluir</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

<script type="text/javascript">
    $(document).ready(function() {
        $(document).on('click', 'a', function(event) {
            var devedor = $(this).attr('devedor');
            $('#idDevedor').val(devedor);
        });
    });
</script>


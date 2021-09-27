<div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
                <div class="">
                    <div class="widget-box">
                        <div class="widget-title">
                            <span class="icon">
                                <i class="fas fa-align-justify"></i>
                            </span>
                            <h5>Gerentes</h5>
                        </div>
                        <div class="widget-content ">
                        <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'aGerenteEmail')) { ?>
                            <a href="<?php echo base_url(); ?>index.php/gerentes/adicionar" class="btn btn-success"><i class="fas fa-plus"></i> Adicionar Gerentes</a>
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
                                            <th class="text-center">Nome</th>
                                            <th class="text-center">Email</th>
                                            <th class="text-center">Função</th>
                                            <th class="text-center">Supervisor</th>
                                            <th class="text-center">Situação</th>
                                            <th class="text-center dt-no-sorting">Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            foreach ($results as $r) {
                                                echo '<tr>';
                                                echo '<td>' . $r->idGerente . '</td>';
                                                echo '<td>' . $r->nome . '</td>';
                                                echo '<td>' . $r->email . '</td>';
                                                echo '<td>' . $r->funcao . '</td>';
                                                if ($r->supervisor_id != NULL) {
                                                    echo '<td>' . $r->supervisor_id . '</td>';
                                                } else {
                                                    echo '<td class="text-center"><span class="shadow-none badge badge-danger">SEM SUPERVISOR</span></td>';
                                                }
                                                if ($r->situacao == 1) {
                                                    echo '<td class="text-center"><span class="shadow-none badge badge-success">ATIVO</span></td>';
                                                } else {
                                                    echo '<td class="text-center"><span class="shadow-none badge badge-danger">INATIVO</span></td>';
                                                }
                                                echo '<td>';
                                                if ($this->permission->checkPermission($this->session->userdata('permissao'), 'eGerenteEmail')) {
                                                echo '<a href="' . base_url() . 'index.php/gerentes/editar/' . $r->idGerente . '" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-6 mb-1"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>';
                                                }
                                                if ($this->permission->checkPermission($this->session->userdata('permissao'), 'dGerenteEmail')) {
                                                echo '<a href="#modal-excluir" role="button" data-toggle="modal" status="' . $r->idGerente . '" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-6 mb-1"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></a>';
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
                    <form action="<?php echo base_url() ?>index.php/gerentes/excluir" method="post">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="myModalLabelTitle">Atenção!!!</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <input type="hidden" id="idGerente" name="id" value="" />
                                    <h5 class="modal-text">Deseja realmente excluir este gerente</h5>
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
            var gerentes = $(this).attr('gerentes');
            $('#idGerente').val(gerentes);
        });
    });
</script>


            <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
                <div class="">
                    <div class="widget-box">
                        <div class="widget-title">
                            <span class="icon">
                                <i class="fas fa-align-justify"></i>
                            </span>
                            <h5>Eventos</h5>
                        </div>
                        <div class="widget-content ">
                        <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'aEventos')) { ?>
                            <a href="<?php echo base_url() ?>index.php/eventos/adicionar" class="btn btn-success"><i class="icon-plus icon-white"></i> Adicionar Evento</a>
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
                                            <th class="text-center">Descrição</th>
                                            <th class="text-center">Ação</th>
                                            <th class="text-center">Mostrar Início</th>
                                            <th class="text-center">Agendamento</th>
                                            <th class="text-center">Atualiza Status</th>
                                            <th class="text-center">Mudar Evento</th>
                                            <th class="text-center">Excluir Parcelas</th>
                                            <th class="text-center">Horas SLA</th>
                                            <th class="text-center">Status Evento</th>
                                            <th class="text-center dt-no-sorting">Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            
                                            foreach ($results as $r) {
                                                echo '<tr>';
                                                echo '<td>' . $r->idEvento . '</td>';
                                                echo '<td>' . $r->descricao . '</td>';
                                                echo '<td>' . $r->acao . '</td>';
                                                if ($r->mostrar_inicio == 1) {
                                                    echo '<td class="text-center"><span class="shadow-none badge">SIM</span></td>';
                                                } else {
                                                    echo '<td class="text-center"><span class="shadow-none badge">NÃO</span></td>';
                                                }
                                                if ($r->agendamento == 1) {
                                                    echo '<td class="text-center"><span class="shadow-none badge">SIM</span></td>';
                                                } else {
                                                    echo '<td class="text-center"><span class="shadow-none badge">NÃO</span></td>';
                                                }
                                                if ($r->atualiza_status == 1) {
                                                    echo '<td class="text-center"><span class="shadow-none badge">SIM</span></td>';
                                                } else {
                                                    echo '<td class="text-center"><span class="shadow-none badge">NÃO</span></td>';
                                                }
                                                if ($r->muda_evento == 1) {
                                                    echo '<td class="text-center"><span class="shadow-none badge">SIM</span></td>';
                                                } else {
                                                    echo '<td class="text-center"><span class="shadow-none badge">NÃO</span></td>';
                                                }
                                                if ($r->excluir_parcelas == 1) {
                                                    echo '<td class="text-center"><span class="shadow-none badge">SIM</span></td>';
                                                } else {
                                                    echo '<td class="text-center"><span class="shadow-none badge">NÃO</span></td>';
                                                }
                                                echo '<td>' . $r->hs_sla . '</td>';
                                                echo '<td>' . $r->status_descricao . '</td>';
                                                echo '<td>';
                                                if ($this->permission->checkPermission($this->session->userdata('permissao'), 'eEventos')) {
                                                echo '<a href="' . base_url() . 'index.php/eventos/editar/' . $r->idEvento . '" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-6 mb-1"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>';
                                                }
                                                if ($this->permission->checkPermission($this->session->userdata('permissao'), 'dEventos')) {
                                                echo '<a href="#modal-excluir" role="button" data-toggle="modal" evento="' . $r->idEvento . '" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-6 mb-1"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></a>';
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
                    <form action="<?php echo base_url() ?>index.php/eventos/excluir" method="post">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="myModalLabelTitle">Atenção!!!</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <input type="hidden" id="idEventos" name="id" value="" />
                                    <h5 class="modal-text">Deseja realmente excluir este evento?</h5>
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
            var eventos = $(this).attr('eventos');
            $('#idEvento').val(eventos);
        });
    });
</script>


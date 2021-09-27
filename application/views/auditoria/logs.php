            <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title">
                            <span class="icon">
                                <i class="fas fa-align-justify"></i>
                            </span>
                            <h5>Logs</h5>
                        </div>
                        <div class="widget-content ">
                            <a href="#modal-excluir" role="button" data-toggle="modal" class="btn btn-danger tip-top" title="Excluir Logs"><i class="fas fa-trash-alt"></i> Remover Logs - 30 dias ou mais</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
                <div>
                    <div class="col-lg-12">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-content widget-content-area">
                                <table id="style-3" class="table style-3  table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Usuário</th>
                                            <th>Data</th>
                                            <th>Hora</th>
                                            <th>IP</th>
                                            <th>Tarefa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($results as $r) {
                                        echo '<tr>';
                                        echo '<td>' . $r->usuario . '</td>';
                                        echo '<td>' . date('d/m/Y', strtotime($r->data)) . '</td>';
                                        echo '<td>' . $r->hora . '</td>';
                                        echo '<td>' . $r->ip . '</td>';
                                        echo '<td>' . $r->tarefa . '</td>';
                                        echo '</tr>';
                                    } ?>
                                    <?php if (!$results) { ?>
                                            <tr>
                                            <td colspan="5">Nenhum registro encontrado.</td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="modal-excluir" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <form action="<?php echo site_url('auditoria/clean') ?>" method="post">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="myModalLabelTitle">Atenção!!!</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <h5 class="modal-text">Deseja realmente remover os logs mais antigos?</h5>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-dark" data-dismiss="modal" aria-hidden="true"><i class="flaticon-cancel-12"></i> Cancelar</button>
                                    <button type="button" class="btn btn-danger">Excluir</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

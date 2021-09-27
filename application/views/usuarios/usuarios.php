            <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title">
                            <span class="icon">
                                <i class="fas fa-align-justify"></i>
                            </span>
                            <h5>Cadastro de Usuários</h5>
                        </div>
                        <div class="widget-content ">
                            <a href="<?php echo base_url(); ?>index.php/usuarios/adicionar" class="btn btn-success">><i class="fas fa-user-plus"></i> Adicionar Usuário</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
                
                    <div class="col-lg-12">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-content widget-content-area">
                                <table id="style-3" class="table style-3  table-hover">
                                    <thead>
                                        <tr>
                                            <th class="checkbox-column text-center"> # </th>
                                            <th class="text-center">Nome</th>
                                            <th>Email</th>
                                            <th>Nível</th>
                                            <th>Validade</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center dt-no-sorting">Ação</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            if (!$results) {
                                                echo '<tr>
                                                        <td colspan="5">Nenhum Usuário Cadastrado</td>
                                                    </tr>';
                                            }
                                            foreach ($results as $r) {
                                                echo '<tr>';
                                                echo '<td>' . $r->idUsuarios . '</td>';
                                                echo '<td>' . $r->nome . '</td>';
                                                echo '<td>' . $r->email . '</td>';
                                                echo '<td>' . $r->permissao . '</td>';
                                                echo '<td >' . date('d-m-Y', strtotime($r->dataExpiracao)) . '</td>';
                                                if ($r->situacao == 1) {
                                                    echo '<td class="text-center"><span class="shadow-none badge badge-success">Ativo</span></td>';
                                                } else {
                                                    echo '<td class="text-center"><span class="shadow-none badge badge-danger">Inativo</span></td>';
                                                }
                                                echo '<td>
                                                        <a href="' . base_url() . 'index.php/usuarios/editar/' . $r->idUsuarios . '" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-6 mb-1"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a>
                                                        </td>';
                                                echo '</tr>';
                                        } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                
<?php echo $this->pagination->create_links(); ?>



<div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
    <form action="<?php echo base_url(); ?>index.php/permissoes/adicionar" id="formPermissao" method="post">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title">
                    <span class="icon">
                        <i class="fas fa-lock"></i>
                    </span>
                    <h5>Cadastro de Permissão</h5>
                </div>
                <div class="widget-content">
                    <div class="col-xl-12 col-12 layout-spacing mt-4">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="nome">Nome da Permissão</label>
                                    <input type="text" class="form-control mb-4" id="nome" type="text" name="nome"  >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tabsVertical" class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                            <div class="m-3">
                                <label class="new-control new-checkbox checkbox-outline-success">
                                    <input name="marcarTodos" type="checkbox" class="new-control-input" value="1" id="marcarTodos" />
                                    <span class="new-control-indicator"></span> Marcar Todos
                                </label>
                            </div>
                                <div class="widget-content widget-content-area vertical-pill">
                                    <div class="row mb-4 mt-3">
                                        <div class="col-sm-3 col-12">
                                            <div class="nav flex-column nav-pills mb-sm-0 mb-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                              <a class="nav-link mb-2" id="v-pills-devedores-tab" data-toggle="pill" href="#v-pills-devedores" role="tab" aria-controls="v-pills-devedores" aria-selected="true">Devedores</a>
                                              <a class="nav-link mb-2" id="v-pills-dividas-tab" data-toggle="pill" href="#v-pills-dividas" role="tab" aria-controls="v-pills-dividas" aria-selected="false">Dívidas</a>
                                              <a class="nav-link mb-2" id="v-pills-eventos-tab" data-toggle="pill" href="#v-pills-eventos" role="tab" aria-controls="v-pills-eventos" aria-selected="false">Eventos</a>
                                              <a class="nav-link mb-2" id="v-pills-status-tab" data-toggle="pill" href="#v-pills-status" role="tab" aria-controls="v-pills-status" aria-selected="false">Status</a>
                                              <a class="nav-link mb-2" id="v-pills-gerentesemail-tab" data-toggle="pill" href="#v-pills-gerentesemail" role="tab" aria-controls="v-pills-gerentesemail" aria-selected="false">Gerentes Email</a>
                                              <a class="nav-link mb-2" id="v-pills-relatorios-tab" data-toggle="pill" href="#v-pills-relatorios" role="tab" aria-controls="v-pills-relatorios" aria-selected="false">Relatórios</a>
                                              <a class="nav-link" id="v-pills-configuracoesesistema-tab" data-toggle="pill" href="#v-pills-configuracoesesistema" role="tab" aria-controls="v-pills-configuracoesesistema" aria-selected="false">Configurações e Sistema</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 col-12">
                                            <div class="tab-content" id="v-pills-tabContent">
                                            <div class="tab-pane fade" id="v-pills-devedores" role="tabpanel" aria-labelledby="v-pills-devedores-tab">
                                                    <table class="table">
                                                        <tbody>
                                                        <tr>
                                                            <td>
                                                                <label>
                                                                    <input name="vDevedores" class="marcar" type="checkbox" checked="checked" value="1" />
                                                                    <span class="lbl"> Visualizar Devedores</span>
                                                                </label>
                                                            </td>
                                                            <td>
                                                                <label>
                                                                    <input name="aDevedores" class="marcar" type="checkbox" value="1" />
                                                                    <span class="lbl"> Adicionar Devedores</span>
                                                                </label>
                                                            </td>
                                                            <td>
                                                                <label>
                                                                    <input name="eDevedores" class="marcar" type="checkbox" value="1" />
                                                                    <span class="lbl"> Editar Devedores</span>
                                                                </label>
                                                            </td>
                                                            <td>
                                                                <label>
                                                                    <input name="dDevedores" class="marcar" type="checkbox" value="1" />
                                                                    <span class="lbl"> Excluir Devedores</span>
                                                                </label>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                              </div>
                                              <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                                <div class="media">
                                                    <img class="mr-3" src="assets/img/90x90.jpg" alt="Generic placeholder image">
                                                    <div class="media-body">
                                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                                    </div>
                                                  </div>
                                              </div>
                                              <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                                <p class="dropcap  dc-outline-primary">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                </p>
                                              </div>
                                              <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                                <blockquote class="blockquote">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                </blockquote>
                                              </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="col-xl-12 col-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="m-3">
                                <label class="new-control new-checkbox checkbox-outline-success">
                                    <input name="marcarTodos" type="checkbox" class="new-control-input" value="1" id="marcarTodos" />
                                    <span class="new-control-indicator"></span>Marcar Todos
                                </label>
                            </div>
                            <div class="accordion" id="collapse-group">
                                <div class="accordion-group widget-box">
                                    <div class="accordion-heading">
                                        <div class="widget-title">
                                            <a data-parent="#collapse-group" href="#collapseGOne" data-toggle="collapse">
                                                <span class="icon"><i class="fas fa-key"></i></span>
                                                <h5>Devedores</h5>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="collapse in accordion-body" id="collapseGOne">
                                        <div class="widget-content">
                                            <table class="table table-bordered">
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <label>
                                                            <input name="vDevedores" class="marcar" type="checkbox" checked="checked" value="1" />
                                                            <span class="lbl"> Visualizar Devedores</span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label>
                                                            <input name="aDevedores" class="marcar" type="checkbox" value="1" />
                                                            <span class="lbl"> Adicionar Devedores</span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label>
                                                            <input name="eDevedores" class="marcar" type="checkbox" value="1" />
                                                            <span class="lbl"> Editar Devedores</span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label>
                                                            <input name="dDevedores" class="marcar" type="checkbox" value="1" />
                                                            <span class="lbl"> Excluir Devedores</span>
                                                        </label>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-group widget-box">
                                    <div class="accordion-heading">
                                        <div class="widget-title">
                                            <a data-parent="#collapse-group" href="#collapseGTwo" data-toggle="collapse">
                                                <span class="icon"><i class="fas fa-key"></i></span>
                                                <h5>Dívidas</h5>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="collapse accordion-body" id="collapseGTwo">
                                        <div class="widget-content">
                                            <table class="table table-bordered">
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <label>
                                                            <input name="vDividas" class="marcar" type="checkbox" checked="checked" value="1" />
                                                            <span class="lbl"> Visualizar Dívidas</span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label>
                                                            <input name="aDividas" class="marcar" type="checkbox" value="1" />
                                                            <span class="lbl"> Adicionar Dívidas</span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label>
                                                            <input name="eDividas" class="marcar" type="checkbox" value="1" />
                                                            <span class="lbl"> Editar Dívidas</span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label>
                                                            <input name="dDividas" class="marcar" type="checkbox" value="1" />
                                                            <span class="lbl"> Excluir Dívidas</span>
                                                        </label>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-group widget-box">
                                    <div class="accordion-heading">
                                        <div class="widget-title">
                                            <a data-parent="#collapse-group" href="#collapseGThree" data-toggle="collapse">
                                                <span class="icon"><i class="fas fa-key"></i></span>
                                                <h5>Eventos</h5>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="collapse accordion-body" id="collapseGThree">
                                        <div class="widget-content">
                                            <table class="table table-bordered">
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <label>
                                                            <input name="vEventos" class="marcar" type="checkbox" checked="checked" value="1" />
                                                            <span class="lbl"> Visualizar Eventos</span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label>
                                                            <input name="aEventos" class="marcar" type="checkbox" value="1" />
                                                            <span class="lbl"> Adicionar Eventos</span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label>
                                                            <input name="eEventos" class="marcar" type="checkbox" value="1" />
                                                            <span class="lbl"> Editar Eventos</span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label>
                                                            <input name="dEventos" class="marcar" type="checkbox" value="1" />
                                                            <span class="lbl"> Excluir Eventos</span>
                                                        </label>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-group widget-box">
                                    <div class="accordion-heading">
                                        <div class="widget-title">
                                            <a data-parent="#collapse-group" href="#collapseGThree3" data-toggle="collapse">
                                                <span class="icon"><i class="fas fa-key"></i></span>
                                                <h5>Status</h5>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="collapse accordion-body" id="collapseGThree3">
                                        <div class="widget-content">
                                            <table class="table table-bordered">
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <label>
                                                            <input name="vStatus" class="marcar" type="checkbox" checked="checked" value="1" />
                                                            <span class="lbl"> Visualizar Status</span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label>
                                                            <input name="aStatus" class="marcar" type="checkbox" value="1" />
                                                            <span class="lbl"> Adicionar Status</span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label>
                                                            <input name="eStatus" class="marcar" type="checkbox" value="1" />
                                                            <span class="lbl"> Editar Status</span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label>
                                                            <input name="dStatus" class="marcar" type="checkbox" value="1" />
                                                            <span class="lbl"> Excluir Status</span>
                                                        </label>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-group widget-box">
                                    <div class="accordion-heading">
                                        <div class="widget-title">
                                            <a data-parent="#collapse-group" href="#collapseGThree33" data-toggle="collapse">
                                                <span class="icon"><i class="fas fa-key"></i></span>
                                                <h5>Gerentes Email</h5>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="collapse accordion-body" id="collapseGThree33">
                                        <div class="widget-content">
                                            <table class="table table-bordered">
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <label>
                                                            <input name="vGerentesEmail" class="marcar" type="checkbox" checked="checked" value="1" />
                                                            <span class="lbl"> Visualizar Gerentes Email</span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label>
                                                            <input name="aGerentesEmail" class="marcar" type="checkbox" value="1" />
                                                            <span class="lbl"> Adicionar Gerentes Email</span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label>
                                                            <input name="eGerentesEmail" class="marcar" type="checkbox" value="1" />
                                                            <span class="lbl"> Editar Gerentes Email</span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label>
                                                            <input name="dGerentesEmail" class="marcar" type="checkbox" value="1" />
                                                            <span class="lbl"> Excluir Gerentes Email</span>
                                                        </label>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!--div class="accordion-group widget-box">
                                    <div class="accordion-heading">
                                        <div class="widget-title">
                                            <a data-parent="#collapse-group" href="#collapseGThree333" data-toggle="collapse">
                                                <span class="icon"><i class="fas fa-key"></i></span>
                                                <h5>Cobranças</h5>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="collapse accordion-body" id="collapseGThree333">
                                        <div class="widget-content">
                                            <table class="table table-bordered">
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <label>
                                                            <input name="vCobranca" class="marcar" type="checkbox" checked="checked" value="1" />
                                                            <span class="lbl"> Visualizar Cobranças</span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label>
                                                            <input name="aCobranca" class="marcar" type="checkbox" value="1" />
                                                            <span class="lbl"> Adicionar Cobranças</span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label>
                                                            <input name="eCobranca" class="marcar" type="checkbox" value="1" />
                                                            <span class="lbl"> Editar Cobranças</span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label>
                                                            <input name="dCobranca" class="marcar" type="checkbox" value="1" />
                                                            <span class="lbl"> Excluir Cobranças</span>
                                                        </label>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-group widget-box">
                                    <div class="accordion-heading">
                                        <div class="widget-title">
                                            <a data-parent="#collapse-group" href="#collapseGThree3333" data-toggle="collapse">
                                                <span class="icon"><i class="fas fa-key"></i></span>
                                                <h5>Garantias</h5>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="collapse accordion-body" id="collapseGThree3333">
                                        <div class="widget-content">
                                            <table class="table table-bordered">
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <label>
                                                            <input name="vGarantia" class="marcar" type="checkbox" checked="checked" value="1" />
                                                            <span class="lbl"> Visualizar Garantia</span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label>
                                                            <input name="aGarantia" class="marcar" type="checkbox" value="1" />
                                                            <span class="lbl"> Adicionar Garantia</span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label>
                                                            <input name="eGarantia" class="marcar" type="checkbox" value="1" />
                                                            <span class="lbl"> Editar Garantia</span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label>
                                                            <input name="dGarantia" class="marcar" type="checkbox" value="1" />
                                                            <span class="lbl"> Excluir Garantia</span>
                                                        </label>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-group widget-box">
                                    <div class="accordion-heading">
                                        <div class="widget-title">
                                            <a data-parent="#collapse-group" href="#collapseGThree33333" data-toggle="collapse">
                                                <span class="icon"><i class="fas fa-key"></i></span>
                                                <h5>Arquivos</h5>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="collapse accordion-body" id="collapseGThree33333">
                                        <div class="widget-content">
                                            <table class="table table-bordered">
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <label>
                                                            <input name="vArquivo" class="marcar" type="checkbox" checked="checked" value="1" />
                                                            <span class="lbl"> Visualizar Arquivo</span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label>
                                                            <input name="aArquivo" class="marcar" type="checkbox" value="1" />
                                                            <span class="lbl"> Adicionar Arquivo</span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label>
                                                            <input name="eArquivo" class="marcar" type="checkbox" value="1" />
                                                            <span class="lbl"> Editar Arquivo</span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label>
                                                            <input name="dArquivo" class="marcar" type="checkbox" value="1" />
                                                            <span class="lbl"> Excluir Arquivo</span>
                                                        </label>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-group widget-box">
                                    <div class="accordion-heading">
                                        <div class="widget-title">
                                            <a data-parent="#collapse-group" href="#collapseGThree333343" data-toggle="collapse">
                                                <span class="icon"><i class="fas fa-key"></i></span>
                                                <h5>Financeiro</h5>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="collapse accordion-body" id="collapseGThree333343">
                                        <div class="widget-content">
                                            <table class="table table-bordered">
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <label>
                                                            <input name="vPagamento" class="marcar" type="checkbox" checked="checked" value="1" />
                                                            <span class="lbl"> Visualizar Pagamento</span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label>
                                                            <input name="aPagamento" class="marcar" type="checkbox" value="1" />
                                                            <span class="lbl"> Adicionar Pagamento</span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label>
                                                            <input name="ePagamento" class="marcar" type="checkbox" value="1" />
                                                            <span class="lbl"> Editar Pagamento</span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label>
                                                            <input name="dPagamento" class="marcar" type="checkbox" value="1" />
                                                            <span class="lbl"> Excluir Pagamento</span>
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label>
                                                            <input name="vLancamento" class="marcar" type="checkbox" checked="checked" value="1" />
                                                            <span class="lbl"> Visualizar Lançamento</span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label>
                                                            <input name="aLancamento" class="marcar" type="checkbox" value="1" />
                                                            <span class="lbl"> Adicionar Lançamento</span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label>
                                                            <input name="eLancamento" class="marcar" type="checkbox" value="1" />
                                                            <span class="lbl"> Editar Lançamento</span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label>
                                                            <input name="dLancamento" class="marcar" type="checkbox" value="1" />
                                                            <span class="lbl"> Excluir Lançamento</span>
                                                        </label>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div-->
                                <div class="accordion-group widget-box">
                                    <div class="accordion-heading">
                                        <div class="widget-title">
                                            <a data-parent="#collapse-group" href="#collapseGThree333335" data-toggle="collapse">
                                                <span class="icon"><i class="fas fa-key"></i></span>
                                                <h5>Relatórios</h5>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="collapse accordion-body" id="collapseGThree333335">
                                        <div class="widget-content">
                                            <table class="table table-bordered">
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <label>
                                                            <input name="rDividas" class="marcar" type="checkbox" value="1" />
                                                            <span class="lbl"> Relatório Dívidas</span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label>
                                                            <input name="rEventos" class="marcar" type="checkbox" value="1" />
                                                            <span class="lbl"> Relatório Eventos</span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label>
                                                            <input name="rParcelas" class="marcar" type="checkbox" value="1" />
                                                            <span class="lbl"> Relatório Parcelas</span>
                                                        </label>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-group widget-box">
                                    <div class="accordion-heading">
                                        <div class="widget-title">
                                            <a data-parent="#collapse-group" href="#collapseGThree333338" data-toggle="collapse">
                                                <span class="icon"><i class="fas fa-key"></i></span>
                                                <h5>Configurações e Sistema</h5>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="collapse accordion-body" id="collapseGThree333338">
                                        <div class="widget-content">
                                            <table class="table table-bordered">
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <label class="new-control new-checkbox checkbox-outline-danger">
                                                            <input name="cUsuario" type="checkbox" class="new-control-input" value="1" />
                                                            <span class="new-control-indicator"></span> Configurar Usuário
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="new-control new-checkbox checkbox-outline-danger">
                                                            <input name="cImportacoes" type="checkbox" class="new-control-input" value="1" />
                                                            <span class="new-control-indicator"></span> Configurar Importações
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="new-control new-checkbox checkbox-outline-danger">
                                                            <input name="cPermissao" type="checkbox" class="new-control-input" value="1" />
                                                            <span class="new-control-indicator"></span> Configurar Permissão
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="new-control new-checkbox checkbox-outline-danger">
                                                            <input name="cBackup" type="checkbox" class="new-control-input" value="1" />
                                                            <span class="new-control-indicator"></span> Backup
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="new-control new-checkbox checkbox-outline-danger">
                                                            <input name="cAuditoria" type="checkbox" class="new-control-input" value="1" />
                                                            <span class="new-control-indicator"></span> Auditoria
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="new-control new-checkbox checkbox-outline-danger">
                                                            <input name="cEmail" type="checkbox" class="new-control-input" value="1" />
                                                            <span class="new-control-indicator"></span> Emails
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label class="new-control new-checkbox checkbox-outline-danger">
                                                            <input name="cSistema" type="checkbox" class="new-control-input" value="1" />
                                                            <span class="new-control-indicator"></span> Sistema
                                                        </label>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="span12">
                            <div class="span6 offset3">
                                <button type="submit" class="btn btn-success"><i class="fas fa-plus"></i> Confirmar</button>
                                <a title="Voltar" class="btn btn-dark" href="<?php echo site_url() ?>/permissoes"><i class="fas fa-arrow-left"></i> Voltar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
                        
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/validate.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#marcarTodos").change(function() {
            $("input:checkbox").prop('checked', $(this).prop("checked"));
        });
        $("#formPermissao").validate({
            rules: {
                nome: {
                    required: true
                }
            },
            messages: {
                nome: {
                    required: 'Campo obrigatório'
                }
            }
        });
    });
</script>

<!--  INICIO MENU LATERAL  -->
        <div class="sidebar-wrapper sidebar-theme">
            
            <nav id="sidebar">
                <div class="shadow-bottom"></div>
                <ul class="list-unstyled menu-categories" id="accordionExample">

                    <!-- MENU DASHBOARD -->
                    <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vDashboard')) { ?>
                        <li class="menu">
                            <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                <div class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                    <span>Dashboard</span>
                                </div>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                </div>
                            </a>
                            <ul class="collapse submenu list-unstyled" id="dashboard" data-parent="#accordionExample">
                                <li>
                                    <a href="#"> Breve </a>
                                </li>
                            </ul>
                        </li>
                        <?php
                    } ?>

                    <!-- MENU CADASTRO -->
                    <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vDevedor') || $this->permission->checkPermission($this->session->userdata('permissao'), 'vDividas') || $this->permission->checkPermission($this->session->userdata('permissao'), 'vEventos') || $this->permission->checkPermission($this->session->userdata('permissao'), 'vGerenteEmail') || $this->permission->checkPermission($this->session->userdata('permissao'), 'vStatus')) { ?>
                        <li class="menu">
                            <a href="#cadastro" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                <div class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cpu"><rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect><rect x="9" y="9" width="6" height="6"></rect><line x1="9" y1="1" x2="9" y2="4"></line><line x1="15" y1="1" x2="15" y2="4"></line><line x1="9" y1="20" x2="9" y2="23"></line><line x1="15" y1="20" x2="15" y2="23"></line><line x1="20" y1="9" x2="23" y2="9"></line><line x1="20" y1="14" x2="23" y2="14"></line><line x1="1" y1="9" x2="4" y2="9"></line><line x1="1" y1="14" x2="4" y2="14"></line></svg>
                                    <span>Cadastro</span>
                                </div>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                </div>
                            </a>
                            <ul class="collapse submenu list-unstyled" id="cadastro" data-parent="#accordionExample">
                                    <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vDevedor')) { ?>
                                        <li><a href="<?= site_url('devedores') ?>">Devedores</a></li>
                                        <?php
                                    } ?>
                                    <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vDividas')) { ?>
                                        <li><a href="<?= site_url('dividas') ?>">Dívidas</a></li>
                                        <?php
                                    } ?>
                                    <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vEventos')) { ?>
                                        <li><a href="<?= site_url('eventos') ?>">Eventos</a></li>
                                        <?php
                                    } ?>
                                    <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vGerenteEmail')) { ?>
                                        <li><a href="<?= site_url('gerentes') ?>">Gerentes</a></li>
                                        <?php
                                    } ?>
                                    <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vStatus')) { ?>
                                        <li><a href="<?= site_url('status') ?>">Status</a></li>
                                        <?php
                                    } ?>
                            </ul>
                        </li>
                        <?php
                    } ?>

                    <!-- MENU ATENDIMENTO -->
                    <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vAtendimento')) { ?>
                        <li class="menu">
                            <a href="<?= site_url('atendimento') ?>" aria-expanded="false" class="dropdown-toggle">
                                <div class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-zap"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
                                    <span>Atendimentos</span>
                                </div>
                            </a>
                        </li>
                        <?php
                    } ?>

                    <!-- MENU RELATORIOS -->
                    <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'rDividas') || $this->permission->checkPermission($this->session->userdata('permissao'), 'rEventos') || $this->permission->checkPermission($this->session->userdata('permissao'), 'rParcelas')) { ?>
                        <li class="menu">
                            <a href="#relatorio" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                                    <span>Relatórios</span>
                                </div>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                </div>
                            </a>
                            <ul class="collapse submenu list-unstyled" id="relatorio" data-parent="#accordionExample">
                                <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'rDividas')) { ?>
                                    <li><a href="<?= site_url('relatorios/dividas') ?>">Dívidas</a></li>
                                    <?php
                                } ?>
                                <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'rEventos')) { ?>
                                    <li><a href="<?= site_url('relatorios/eventos') ?>">Eventos</a></li>
                                    <?php
                                } ?>
                                <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'rParcelas')) { ?>
                                    <li><a href="<?= site_url('relatorios/parcelas') ?>">Parcelas</a></li>
                                    <?php
                                } ?>
                            </ul>
                        </li>
                        <?php
                    } ?>

                    <!-- MENU CONFIGURAÇÕES -->
                    <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'cUsuario')  || $this->permission->checkPermission($this->session->userdata('permissao'), 'cEmitente') || $this->permission->checkPermission($this->session->userdata('permissao'), 'cPermissao') || $this->permission->checkPermission($this->session->userdata('permissao'), 'cBackup')) { ?>
                        <li class="menu">
                            <a href="#starter-kit" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                <div class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-terminal"><polyline points="4 17 10 11 4 5"></polyline><line x1="12" y1="19" x2="20" y2="19"></line></svg>
                                    <span>Configurações</span>
                                </div>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                </div>
                            </a>
                            <ul class="collapse submenu list-unstyled" id="starter-kit" data-parent="#accordionExample">
                                <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'cSistema')) { ?>
                                <li><a href="<?= site_url('samrd/configurar') ?>">Sistema</a></li>
                                <?php } ?>
                                <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'cUsuario')) { ?>
                                    <li><a href="<?= site_url('usuarios') ?>">Usuários</a></li>
                                <?php } ?>
                                <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'cEmitente')) { ?>
                                    <li><a href="<?= site_url('samrd/emitente') ?>">Emitente</a></li>
                                <?php } ?>
                                <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'cPermissao')) { ?>
                                    <li><a href="<?= site_url('permissoes') ?>">Permissões</a></li>
                                <?php } ?>
                                <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'cAuditoria')) { ?>
                                    <li><a href="<?= site_url('auditoria') ?>">Auditoria</a></li>
                                <?php } ?>
                                <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'cEmail')) { ?>
                                    <li><a href="<?= site_url('samrd/emails') ?>">Emails</a></li>
                                <?php } ?>
                                <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'cBackup')) { ?>
                                    <li><a href="<?= site_url('samrd/backup') ?>">Backup</a></li>
                                <?php } ?>
                                <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'cImportacoes')) { ?>
                                    <li><a href="<?= site_url('samrd/importacoes') ?>">Importações</a></li>
                                <?php } ?>
                            </ul>
                        </li>
                        <?php
                    } ?>
                                        
                </ul>
                
            </nav>

        </div>
        <!--  FIM MENU LATERAL  -->
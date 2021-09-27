<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title><?= $this->config->item('app_name') ?> </title>
    <link rel="icon" type="image/x-icon" href="<?= base_url(); ?>assets/img/favicon.png"/>
    <link href="<?= base_url(); ?>assets/css/loader.css" rel="stylesheet" type="text/css" />
    <script src="<?= base_url(); ?>assets/js/loader.js"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="<?= base_url(); ?>bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="<?= base_url(); ?>plugins/apex/apexcharts.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url(); ?>assets/css/dashboard/dash_1.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>plugins/table/datatable/datatables.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>plugins/table/datatable/dt-global_style.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>plugins/table/datatable/datatables.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/forms/theme-checkbox-radio.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>plugins/table/datatable/dt-global_style.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>plugins/table/datatable/custom_dt_custom.css">
    <link href="<?= base_url(); ?>assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <!--  BEGIN CUSTOM STYLE FILE  ACCOUNT-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>plugins/dropify/dropify.min.css">
    <link href="<?= base_url(); ?>assets/css/users/account-setting.css" rel="stylesheet" type="text/css" />
    <!--  END CUSTOM STYLE FILE  ACCOUNT-->
    <!--  BEGIN CUSTOM STYLE FILE  MODAL-->
    <link href="<?= base_url(); ?>assets/css/components/custom-modal.css" rel="stylesheet" type="text/css" />
    <!--  END CUSTOM STYLE FILE  MODAL-->
    <!--  BEGIN CUSTOM STYLE FILE  SWITCHES-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/forms/switches.css">
    <!--  END CUSTOM STYLE FILE  SWITCHES-->

</head>
<body>
    <!-- INICIO CARREGAMENTO -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!-- FIM CARREGAMENTO -->

    <!--  INICIO NAVBAR PRINCIPAL  -->
    <div class="header-container fixed-top">
        <header class="header navbar navbar-expand-sm">

            <ul class="navbar-item theme-brand flex-row  text-center">
                <li class="nav-item theme-logo">
                    <a href="<?= base_url('index.php'); ?>">
                        <img src="<?= base_url(); ?>assets/img/logo.png" class="navbar-logo" alt="logo">
                    </a>
                </li>
                <li class="nav-item theme-text">
                    <a href="#" class="nav-link"><strong></strong> </a>
                </li>
            </ul>

            <ul class="navbar-item flex-row ml-md-0 ml-auto">
                <li class="nav-item align-self-center search-animated">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search toggle-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                    <form action="<?= site_url('samrd/pesquisar') ?>" class="form-inline search-full form-inline search" role="search">
                        <div class="search-bar">
                            <input type="text" class="form-control search-form-control  ml-lg-auto" placeholder="Pesquisar...">
                        </div>
                    </form>
                </li>
            </ul>

            <ul class="navbar-item flex-row ml-md-auto">

                <li class="nav-item dropdown message-dropdown">
                    <a href="<?= base_url(); ?>javascript:void(0);" class="nav-link dropdown-toggle" id="messageDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                    </a>
                    <div class="dropdown-menu position-absolute" aria-labelledby="messageDropdown">
                        
                    </div>
                </li>

                <li class="nav-item dropdown notification-dropdown">
                    <a href="<?= base_url(); ?>javascript:void(0);" class="nav-link dropdown-toggle" id="notificationDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg><span class="badge badge-success"></span>
                    </a>
                    <div class="dropdown-menu position-absolute" aria-labelledby="notificationDropdown">
                    </div>
                </li>

                <li class="nav-item dropdown user-profile-dropdown">
                    <a href="<?= base_url(); ?>javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <img src="<?= base_url(); ?>assets/img/90x90.jpg" alt="avatar">
                    </a>
                    <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                        <div class="">
                            <div class="dropdown-item">
                                <a class="" href="<?= site_url('samrd/minhaConta'); ?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> Minha conta</a>
                            </div>
                            <div class="dropdown-item">
                                <a class="" href="<?= site_url('login/lock'); ?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg> Bloquear</a>
                            </div>
                            <div class="dropdown-item">
                              <a class="" href="<?= site_url('login/sair'); ?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg> Sair</a>
                            </div>
                        </div>
                    </div>
                </li>

            </ul>
        </header>
    </div>
    <!--  FINAL NAVBAR PRINCIPAL -->

    <!--  INICIO NAVBAR SECUNDARIO -->
    <div class="sub-header-container">
        <header class="header navbar navbar-expand-sm">
            <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></a>

            <ul class="navbar-nav flex-row">
                <li>
                    <div class="page-header">
                        <nav class="breadcrumb-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                  <a href="<?= base_url() ?>" title="Dashboard">Dashboard
                                  </a>
                                </li>
                                <?php if ($this->uri->segment(1) != null) { ?>
                                  <li class="breadcrumb-item">
                                    <a href="<?= base_url() . 'index.php/' . $this->uri->segment(1) ?>" class="tip-bottom" title="<?= ucfirst($this->uri->segment(1)); ?>">
                                      <?= ucfirst($this->uri->segment(1)); ?>
                                    </a>
                                  </li>
                                <?php if ($this->uri->segment(2) != null) { ?>
                                  <li class="breadcrumb-item active" aria-current="page">
                                    <a href="<?= base_url() . 'index.php/' . $this->uri->segment(1) . '/' . $this->uri->segment(2) . '/' . $this->uri->segment(3) ?>" class="" title="<?= ucfirst($this->uri->segment(2)); ?>">
                                      <?= ucfirst($this->uri->segment(2)); } ?>
                                    </a>
                                  </li>
                                  <?php 
                                } ?>
                            </ol>
                        </nav>
                    </div>
                </li>
            </ul>
        </header>
    </div>
    <!--  FINAL NAVBAR SECUNDARIO -->

    <!--  INICIO CONTAINER PRINCIPAL  -->
    <div class="main-container" id="container">

      <div class="overlay"></div>
      <div class="search-overlay"></div>

    </div>
</div>
    <!-- FIM CONTAINER PRINCIPAL -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="<?= base_url(); ?>assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="<?= base_url(); ?>bootstrap/js/popper.min.js"></script>
    <script src="<?= base_url(); ?>bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/app.js"></script>
    
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="<?= base_url(); ?>plugins/highlight/highlight.pack.js"></script>
    <script src="<?= base_url(); ?>assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="<?= base_url(); ?>assets/js/scrollspyNav.js"></script>
    <!-- toastr -->
    <script src="<?= base_url(); ?>plugins/notification/snackbar/snackbar.min.js"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <script src="<?= base_url(); ?>assets/js/forms/bootstrap_validation/bs_validation_script.js"></script>
    <script src="<?= base_url(); ?>assets/js/jquery.validate.js"></script>

    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <script src="<?= base_url(); ?>assets/js/components/notification/custom-snackbar.js"></script>
    <!--  END CUSTOM SCRIPTS FILE  -->
    <!-- BEGIN THEME GLOBAL STYLE -->
    <script src="<?= base_url(); ?>plugins/sweetalerts/sweetalert2.min.js"></script>
    <script src="<?= base_url(); ?>plugins/sweetalerts/custom-sweetalert.js"></script>
    <!-- END THEME GLOBAL STYLE -->    
    <script>
        // Get the Toast button
        var toastButton = document.getElementById("toast-btn");
        // Get the Toast element
        var toastElement = document.getElementsByClassName("toast")[0];

        toastButton.onclick = function() {
            $('.toast').toast('show');
        }
    </script>
    <script src="<?= base_url(); ?>plugins/table/datatable/datatables.js"></script>
    <script>
        
        c3 = $('#style-3').DataTable({
            "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
        "<'table-responsive'tr>" +
        "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Mostrando página _PAGE_ de _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Procurar...",
                "sLengthMenu": "Resultados :  _MENU_",
                "sEmptyTable": "Nenhum registro encontrado",
                "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
                "sInfoFiltered": "(Filtrados de _MAX_ registros)",
                "sInfoPostFix": "",
                "sInfoThousands": ".",
                "sLoadingRecords": "Carregando...",
                "sProcessing": "Processando...",
                "sZeroRecords": "Nenhum registro encontrado",
                
                "oAria": {
                    "sSortAscending": ": Ordenar colunas de forma ascendente",
                    "sSortDescending": ": Ordenar colunas de forma descendente"
                },
            },
            "stripeClasses": [],
            "lengthMenu": [5, 10, 20, 50],
            "pageLength": 5
        });

        multiCheck(c3);
    </script>
    <!-- END PAGE LEVEL SCRIPTS -->  
    <!--  BEGIN CUSTOM SCRIPTS FILE ACCOUNT -->

    <script src="<?= base_url(); ?>plugins/dropify/dropify.min.js"></script>
    <script src="<?= base_url(); ?>plugins/blockui/jquery.blockUI.min.js"></script>
    <!-- <script src="<?= base_url(); ?>plugins/tagInput/tags-input.js"></script> -->
    <script src="<?= base_url(); ?>assets/js/users/account-settings.js"></script>
    <!--  END CUSTOM SCRIPTS FILE  -->

<script src="<?php echo base_url() ?>assets/js/jquery.mask.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/sweetalert2.all.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/funcoes.js"></script>

</body>
</html>

<!--  INICIO ÁREA CONTEÚDO  -->
          <div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div class="row layout-top-spacing">

                  <?php if ($var = $this->session->flashdata('success')): ?><script>swal("Sucesso!", "<?php echo str_replace('"', '', $var); ?>", "success");</script><?php endif; ?>
                  <?php if ($var = $this->session->flashdata('error')): ?><script>swal("Falha!", "<?php echo str_replace('"', '', $var); ?>", "error");</script><?php endif; ?>
                  <?php if (isset($view)) {
                    echo $this->load->view($view, null, true);
                  } ?>
                  
                </div>
            </div>
            <div class="footer-wrapper">
                <div class="footer-section f-section-1">
                    <p class=""><p class="terms-conditions text-center">&copy; <?= date('Y'); ?> Todos Direitos Reservados. <a href="https://www.alcifmais.com.br">ALCIFMAIS</a></a></p></p>
                </div>
                <div class="footer-section f-section-2">
                    <p class="">Feito com <font color="red"> ❤ </font></p>
                </div>
            </div>
<!--  FIM ÁREA DE CONTEÚDO  -->

          
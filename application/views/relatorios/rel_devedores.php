<div class="row-fluid" style="margin-top: 0">
    <div class="span4">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon">
                    <i class="fas fa-users"></i>
                </span>
                <h5>Relatórios Rápidos</h5>
            </div>
            <div class="widget-content">
                <ul class="site-stats">
                    <li><a href="<?php echo base_url() ?>index.php/relatorios/devedoresRapid" target="_blank"><i
                                    class="fas fa-users"></i> <small>Todos os Devedores - pdf</small></a></li>
                    <li><a href="<?php echo base_url() ?>index.php/relatorios/devedoresRapid?format=xls" target="_blank"><i
                                    class="fas fa-users"></i> <small>Todos os Devedores - xls</small></a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="span8">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon">
                    <i class="fas fa-users"></i>
                </span>
                <h5>Relatórios Customizáveis</h5>
            </div>
            <div class="widget-content">
                <div class="span12 well">
                    <form target="_blank" action="<?php echo base_url() ?>index.php/relatorios/devedoresCustom"
                          method="get">
                        <div class="span4">
                            <label for="">Cadastrado de:</label>
                            <input type="date" name="dataInicial" class="span12"/>
                        </div>
                        <div class="span4">
                            <label for="">até:</label>
                            <input type="date" name="dataFinal" class="span12"/>
                        </div>
                        <div class="span4">
                            <label for="">.</label>
                            <button class="btn btn-inverse span12"><i class="fas fa-print"></i> Imprimir</button>
                        </div>
                        <div class="span12 well" style="margin-left: 0">
                        <div class="span12">
                            <label for="">Tipo de devedor:</label>
                            <select name="tipodevedor" class="span12">
                                <option value="0">Devedor</option>
                                <option value="1">Fornecedor</option>
                            </select>
                        </div>
                    </div>
                    </form>
                </div>
                .
            </div>
        </div>
    </div>
</div>

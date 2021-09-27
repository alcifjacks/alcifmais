<?php $permissoes = unserialize($result->permissoes);?>
<div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
    <form action="<?php echo base_url();?>index.php/permissoes/editar" id="formPermissao" method="post">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title">
                    <span class="icon">
                    <i class="fas fa-lock"></i>
                    </span>
                    <h5>Editar Permissão</h5>
                    <div class="buttons mt-3">
                        <a title="Voltar" class="btn btn-dark" href="<?php echo site_url() ?>/permissoes"><i class="fas fa-arrow-left"></i> Voltar</a>
                    </div>
                </div>
                <div class="widget-content">
                    <div class="col-xl-12 col-12 layout-spacing mt-4">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="nome">Nome da Permissão</label>
                                    <input type="text" class="form-control mb-4" id="nome" type="text" name="nome" value="<?php echo $result->nome; ?>" >
                                    <input type="hidden" name="idPermissao" value="<?php echo $result->idPermissao; ?>">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="situacao">Situação</label>
                                        <select class="form-control" name="situacao" id="situacao">
                                            <?php if ($result->situacao == 1) {
                                                $ativo = 'selected';
                                                $inativo = '';
                                            } else {
                                                $ativo = '';
                                                $inativo = 'selected';
                                            } ?>
                                            <option value="1" <?php echo $ativo; ?>>Ativo</option>
                                            <option value="0" <?php echo $inativo; ?>>Inativo</option>
                                        </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-12 col-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="m-3">
                            
                                <label class="new-control new-checkbox checkbox-outline-success">
                                    <input name="marcarTodos" type="checkbox" class="new-control-input" value="1" id="inboxAll" />
                                    <span class="new-control-indicator"></span>Marcar Todos
                                </label>
                            
                            </div>
                            <label for="documento" class="control-label"></label>
                            <div class="controls">
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <td>
                                            <label class="new-control new-checkbox checkbox-outline-primary">
                                                <input <?php if (isset($permissoes['vDevedor'])) {
                                                            if ($permissoes['vDevedor'] == '1') {
                                                                echo 'checked';
                                                            }
                                                        }?> name="vDevedor" type="checkbox" class="new-control-input" value="1" />
                                                <span class="new-control-indicator"></span>Visualizar Devedores
                                            </label>
                                        </td>
                                        <td class="n-chk">
                                            <label class="new-control new-checkbox checkbox-outline-info">
                                                <input <?php if (isset($permissoes['aDevedor'])) {
                                                            if ($permissoes['aDevedor'] == '1') {
                                                                echo 'checked';
                                                            }
                                                        }?> name="aDevedor" type="checkbox" class="new-control-input" value="1" />
                                                <span class="new-control-indicator"></span>Adicionar Devedores
                                            </label>
                                        </td>
                                        <td>
                                            <label class="new-control new-checkbox checkbox-outline-warning">
                                                <input <?php if (isset($permissoes['eDevedor'])) {
                                                                if ($permissoes['eDevedor'] == '1') {
                                                                    echo 'checked';
                                                                }
                                                            }?> name="eDevedor" type="checkbox" class="new-control-input" value="1" />
                                                <span class="new-control-indicator"></span>Editar Devedores
                                            </label>
                                        </td>
                                        <td>
                                            <label class="new-control new-checkbox checkbox-outline-danger">
                                                <input <?php if (isset($permissoes['dDevedor'])) {
                                                                if ($permissoes['dDevedor'] == '1') {
                                                                    echo 'checked';
                                                                }
                                                            }?> name="dDevedor" type="checkbox" class="new-control-input" value="1" />
                                                <span class="new-control-indicator"></span>Excluir Devedores
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="new-control new-checkbox checkbox-outline-primary">
                                                <input <?php if (isset($permissoes['vDividas'])) {
                                                                if ($permissoes['vDividas'] == '1') {
                                                                    echo 'checked';
                                                                }
                                                            }?> name="vDividas" type="checkbox" class="new-control-input" value="1" />
                                                <span class="new-control-indicator"></span>Visualizar Dívidas
                                            </label>
                                        </td>
                                        <td>
                                            <label class="new-control new-checkbox checkbox-outline-info">
                                                <input <?php if (isset($permissoes['aDividas'])) {
                                                                if ($permissoes['aDividas'] == '1') {
                                                                    echo 'checked';
                                                                }
                                                            }?> name="aDividas" type="checkbox" class="new-control-input" value="1" />
                                                <span class="new-control-indicator"></span>Adicionar Dívidas
                                            </label>
                                        </td>
                                        <td>
                                            <label class="new-control new-checkbox checkbox-outline-warning">
                                                <input <?php if (isset($permissoes['eDividas'])) {
                                                                if ($permissoes['eDividas'] == '1') {
                                                                    echo 'checked';
                                                                }
                                                            }?> name="eDividas" type="checkbox" class="new-control-input" value="1" />
                                                <span class="new-control-indicator"></span>Editar Dívidas
                                            </label>
                                        </td>
                                        <td>
                                            <label class="new-control new-checkbox checkbox-outline-danger">
                                                <input <?php if (isset($permissoes['dDividas'])) {
                                                                if ($permissoes['dDividas'] == '1') {
                                                                    echo 'checked';
                                                                }
                                                            }?> name="dDividas" type="checkbox" class="new-control-input" value="1" />
                                                <span class="new-control-indicator"></span>Excluir Dívidas
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="new-control new-checkbox checkbox-outline-primary">
                                                <input <?php if (isset($permissoes['vEventos'])) {
                                                                if ($permissoes['vEventos'] == '1') {
                                                                    echo 'checked';
                                                                }
                                                            }?> name="vEventos" type="checkbox" class="new-control-input" value="1" />
                                                <span class="new-control-indicator"></span>Visualizar Eventos
                                            </label>
                                        </td>
                                        <td>
                                            <label class="new-control new-checkbox checkbox-outline-info">
                                                <input <?php if (isset($permissoes['aEventos'])) {
                                                                if ($permissoes['aEventos'] == '1') {
                                                                    echo 'checked';
                                                                }
                                                            }?> name="aEventos" type="checkbox" class="new-control-input" value="1" />
                                                <span class="new-control-indicator"></span>Adicionar Eventos
                                            </label>
                                        </td>
                                        <td>
                                            <label class="new-control new-checkbox checkbox-outline-warning">
                                                <input <?php if (isset($permissoes['eEventos'])) {
                                                                if ($permissoes['eEventos'] == '1') {
                                                                    echo 'checked';
                                                                }
                                                            }?> name="eEventos" type="checkbox" class="new-control-input" value="1" />
                                                <span class="new-control-indicator"></span>Editar Eventos
                                            </label>
                                        </td>
                                        <td>
                                            <label class="new-control new-checkbox checkbox-outline-danger">
                                                <input <?php if (isset($permissoes['dEventos'])) {
                                                                if ($permissoes['dEventos'] == '1') {
                                                                    echo 'checked';
                                                                }
                                                            }?> name="dEventos" type="checkbox" class="new-control-input" value="1" />
                                                <span class="new-control-indicator"></span>Excluir Eventos
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="new-control new-checkbox checkbox-outline-primary">
                                                <input <?php if (isset($permissoes['vStatus'])) {
                                                                if ($permissoes['vStatus'] == '1') {
                                                                    echo 'checked';
                                                                }
                                                            }?> name="vStatus" type="checkbox" class="new-control-input" value="1" />
                                                <span class="new-control-indicator"></span>Visualizar Status
                                            </label>
                                        </td>
                                        <td>
                                            <label class="new-control new-checkbox checkbox-outline-info">
                                                <input <?php if (isset($permissoes['aStatus'])) {
                                                            if ($permissoes['aStatus'] == '1') {
                                                                echo 'checked';
                                                            }
                                                        }?> name="aStatus" type="checkbox" class="new-control-input" value="1" />
                                                <span class="new-control-indicator"></span>Adicionar Status
                                            </label>
                                        </td>
                                        <td>
                                            <label class="new-control new-checkbox checkbox-outline-warning">
                                                <input <?php if (isset($permissoes['eStatus'])) {
                                                            if ($permissoes['eStatus'] == '1') {
                                                                echo 'checked';
                                                            }
                                                        }?> name="eStatus" type="checkbox" class="new-control-input" value="1" />
                                                <span class="new-control-indicator"></span>Editar Status
                                            </label>
                                        </td>
                                        <td>
                                            <label class="new-control new-checkbox checkbox-outline-danger">
                                                <input <?php if (isset($permissoes['dStatus'])) {
                                                            if ($permissoes['dStatus'] == '1') {
                                                                echo 'checked';
                                                            }
                                                        }?> name="dStatus" type="checkbox" class="new-control-input" value="1" />
                                                <span class="new-control-indicator"></span>Excluir Status
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="new-control new-checkbox checkbox-outline-primary">
                                                <input <?php if (isset($permissoes['vAtendimento'])) {
                                                                if ($permissoes['vAtendimento'] == '1') {
                                                                    echo 'checked';
                                                                }
                                                            }?> name="vAtendimento" type="checkbox" class="new-control-input" value="1" />
                                                <span class="new-control-indicator"></span>Visualizar Atendimento
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="new-control new-checkbox checkbox-outline-primary">
                                                <input <?php if (isset($permissoes['vGerenteEmail'])) {
                                                            if ($permissoes['vGerenteEmail'] == '1') {
                                                                echo 'checked';
                                                            }
                                                        }?> name="vGerenteEmail" type="checkbox" class="new-control-input" value="1" />
                                                <span class="new-control-indicator"></span>Visualizar Gerente Email
                                            </label>
                                        </td>
                                        <td>
                                            <label class="new-control new-checkbox checkbox-outline-info">
                                                <input <?php if (isset($permissoes['aGerenteEmail'])) {
                                                            if ($permissoes['aGerenteEmail'] == '1') {
                                                                echo 'checked';
                                                            }
                                                        }?> name="aGerenteEmail" type="checkbox" class="new-control-input" value="1" />
                                                <span class="new-control-indicator"></span>Adicionar Gerente Email
                                            </label>
                                        </td>
                                        <td>
                                            <label class="new-control new-checkbox checkbox-outline-warning">
                                                <input <?php if (isset($permissoes['eGerenteEmail'])) {
                                                            if ($permissoes['eGerenteEmail'] == '1') {
                                                                echo 'checked';
                                                            }
                                                        }?> name="eGerenteEmail" type="checkbox" class="new-control-input" value="1" />
                                                <span class="new-control-indicator"></span>Editar Gerente Email
                                            </label>
                                        </td>
                                        <td>
                                            <label class="new-control new-checkbox checkbox-outline-danger">
                                                <input <?php if (isset($permissoes['dGerenteEmail'])) {
                                                            if ($permissoes['dGerenteEmail'] == '1') {
                                                                echo 'checked';
                                                            }
                                                        }?> name="dGerenteEmail" type="checkbox" class="new-control-input" value="1" />
                                                <span class="new-control-indicator"></span>Excluir Gerente Email
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="new-control new-checkbox checkbox-outline-primary">
                                                <input <?php if (isset($permissoes['rDividas'])) {
                                                            if ($permissoes['rDividas'] == '1') {
                                                                echo 'checked';
                                                            }
                                                        }?> name="rDividas" type="checkbox" class="new-control-input" value="1" />
                                                <span class="new-control-indicator"></span>Relatório Dívidas
                                            </label>
                                        </td>
                                        <td>
                                            <label class="new-control new-checkbox checkbox-outline-primary">
                                                <input <?php if (isset($permissoes['rEventos'])) {
                                                            if ($permissoes['rEventos'] == '1') {
                                                                echo 'checked';
                                                            }
                                                        }?> name="rEventos" type="checkbox" class="new-control-input" value="1" />
                                                <span class="new-control-indicator"></span>Relatório Eventos
                                            </label>
                                        </td>
                                        <td>
                                            <label class="new-control new-checkbox checkbox-outline-primary">
                                                <input <?php if (isset($permissoes['rParcelas'])) {
                                                            if ($permissoes['rParcelas'] == '1') {
                                                                echo 'checked';
                                                            }
                                                        }?> name="rParcelas" type="checkbox" class="new-control-input" value="1" />
                                                <span class="new-control-indicator"></span>Relatório Parcelas
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="new-control new-checkbox checkbox-outline-danger">
                                                <input <?php if (isset($permissoes['cUsuario'])) {
                                                            if ($permissoes['cUsuario'] == '1') {
                                                                echo 'checked';
                                                            }
                                                        }?> name="cUsuario" type="checkbox" class="new-control-input" value="1" />
                                                <span class="new-control-indicator"></span>Configurar Usuário
                                            </label>
                                        </td>
                                        <td>
                                            <label class="new-control new-checkbox checkbox-outline-danger">
                                                <input <?php if (isset($permissoes['cImportacoes'])) {
                                                            if ($permissoes['cImportacoes'] == '1') {
                                                                echo 'checked';
                                                            }
                                                        }?> name="cImportacoes" type="checkbox" class="new-control-input" value="1" />
                                                <span class="new-control-indicator"></span>Configurar Importações
                                            </label>
                                        </td>
                                        <td>
                                            <label class="new-control new-checkbox checkbox-outline-danger">
                                                <input <?php if (isset($permissoes['cPermissao'])) {
                                                            if ($permissoes['cPermissao'] == '1') {
                                                                echo 'checked';
                                                            }
                                                        }?> name="cPermissao" type="checkbox" class="new-control-input" value="1" />
                                                <span class="new-control-indicator"></span>Configurar Permissão
                                            </label>
                                        </td>
                                        <td>
                                            <label class="new-control new-checkbox checkbox-outline-danger">
                                                <input <?php if (isset($permissoes['cBackup'])) {
                                                            if ($permissoes['cBackup'] == '1') {
                                                                echo 'checked';
                                                            }
                                                        }?> name="cBackup" type="checkbox" class="new-control-input" value="1" />
                                                <span class="new-control-indicator"></span>Backup
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="new-control new-checkbox checkbox-outline-danger">
                                                <input <?php echo (isset($permissoes['cAuditoria']) && $permissoes['cAuditoria'] == 1) ? 'checked' : ''; ?> name="cAuditoria" type="checkbox" class="new-control-input" value="1" />
                                                <span class="new-control-indicator"></span>Auditoria
                                            </label>
                                        </td>
                                        <td>
                                            <label class="new-control new-checkbox checkbox-outline-danger">
                                                <input <?php echo (isset($permissoes['cEmail']) && $permissoes['cEmail'] == 1) ? 'checked' : ''; ?> name="cEmail" type="checkbox" class="new-control-input" value="1" />
                                                <span class="new-control-indicator"></span>Emails
                                            </label>
                                        </td>
                                        <td>
                                            <label  class="new-control new-checkbox checkbox-outline-danger">
                                                <input <?php echo (isset($permissoes['cSistema']) && $permissoes['cSistema'] == 1) ? 'checked' : ''; ?> name="cSistema" type="checkbox" class="new-control-input" value="1" />
                                                <span class="new-control-indicator"></span>Sistema
                                            </label>
                                        </td>
                                        <td></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content form-actions">
                        <div class="span12">
                            <div class="span6 offset3">
                                <button class="mr-2 btn btn-primary warning cancel">Alterar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $("#marcarTodos").change(function () {
            $("span:new-control-indicator").prop('::after', $(this).prop("::after"));
        });
        $("#formPermissao").validate({
            rules :{
                nome: {required: true}
            },
            messages:{
                nome: {required: 'Campo obrigatório'}
            }});
    });
</script>
<script type="text/javascript">
$('.widget-content .warning.cancel').on('click', function () {
  const swalWithBootstrapButtons = swal.mixin({
    confirmButtonClass: 'btn btn-success btn-rounded',
    cancelButtonClass: 'btn btn-danger btn-rounded mr-3',
    buttonsStyling: false,
  })

  swalWithBootstrapButtons({
    title: 'Tem certeza?',
    text: "Você não poderá reverter isso!",
    type: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Sim, exclua!',
    cancelButtonText: 'Não, cancele!',
    reverseButtons: true,
    padding: '2em'
  }).then(function(result) {
    if (result.value) {
      swalWithBootstrapButtons(
        'Deletado!',
        'Sua informação foi excluída.',
        'success'
      )
    } else if (
      // Read more about handling dismissals
      result.dismiss === swal.DismissReason.cancel
    ) {
      swalWithBootstrapButtons(
        'Cancelado',
        'Sua informação está segura :)',
        'error'
      )
    }
  })
})
</script>
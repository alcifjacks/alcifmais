<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-09-14 01:45:39 --> 404 Page Not Found: /index
ERROR - 2021-09-14 02:23:28 --> 404 Page Not Found: /index
ERROR - 2021-09-14 13:13:09 --> 404 Page Not Found: /index
ERROR - 2021-09-14 13:14:27 --> 404 Page Not Found: Relatorios/dividas
ERROR - 2021-09-14 13:14:29 --> 404 Page Not Found: /index
ERROR - 2021-09-14 14:33:46 --> 404 Page Not Found: /index
ERROR - 2021-09-14 18:37:14 --> 404 Page Not Found: /index
ERROR - 2021-09-14 18:37:16 --> Query error: Column 'idGerente' in order clause is ambiguous - Invalid query: SELECT *, `ge`.`nome` as `supervisor`
FROM `gerentes`
LEFT JOIN `gerentes` `ge` ON `ge`.`supervisor_id` = `gerentes`.`nome_id`
ORDER BY `idGerente` DESC
 LIMIT 1000000
ERROR - 2021-09-14 18:38:09 --> Query error: Column 'idGerente' in order clause is ambiguous - Invalid query: SELECT *, `gerentes`.`nome` as `supervisor`
FROM `gerentes`
LEFT JOIN `gerentes` `ge` ON `ge`.`supervisor_id` = `gerentes`.`nome_id`
ORDER BY `idGerente` DESC
 LIMIT 1000000
ERROR - 2021-09-14 18:50:45 --> Query error: Table 'samrd.ge' doesn't exist - Invalid query: SELECT *, `nome` as `supervisor`
FROM `gerentes`
LEFT JOIN `ge` ON `ge`.`supervisor_id` = `nome_id`
ORDER BY `idGerente` DESC
 LIMIT 1000000
ERROR - 2021-09-14 18:50:47 --> Query error: Table 'samrd.ge' doesn't exist - Invalid query: SELECT *, `nome` as `supervisor`
FROM `gerentes`
LEFT JOIN `ge` ON `ge`.`supervisor_id` = `nome_id`
ORDER BY `idGerente` DESC
 LIMIT 1000000
ERROR - 2021-09-14 18:50:58 --> Query error: Not unique table/alias: 'gerentes' - Invalid query: SELECT *, `nome` as `supervisor`
FROM `gerentes`
LEFT JOIN `gerentes` ON `ge`.`supervisor_id` = `nome_id`
ORDER BY `idGerente` DESC
 LIMIT 1000000
ERROR - 2021-09-14 18:51:14 --> Query error: Column 'nome' in field list is ambiguous - Invalid query: SELECT *, `nome` as `supervisor`
FROM `gerentes`
LEFT JOIN `gerentes` `ge` ON `ge`.`supervisor_id` = `nome_id`
ORDER BY `idGerente` DESC
 LIMIT 1000000
ERROR - 2021-09-14 19:06:03 --> Query error: Unknown column 'ge.situacao_id' in 'on clause' - Invalid query: SELECT `g`.*, `g`.`nome` as `supervisor`
FROM `gerentes` `g`
LEFT JOIN `gerentes` `ge` ON `ge`.`situacao_id` = `g`.`nome_id`
 LIMIT 1000000
ERROR - 2021-09-14 19:09:22 --> Query error: Unknown column 'ge.situacao_id' in 'on clause' - Invalid query: SELECT `g`.*, `g`.`nome` as `supervisor`
FROM `gerentes` as `g`
JOIN `gerentes` as `ge` ON `ge`.`situacao_id` = `g`.`nome_id`
 LIMIT 1000000
ERROR - 2021-09-14 19:09:26 --> Query error: Unknown column 'ge.situacao_id' in 'on clause' - Invalid query: SELECT `g`.*, `g`.`nome` as `supervisor`
FROM `gerentes` as `g`
JOIN `gerentes` as `ge` ON `ge`.`situacao_id` = `g`.`nome_id`
 LIMIT 1000000
ERROR - 2021-09-14 19:11:18 --> Query error: Unknown column 'ge.situacao_id' in 'on clause' - Invalid query: SELECT `g`.*, `g`.`nome` as `supervisor`
FROM `gerentes` as `g`
JOIN `gerentes` as `ge` ON `ge`.`situacao_id` = `g`.`nome_id`
 LIMIT 1000000
ERROR - 2021-09-14 19:11:34 --> Query error: Unknown column 'ge.situacao_id' in 'on clause' - Invalid query: SELECT *, `g`.`nome` as `supervisor`
FROM `gerentes` as `g`
JOIN `gerentes` as `ge` ON `ge`.`situacao_id` = `g`.`nome_id`
 LIMIT 1000000
ERROR - 2021-09-14 19:13:14 --> Query error: Unknown column 'ge.situacao_id' in 'on clause' - Invalid query: SELECT *, `g`.`nome` as `supervisor`
FROM `gerentes` as `g`
JOIN `gerentes` as `ge` ON `ge`.`situacao_id` = `g`.`nome_id`
 LIMIT 1000000, 0
ERROR - 2021-09-14 19:16:27 --> Query error: Unknown table 'samrd.u' - Invalid query: SELECT `u`.*, `permissoes`.`nome` as `permissao`
FROM `usuarios`
LEFT JOIN `permissoes` ON `u`.`permissoes_id` = `permissoes`.`idPermissao`
 LIMIT 1000000
ERROR - 2021-09-14 19:17:51 --> Query error: Unknown column 'ge.situacao_id' in 'on clause' - Invalid query: SELECT *, `g`.`nome` as `supervisor`
FROM `gerentes` `g`
JOIN `gerentes` `ge` ON `ge`.`situacao_id` = `g`.`nome_id`
 LIMIT 1000000, 0
ERROR - 2021-09-14 19:21:05 --> Query error: Unknown column 'ge.situacao_id' in 'on clause' - Invalid query: SELECT *, `g`.`nome` as `supervisor`
FROM `gerentes` `g`
JOIN `gerentes` `ge` ON `ge`.`situacao_id` = `g`.`nome_id`
 LIMIT 1000000, 0
ERROR - 2021-09-14 19:21:27 --> Query error: Unknown column 'ge.situacao_id' in 'on clause' - Invalid query: SELECT `g`.`nome` as `supervisor`
FROM `gerentes` `g`
JOIN `gerentes` `ge` ON `ge`.`situacao_id` = `g`.`nome_id`
 LIMIT 0
ERROR - 2021-09-14 19:21:34 --> Query error: Unknown column 'ge.situacao_id' in 'on clause' - Invalid query: SELECT `g`.`nome` as `supervisor`
FROM `gerentes` `g`
JOIN `gerentes` `ge` ON `ge`.`situacao_id` = `g`.`nome_id`
 LIMIT 0
ERROR - 2021-09-14 19:22:11 --> Query error: Unknown column 'ge.situacao_id' in 'on clause' - Invalid query: SELECT *
FROM `gerentes` `g`
JOIN `gerentes` `ge` ON `ge`.`situacao_id` = `g`.`nome_id`
 LIMIT 0
ERROR - 2021-09-14 19:22:22 --> Query error: Unknown column 'ge.situacao_id' in 'on clause' - Invalid query: SELECT *
FROM `gerentes` `g`
JOIN `gerentes` `ge` ON `ge`.`situacao_id` = `g`.`nome_id`
 LIMIT 1000000
ERROR - 2021-09-14 19:23:38 --> Query error: Unknown column 'ge.situacao_id' in 'on clause' - Invalid query: SELECT *
FROM (`gerentes` `g`, `gerentes`)
JOIN `gerentes` `ge` ON `ge`.`situacao_id` = `g`.`nome_id`
 LIMIT 1000000
ERROR - 2021-09-14 20:36:49 --> 404 Page Not Found: Relatorios/dividas
ERROR - 2021-09-14 20:45:51 --> 404 Page Not Found: Samrd/importacoes

<?php

/*
 *
 * Essa consulta do ranking é muito complicada, então vem como um bônus :)
 *
 *
 */


function get_query_ranking(){
  $vitoria =  STATUS_VITORIA;
  return <<<EOT
    SELECT jogo.id, jogo.hora as hora, usuario.email, municipios.nome as municipio,
           ufs.sigla as sigla, usuario_id, segredo, status,
           count(jogadas.jogo_id) as num_jogadas
    FROM jogo
    LEFT JOIN jogadas jogadas 
    ON jogo.id = jogadas.jogo_id
    LEFT JOIN usuario
    ON jogo.usuario_id = usuario.id
    LEFT JOIN municipios
    ON usuario.municipio_id = municipios.id
    LEFT JOIN ufs
    ON usuario.uf_id = ufs.codigo
    WHERE jogo.status = '$vitoria'
    GROUP BY jogo.id 
    HAVING num_jogadas <= 5 
    ORDER BY num_jogadas asc, jogo.hora desc, email asc
    LIMIT 5

EOT;

}

?>

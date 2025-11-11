<link rel="stylesheet" href="/projeto/assets/css/tabelas.css">
<h2 class="title">Casas</h2>
<div class="button-container">
    <a  class="button-cadastrar" href="/projeto/casa/formulario">Cadastrar</a>
    <a class="button-exit" href="/projeto/proprietario/voltar">Voltar</a>
</div>

<table class="tabela">
    <tr>
        <th>ID</th>
        <th>Bairro</th>
        <th>Metros</th>
        <th>Comodos</th>
        <th>Estimativa R$</th>

        <th>Ações</th>

    </tr>
    <?php foreach ($parametro as $p) {

    ?>
    <tr>
        <td><?= $p["casa_id"] ?></td>
        <td><?= $p["bairro"] ?></td>
        <td><?= $p["metros"] ?></td>
        <td><?= $p["quantidade_comodos"] ?></td>
        <td><?= $p["valor_estimado"] ?></td>

        <td>
            <a class="self-acoes" href="/projeto/casa/formularioalterar?id=<?php echo $p['casa_id'] ?>">Alterar</a> |
            <a class="self-acoes" href="/projeto/comodo/listarcomodo?id=<?php echo $p['casa_id'] ?>">Comodos</a> |
            <a class="self-acoes" href="/projeto/casa/apagar?id=<?php echo $p['casa_id'] ?>">Apagar</a>
        </td>
    </tr>
    <?php
    } ?>
</table>
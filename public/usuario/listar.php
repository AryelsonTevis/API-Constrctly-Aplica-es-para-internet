<link rel="stylesheet" href="./../assets/css/global.css">
<link rel="stylesheet" href="./../assets/css/listarUsuarios.css">
<div class="title">
    <h2>Listar Usuarios</h2>
</div>
<div class="button-container">
    <a href="/projeto/usuario/formulario" class="button-cadastrar">Cadastrar</a>
</div>
<div class="tabela">
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>CPF/CNPJ</th>
            <th>Endereço</th>
            <th class="acoes">Ações</th>
        </tr>

        <?php foreach ($parametro as $p) { ?>
        <tr>
            <td><?= $p["usuario_id"] ?></td>
            <td><?= $p["nome"] ?></td>
            <td><?= $p["email"] ?></td>
            <td><?= $p["numero_telefone"] ?></td>
            <td><?= $p["CPF_CNPJ"] ?></td>
            <td><?= $p["endereço_cobrança"] ?></td>

            <td class="acoes">
                <a class="self-acoes" href="/projeto/usuario/formularioalterar?id=<?= $p['usuario_id']; ?>">Alterar</a>
                |
                <a class="self-acoes" href="/projeto/usuario/listarpro?id=<?= $p['usuario_id']; ?>">Proprietarios</a> |
                <a class="self-acoes" href="/projeto/usuario/apagar?id=<?= $p['usuario_id']; ?>">Apagar</a>
            </td>
        </tr>
        <?php } ?>
        <?php
    ?>
</div>
</table>
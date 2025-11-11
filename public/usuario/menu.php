<link rel="stylesheet" href="./../assets/css/global.css">
<link rel="stylesheet" href="./../assets/css/tabelas.css">
<link rel="stylesheet" href="./../assets/css/Menu.css">
<div class="title">
    <h2>Menu usuario</h2>
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
                <a class="self-acoes" href="/projeto/usuario/formularioalterar">Alterar</a>
                |<a class="self-acoes" href="/projeto/usuario/apagar">Apagar</a>
                |<a class="self-acoes" href="/projeto/usuario/listarpro?id=<?= $p['usuario_id']; ?>">Voltar</a>

            </td>
        </tr>
        <?php } ?>
        <?php
    ?>
</div>
</table>
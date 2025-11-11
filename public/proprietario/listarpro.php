<link rel="stylesheet" href="/projeto/assets/css/tabelas.css">

<h2 class="title">Proprietários</h2>
<div class="button-container">
    <a class="button-cadastrar" href="/projeto/proprietario/formulario?id=">Cadastrar</a>
    <a class="button-exit" href="/projeto/usuario/logout">Sair</a>
</div>

<table class="tabela">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>CPF/CNPJ</th>
        <th>Endereço</th>
        <th>Ações</th>
    </tr>
    <?php foreach ($parametro as $p) { ?>
        <tr>
            <td><?= $p["proprietario_id"] ?></td>
            <td><?= $p["proprietario"] ?></td>
            <td><?= $p["email"] ?></td>
            <td><?= $p["numero_telefone"] ?></td>
            <td><?= $p["CPF_CNPJ"] ?></td>
            <td><?= $p["endereço_cobrança"] ?></td>
            
            <td>
                <a class="self-acoes" href="/projeto/proprietario/formularioalterar?id=<?= $p['proprietario_id']; ?>">Alterar</a> |
                <a class="self-acoes" href="/projeto/casa/listarcasa?id=<?= $p['proprietario_id']; ?>">Casas</a> |
                <a class="self-acoes" href="/projeto/proprietario/apagar?id=<?= $p['proprietario_id']; ?>">Apagar</a>
            </td>
        </tr>
    <?php } ?>
</table>
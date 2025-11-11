<link rel="stylesheet" href="/projeto/assets/css/formulario.css">
<?php foreach ($parametro as $p) { ?>
<tr>
    <td>
        <div class="form-container">
            <h2 class="title-card">Alterar Usuário</h2>
            <form action="/projeto/usuario/alterar" method="post">
                <input type="hidden" name="usuario_id" value="<?= $p['usuario_id']; ?>">

                <label>Nome:</label>
                <input class="text-box" type="text" name="nome" value="<?= $p['nome']; ?>">
                <br>
                <label>Email:</label>
                <input class="text-box" type="text" name="email" value="<?= $p['email']; ?>">
                <br>
                <label>Numero de telefone:</label>
                <input class="text-box" type="text" name="numero_telefone" value="<?= $p['numero_telefone']; ?>">
                <br>
                <label>CPF/CNPJ:</label>
                <input class="text-box" type="text" name="CPF_CNPJ" value="<?= $p['CPF_CNPJ']; ?>">
                <br>
                <label>Senha:</label>
                <input class="text-box" type="password" name="senha" value="">
                <br>
                <label>Endereço de cobrança:</label>
                <input class="text-box" type="text" name="endereço_cobrança" value="<?= $p['endereço_cobrança']; ?>">
                <br>
                <div>
                    <a class="button-voltar" href="/projeto/usuario/menu">Voltar</a>
                    <input class="button-enviar" type="submit" value="Alterar" class="buton">
                </div>
        </div>
        </form>
    </td>
</tr>
<?php } ?>
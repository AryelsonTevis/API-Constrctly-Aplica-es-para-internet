<form action="/projeto/usuario/inserir" method="post">
    <link rel="stylesheet" href="/projeto/assets/css/criarUsuario.css">
    <?php
    if ($parametro != null) {
    ?>
    <input type="hidden" name="usuario_id" value="<?= $parametro[0]["usuario_id"] ?>" />
    <?php
    }
    ?>
    <div class="form-container">

        <h2 class="title-card">Cadastrar</h2>
        <label>Nome:</label>
        <input class="text-box" placeholder="Digite seu nome" name="nome"
            value="<?= ($parametro != null) ? $parametro[0]["nome"] : "" ?>" />
        <br />
        <label>Email:</label>
        <input class="text-box" placeholder="Digite seu e-mail" type="text" name="email"
            value="<?= ($parametro != null) ? $parametro[0]["email"] : "" ?>" />
        <br />
        <label>Numero de telefone:</label>
        <input class="text-box" placeholder="(99) 99999-9999" type="text" name="telefone"
            value="<?= ($parametro != null) ? $parametro[0]["numero_telefone"] : "" ?>" />
        <br />
        <label>CPF:</label>
        <input class="text-box" placeholder="999.999.999-99" type="text" name="cpf"
            value="<?= ($parametro != null) ? $parametro[0]["CPF_CNPJ"] : "" ?>" />
        <br />
        <label>Senha:</label>
        <input class="text-box" placeholder="Digite sua senha" type="password" name="senha"
            value="<?= ($parametro != null) ? $parametro[0]["senha"] : "" ?>" />
        <br />
        <label>Endereço:</label>
        <input class="text-box" placeholder="Digite seu endereço" type="text" name="endereço_cobrança"
            value="<?= ($parametro != null) ? $parametro[0]["endereço_cobrança"] : "" ?>" />
        <br />

        <a class="button-voltar" href="/projeto/public/usuario/login.php">Voltar</a>
        <input class="button-enviar" type="submit" value="Enviar">

    </div>
</form>
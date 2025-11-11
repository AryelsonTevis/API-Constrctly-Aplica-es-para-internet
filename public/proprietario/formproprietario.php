<link rel="stylesheet" href="/projeto/assets/css/formulario.css">
<div class="form-container">
    <h2 class="title-card">Cadastrar Proprietário</h2>
    <form action="/projeto/proprietario/inserir" method="post">
        <?php
        if ($parametro != null) {
        ?>
            <input type="hidden" name="proprietario_id" value="<?= $parametro[0]["proprietario_id"] ?>" />
        <?php
        }

        ?>

        <label>Nome:</label>
        <input class="text-box" placeholder="Digite o nome completo" type="text" name="proprietario" value="<?= ($parametro != null) ? $parametro[0]["proprietario"] : "" ?>" />
        <br />


        <label>Email:</label>
        <input class="text-box" placeholder="example@example.com" type="text" name="email" value="<?= ($parametro != null) ? $parametro[0]["email"] : "" ?>" />
        <br />
        <label>Numero de telefone:</label>
        <input class="text-box" placeholder="(99) 99999-9999" type="text" name="telefone" value="<?= ($parametro != null) ? $parametro[0]["numero_telefone"] : "" ?>" />
        <br />
        <label>CPF:</label>
        <input class="text-box" placeholder="999.999.999-99" type="text" name="cpf" value="<?= ($parametro != null) ? $parametro[0]["CPF_CNPJ"] : "" ?>" />

        <br />
        <label>Endereço:</label>
        <input class="text-box" placeholder="Rua Example Nº 99" type="text" name="endereço_cobrança"
            value="<?= ($parametro != null) ? $parametro[0]["endereço_cobrança"] : "" ?>" />
        <br />
        <div>
            <a class="button-voltar" href="/projeto/proprietario/voltar">Voltar</a>
            <input class="button-enviar" type="submit" value="Enviar">
        </div>

</div>
</form>
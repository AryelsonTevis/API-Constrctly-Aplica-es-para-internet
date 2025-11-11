<link rel="stylesheet" href="/projeto/assets/css/formulario.css">
<?php foreach ($parametro as $p) { ?>
<tr>
    <td>
        <div class="form-container">
            <h2 class="title-card">Alterar Proprietário</h2>
            <form action="/projeto/proprietario/alterar" method="post">
                <input type="hidden" name="proprietario_id" value="<?= $p['proprietario_id']; ?>">
                <label>Nome:</label>
                <input class="text-box" type="text" name="proprietario" value="<?= $p['proprietario']; ?>">
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
                <label>Endereço de cobrança:</label>
                <input class="text-box" type="text" name="endereço_cobrança" value="<?= $p['endereço_cobrança']; ?>">
                <br>
                <div>
                    <a class="button-voltar" href="/projeto/proprietario/voltar">Voltar</a>
                    <input class="button-enviar" type="submit" value="Alterar" class="buton">
                </div>
        </div>
        </form>
    </td>
</tr>
<?php } ?>
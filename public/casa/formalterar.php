<link rel="stylesheet" href="/projeto/assets/css/formulario.css">
<?php foreach ($parametro as $p) { ?>
<tr>
    <td>
        <div class="form-container">
            <h2 class="title-card">Alterar Casa</h2>
            <form action="/projeto/casa/alterar" method="post">

                <input type="hidden" name="casa_id" value="<?= $p['casa_id']; ?>">


                <label>Bairro:</label>
                <input class="text-box" type=" text" name="bairro" value="<?= $p['bairro']; ?>">
                <br>
                <label>Metros:</label>
                <input class="text-box" type=" text" name="metros" value="<?= $p['metros']; ?>">
                <br>
                <label>Quantidade de comodos:</label>
                <input class="text-box" type=" text" name="comodos" value="<?= $p['quantidade_comodos']; ?>">
                <br>
                <label>Valor estimado: R$</label>
                <input class="text-box" type=" text" name="valor" value="<?= $p['valor_estimado']; ?>">
                <br>

                <div>
                    <a class="button-voltar" href="/projeto/casa/voltar">Voltar</a>
                    <input class="button-enviar" type="submit" value="Alterar" class="buton">
                </div>
        </div>
        </form>
    </td>
</tr>
<?php } ?>
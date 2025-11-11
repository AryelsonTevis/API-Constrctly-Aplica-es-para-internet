<link rel="stylesheet" href="/projeto/assets/css/formulario.css">
<div class="form-container">
    <h2 class="title-card">Alterar Comodo</h2>
    <?php foreach ($parametro as $p) { ?>
    <tr>
        <td>
            <form action="/projeto/comodo/alterar" method="post">
                <input type="hidden" name="id_comodo" value="<?= $p['id_comodo']; ?>">

                <label>Comodo:</label>
                <input class="text-box" type="text" name="comodo" value="<?= $p['comodo']; ?>">
                <br>
                <label>Área:</label>
                <input class="text-box" type="text" name="area" value="<?= $p['area']; ?>">
                <br>
                <label>Progresso:</label>
                <input class="text-box" type="text" name="progresso" value="<?= $p['progresso']; ?>">
                <br>
                <div>
                    <a class="button-voltar" href="/projeto/comodo/voltar">Voltar</a>
                    <input class="button-enviar" type="submit" value="Enviar">
                </div>

</div>
</form>
</td>
</tr>
<?php } ?>
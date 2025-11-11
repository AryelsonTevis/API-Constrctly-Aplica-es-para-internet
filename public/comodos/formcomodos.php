<link rel="stylesheet" href="/projeto/assets/css/formulario.css">
<div class="form-container">
    <h2 class="title-card"><?= ($parametro != null) ? "Alterar Comodo" : "Inserir Comodo" ?></h2>
    <form action="/projeto/comodo/inserir" method="post">
        <?php
        if ($parametro != null) {
        ?>
        <input type="hidden" name="id_comodo" value="<?= $parametro[0]["id_comodo"] ?>" />
        <?php
        }
        ?>


        <label>Comodo:</label>
        <input class="text-box" type="text" name="comodo"
            value="<?= ($parametro != null) ? $parametro[0]["comodo"] : "" ?>" />
        <br />


        <label>Área:</label>
        <input class="text-box" type="text" name="area"
            value="<?= ($parametro != null) ? $parametro[0]["area"] : "" ?>" />


        <br />

        <div>
            <a class="button-voltar" href="/projeto/comodo/voltar">Voltar</a>
            <input class="button-enviar" type="submit" value="Enviar">
        </div>

</div>
</form>
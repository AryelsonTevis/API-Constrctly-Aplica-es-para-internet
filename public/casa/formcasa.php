<link rel="stylesheet" href="/projeto/assets/css/formulario.css">
<div class="form-container">
    <h2 class="title-card"><?= ($parametro != null) ? "Alterar Casa" : "Inserir Casa" ?></h2>

    <form action="/projeto/casa/inserir" method="post">
        <?php
        if ($parametro != null) {
        ?>
        <input type="hidden" name="casa_id" value="<?= $parametro[0]["casa_id"] ?>" />

        <?php
        }
        ?>
        <label>Bairro:</label>
        <input class="text-box" type="text" name="bairro"
            value="<?= ($parametro != null) ? $parametro[0]["bairro"] : "" ?>" />
        <br />
        <label>Metros:</label>
        <input class="text-box" type="text" name="metros"
            value="<?= ($parametro != null) ? $parametro[0]["metros"] : "" ?>" />
        <br />
        <label>Quantidade comodos:</label>
        <input class="text-box" type="text" name="comodos"
            value="<?= ($parametro != null) ? $parametro[0]["quantidade_comodos"] : "" ?>" />
        <br />
        <label>Valor R$:</label>
        <input class="text-box" type="text" name="valor"
            value="<?= ($parametro != null) ? $parametro[0]["valor_estimado"] : "" ?>" />

        <br />
        <div>
            <a class="button-voltar" href="/projeto/casa/voltar">Voltar</a>
            <input class="button-enviar" type="submit" value="Enviar">
        </div>

    </form>
<link rel="stylesheet" href="/projeto/assets/css/tabelas.css">
<h2 class="title">Comodos</h2>
<div class="button-container">
    <a class="button-cadastrar" href="/projeto/comodo/formulario">Cadastrar</a>
    <a class="button-exit" href="/projeto/casa/listarcasa?id=<?php echo $_SESSION['id_proprietario'] ?>">Voltar</a>
</div>


<table class="tabela">
    <tr>
        <th>ID</th>
        <th>comodos</th>
        <th>area</th>
        <th>progresso</th>
        <th>Ações</th>

    </tr>
    <?php foreach ($parametro as $p) {

    ?>
    <tr>
        <td> <?= $p["id_comodo"] ?></td>
        <td><?= $p["comodo"] ?></td>
        <td><?= $p["area"] ?></td>
        <td>

            <?= $p["progresso"] ?>

        </td>


        <td>
            <?php if ($p["progresso"] == null) {?>
            <a class="self-acoes" href="/projeto/comodo/inserirpor?id=<?php echo $p['id_comodo']; ?>">Começar
            </a>
            <?php }?>
            <?php  if ($p["progresso"] != null){?>
            <a class="self-acoes" href="/projeto/comodo/apagar?comodo_id=<?php echo $p['id_comodo'];  ?>">Apagar</a><a
                class="self-acoes"
                href="/projeto/comodo/formularioalterar?id=<?php echo $p['id_comodo']; ?>">Alterar</a>
            <?php } ?>



        </td>

    </tr>
    <?php
    } ?>

</table>
<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <title>1</title>
    <link rel="stylesheet" href="assets/css/teste.css">
    <script src="app/jquery-3.3.1.min.js"> </script>

    <script>
    $(document).ready(function () {
        $("#abas ul li").addClass("selecionado");
        $("#abas ul li").click(function () {

            $(this).toggleClass("selecionado");

            var idAba = $(this).attr("id");

            $("."+idAba).toggle();
        });



    });

    </script>
</head>
<body>

<div id="abas">
    <ul>
        <?php foreach ($categorias as $categoria): ?>

            <li id="aba<?= $categoria->getId()?>"><?= $categoria->getNome() ?></li>

        <?php endforeach; ?>
    </ul>
</div>
<div id="conteudos">

    <?php foreach ($produtos as $produto) : ?>
        <div class="conteudo aba<?= $produto->getCategoria() ?>" >
            <p class="titulo"><?= $produto->getNome() ?></p>
            <p class="descricao"><?= $produto->getDescricao() ?></p>
        </div>
    <?php endforeach; ?>


</div>

</body>
</html>
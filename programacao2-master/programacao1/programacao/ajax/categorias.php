<html>
    <head>

    </head>
    <body>

        <?php
            require_once "../app/model/CategoriaCrud.php";

            $crud = new CategoriaCrud();
            $categorias = $crud->getCategorias();
            foreach ($categorias as $categoria){
                echo "<li>".utf8_decode($categoria->getNome())."</li>";
            }

        ?>

    </body>

</html>
<html>
<div id="abas">
    <ul>

        <?php foreach ($categorias as $categoria);?>

        <li id="aba<?=$categoria->getId[] ?>"><?=$categoria->getNome() ?></li>

        <?php endforeach; ?>
        </ul>
</div>
</html>

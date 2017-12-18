<?php
require '../../includes/header.inc.php';
?>
<div class="container">

    <h1>Abstract Factory Pattern</h1>

    <?php echo getCode('ToyFactory.php'); ?>
    <?php echo getCode('Toys/Toy.php'); ?>
    <?php echo getCode('Toys/MazeToy.php'); ?>
    <?php echo getCode('Toys/PuzzleToy.php'); ?>
    <?php echo getCode('Toys/MiMazeToy.php'); ?>
    <?php echo getCode('Toys/MiPuzzleToy.php'); ?>
    <?php echo getCode('MilanToyFactory.php'); ?>
    <?php echo getCode('RomeToyFactory.php'); ?>
    <?php echo getCode('Toys/RomeMazeToy.php'); ?>
    <?php echo getCode('Toys/RomePuzzleToy.php'); ?>

    <h3>Codice Eseguito</h3>
    <?php echo getCode('code.php'); ?>

    <h3>Risultato</h3>

    <pre>
        <code><?php require 'code.php'; ?></code>
    </pre>


</div>

<?php
require '../../includes/footer.inc.php';
?>

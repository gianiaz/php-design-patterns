<?php
require '../../includes/header.inc.php';
?>
<div class="container">

    <h1>Abstract Factory Pattern</h1>

    <?php echo getCode('Pizza.php'); ?>
    <?php echo getCode('PizzaBuilder.php'); ?>

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

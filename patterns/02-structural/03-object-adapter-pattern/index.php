<?php
require '../../../includes/header.inc.php';
?>
<div class="container">

    <h1>Object Adapter Pattern</h1>

    <?php echo getCode('Insurance.php'); ?>
    <?php echo getCode('MarketCompare.php'); ?>
    <?php echo getCode('InsuranceMarketCompare.php'); ?>

    <h3>Codice Eseguito</h3>
    <?php echo getCode('code.php'); ?>

    <h3>Risultato</h3>

    <pre>
        <code><?php require 'code.php'; ?></code>
    </pre>


</div>

<?php
require '../../../includes/footer.inc.php';
?>

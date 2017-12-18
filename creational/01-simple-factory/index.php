<?php
require '../../includes/header.inc.php';
?>
<div class="container">

    <h1>Simple Factory</h1>

    <?php echo getCode('Notifier.php'); ?>
    <?php echo getCode('NotifierFactory.php'); ?>
    <?php echo getCode('Email.php'); ?>
    <?php echo getCode('SMS.php'); ?>

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

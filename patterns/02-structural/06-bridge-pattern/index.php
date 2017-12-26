<?php
require '../../../includes/header.inc.php';
?>
<div class="container">

    <h1>Bridge Pattern</h1>

    <?php echo getCode('Transmitter.php'); ?>
    <?php echo getCode('Device.php'); ?>
    <?php echo getCode('Phone.php'); ?>
    <?php echo getCode('Tablet.php'); ?>

    <?php echo getCode('Messenger.php'); ?>
    <?php echo getCode('SMS.php'); ?>

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

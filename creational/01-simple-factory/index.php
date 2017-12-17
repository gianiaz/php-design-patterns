<?php
require '../../includes/header.inc.php';
?>
<div class="container">

    <h1>Simple Factory</h1>

    <pre><code class="php"><?php echo getCode('Notifier.php'); ?></code></pre>
    <pre><code class="php"><?php echo getCode('NotifierFactory.php'); ?></code></pre>
    <pre><code class="php"><?php echo getCode('Email.php'); ?></code></pre>
    <pre><code class="php"><?php echo getCode('SMS.php'); ?></code></pre>

    <h3>Codice Eseguito</h3>
    <pre><code class="php"><?php echo getCode('code.php'); ?></code></pre>

    <h3>Risultato</h3>

    <pre>
        <code><?php require 'code.php'; ?></code>
    </pre>


</div>

<?php
require '../../includes/footer.inc.php';
?>

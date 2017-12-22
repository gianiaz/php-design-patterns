<?php
require 'includes/header.inc.php';
?>
<div class="container">
    <h1> Design patterns </h1>
    <h2> Creational </h2>
    <ul>
        <li><a href="patterns/01-creational/01-simple-factory/index.php"> Simple Factory </a></li>
        <li><a href="patterns/01-creational/02-factory-method/index.php"> Factory Method </a></li>
        <li><a href="patterns/01-creational/03-abstract-factory-pattern/index.php"> Abstract Factory Pattern </a></li>
        <li><a href="patterns/01-creational/04-lazy-initialization/index.php"> Lazy initialization </a></li>
        <li><a href="patterns/01-creational/05-builder-pattern/index.php"> Builder Pattern </a></li>
        <li><a href="patterns/01-creational/06-prototype-pattern/index.php"> Prototype Pattern </a></li>
    </ul>
    <h2> Structural Design Patterns </h2>
    <ul>
        <?php
        $dir = listDir('patterns/02-structural');
        foreach ($dir as $d) {
            $name = basename($d);
            $name = ucwords(str_replace('-', ' ', $name));
            $name = trim(preg_replace('[\d]', '', $name));
            if (!file_exists($d.'/code.php')) {
                $name .= ' (TODO)';
            }
            echo '<li><a href="'.$d.'/index.php">'.$name.'</a></li>';
        }
        ?>
    </ul>
</div>
<?php
require 'includes/footer.inc.php';
?>

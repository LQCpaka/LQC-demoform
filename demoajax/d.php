<?php
    $myArr = ['HTML', 'CSS', 'JS'];

?>
<ul>
    <?php
    foreach ($myArr as $val) {
    ?>
        <li><?php echo $val; ?></li>
    <?php
    }
    ?>
    
</ul>
<?php

$arr = [200, 204, 173, 98, 171, 404, 459.];

foreach ($arr as $val):
    if ($val % 2 === 0): ?>
    <?=$val?> est paire <br>
    <?php else: ?>
        <?=$val?> est impaire <br>
    <?php endif;
    endforeach;

?>
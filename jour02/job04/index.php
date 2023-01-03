<?php 

for ($i = 1; $i <= 100; $i++):
    if ($i % 3 === 0 && $i % 5 === 0): ?>
        FizzBuzz<br>
        <?php elseif ($i % 3 === 0 ): ?>
            Fizz<br>
            <?php elseif ($i % 5 === 0): ?>
                Buzz<br>
                <?php else: ?>
                    <?= $i ?><br>
    <?php endif;?>
<?php endfor; 

?>
<?php 
for ($i = 0; $i <=100; $i++ ):
    if ($i >= 0 && $i <= 20) : ?>
        <i><?= $i?></i> <br>
        <?php elseif ($i >= 25 && $i <= 50):
                if ($i === 42): ?>
                    <span>LaPlateforme_</span><br>
                    <?php else: ?>
                        <u><?= $i ?></u><br>
                <?php endif; ?>
            <?php else: ?>
                    <?= $i ?><br>
        <?php endif; ?>
<?php endfor;
?>

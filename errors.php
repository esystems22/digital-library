<?php
if(count($errors)>0): ?>
    <div class="errors">
        <?php foreach ($errors as $err):  ?>
        <p><?php echo $err; ?></p>
        <?php endforeach; ?>
    </div>
<?php endif;  ?>


<?php if(isset($_SESSION['message'])): ?>
<div class="msg <?php echo $_SESSION['type']; ?>">
    <li><?php echo $_SESSION['message']; ?></li>
 <?php
    // the variable are removed from the session with this code
        unset($_SESSION['message']); 
        unset($_SESSION['type']);
    ?>
</div>
<?php endif; ?>
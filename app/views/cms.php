Welcome to cms
        <?php if(Auth::check()): ?>
        <!-- LOGOUT BUTTON -->
        <a href="/logout">Logout</a>

<?php //todo
//create a file upload form
?>

        <?php else: ?>
        <a href="/login">Login</a>
        <?php endif; ?>
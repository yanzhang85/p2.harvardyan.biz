<?php if($user): ?>
 Hello <?=$user->first_name;?>

<?php else: ?>
 Welcome to my app. Please sign up or Log in.

<?php endif; ?>
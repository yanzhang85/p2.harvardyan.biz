<?php if($user): ?>
 Hello <?=$user->first_name;?>

<?php else: ?>
 Welcome to Netchat! Please sign up or Log in.

<?php endif; ?>
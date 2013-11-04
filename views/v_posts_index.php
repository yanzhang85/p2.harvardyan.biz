<?php foreach($posts as $post): ?>

<article>
	<!-- display this user's profile image -->
    <img src="/uploads/avatars/<?=$user->image?>" alt="<?=$post['first_name']?> <?=$post['last_name']?>" height="100" width="100">
    <!-- Print this user's name -->
    <h1><?=$post['first_name']?> <?=$post['last_name']?> posted:</h1>

    <p><?=$post['content']?></p>

    <time datetime="<?=Time::display($post['created'],'Y-m-d G:i')?>">
        <?=Time::display($post['created'])?>
    </time>

</article>

<?php endforeach; ?>
<h1> Hello, <?=$user->first_name?>! </h1>
<p> You have been with us since <?= date('F j, Y', $user->created) ?>.</p>
<h4> Your current image</h4>

<!-- display default profile image -->
<?php if ($user->image == 'placeholder.jpg'): ?>
<p>What about having more fun with a nice picture of your fine self?</p>
<?php endif; ?>

<!-- upload image -->
<form role="form" method='POST' enctype="multipart/form-data" action='/users/profile_update/'>
<img src="/uploads/avatars/<?= $user->image ?>" alt="<?=$user->first_name . ' ' . $user->last_name ?>" height="100" width="100"> <br><br>                 
<div>
	<label for="exampleInputFile">Do you want to make some change?</label> <br>
	<input type="file" id="avatar" name="avatar"> <br>
	<button type="submit" class="btn btn-custom">Update Your Profile Image</button>
	</form>   
</div>

<!-- if there is an error in uploading the image -->
<?php if(isset($error)): ?>
           
<h4>Upload failed.</h4> 
<p>Image file must be a jpg, gif, or png.</p>
            
<?php endif; ?>     
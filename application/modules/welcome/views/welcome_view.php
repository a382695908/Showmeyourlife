<div id = "home">
	<div class = "hero-unit">
		<h3>Willkommen!</h3>
		<?php echo $user->username;?>
		<br>
		<a href = "auth/logout">Logout</a>
		<br>
		<img src="<?=base_url();?>assets/pics/<?php echo $user->username;?>.jpg" class="img-polaroid" style = "width:150px">
		
<!--Avatar hochladen-->
<?php echo form_open_multipart('welcome/ava');?>
	<input type="file" name="userfile"/>
	<br>
	<input type="submit" class = "btn btn-success" value="Avatar &auml;ndern" />
</form>
<!--Avatar hochladen ENDE-->

<div id = "status">
Rang
<?php
if(isset($get)){
foreach($get as $get_count){
//$get_count->id * 10;
}
}
?>
<div class="progress progress-striped active"style="width:200px;">
<div class="bar" style="width:<?php echo $get_count->id;?>%;">
</div>
</div>
</div>

<div id = "input">
<!--Input-->
<?php echo form_open('welcome/post');?>
<input id="txtEingabe" name="posting" type="text"  
         onkeypress="return evalKeyForSubmit(event, this.form);" placeholder = "Enter dr&uuml;cken um zu posten...">  
   </p>  
   <input type="hidden" id="Submit" name="Submit" value="">  
</form>
<!--INPUT END-->
</div>
</div>
<!--GET-->
<?php
if(isset($get))
{
	foreach($get as $ausgabe)
	{
		echo "<div class = 'well'>";
		echo "<img src='".base_url()."assets/pics/".$user->username.".jpg' class='img-polaroid' style ='width:100px'><br>";
		echo $ausgabe->name."<br>";
		
		echo $ausgabe->post."<br></div>";
		
	}
}
?>
<!--GET END-->
	</div>

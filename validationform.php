<!DOCTYPE HTML>
<html>  
<body>
<h1> PHP VALIDATION FORM</h1>
<form action="" method="post">
Name: <input type="text" name="name" value="<?php echo $name;?>
E-mail: <input type="text" name="email" value="<?php echo $email;?>

Website: <input type="text" name="website" value="<?php echo $website;?>

Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
<br><br>
submit:<input type="submit" name="submit" value="submit"><br> 
Gender:
<input type="radio" name="gender"
</form>
<?php if (isset($gender) && $gender=="female") echo "checked";?>
value="female">Female
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="male") echo "checked";?>
value="male">Male
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="other") echo "checked";
?>
value="other">Other
</body>
</html>
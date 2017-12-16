<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<form action="" method="POST">
	<p><label>Area:<br><input name="area" type="text"></label></p>
	<p><label>Bedroom:<br><input name="bedroom" type="text"></label></p>
	<p><label>Garage:<br><input name="garage" type="text"></label></p>
	<p><label>Description:<br><textarea name="desc" type="text"></textarea></label></p>
	<p><label>Price:<br><input name="price" type="text"></label></p>
	<p><label>Title:<br><input name="title" type="text"></label></p>
	<p>
		<label>State:
			<br>
			<select name="state">
				<?php foreach ($states as $state): ?>
					<option value="<?php echo $state['id'] ?>"><?php echo $state['title'] ?></option>
				<?php endforeach ?>
			</select>
		</label>
	</p>
	<p><input name="submit" type="submit" value="Добавить"></p>
</form>
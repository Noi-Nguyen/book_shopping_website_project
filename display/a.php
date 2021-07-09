

		<form method="post">
			<input type="number" name="a">
			<button type="submit">lấy gt của inut</button>
		</form> 
		<?php 
			if (isset($_POST['a'])) {
				
				echo $_POST['a'];
			}
		 ?>


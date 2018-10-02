<! DOCTYP html>
<?php
session_start();
$_SESSION['number']=0;
$_SESSION['number'] = (isset($_SESSION["clickme"])) ? $_SESSION["clickme"] : "-1";
$_SESSION['number']++;
?>
	<html>
	    <bod>
		   <form method="post">
			      <input type="hidden" name="clickme" value="<?php echo $_SESSION['number'];?>" >
			  <p> <input type="submit" value="klick mich"></p>
			</form>
			<p> Anzahl an Kicks: <?php 
                       echo $_SESSION['number'];
					
                     ?>
			</p>
		</bod>
	
	</html>
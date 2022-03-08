<script src='jquery-1.5.1.js' type='text/javascript'></script>
<?php	
	$id = $_GET['id'];	
	require("$_SERVER[DOCUMENT_ROOT]/Main/connect.php");	
?>
	<div id="xa" class="col-sm-12"><label>Đơn vị:</label><select  name="donvi" class="form-control"  type="text">
			<option value=""></option>				
			<?php						
					$sql = "Select tenxa from xa where mahuyen like '$id%'";
					$qrsql = mysqli_query($con,$sql);
					while($row =mysqli_fetch_array($qrsql))
					{	
						echo "<option value='$row[0]'>$row[0]</option>";
					}
			?>			
			</select>
		</div>		
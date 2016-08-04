<?php 
include '../view.inc/headerGuess.php';
session_start();
$idDay = $_GET['idDay'];
?>
<div class="container">		
	<div class="well">
		<div class="content-centre">		
			<div class="well">
			<form role="form"  name ="form-DK" method="post" action="../controller/CapNhatDayController.php">
			  <h2>CẬP NHẬT DÃY <button type="submit" class="btn btn-default">THÊM</button></h2>
			  <div class="form-group">
			      <label >id Dãy:</label>
			      <input type="text" class="form-control" id="idDay" name ="idDay" value="<?php echo $idDay?>" readonly="readonly">
			    </div>
			    <div class="form-group">
			      <label >Địa Chỉ:</label>
			      <input type="text" class="form-control" id="diaChi" name ="diaChi">
			    </div>
			    <div class="form-group">
			      <label >Khu Vực:</label>
			      <select  class="form-control" id="idKhu"  name ="idKhu">
			      	<option value="">---chọn khu vực--</option>
			      	<?php for($i =0;$i< count($khuVucList);$i++){?>
				        <option value= "<?php echo $khuVucList[$i]->getIdKhu(); ?>">
				        <?php echo $khuVucList[$i]->getTen(); ?></option>				    
			      	<?php }?>
			      	</select>   
			    </div>	  	    
			  </form>
			 </div>
		</div>
	</div>
</div>
</div>
</div>
</body>
</html>

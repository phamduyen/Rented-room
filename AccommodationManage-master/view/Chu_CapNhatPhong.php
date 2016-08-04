<?php 
session_start();
include '../view.inc/headerGuess.php';
include_once '../model.dao/daytroDAO.php';
include_once '../model.bean/daytroBEAN.php';
$idPhong = $_GET['idPhong'];
$dayTroDao = new daytroDAO();
$dayTroList = $dayTroDao->getListItemByIdChu($_SESSION['username']);


?>
<div class="container">		
	<div class="well">
		<div class="content-centre">	
			<div class="well">
			  <h2>CẬP NHẬT PHÒNG TRỌ</h2>
			  <form role="form" method="post" action="../controller/CapNhatPhongTroController.php">
			     <div class="form-group">
			      <label >ID Phòng:</label>
			      <input type="text" class="form-control" value="<?php echo $idPhong ?>" id="idPhong" name="idPhong" readonly="readonly">
			    </div>			    
			    <div class="form-group">
			      <label >Chọn Dãy:</label>
			      <select class="form-control" id="idDay" name = "idDay">
			      <?php for($i=0;$i<count($dayTroList);$i++){?>
			      	<option value="<?php echo $dayTroList[$i]->getidDay();?>"><?php echo $dayTroList[$i]->getDiaChi();?></option>
			      	<?php }?>
			      </select>
			    </div>	 
			    <div class="form-group">
			      <label >Diện Tích:</label>
			      <input type="number" class="form-control" id="dienTich" name="dienTich">
			    </div> 
			    <div class="form-group">
			      <label >Đặt Giá:</label>
			      <input type="number" class="form-control" id="gia" name ="gia">
			    </div>
			    <div class="form-group">
			      <label >Mô tả:</label>
			      <input type="text" class="form-control" id="moTa" name ="moTa">
			    </div>
			    <button type="submit" class="btn btn-default">THÊM</button>
			  </form>
			 </div>
		</div>
	</div>
</div>
</div>
</div>
</body>
</html>

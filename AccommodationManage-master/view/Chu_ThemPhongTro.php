<?php 

include '../view.inc/headerGuess.php';
include_once '../model.dao/daytroDAO.php';
include_once '../model.bean/daytroBEAN.php';
$dayTroDao = new daytroDAO();
$dayTroList = $dayTroDao->getListItemByIdChu($_SESSION['username']);
?>
<div class="container">		
	<div class="well">
		<div class="content-centre">
		<h4>DANH SÁCH PHÒNG TRỌ</h4>
	<!-- Do du lieu tai day  -->
					<div class="panel panel-default">
						<table  cellspacing="0" cellpadding="1" border="1" width="300" class="table table-bordered scroll">
                    <thead>
                        	<th>STT</th>
                            <th>id Phòng</th>
                            <th>Địa Chỉ Trọ</th>
                            <th>Mota</th>
                            <th>Điện Tích</th>
                            <th>Giá</th>
                            <th>Tình Trạng</th>
                            <th>Sửa</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tbody style="height:48px; overflow:hide;">  
                    <!-- đỗ du lieu vo day -->   
                    <?php 	for($i=0;$i<count($phongTroList);$i++){ ?>              
                    	<tr>
                    		<td><?php echo $i+1?></td>
                    		<td><?php echo $phongTroList[$i]->getIdPhong()?></td>
                    		<td><?php $daytro = $dayTroDao->getItemById($phongTroList[$i]->getIdDay()); echo $daytro->getDiaChi() ?></td>
                    		<td><?php echo $phongTroList[$i]->getMota() ?></td>
                    		<td><?php echo $phongTroList[$i]->getDientich() ?>m2</td>
                    		<td><?php echo $phongTroList[$i]->getGiaPhong() ?></td>
                    		<td><?php  if( $phongTroList[$i]->getStatus()==1) echo 'Đã Thuê'; else echo 'Trống' ?></td>
                    		<td><a href="../view/Chu_CapNhatPhong.php?idPhong=<?php echo $phongTroList[$i]->getIdPhong() ?>"><img name="change_Btn" src="../content/images/edit.png" class="image-btn"  ></a></td>
                    		<td><a href="../controller/XoaPhongController.php?idPhong=<?php echo $phongTroList[$i]->getIdPhong()?>"><img  name="del_Btn" src="../content/images/recyclebin-512.png" class="image-btn"  ></a></td>	
                    	</tr> 
                    	<?php }?>
                    	  <!--do xong  -->
                </tbody>
               	 </table>
				</div>
		
			<div class="well">
			  <h2>THÊM PHÒNG</h2>
			  <form role="form" method="post" action="../controller/ThemPhongController.php">
			    			    
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

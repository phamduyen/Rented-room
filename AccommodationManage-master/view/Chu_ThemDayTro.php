<?php 
include '../view.inc/headerGuess.php';
?>
<div class="container">		
	<div class="well">
		<div class="content-centre">
		<h4>DANH SÁCH DÃY</h4>
	<!-- Do du lieu tai day  -->
					<div class="panel panel-default">
						<table  class="table table-bordered scroll">
                    <thead>
                        <tr>
                            <th>id Dãy</th>
                            <th>Địa Chỉ</th>
                            <th>Khu Vực</th>
                            <th>Sửa</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tbody > 
                    <?php 	for($i=0;$i<count($dayTroList);$i++){?>                  
                    	<tr>
                    		<td><?php echo $dayTroList[$i]->getIdDay()?></td>
                    		<td><?php echo $dayTroList[$i]->getDiaChi()?></td>
                    		<td><?php  $khu = $khuVucDao->getIteamById($dayTroList[$i]->getidKhu()); echo $khu->getTen()?></td>
                    		<td><a href="../view/Chu_CapNhatDay.php?idDay=<?php echo $dayTroList[$i]->getIdDay();?>"><img name="change_Btn" src="../content/images/edit.png" class="image-btn"  ></a></td>
                    		<td><a href="../controller/XoaDayTroController.php?idDay=<?php echo $dayTroList[$i]->getIdDay()?>"><img  name="del_Btn" src="../content/images/recyclebin-512.png" class="image-btn"  ></a></td>	
                    	</tr> 
                    	<?php }?>
                </tbody>
               	 </table>
				</div>
		
			<div class="well">
			<form role="form"  name ="form-DK" method="post" action="../controller/ThemDayController.php">
			  <h2>THÊM DÃY <button type="submit" class="btn btn-default">THÊM</button></h2>
			    <div class="form-group">
			      <label >Địa Chỉ:</label>
			      <input type="text" class="form-control" id="diaChi" name ="diaChi">
			    </div>
			    <div class="form-group">
			      <label >Khu Vực:</label>
			      <select  class="form-control" id="idKhu"  name ="idKhu">
			      	  <option value="">...Chon Khu vực...</option>
				      <?php for($i =0;$i< count($khuVucList);$i++){?>
				        <option value= "<?php echo $khuVucList[$i]->getIdKhu(); ?>"><?php echo $khuVucList[$i]->getTen(); ?></option>
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

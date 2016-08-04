<?php 
include '../view.inc/headerGuess.php';
?>
<div class="container">		
	<div class="well">
		<div class="content-centre">
		<h4>DANH SÁCH ĐĂNG KÍ PHÒNG TRỌ</h4>
	<!-- Do du lieu tai day  -->
					<div class="panel panel-default">
						<table  cellspacing="0" cellpadding="1" border="1" width="300" class="table table-bordered scroll">
                    <thead>
                       		 <th>STT</th>
                            <th>Họ Tên</th>
                            <th>Công Việc</th>
                            <th>Quê quán</th>
                            <th>SDT</th>
                            <th>Phòng Đặt</th>
                            <th>Ngày DK</th>
                            <th>Xác Nhận</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tbody > 
                    <?php for($i=0;$i<count($dkPhongList);$i++){?>                  
                    	<tr>
                    		<td><?php echo $i+1?></td>
                    		<td><?php echo $dkPhongList[$i]->getNguoiThue()?></td>
                    		<td><?php echo $dkPhongList[$i]->getCongViec()?> </td>
                    		<td><?php echo $dkPhongList[$i]->getQueQuan()?></td>
                    		<td><?php echo $dkPhongList[$i]->getSdt()?></td>
                    		<td><?php echo $dkPhongList[$i]->getidPhong()?></td>
                    		<td><?php echo $dkPhongList[$i]->getNgayDK()?></td>
                    		<?php if ($dkPhongList[$i]->getStatus() == 1) {
                    		?> 
                    		<td>Đã Thuê</td>
                    		<td> <a href="../controller/XoaDKPhongController.php?idPhong=<?php echo $dkPhongList[$i]->getidPhong()?>"><img src="../content/images/recyclebin-512.png" class="image-btn"> </a></td>
                    		<?php }else{?>
                    		<td><a href="../controller/XacNhanDKPhong.php?idDK=<?php echo $dkPhongList[$i]->getidDK()?>">Xác Nhận</a></td>
                    		<td></td>
                    		<?php }?>
                    	</tr> 
                    	<?php }?> 
                </tbody>
               	 </table>
				</div>		
		</div>
	</div>
</div>
</div>
</div>
</body>
<script type="text/javascript">
var $table = $('table.scroll'),
$bodyCells = $table.find('tbody tr:first').children(),
colWidth;

//Adjust the width of thead cells when window resizes
$(window).resize(function() {
// Get the tbody columns width array
colWidth = $bodyCells.map(function() {
    return $(this).width();
}).get();

// Set the width of thead columns
$table.find('thead tr').children().each(function(i, v) {
    $(v).width(colWidth[i]);
});    
}).resize(); // Trigger resize handler
</script>
</html>

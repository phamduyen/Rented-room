<?php 
include '../view.inc/headerGuess.php';
?>
<div class="container">	
	<div class="row">
		<div class="col-xs-8">
			<div class="well">
				<?php if(isset($idDay)){?>
				<h3>PHÒNG TRỌ CỦA DÃY  <?php  $daytro = $dayTroDao->getItemById($idDay); echo  $daytro->getDiaChi();?></h3><!--  đổ tên của dãy trọ đã chọn vào -->	
					<?php 		}else echo '<h3> KẾT QUẢ TÌM KIẾM NHƯ SAU</>'?>
					
				<div id="scrollContainer" class="scrolbar">
				<?php for ($i =0;$i<count($phongTroList);$i++)
				{?>
				<!--  Đổ dữ liệu ở đây-->
					<div class="well">
						<div class="row">
							<div class="col-xs-3">
								<div class="imageview">
									<img src="../content/images/phongtro.jpg" alt="Phòng" />
								</div>
							</div>
							<div class="col-xs-8">
								<div class="infor">
									<h4><?php echo $phongTroList[$i]->getIdPhong() ; ?></h4>
									<span class="text1">Khu vực:</span><span>
										<?php $daytro= $dayTroDao->getItemById($phongTroList[$i]->getIdDay());
										$khu=$khuVucDao->getIteamById($daytro->getidKhu());
										echo $khu->getTen()?>
									</span><br>
									<span class="text1">Mô Tả:</span><span ><?php  echo $phongTroList[$i]->getMota(); ?></span><br />
									<span class="text1">Diện tích:</span><span  ><?php echo $phongTroList[$i]->getDienTich();?> m2</span>
									<span class="text1">Giá cả:</span><span ><?php echo $phongTroList[$i]->getGiaPhong();?></span>
									<span class="text1">Tình trạng:</span>
									<span style="color: Red;font-size: 18px">
									<?php if($phongTroList[$i]->getStatus()==1) echo 'Đã Thuê';
									else echo 'Trống'?>
									</span>
									<a href="../view/DangKiPhong.php?idPhong=<?php echo $phongTroList[$i]->getIdPhong();?>"><button type="button"   class="btn btn-warning  btn-sm" 
									 <?php if($phongTroList[$i]->getStatus()==1) echo 'disabled="disabled" style="background-color: gray;"'?>>Đăng kí</button></a>
								</div>
							</div>
						</div>
					</div>
					<?php }?>
					<!-- cuối đỗ dữ liệu -->
				</div>
			</div><!-- scrol bar -->
		</div>
		<div class="col-xs-4">
			<div class="well">
				<img src="../content/images/quangcao.jpg" alt="quảng cáo"  width="300px" height="300px"/>
				<img src="../content/images/quangcao1.jpg" alt="quảng cáo" width="300px" height="300px"/>
			</div>
		</div>
	</div>	
</div><!-- container content  -->
</body>

</html>
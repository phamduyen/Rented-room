<?php 
include '../view.inc/headerGuess.php';
?>

<div class="container">	
	<div class="row">
		<div class="col-xs-8">
			<div class="well">
				<h3>DANH SÁCH CHO THUÊ TRỌ ĐỊA BÀN ĐÀ NẴNG</h3>
				
				<div id="scrollContainer" class="scrolbar">
				<!--  Đổ dữ liệu ở đây-->
				<?php 
					for($i=0;$i<count($dayTroList);$i++){
				?>
					<div class="well">
						<div class="row">
							<div class="col-xs-3">
								<div class="imageview">
									<img src="../content/images/room.jpg" alt="Phòng" />
								</div>
							</div>
							<div class="col-xs-8">
								<div class="infor">
									<h4><?php echo $dayTroList[$i]->getDiaChi(); ?></h4>
									<p><?php $khu = $khuVucDao->getIteamById($dayTroList[$i]->getidKhu()); echo $khu->getTen()?></p>
									<span class="text1">Số Phòng trống:</span><span><?php echo  $dayTroDao->count($dayTroList[$i]->getidDay())   ?> </span><br />
									<span class="text1">Liên hệ:</span><span><?php  $chuTro = $chuTroDao->getItemById($dayTroList[$i]->getidChu()); echo $chuTro->getSdt();  ?></span>
									<a href="../controller/showDanhSachPhongController.php?idDay=<?php echo $dayTroList[$i]->getidDay()?>"><button type="button" name= "xemChiTiet" class="btn btn-warning btn btn-sm"> xem chi tiết</button></a>
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
<script type="text/javascript">
function scrollElement(behavior) {
  var scrollContainer = document.getElementById("scrollContainer");
  scrollContainer.className = behavior;
  var scrollPosition = scrollContainer.scrollTop === 0 ? scrollContainer.scrollHeight : 0;
  scrollContainer.scrollTo(0, scrollPosition);
}

// Adding event listeners to the buttons.
document.querySelector(".scroll-auto").addEventListener(
  "click",
  function () {
   scrollElement("auto");
  });
document.querySelector(".scroll-smooth").addEventListener(
  "click",
  function () {
   scrollElement("smooth");
  });
</script>
</html>
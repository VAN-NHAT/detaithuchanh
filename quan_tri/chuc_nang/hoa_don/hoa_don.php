<?php
	if(!isset($login)){exit();}
?>
<table>
	<tr>
		<td><label>Mã hóa đơn</label></td>
		<td><label>Tên khách hàng</label></td>
		<td><label>Ngày mua</label></td>
		<td><label>Xử lý</label></td>
		<td><label>Xóa</label></td>
	</tr>
<?php 
	include('../connect.php');
	$sl="select * from hoa_don";
	$exec= mysqli_query($connect, $sl);
	while($row=mysqli_fetch_array($exec)){ 
?>
	<tr>
		<td><?php echo $row['ma_hoadon']; ?></td>
		<td><a href="?menu=chi_tiet_hoa_don&ma_hoadon=<?php echo $row['ma_hoadon']; ?>"><?php echo $row['tenkh']; ?></a></td>
		<td><?php echo $row['ngay_mua']; ?></td>
		<td><?php echo $row['xu_ly']; ?></td>
		<td><a  style="text-decoration: none; padding: 5px 15px; background-color: #1D388F; color: #fffafa;" onclick="return confirm('Bạn có mún xóa hóa đơn?');" href="?menu=xoa&ma_hoadon=<?php echo $row['ma_hoadon']; ?>">Xóa</a></td>
	</tr>
	<?php } ?>
</table>
<?php
	if(!isset($login)){exit();}
?>
<table>
<?php 
	include('../connect.php');
	$sl= 'select * from san_pham join cau_hinh on san_pham.masp= cau_hinh.masp where san_pham.masp='.$_GET['masp'];
	$exec= mysqli_query($connect, $sl);
	$row= mysqli_fetch_array($exec);
?>
<tr>
	<td>
		<label>Tên sản phẩm: </label><br>
		<label>Giá sản phẩm: </label><br>
		<label>Số lượng sản phẩm: </label><br>
		<label>Loại sản phẩm: </label>
	</td>
		<td>
			<?php echo $row['tensp']; ?><br>
			<?php echo number_format($row['giasp'],0,",",".")."đ"; ?><br>
			<?php echo $row['soluong']; ?><br>
			<?php echo $row['loaisp']; ?>
		</td>
</tr>
</table>

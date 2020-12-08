<?php
	if(!isset($login)){exit();}
?>
<div class="addproduct">
	<form method="post" action="?menu=exec_them_sp" enctype="multipart/form-data">
		<table>
			<tr>
				<td colspan="4">Thông tin sản phẩm</td>
			</tr>
			<tr>
				<td><label for="name">Tên sản phẩm</label></td>
				<td><label for="cost">Giá</label></td>
				<td><label for="soluong">Số lượng</label></td>
				<td class="right"><label for="loaisp">Loại sản phẩm</label></td>

			</tr>
			<tr>
				<td><input type="text" id="name" name="name" required ></td>
				<td><input type="text" id="cost" name="cost" required ></td>
				<td><input type="text" id="soluong" name="soluong" required ></td>
				<td>
					<select name="loaisp" id="loaisp"  required >
						<option value="aoquannu">Thời Trang Nữ</option>
						<option value="aoquannam">Thời Trang Nam</option>
						<option value="phukien">Phụ kiện</option>
					</select>
				</td>
			</tr>
		</table>
		<table>
			<tr>
				<td colspan="2">Hình ảnh</td>
			</tr>
			<tr>
				<td class="right">
					<label for="image1">Ảnh 1:</label><br>
					<label for="image2">Ảnh 2:</label><br>
					<label for="image3">Ảnh 3:</label><br>
					<label for="image4">Ảnh 4:</label><br>
					<label for="image5">Ảnh 5:</label>
				</td>
				<td>
					<input type="file" id="image" name="image"  required ><br>
					<input type="file" id="image2" name="image1"><br>
					<input type="file" id="image3" name="image2"><br>
					<input type="file" id="image4" name="image3"><br>
					<input type="file" id="image5" name="image4">
				</td>
			</tr>
		</table>
		<table>
			<tr>
				<td colspan="4">Cấu hình</td>
			</tr>
			<tr>
				<td><label for="chat_lieu">Chất Liệu</label></td>
				<td><label for="mau_sac">Màu Sắc</label></td>
				<td><label for="size">Size</label></td>
				<td><label for="xuat_xu">Xuất Xứ</label></td>
			</tr>
			<tr>
				<td><input type="text" id="chat_lieu" name="chat_lieu" required ></td>
				<td><input type="text" id="mau_sac" name="mau_sac" required ></td>
				<td><input type="text" id="size" name="size" required ></td>
				<td><input type="text" id="xuat_xu" name="xuat_xu" required ></td>
			</tr>
			
			<tr>
				<td colspan="4"><hr></td>
			</tr>
			<tr>
				<td><label for="noi_bat">Nổi bật</label></td>
				<td>
					<select name="noi_bat" id="noi_bat">
						<option value="có">Có</option>
						<option value="không">Không</option>
					</select>
				</td>
			</tr>
			<tr>
				<td class="right"><input type="submit" name="submit" value="Thêm"></td>	</form>
				<form method="post" action="?menu=exec_them_sp">
				<td><input type="submit" name="cancel" value="Hủy"></td>
			</tr>
		</table>
	</form>
</div>
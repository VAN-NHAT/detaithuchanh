<?php
	if(!isset($login)){exit();}
?>
<?php
	if(isset($_POST['submit'])){
	include('../connect.php');
	$img_location ='../images/';
	$masp = $_POST['masp'];
	$name = $_POST['name'];
	$name = mb_strtoupper($name);
	$cost = $_POST['cost'];
	$loaisp = $_POST['loaisp'];
	$image_upload = $_FILES['image']['name'];
	$image1= $_FILES['image1']['name'];
	$image2= $_FILES['image2']['name'];
	$image3= $_FILES['image3']['name'];
	$image4= $_FILES['image4']['name'];
	$tmp_name1= $_FILES['image1']['tmp_name'];
	$tmp_name2= $_FILES['image2']['tmp_name'];
	$tmp_name3= $_FILES['image3']['tmp_name'];
	$tmp_name4= $_FILES['image4']['tmp_name'];
	$error= $_FILES['image']['error'];
	$tmp_name= $_FILES['image']['tmp_name'];
		if($image_upload==""){
			$image= $_POST['img'];
		}
		if($image_upload!=""){
			$image= $image_upload;
			$new_img_location= $img_location.basename($image);
			move_uploaded_file($tmp_name,$new_img_location);
			$old_image_location= $img_location.basename($_POST['img']);
			unlink($old_image_location);
		}
		if($image1==""){
			$img1= $_POST['img1'];
		}
		if($image1!=""){
			$img1= $image1;
			$new_img_location1= $img_location.basename($image1);
			move_uploaded_file($tmp_name1,$new_img_location1);
			$old_image_location1= $img_location.basename($_POST['img1']);
			unlink($old_image_location1);
		}
		if($image2==""){
			$img2= $_POST['img2'];
		}
		if($image2!=""){
			$img2= $image2;
			$new_img_location2= $img_location.basename($image2);
			move_uploaded_file($tmp_name2,$new_img_location2);
			$old_image_location2= $img_location.basename($_POST['img2']);
			unlink($old_image_location2);
		}
		if($image3==""){
			$img3= $_POST['img3'];
		}
		if($image3!=""){
			$img3= $image3;
			$new_img_location3= $img_location.basename($image3);
			move_uploaded_file($tmp_name3,$new_img_location3);
			$old_image_location3= $img_location.basename($_POST['img3']);
			unlink($old_image_location3);
		}if($image4==""){
			$img4= $_POST['img4'];
		}
		if($image4!=""){
			$img4= $image4;
			$new_img_location4= $img_location.basename($image4);
			move_uploaded_file($tmp_name4,$new_img_location4);
			$old_image_location4= $img_location.basename($_POST['img4']);
			unlink($old_image_location4);
		}
	$soluong=$_POST['soluong'];
	if($soluong==""){
		$soluong=0;
	}
	$mau_sac = $_POST['mau_sac'];
	$chat_lieu = $_POST['chat_lieu'];
	$size = $_POST['size'];
	$xuat_xu = $_POST['xuat_xu'];	
	$loaisp = $_POST['loaisp'];
	$sl= "update san_pham set tensp='".$name."',giasp=".$cost.",soluong=".$soluong.",img='".$image."',img1='".$img1."',img2='".$img2."',loaisp='".$loaisp."' where masp=".$masp;
	$sql= "update cau_hinh set chat_lieu='".$chat_lieu."',mau_sac='".$mau_sac."',size='".$size."',xuat_xu='".$xuat_xu."' where masp=".$masp;
	$exec1= mysqli_query($connect, $sql);
	$exec= mysqli_query($connect,$sl);
	if($exec){
		if($exec1){
		echo "<script> alert('Sửa sản phẩm thành công');
		location.href='?menu=ql_sanpham'; </script>";
	}
}
	else{
		echo "<script> alert('Sửa sản phẩm không thành công'); location.href='?menu=ql_sanpham'; </script>";
	}
}
	if(isset($_POST['cancel'])){
		header('location:index.php?menu=ql_sanpham');
	}
?>
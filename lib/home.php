<?php
	
	function loadmenu(){
		$conn = connect();
		$query = "SELECT * FROM LoaiSanPham WHERE hide = 1 ORDER BY MaLoaiSanPham DESC";
		return mysqli_query($conn,$query);
	}

	function loadlienhe(){
		$conn = connect();
		$query = "SELECT * FROM lienhe WHERE hide = 1 ORDER BY MaLienHe DESC";
		return mysqli_query($conn,$query);
	}

	function loadsanphamtop8($id){
		$conn = connect();
		$query = "SELECT * FROM sanpham a, LoaiSanPham b WHERE a.MaLoaiSanPham = b.MaLoaiSanPham and a.hide = 1 and a.MaLoaiSanPham = $id ORDER BY masanpham DESC limit 0,8";
		return mysqli_query($conn,$query);
	}

	function chitietsanpham($id){
		$conn = connect();
		$query = "SELECT*FROM SANPHAM WHERE HIDE = 1 AND MASANPHAM = $id";
		return mysqli_query($conn,$query);
	}

	function danhsachsanphambyid($id){
		$conn = connect();
		$query = "SELECT*FROM SANPHAM a, LOAISANPHAM b WHERE  b.hide = 1  AND a.MaLoaiSanPham=b.MaLoaiSanPham and a.MALOAISANPHAM = $id ORDER BY MaSanPham DESC";
		return mysqli_query($conn,$query);
	}

	function sptuongtu1($name){
		$conn=connect();
		$query = "SELECT*FROM SANPHAM WHERE TenSanPham LIKE '%$name%' ORDER BY MaSanPham DESC LIMIT 0,1 ";
		return mysqli_query($conn,$query);
	}

	function sptuongtu2($name){
		$conn=connect();
		$query = "SELECT*FROM SANPHAM WHERE TenSanPham LIKE '%$name%' ORDER BY MaSanPham DESC LIMIT 1,1 ";
		return mysqli_query($conn,$query);
	}
?>
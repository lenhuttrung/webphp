<?php
	function DSloaisanpham(){
		$conn = connect();
		$query = "SELECT*FROM LOAISANPHAM WHERE HIDE = 1 ORDER BY MaLoaiSanPham DESC";
		return mysqli_query($conn,$query);
	}

	function loaisanphambyid($id){
		$conn = connect();
		$query = "SELECT * FROM LOAISANPHAM WHERE MaLoaiSanPham = $id";
		return mysqli_query($conn,$query);
	}

	function DSsanpham(){
		$conn = connect();
		$query = "SELECT MaSanPham,TenSanPham,Gia,SoLuong,a.hide, a.maloaisanpham,tenloaisanpham,IMG1,IMG2,IMG3,IMG4 FROM SANPHAM a, loaisanpham b WHERE a.MaLoaiSanPham=b.MaLoaiSanPham and a.HIDE = 1 ORDER BY MaSanPham DESC";
		return mysqli_query($conn,$query);
	}

	function sanphambyid($id){
		$conn = connect();
		$query = "SELECT * FROM SANPHAM WHERE MaSanPham = $id";
		return mysqli_query($conn,$query);
	}	

	function Chitietsanpham($id){
		$conn = connect();
		$query = "SELECT MaSanPham,TenSanPham,Gia,khuyenmai,a.Mota,Size,Mau,a.Meta,a.NgayTao,a.NgayCapNhat,SoLuong, a.MaLoaiSanPham,TenLoaiSanPham,IMG1,IMG2,IMG3,IMG4 FROM SANPHAM a, LoaiSanPham b WHERE a.MaLoaiSanPham=b.MaLoaiSanPham AND MaSanPham=$id  ORDER BY MaSanPham DESC";
		return mysqli_query($conn,$query);
	}

	function DShoadon(){
		$conn = connect();
		$query = "SELECT mahoadon,a.makhachhang,tenkhachhang,ngaymua,tongcong,ship,status,hide from hoadon a,khachhang b where a.makhachhang=b.makhachhang ORDER BY mahoadon DESC";
		return mysqli_query($conn,$query);
	}

	function hoadonbyid($id){
		$conn = connect();
		$query = "SELECT mahoadon,a.makhachhang,tenkhachhang,ngaymua,tongcong,ship,status,hide from hoadon a,khachhang b where a.makhachhang=b.makhachhang and mahoadon=$id";
		return mysqli_query($conn,$query);
	
	}

	function DSlienhe(){
		$conn = connect();
		$query = "SELECT * FROM LienHe Where hide =1 order by malienhe desc";
		return mysqli_query($conn,$query);
	}

	function lienhebyid($id){
		$conn = connect();
		$query = "SELECT * FROM LIENHE WHERE MaLienHe = $id";
		return mysqli_query($conn,$query);
	
	}

	function DSnews(){
		$conn = connect();
		$query = "SELECT * FROM news Where hide = 1 order by matin desc";
		return mysqli_query($conn,$query);
	}

	function newsbyid($id){
		$conn = connect();
		$query = "SELECT * FROM news WHERE MaTin = $id";
		return mysqli_query($conn,$query);
	
	}

	function chitiethoadon($idhd){
		$conn = connect();
		$query = "SELECT a.mahoadon as mahoadon,a.MaKhachHang, TenKhachHang, DiaChi,Email,DienThoai,b.MaSanPham,TenSanPham,d.Gia,b.SoLuong,a.NgayTao,d.SoLuong as SoLuongCon,b.Gia as GiaChiTiet FROM hoadon A, chitiethoadon b, khachhang c, sanpham d  WHERE a.MaKhachHang=c.MaKhachHang and a.MaHoaDon=b.MaHoaDon and b.MaSanPham = d.MaSanPham and a.MaHoaDon = $idhd";
		return mysqli_query($conn,$query);
	}
?>
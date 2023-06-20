<?php
$conn = mysqli_connect("localhost", "root", "", "db_masjid");
if (!$conn) {
    die('Gagal terhubung ke database: ' . mysqli_connect_error());
}

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $wadah = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $wadah[] = $row;
    }
    return $wadah;
}

function tambah($data)
{
    global $conn;

    $nama_donatur = htmlspecialchars($data["nama_donatur"]);
    $paket = htmlspecialchars($data["paket"]);
    $kategori = htmlspecialchars($data["kategori"]);
    $nominal = htmlspecialchars($data["nominal"]);
    $metode = htmlspecialchars($data["metode"]);
    $gambar = upload();
	if( !$gambar ) {
		return false;

	}

    $query = "INSERT INTO db_donatur
              VALUES ('', '$nama_donatur', '$paket', '$kategori', '$nominal', '$metode', '$gambar')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload() {

	$namaFile = $_FILES['gambar']['name'];
	$ukuranFile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];

	if( $error === 4 ) {
		echo "<script>
				alert('pilih gambar terlebih dahulu!');
                document.location.href= 'tambah.php';
			  </script>";
		return false;
	}


	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
		echo "<script>
				alert('yang anda upload bukan gambar!');
                document.location.href= 'tambah.php';
			  </script>";
		return false;
	}

	if( $ukuranFile > 2000000 ) {
		echo "<script>
				alert('ukuran gambar terlalu besar!');
                document.location.href= 'tambah.php';
			  </script>";
		return false;
	}

	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;

	move_uploaded_file($tmpName, 'assets/bukti-donatur/' . $namaFileBaru);

	return $namaFileBaru;
}

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM db_donatur WHERE id = $id");
    return mysqli_affected_rows($conn);
}

?>

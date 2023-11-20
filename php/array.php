<?php
$array = array(
    array(
        "nama" => "Pelita",
		"kelas" => "Laravel",
		"alamat" => "Bandung",
		"tanggal_lahir" => "1997-12-27",
		"nilai" => 90
    ),
    array(
        "nama" => "Najmina",
		"kelas" => "Vue JS",
		"alamat" => "Jakarta",
		"tanggal_lahir" => "1998-10-07",
		"nilai" => 55
    ),
    array(
        "nama" => "Anita",
		"kelas" => "Design",
		"alamat" => "Semarang",
		"tanggal_lahir" => "1999-08-20",
		"nilai" => 80
    ), 
    array(
        "nama" => "Bayu",
		"kelas" => "Digital Marketing",
		"alamat" => "Bandung",
		"tanggal_lahir" => "1990-01-01",
		"nilai" => 65
    ),
    array(
        "nama" => "Nasa",
		"kelas" => "UI/UX Designer",
		"alamat" => "Bandung",
		"tanggal_lahir" => "1995-04-10",
		"nilai" => 70
    ), 
    array(
        "nama" => "Rahma",
		"kelas" => "Node JS",
		"alamat" => "Yogyakarta",
		"tanggal_lahir" => "1993-09-15",
		"nilai" => 85
    )
    );

foreach($array as $profile) {
    echo "Nama : " .$profile['nama']."<br>";
    echo "Kelas : " .$profile['kelas']."<br>";
    echo "Alamat : " .$profile['alamat']."<br>";
    echo "Tanggal lahir : " .$profile['tanggal_lahir']."<br>";
    echo "Nilai : " .$profile['nilai']."<br><br>";
}
?>
<?php
// memanggil library FPDF
require('.\fpdf186\fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A5');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string 
$pdf->Cell(190,7,'INSTITUT TEKNOLOGI SEPULUH NOPEMBER',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'DAFTAR MAHASISWA TEKNIK INFORMATIKA',0,1,'C');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(20,6,'NIM',1,0);
$pdf->Cell(85,6,'NAMA MAHASISWA',1,0);
$pdf->Cell(27,6,'Jenis Kelamin',1,0);
$pdf->Cell(25,6,'NO H',1,1);

$pdf->SetFont('Arial','',10);

include 'koneksi.php';
$mahasiswa = $pdo->prepare("select * from siswa");
$mahasiswa->execute();
while ($row = $mahasiswa->fetch()){
    $pdf->Cell(20,6,$row['nis'],1,0);
    $pdf->Cell(85,6,$row['nama'],1,0);
    $pdf->Cell(27,6,$row['jenis_kelamin'],1,0);
    $pdf->Cell(25,6,$row['telp'],1,1); 
}

$pdf->Output();
?>
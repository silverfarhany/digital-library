<?php
session_start();
ob_start();
require_once('konekdb.php');
require_once('vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Style\Border;


$template = IOFactory::load('assets/template_peminjaman.xlsx');

$template->getProperties()
->setCreator('Admin')
->setLastModifiedBy('Admin')
->setTitle('Laporan Peminjaman');

$styleBorder = [
    'borders' => [
        'allBorders' => [
            'borderStyle' =>  \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN
        ]
    ]
];

$styleHeader = [

    'font' => [

        'bold' => true,

        'color' => ['argb' => 'ffffff'],

    ],

    'alignment' => [

        'center' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,

    ],

    'fill' => [

        'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,

        'rotation' => 90,

        'startColor' => [

            'argb' => '538dd5',

        ],

    ],

];

$template->getActiveSheet()->getColumnDimension('A')->setAutoSize(true); // column dimension only accept one column as argument
$template->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
$template->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
$template->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
$template->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
$template->getActiveSheet()->getColumnDimension('F')->setAutoSize(true);
$template->getActiveSheet()->getStyle('A1:F1')->applyFromArray($styleHeader);


$query = "SELECT * FROM data_pinjaman,data_user,data_ebook WHERE data_pinjaman.id_user=data_user.id_user 
and data_pinjaman.id_ebook=data_ebook.id_ebook";
$result = $conn->query($query);
$baris=2;
while($row = $result->fetch_assoc()){
    $template->setActiveSheetIndex(0)

    ->setCellValue("A{$baris}", "{$row['nama']}")

    ->setCellValue("B{$baris}", $row['nis_nip'])

    ->setCellValue("C{$baris}", "{$row['judul']}")
    
    ->setCellValue("D{$baris}", $row["kategori_buku"]==1?"Buku Paket": ($row["kategori_buku"]==2?"Buku Fiksi":"Karya Ilmiah") )

    ->setCellValue("E{$baris}", $row['start_pinjam'])

    ->setCellValue("F{$baris}", $row['end_pinjam']);

    $template->getActiveSheet()->getStyle("A{$baris}:F{$baris}")->applyFromArray($styleBorder);
    $baris++;

   
}

$writer = IOFactory::createWriter($template, 'Xlsx');

ob_end_clean(); //

header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');

header("Content-Disposition: attachment; filename=Laporan_peminjaman.xlsx");

$writer ->save('php://output');

die();



?>
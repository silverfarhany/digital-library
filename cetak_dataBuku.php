<?php
session_start();
ob_start();
require_once('konekdb.php');
require_once('vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Style\Border;


$template = IOFactory::load('assets/template.xlsx');

$template->getProperties()
->setCreator('Admin')
->setLastModifiedBy('Admin')
->setTitle('Laporan Data Ebook');

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
$template->getActiveSheet()->getStyle('A1:E1')->applyFromArray($styleHeader);


$query = "SELECT * from data_ebook";
$result = $conn->query($query);
$baris=2;
while($row = $result->fetch_assoc()){
    $template->setActiveSheetIndex(0)

    ->setCellValue("A{$baris}", "{$row['judul']}")

    ->setCellValue("B{$baris}", $row['penerbit'] == '' ? '-' : "{$row['penerbit']}")

    ->setCellValue("C{$baris}",  $row['penerbit'] == '' ? '-' : "{$row['lisensi']}")

    ->setCellValue("D{$baris}", "{$row['file']}")

    ->setCellValue("E{$baris}", $row["kategori_buku"]==1?"Buku Paket": ($row["kategori_buku"]==2?"Buku Fiksi":"Karya Ilmiah") );  

    $template->getActiveSheet()->getStyle("A{$baris}:E{$baris}")->applyFromArray($styleBorder);
    $baris++;

   
}

$writer = IOFactory::createWriter($template, 'Xlsx');

            ob_end_clean(); //

            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');

            header("Content-Disposition: attachment; filename=Laporan_dataEbook.xlsx");

            $writer ->save('php://output');

die();
?>
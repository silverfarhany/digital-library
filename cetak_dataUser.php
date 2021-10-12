<?php
session_start();
ob_start();
require_once('konekdb.php');
require_once('vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Style\Border;


$template = IOFactory::load('assets/template_user.xlsx');

$template->getProperties()
->setCreator('Admin')
->setLastModifiedBy('Admin')
->setTitle('Laporan Data User');

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


$query = "SELECT * from data_user";
$result = $conn->query($query);
$baris=2;
while($row = $result->fetch_assoc()){
    $template->setActiveSheetIndex(0)

    ->setCellValue("A{$baris}", "{$row['id_user']}")

    ->setCellValue("B{$baris}", $row['nama'])

    ->setCellValue("C{$baris}",  $row['email'])

    ->setCellValue("D{$baris}", $row['username'])

    ->setCellValue("E{$baris}", $row["who"]==1?"Admin": ($row["who"]==2?"User":"Super Admin") );  

    $template->getActiveSheet()->getStyle("A{$baris}:E{$baris}")->applyFromArray($styleBorder);
    $baris++;

   
}

$writer = IOFactory::createWriter($template, 'Xlsx');

            ob_end_clean(); //

            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');

            header("Content-Disposition: attachment; filename=Laporan_dataUser.xlsx");

            $writer ->save('php://output');

die();
?>
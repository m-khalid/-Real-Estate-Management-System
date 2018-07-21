<?php

    require ('fpdf.php');
  $db = new PDO('mysql:host=localhost;dbname=lacasa','root','');

    class Mypdf extends FPDF{
        function header(){
            $this->Image('lacasaLogo.png',10,8,33,20);
            $this->SetFont('Arial','B',14); 
            $this->Cell(276,5,'La casa',0,0,'C');
            $this->Ln();
            $this->SetFont('Times','',12);
            $this->Cell(276,10,'Selling Report',0,0,'C');
            $this->Ln();
        }
        function footer(){
            $this->SetY(-15);
            $this->SetFont('Arial','',8);
            $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
        }
        function headerTable(){
            $this->SetFont('Times','B',12);
            $this->Cell(60,10,'Price',1,0,'C');
            $this->Cell(50,10,'Type',1,0,'C');
            $this->Cell(80,10,'Payment Way',1,0,'C');
            $this->Cell(70,10,'Date',1,0,'C');
            $this->Ln();
        }
        function viewTable($db){
            $this->SetFont('Times','',12);
            $stmt = $db->query("select * from `selling` WHERE (`sale status`='1')");
            while($data = $stmt->fetch(PDO::FETCH_OBJ)){
                $this->Cell(60,10,$data->price,1,0,'L');
                $this->Cell(50,10,$data->type,1,0,'L');
                $this->Cell(80,10,$data->payment,1,0,'L');
                $this->Cell(70,10,$data->date,1,0,'L');
                $this->Ln();
            }
        }
    }
    $pdf = new Mypdf();
    $pdf -> AliasNbPages();
    $pdf -> AddPage('L','A4',0);
   $pdf -> headerTable();
    $pdf -> viewTable($db);
    
    $pdf -> output();

?>
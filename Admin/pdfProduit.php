<?php
   
    require("fpdf/fpdf.php");
    $db=new PDO("mysql:host=localhost;dbname=ecolayer", "root", "");
   session_start();
    class myPDF extends FPDF
    {
   
    function header()
    {
    $this->SetFont("Arial","B",14);
            $this->Cell(10,10,"Produits",'C');
            $this->Ln(20);
            $this->Cell(5,5,"liste des Produits:",'C');
            $this->ln();
    }
    function headertable()
    {
    $this->SetFont('Times','B',12);
    $this->Cell(40,20,'Nom',1,0,'C');
    $this->Cell(40,20,'Categorie',1,0,'C');
    $this->Cell(40,20,'Prix',1,0,'C');
    $this->Cell(40,20,'Image',1,0,'C');
    $this->Cell(40,20,'Information ',1,0,'C');
    $this->ln();
    }
    function viewsTable($db)
    {

    $this->SetFont('times','',12);    
    
    $stmt = $db->query("SELECT p.nom,c.nom as nomC,p.prix,p.image,p.informations FROM produit p ,categorie c  WHERE c.id=p.id_categorie");
        while($data = $stmt->fetch(PDO::FETCH_OBJ))
            {
       $this->Cell(40,20,$data->nom,1,0,'C');
       $this->Cell(40,20,$data->nomC,1,0,'L');
       $this->Cell(40,20,$data->prix,1,0,'L');
       $this->Cell(40,20, $this->Image($data->image, $this->GetX(), $this->GetY(), 33.78), 0, 0, 'L', false );
       $this->Cell(40,20,$data->informations,1,0,'L');
       $this->ln();
            }

    }
    }
    $pdf=new myPDF();
//    $pdf->Cell(95,50,$pdf->MemImage(base64_decode($logo), 100, 50),1,0, 'C');
    $pdf->AliasNbPages();
    $pdf->AddPage('L','A4',0);
    $pdf->headertable();
    $pdf->viewsTable($db);
    $pdf->output("Achats.pdf", "D");


?>
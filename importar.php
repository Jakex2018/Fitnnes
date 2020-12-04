<?php
     include "conexion.php";
     include "class.upload.php";

if(isset($_FILES["name"])){
  $up = new Upload($_FILES["name"]);
  if($up->uploaded){
    $up->Process("./uploads/");
    if($up->processed){
            /// leer el archivo excel
            require_once 'Classes/PHPExcel.php';
            $archivo = "uploads/".$up->file_dst_name;
            $inputFileType = PHPExcel_IOFactory::identify($archivo);
            $objReader = PHPExcel_IOFactory::createReader($inputFileType);
            $objPHPExcel = $objReader->load($archivo);
            $sheet = $objPHPExcel->getSheet(0); 
            $highestRow = $sheet->getHighestRow(); 
            $highestColumn = $sheet->getHighestColumn();
            for ($row = 2; $row <= $highestRow; $row++){ 
                $cuen_1n = $sheet->getCell("A".$row)->getValue();
                $cuen_2n = $sheet->getCell("B".$row)->getValue();
                $cuen_1a = $sheet->getCell("C".$row)->getValue();
                $cuen_2a = $sheet->getCell("D".$row)->getValue();
                $cuen_cr = $sheet->getCell("E".$row)->getValue();
                $cuen_co = $sheet->getCell("F".$row)->getValue();
                error_reporting(0);
                $hash= password_hash($cuen_co, PASSWORD_DEFAULT,['name']);
                $sql = "INSERT INTO ta_cuen (cuen_1n,cuen_2n,cuen_1a,cuen_2a,cuen_cr, cuen_co) VALUES('$cuen_1n','$cuen_2n','$cuen_1a','$cuen_2a','$cuen_cr','$hash') ";
               
               $conexion->query($sql);
            }
      unlink($archivo);
        } 

}
}
echo "<script>
window.location = './migracion.php';
</script>
";
  ?>
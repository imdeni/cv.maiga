
<?php
require('DegreesReader.php');
if(isset($_POST['Submit']))
{
    $mimes = array('application/vnd.ms-excel','text/xls','text/xlsx','application/vnd.oasis.opendocument.spreadsheet','application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    if(in_array($_FILES["file"]["type"],$mimes))
    {
        $uploadFilePath = 'uploads/'.basename($_FILES['file']['name']);

		move_uploaded_file($_FILES['file']['tmp_name'], $uploadFilePath);
        $Reader = new DegreesReader($uploadFilePath,true);
        if($Reader->saveToDB()){

             echo "<script>alert('berhasil di upload!!');
        window.location.href='Guru/input';
        </script>";
        }
        }
        else
        {
             echo "<script>alert('Maaf, File type hanya excel file.!!');
        window.location.href='Guru/input';
        </script>";
            
}
}
?>
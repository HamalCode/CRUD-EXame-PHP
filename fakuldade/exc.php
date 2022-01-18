<?php
include '../config/db.php';
if (isset($_POST["sobre"])) {
    $Id  = $_POST["txtId"];
    $Nrn = $_POST["txtNrn"];
    $Obs = $_POST["txtObs"];

    $Qui =$con->prepare("INSERT INTO t_uts_1720261153
        SET Id_fakuldade  = :Id,
            Nrn_fakuldade = :Nrn,
            Obs_fakuldade = :Obs
        
            ");
    $Qui->execute(array('Id'=>$Id,
                        'Nrn'=>$Nrn,
                        'Obs'=>$Obs
                       
                        )
                );

    if (!empty($_FILES["txtFoto"]["tmp_name"])) { 
        $fatin_up      = $_FILES["txtFoto"]["tmp_name"];
        $nrn_file      = $_FILES["txtFoto"]["name"];
        $extensi_foto  = pathinfo($nrn_file,PATHINFO_EXTENSION);
        $fatin_rai     = "../image/$Id.$extensi_foto";
        move_uploaded_file($fatin_up,$fatin_rai);

    $Qup=$con->prepare("UPDATE t_uts_1720261153
    SET Logotipu = :img
    WHERE Id_fakuldade = :ifk");
    $Qup->execute(array('img'=>"$Id.$extensi_foto",'ifk'=>$Id));
    }
}

?>
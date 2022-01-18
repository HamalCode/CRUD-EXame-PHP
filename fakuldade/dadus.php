<div class="alert alert-info bg-info text-white" role="alert">
      <i class="fa fa-database"></i> <b>DADUS FAKULDADE</b>
    </div>
<table class="table table-striped table-hover">
  <thead class="thead-dark">
	  <tr>
		  <th>NO</th> 
		  <th>ID FAKULDADE</th> 
		  <th>NARAN FAKULDADE</th>
		  <th>LOGO TIPU</th>
		  <th>OBS FAKULDADE</th>
	  </tr>
  </thead>
  <tbody>
   
  <?php
  

  include("../config/db.php");
  $Qfk=$con->query("SELECT * FROM t_uts_1720261153");
  while($Dfk=$Qfk->fetch(PDO::FETCH_LAZY)) {
    echo "
    
    <tr>
       <td>1</td>
        <td>$Dfk->Id_fakuldade</td>
        <td>$Dfk->Nrn_fakuldade</td>
        <td><img src='image/$Dfk->Logotipu'
        class='img-fluid img-thumbnail' width ='110'></td>
        <td>$Dfk->Obs_fakuldade</td>

        </tr>
       
    ";
  }
?>
   </tr>
   </tbody>








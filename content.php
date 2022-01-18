<!DOCTYPE html>
<html>
<head>
  <title>content dadus</title>
  <link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">
</head>
<body>
     <div class="container border mt-3 p-2">
	 <button class="btn btn-success aumenta bg-sucess" data-target="#mmodal"
	  data-toggle="modal" data-backdrop="static"><i class="fa fa-plus fa-sm"></i> Aumenta Dados</button>
	  <!--fatin dadus-->
	 <div class="col-md-12 border mt-2 fatin-dadus">
	 </div>
	 
	 <!--form dadus-->
	 <div class="modal fade" id="mmodal">
	     <div class="modal-dialog modal-lg">
		    <div class="modal-content bg-secondary text-white">
		    	<form id="mform">
			<div class="modal-header bg-warning">
			<h4 class="modaltitle text-white">Form Aumenta Dadus Fakuldade</h4>
			<button class="close"data-dismiss="modal">&times</button>
			</div>
			<div class="modal-body fatin-form">
			</div>
			<div class="modal-footer justify-content-between bg-info">
			<button type="reset"class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fa fa-close"></i> Sai</button>
			<button type="submit"class="btn btn-success btn-sm"><i class="fa fa-save"></i> rai dadus</button>
			</div>
		</form>
			</div>
			</div>
			</div>
			</div><!--termina form-->
			
	 </div>
</body>
<script type="text/javascript" src="Jquery/jquery-3.5.1.js"></script>
<script type="text/javascript" src="Bootstrap/js/bootstrap.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
	// kria function ba loadadus
    function loadadus(){
		var urld="fakuldade/dadus.php";
		$.post(urld,{sobre : 'foti-dadus'}, function(dadus){
		$(".fatin-dadus").html(dadus);
		});
	}
	loadadus();

    $(".aumenta").click(function(){
    	var urlf = "fakuldade/form.php";
    	$.post(urlf, {sobre :'foun'},function(dform){
    		$(".fatin-form").html(dform);
    	});
    });
    $("#mform").submit(function(frm){
    	frm.preventDefault();
    	var urlm ="fakuldade/exc.php";
    	var dadus = new FormData(this);
    	$.ajax({
    		type		:"POST",
    		url 		: urlm,
    		data 		: dadus,
    		mimeType	:"multipart/form-data",
    		cashe		: false,
    		contentType	: false,
    		processData	: false,
    		success		: function(rez){
    			
    			loadadus();
    		}
    	});
    });
 });
</script>
</html>
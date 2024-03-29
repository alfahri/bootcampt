<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Bootstrap Modal with Dynamic MySQL Data using Ajax & PHP</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
 
<div class="container">
<div class="page-header">
<h3>
<a href="https://www.blogger.com/blogger.g?blogID=6370094104405505777#">Modal with Dynamic Mysql Data using AJAX & PHP</a></h3>
</div>
<div class="row">
<div class="col-lg-12">
<?php 
                    $dbhost = 'localhost';
                    $dbuser = 'root';
                    $dbpass = '';
                    $dbname = 'crud_no_load';
 
 
                    $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
 
                    if($conn->connect_error){
                        die('Connection Error :'.$conn->connect_error);
                    }
                    $sql = "SELECT * FROM username";
                    $data = $conn->query($sql);
                    while($row = $data->fetch_array()){
 
                     ?>
                      
                     <?php
                    }
                    ?>
                     
                 
 
<table class="table table-striped table-bordered">
<thead>
        <tr>
    <th id="">Full Name</th>
    <th>View Profile</th>
    </tr>
</thead>
<tbody>
        <tr>
    <td></td>
    <td><button class="btn btn-sm btn-info" data-id="<?php echo $row['id'];?>" data-target="#view-modal" data-toggle="modal" id="getUser"><i class="glyphicon glyphicon-eye-open"></i>View</button>
        </td>
    </tr>
</tbody>
</table>
</div>
</div>
<div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="view-modal" role="dialog" style="display: :none;" tabindex="-1">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button aria-hidden="true" class="close" data-dismiss="modal" type="button">x</button>
                     
 
<h4 class="modal-title">
                        <i class="glyphicon glyphicon-user"></i> User Profile
                    </h4>
</div>
<div class="modal-body">
<div id="modal-loader" style="display: none; text-align: center;">
<img src="http://1.bp.blogspot.com/-Qg5bi1ZtDdM/VZ5nHAyYBqI/AAAAAAAAChE/exGnasO4oyk/s640/arlinadesign.gif" original="">
                    </div>
<!--Content will be loaded here-->
                     
 
<div id="dynamic-content">
<!-- Kalo Data Type JSON-->
                       
 
<div class="row">
<div class="col-md-12">
<div class="table-responsive">
<table class="table table-striped table-bordered">
     <tbody>
        <tr>
          <th>First Name</th>
          <td id="txt_fname"></td>
        </tr>
        <tr>
          <th>Last Name</th>
          <td id="txt_lname"></td>
        </tr>
        <tr>
          <th>Email ID</th>
          <td id="txt_email"></td>
        </tr>
        <tr>
          <th>Position</th>
          <td id="txt_position"></td>
        </tr>
</tbody>
</table>
</div>
</div>
</div>
<!--End Tabel Data Type JSON-->
 
                    </div>
</div>
<div class="modal-footer">
<button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
                </div>
</div>
</div>
</div>
</div>
<script src="jquery/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
 
<script type="text/javascript">
$(document).ready(function(){
	loadData();
    $(document).on('click','#getUser', function(e){
        e.preventDefault();
        var uid = $(this).data('id');
        $('#dynamic-content').hide();
 
        $.ajax({
            type:'POST',
            url:'submit2.php',
            data:{id:uid},
            dataType:'json'
        }).done(function(data){
            console.log(data);
            $('#dynamic-content').show(); // show dynamic div
            $('#txt_fname').html(data.username);
            $('#txt_lname').html(data.negara);
        }).fail(function(){
 
            $('.modal-body').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
        });
    });

    function loadData(){
    	$.get('data.php', function(data){
    		$('#content').html(data)
    	})
    }
});
</script>
</body>
</html>
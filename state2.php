<?php
include 'db.php';

if(!isset($_POST['id'])) exit;
$uid = $_POST['id'];
?>
 
 
<script language="JavaScript" type="text/javascript" src="jquery.js"></script>
<script>
$(function(){

$(".state").change(function(e){e.preventDefault();
var t=this,id=$(t).val();//alert($(t).val());
$.ajax({type:"POST",url:"state3.php",data:{id:id},cache:"false",
success:function(data){


$("#dist").show().html(data);
},error:function(data){
}});
});

});
</script>
<select  class="state" ><option  disabled="disabled"  selected="selected">State</option>
<?php
$query = mysqli_query($db,"select * from   state where cid=".$uid." ");
if(mysqli_num_rows($query))
{
	while($row = mysqli_fetch_array($query))
		echo '<option value="'.$row['sid'].'" >'.$row['sname'].'</option>';
}
?></select>
 
 
 
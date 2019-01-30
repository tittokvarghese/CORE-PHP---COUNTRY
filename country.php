<?php
include 'db.php';

?>

<script language="JavaScript" type="text/javascript" src="jquery.js"></script>
<script>
$(function(){



$(".country").change(function(e){e.preventDefault();
var t=this,id=$(t).val();//alert($(t).val());
$.ajax({type:"POST",url:"state2.php",data:{id:id},cache:"false",
success:function(data){
//alert(data);
$("#state").show().html(data);
$("#dist").hide();
},error:function(data){
}});
});

$(".state").change(function(e){e.preventDefault();
var t=this,id=$(t).val();//alert($(t).val());
$.ajax({type:"POST",url:"state3.php",data:{id:id},cache:"false",
success:function(data){
//alert(data);
$("#dist").show().html(data);
},error:function(data){
}});
});


});
</script>





<select  class="country">
<option disabled="disabled"  selected="selected">Country</option>
<?php
$query = mysqli_query($db,"select * from  country ");
if(mysqli_num_rows($query))
{
	while($row = mysqli_fetch_array($query))
		echo '<option value="'.$row['cid'].'">'.$row['cname'].'</option>';
}
?>
</select>



<span id="state"></span>
<span id="dist"></span>







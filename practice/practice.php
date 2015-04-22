<html>
<head>
<?php include 'data.php'?>
<style>
.container{
  position: absolute; /* or absolute */
  top: 50%;
  left: 50%;
}
</style>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<body class="container">
<select class="provincia">
    <?php foreach ($provincias as $prov):?>
      <option><?php echo $prov->getName()?></option>
    <?php endforeach?>
</select>
<script>
   $(".provincia").change(function(){
     if($(".ciudad").length === 0) {
       var ciudad = $("<select></select>").addClass('ciudad');
       $("body").append(ciudad);
     }
     $.ajax({
       url: 'cities.php',
       data: {'provincia':$(".provincia").val() },
       type: 'GET',
       beforeSend: function(){

       },
         success: function(data){
           $(".ciudad").html('');
          for(var i = 0; i < data.length; i++ ) {
            $('.ciudad').append($('<option></option>').text(data[i]));
          }
       },
       error: function(error){
          $('body').append('<div>'+ error +'</div>');
       },
      complete: function(status){
         
      }
     });
   });

   $(".container").on('change', '.ciudad',function(){
     $(".container .ciudad");
     alert($(this).val());
   });
</script>
</body>
</html>











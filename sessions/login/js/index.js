$(function(){
    algo = '';
    $("#name").keyup(function() {
      var inputName = $("#name");
      var nameLength = inputName.val().length;

      if (nameLength >= 13) {
         inputName.css('background-color', '#FFFAAA');
      } else {
         inputName.css('background-color', '#FFFFFF');
      }
    });
    
    $("#name").blur(function(){
        var nameLength = $("#name").val().length;
        if (nameLength == 0) {     
         $("#name").css('background-color', '#FFFAAA');
        }
    });
});

$(function(){
    var name = $("#name");
    name.keyup(function() {
        var $this = $(this);
      var nameLength = $this.val().length;

      if (nameLength >= 13) {
         this.css('background-color', '#FFFAAA');
      } else {
         this.css('background-color', '#FFFFFF');
      }
    });
    
    name.blur(function(){
        var $this = $(this);
        var nameLength = $this.val().length;
        if (nameLength == 0) {     
         $this.css('background-color', '#FFFAAA');
        }
    });
});

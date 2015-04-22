$(function(){
    $.ajax({
        url: "http://www.google.com/search",
        data: {'q': 'memes'},
        success: function(resp){
            console.log(resp);
        }
    });
});


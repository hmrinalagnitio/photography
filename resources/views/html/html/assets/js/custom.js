// Input on focus remove placeholder
$('input,textarea').focus(function() {
    $(this).removeAttr('placeholder');
});

$('.toggle-menu').click(function() {
    $('.page-header .nav-primary').slideToggle();
    $(this).toggleClass('close-menu');
});


$(document).ready(function(){
    $(".apply4job").on("click",function(){
        var $this = $(this);
        $this.next().slideToggle();
        if($this.text() === "Upload Image"){
            $this.text("Close");
        }else{
          $this.text("Upload Image");
        }
    })
});




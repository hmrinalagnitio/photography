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

const togglePassword = document.querySelector("#togglePassword");

togglePassword.addEventListener("click", function () {
    // toggle the type attribute
    const type = password.getAttribute("type") === "password" ? "text" : "password";
    password.setAttribute("type", type);
    
});

const togglePassword1 = document.querySelector("#togglePassword1");

togglePassword1.addEventListener("click", function () {
    // toggle the type attribute
    const type = password1.getAttribute("type") === "password" ? "text" : "password";
    password1.setAttribute("type", type);
    
});


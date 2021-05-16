
$("document").ready(function(){
    $("#no-account").click(()=>{
        console.log("changed");
        $(".nav-link").toggleClass("active");
        $(".loginout__form").toggleClass("active");
    });
});
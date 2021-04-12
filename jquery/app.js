console.log($("h1").css("font-size"));

$("#first-id" ).css( "color", "red");

$(".first-class" ).css( {
     "background-color": "yellow", 
     "border": "5px solid blue"
});

let style = {
    "background-color": "yellow",
    border: "5px solid red"
    }
    $("span" ).css(style);

    //$(".first-class" ).text(); // returns "DIV1“
    $(".first-class" ).text("Changed div text");

    console.log($(".for-methods").html());

    $(".for-methods").append("<p>This a great narration of how Lagos works</p>");
    $(".for-methods").prepend("<p> This a great narration of how Lagos works</p>");
    $("<h1> This a great innovation</h1>").insertBefore(".for-methods");
    
// $(".for-methods").html("<h2> Traffic jam in Lagos</h2>")

console.log($("a").attr("href")); 

$("a").attr({
     href: "https://google.com",
     target: "_blank"
     });


     console.log($("#course").val());

     $("h2").addClass("class-red");
     $("h1").removeClass("class-yellow");
     $("h1").toggleClass("class-yellow");

     // $("h1").click( function(){
     //      console.log("H1 clicked");
     // });
     
     // $("h1").click( function(){
     //      $(this).css("color", "red");
     // });

     $("h1").on("click", function(){
          console.log("H1 clicked");
     });
          
     $("h1").on("click", function(){
          $(this).css("color", "red");
     });
          
     $("input").on("keypress", function(e){
          console.log(e.which);
     });

     console.log(event);
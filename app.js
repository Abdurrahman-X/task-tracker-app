const setDate = document.querySelector('.date');
const setTime = document.querySelector('.time');
const setGreeting = document.querySelector('.greetings');


function currentDate() {
    const now = new Date();
    const hours = now.getHours();
    let timeOfDay;
  
    //Deterrmine what hour of day and apply appropriate greeting
    if(hours < 12) {
      timeOfDay = "Good morning. Have a lovely day ahead";
    } else if (hours >= 12 && hours < 17) {
      timeOfDay = "Good afternoon. How is your day going?";
    } else {
      timeOfDay = "Good evening. Hope you had a great day at work";
    }
  
    const optionsDate = {
      year: 'numeric', month: 'long', weekday: 'long', day: 'numeric'
    };
    const optionsTime = {
      hour: 'numeric', minute: 'numeric', second: 'numeric', hour12: true
    };
    const datePart = new Intl.DateTimeFormat('en-US', optionsDate).format(now);
    const timePart = new Intl.DateTimeFormat('en-US', optionsTime).format(now);

    setDate.textContent = datePart;
    setTime.textContent = timePart;
    setGreeting.textContent = timeOfDay;
  }
  
  setInterval(currentDate, 1000);
  
  currentDate();

 

  
//   let today = new Date();

// //   const now = new Date();
// // const options = { weekday: 'short', year: 'numeric', month: 'long', day:
// // 'numeric' };
// // console.log(now.toLocaleDateString([], options));
// // console.log(now.toLocaleDateString([], options));


// let [month, date, year] = new Date().toLocaleDateString("en-US").split("/")
// let [hour, minute, second, ampm] = new Date().toLocaleTimeString("en-US").split(/:| /)

// console.log(minute);

// const now = new Date();
// const optionsDate = { year: 'numeric', month: 'long', weekday: 'long', day:
// 'numeric' };
// const currDate = new Intl.DateTimeFormat('en-US', optionsDate).format(now);
// console.log(currDate);


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
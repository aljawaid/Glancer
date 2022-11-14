// KANBOARD PLUGIN ASSET FILE


$(document).ready(function() {
    // Click event for any anchor tag that's href starts with #
    $('a[href^="#"]').click(function(event) {

        // The id of the section we want to go to.
        var id = $(this).attr("href");

        // An offset to push the content down from the top. Lower the value to push down
        var offset = 100;

        // Our scroll target : the top position of the
        // section that has the id referenced by our href.
        var target = $(id).offset().top - offset;

        // The magic...smooth scrollin' goodness.
        $('html, body').animate({scrollTop:target}, 1000);

        //prevent the page from jumping down to our section.
        event.preventDefault();
    });
});

var now = new Date();
  var days = new Array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
  var months = new Array('January','February','March','April','May','June','July','August','September','October','November','December');
  var date = ((now.getDate()<10) ? "0" : "")+ now.getDate();
  function fourdigits(number) {
    return (number < 1000) ? number + 1900 : number;
  }
  today =  days[now.getDay()] + ", " + date + " "+ months[now.getMonth()] + " " + (fourdigits(now.getYear())) ;
  // document.write(today);
  document.getElementById('jsdate').innerHTML = today;

// TOGGLE DATES FOR PLUGIN LAST UPDATED
$(document).ready(function() {
    $(document).on("click",".event-date-toggle",function(){
        $('.exact-date').toggle();
        $('.relative-date').toggle();
    });
});

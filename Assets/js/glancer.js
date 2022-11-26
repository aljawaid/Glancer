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

// COPY TO CLIPBOARD SCRIPT - INSTANTIATE SCRIPT - /// HTML OUTPUT TO CLIPBOARD
$( document ).ready(function() {
    var clipboard = new ClipboardJS('.clipboard-html');

    // COPT TO CLIPBOARD SCRIPT - SUCCESS/ERROR STATES
    clipboard.on('success', function(e) {
        $(e.trigger).html("<strong>&#10004; Copied</strong>");
        console.info('Action:', e.action);
        console.info('Text:', e.text);
        console.info('Trigger:', e.trigger);
        e.clearSelection();
        setTimeout(function() {
            $(e.trigger).html("HTML");
        }, 3500);
    });
    clipboard.on('error', function(e) {
        $(e.trigger).html("<strong>&#10008; Not Copied</strong>");
        console.info('Action:', e.action);
        console.info('Text:', e.text);
        console.info('Trigger:', e.trigger);
        e.clearSelection();
        setTimeout(function() {
            $(e.trigger).html("HTML");
        }, 3500);
    });
});

// COPY TO CLIPBOARD SCRIPT - INSTANTIATE SCRIPT - /// MARKDOWN OUTPUT TO CLIPBOARD
$( document ).ready(function() {
    var clipboard = new ClipboardJS('.clipboard-md');

    // COPT TO CLIPBOARD SCRIPT - SUCCESS/ERROR STATES
    clipboard.on('success', function(e) {
        $(e.trigger).html("<strong>&#10004; Copied</strong>");
        console.info('Action:', e.action);
        console.info('Text:', e.text);
        console.info('Trigger:', e.trigger);
        e.clearSelection();
        setTimeout(function() {
            $(e.trigger).html("Markdown");
        }, 3500);
    });
    clipboard.on('error', function(e) {
        $(e.trigger).html("<strong>&#10008; Not Copied</strong>");
        console.info('Action:', e.action);
        console.info('Text:', e.text);
        console.info('Trigger:', e.trigger);
        e.clearSelection();
        setTimeout(function() {
            $(e.trigger).html("Markdown");
        }, 3500);
    });
});


// COPY TO CLIPBOARD SCRIPT - INSTANTIATE SCRIPT - /// FORMATTED OUTPUT TO CLIPBOARD
$( document ).ready(function() {
    var clipboard = new ClipboardJS('.clipboard-format');

    // COPT TO CLIPBOARD SCRIPT - SUCCESS/ERROR STATES
    clipboard.on('success', function(e) {
        $(e.trigger).html("<strong>&#10004; Copied</strong>");
        console.info('Action:', e.action);
        console.info('Text:', e.text);
        console.info('Trigger:', e.trigger);
        e.clearSelection();
        setTimeout(function() {
            $(e.trigger).text("Formatted");
        }, 3500);
    });
    clipboard.on('error', function(e) {
        $(e.trigger).html("<strong>&#10008; Not Copied</strong>");
        console.info('Action:', e.action);
        console.info('Text:', e.text);
        console.info('Trigger:', e.trigger);
        e.clearSelection();
        setTimeout(function() {
            $(e.trigger).html("Formatted");
        }, 3500);
    });
});

// COPY TO CLIPBOARD SCRIPT - INSTANTIATE SCRIPT - /// LINE (NO LINE BREAKS) OUTPUT TO CLIPBOARD
$( document ).ready(function() {
    var clipboard = new ClipboardJS('.clipboard-line');

    // COPT TO CLIPBOARD SCRIPT - SUCCESS/ERROR STATES
    clipboard.on('success', function(e) {
        $(e.trigger).html("<strong>&#10004; Copied</strong>");
        console.info('Action:', e.action);
        console.info('Text:', e.text);
        console.info('Trigger:', e.trigger);
        e.clearSelection();
        setTimeout(function() {
            $(e.trigger).text("Line");
        }, 3500);
    });
    clipboard.on('error', function(e) {
        $(e.trigger).html("<strong>&#10008; Not Copied</strong>");
        console.info('Action:', e.action);
        console.info('Text:', e.text);
        console.info('Trigger:', e.trigger);
        e.clearSelection();
        setTimeout(function() {
            $(e.trigger).html("Line");
        }, 3500);
    });
});

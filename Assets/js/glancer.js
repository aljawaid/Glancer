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

        // The magic...smooth scrolling goodness.
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

// COMMENTS
// COPY TO CLIPBOARD SCRIPT - INSTANTIATE SCRIPT - /// HTML OUTPUT TO CLIPBOARD
$( document ).ready(function() {
    var clipboard = new ClipboardJS('.clipboard-html');

    // COPY TO CLIPBOARD SCRIPT - SUCCESS/ERROR STATES
    clipboard.on('success', function(e) {
        $(e.trigger).html("<strong>&#10004;</strong>");
        console.info('Action:', e.action);
        console.info('Text:', e.text);
        console.info('Trigger:', e.trigger);
        e.clearSelection();
        setTimeout(function() {
            $(e.trigger).html("<svg xmlns='http://www.w3.org/2000/svg' width='19' height='19' fill='currentColor' class='bi bi-filetype-html' viewBox='0 0 16 16'><path fill-rule='evenodd' d='M14 4.5V11h-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5Zm-9.736 7.35v3.999h-.791v-1.714H1.79v1.714H1V11.85h.791v1.626h1.682V11.85h.79Zm2.251.662v3.337h-.794v-3.337H4.588v-.662h3.064v.662H6.515Zm2.176 3.337v-2.66h.038l.952 2.159h.516l.946-2.16h.038v2.661h.715V11.85h-.8l-1.14 2.596H9.93L8.79 11.85h-.805v3.999h.706Zm4.71-.674h1.696v.674H12.61V11.85h.79v3.325Z'/></svg>");
        }, 3500);
    });
    clipboard.on('error', function(e) {
        $(e.trigger).html("<strong>&#10008;</strong>");
        console.info('Action:', e.action);
        console.info('Text:', e.text);
        console.info('Trigger:', e.trigger);
        e.clearSelection();
        setTimeout(function() {
            $(e.trigger).html("<svg xmlns='http://www.w3.org/2000/svg' width='19' height='19' fill='currentColor' class='bi bi-filetype-html' viewBox='0 0 16 16'><path fill-rule='evenodd' d='M14 4.5V11h-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5Zm-9.736 7.35v3.999h-.791v-1.714H1.79v1.714H1V11.85h.791v1.626h1.682V11.85h.79Zm2.251.662v3.337h-.794v-3.337H4.588v-.662h3.064v.662H6.515Zm2.176 3.337v-2.66h.038l.952 2.159h.516l.946-2.16h.038v2.661h.715V11.85h-.8l-1.14 2.596H9.93L8.79 11.85h-.805v3.999h.706Zm4.71-.674h1.696v.674H12.61V11.85h.79v3.325Z'/></svg>");
        }, 3500);
    });
});

// COMMENTS
// COPY TO CLIPBOARD SCRIPT - INSTANTIATE SCRIPT - /// MARKDOWN OUTPUT TO CLIPBOARD
$( document ).ready(function() {
    var clipboard = new ClipboardJS('.clipboard-md');

    // COPY TO CLIPBOARD SCRIPT - SUCCESS/ERROR STATES
    clipboard.on('success', function(e) {
        $(e.trigger).html("<strong>&#10004;</strong>");
        console.info('Action:', e.action);
        console.info('Text:', e.text);
        console.info('Trigger:', e.trigger);
        e.clearSelection();
        setTimeout(function() {
            $(e.trigger).html("<svg xmlns='http://www.w3.org/2000/svg' width='19' height='19' class='' viewBox='0 0 16 16' fill='currentColor'><path fill-rule='evenodd' d='M14.85 3H1.15C.52 3 0 3.52 0 4.15v7.69C0 12.48.52 13 1.15 13h13.69c.64 0 1.15-.52 1.15-1.15v-7.7C16 3.52 15.48 3 14.85 3zM9 11H7V8L5.5 9.92 4 8v3H2V5h2l1.5 2L7 5h2v6zm2.99.5L9.5 8H11V5h2v3h1.5l-2.51 3.5z'></path></svg>");
        }, 3500);
    });
    clipboard.on('error', function(e) {
        $(e.trigger).html("<strong>&#10008;</strong>");
        console.info('Action:', e.action);
        console.info('Text:', e.text);
        console.info('Trigger:', e.trigger);
        e.clearSelection();
        setTimeout(function() {
            $(e.trigger).html("<svg xmlns='http://www.w3.org/2000/svg' width='19' height='19' class='' viewBox='0 0 16 16' fill='currentColor'><path fill-rule='evenodd' d='M14.85 3H1.15C.52 3 0 3.52 0 4.15v7.69C0 12.48.52 13 1.15 13h13.69c.64 0 1.15-.52 1.15-1.15v-7.7C16 3.52 15.48 3 14.85 3zM9 11H7V8L5.5 9.92 4 8v3H2V5h2l1.5 2L7 5h2v6zm2.99.5L9.5 8H11V5h2v3h1.5l-2.51 3.5z'></path></svg>");
        }, 3500);
    });
});

// COMMENTS
// COPY TO CLIPBOARD SCRIPT - INSTANTIATE SCRIPT - /// FORMATTED OUTPUT TO CLIPBOARD
$( document ).ready(function() {
    var clipboard = new ClipboardJS('.clipboard-format');

    // COPY TO CLIPBOARD SCRIPT - SUCCESS/ERROR STATES
    clipboard.on('success', function(e) {
        $(e.trigger).html("<strong>&#10004;</strong>");
        console.info('Action:', e.action);
        console.info('Text:', e.text);
        console.info('Trigger:', e.trigger);
        e.clearSelection();
        setTimeout(function() {
            $(e.trigger).html("<svg xmlns='http://www.w3.org/2000/svg' width='19' height='19' fill='currentColor' class='bi bi-braces-asterisk' viewBox='0 0 16 16'><path fill-rule='evenodd' d='M1.114 8.063V7.9c1.005-.102 1.497-.615 1.497-1.6V4.503c0-1.094.39-1.538 1.354-1.538h.273V2h-.376C2.25 2 1.49 2.759 1.49 4.352v1.524c0 1.094-.376 1.456-1.49 1.456v1.299c1.114 0 1.49.362 1.49 1.456v1.524c0 1.593.759 2.352 2.372 2.352h.376v-.964h-.273c-.964 0-1.354-.444-1.354-1.538V9.663c0-.984-.492-1.497-1.497-1.6ZM14.886 7.9v.164c-1.005.103-1.497.616-1.497 1.6v1.798c0 1.094-.39 1.538-1.354 1.538h-.273v.964h.376c1.613 0 2.372-.759 2.372-2.352v-1.524c0-1.094.376-1.456 1.49-1.456v-1.3c-1.114 0-1.49-.362-1.49-1.456V4.352C14.51 2.759 13.75 2 12.138 2h-.376v.964h.273c.964 0 1.354.444 1.354 1.538V6.3c0 .984.492 1.497 1.497 1.6ZM7.5 11.5V9.207l-1.621 1.621-.707-.707L6.792 8.5H4.5v-1h2.293L5.172 5.879l.707-.707L7.5 6.792V4.5h1v2.293l1.621-1.621.707.707L9.208 7.5H11.5v1H9.207l1.621 1.621-.707.707L8.5 9.208V11.5h-1Z'/></svg>");
        }, 3500);
    });
    clipboard.on('error', function(e) {
        $(e.trigger).html("<strong>&#10008;</strong>");
        console.info('Action:', e.action);
        console.info('Text:', e.text);
        console.info('Trigger:', e.trigger);
        e.clearSelection();
        setTimeout(function() {
            $(e.trigger).html("<svg xmlns='http://www.w3.org/2000/svg' width='19' height='19' fill='currentColor' class='bi bi-braces-asterisk' viewBox='0 0 16 16'><path fill-rule='evenodd' d='M1.114 8.063V7.9c1.005-.102 1.497-.615 1.497-1.6V4.503c0-1.094.39-1.538 1.354-1.538h.273V2h-.376C2.25 2 1.49 2.759 1.49 4.352v1.524c0 1.094-.376 1.456-1.49 1.456v1.299c1.114 0 1.49.362 1.49 1.456v1.524c0 1.593.759 2.352 2.372 2.352h.376v-.964h-.273c-.964 0-1.354-.444-1.354-1.538V9.663c0-.984-.492-1.497-1.497-1.6ZM14.886 7.9v.164c-1.005.103-1.497.616-1.497 1.6v1.798c0 1.094-.39 1.538-1.354 1.538h-.273v.964h.376c1.613 0 2.372-.759 2.372-2.352v-1.524c0-1.094.376-1.456 1.49-1.456v-1.3c-1.114 0-1.49-.362-1.49-1.456V4.352C14.51 2.759 13.75 2 12.138 2h-.376v.964h.273c.964 0 1.354.444 1.354 1.538V6.3c0 .984.492 1.497 1.497 1.6ZM7.5 11.5V9.207l-1.621 1.621-.707-.707L6.792 8.5H4.5v-1h2.293L5.172 5.879l.707-.707L7.5 6.792V4.5h1v2.293l1.621-1.621.707.707L9.208 7.5H11.5v1H9.207l1.621 1.621-.707.707L8.5 9.208V11.5h-1Z'/></svg>");
        }, 3500);
    });
});

// COMMENTS
// COPY TO CLIPBOARD SCRIPT - INSTANTIATE SCRIPT - /// LINE (NO LINE BREAKS) OUTPUT TO CLIPBOARD
$( document ).ready(function() {
    var clipboard = new ClipboardJS('.clipboard-line');

    // COPY TO CLIPBOARD SCRIPT - SUCCESS/ERROR STATES
    clipboard.on('success', function(e) {
        $(e.trigger).html("<strong>&#10004;</strong>");
        console.info('Action:', e.action);
        console.info('Text:', e.text);
        console.info('Trigger:', e.trigger);
        e.clearSelection();
        setTimeout(function() {
            $(e.trigger).html("<svg xmlns='http://www.w3.org/2000/svg' width='19' height='19' fill='currentColor' class='bi bi-file-earmark-break' viewBox='0 0 16 16'><path d='M14 4.5V9h-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v7H2V2a2 2 0 0 1 2-2h5.5L14 4.5zM13 12h1v2a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-2h1v2a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-2zM.5 10a.5.5 0 0 0 0 1h15a.5.5 0 0 0 0-1H.5z'/></svg>");
        }, 3500);
    });
    clipboard.on('error', function(e) {
        $(e.trigger).html("<strong>&#10008;</strong>");
        console.info('Action:', e.action);
        console.info('Text:', e.text);
        console.info('Trigger:', e.trigger);
        e.clearSelection();
        setTimeout(function() {
            $(e.trigger).html("<svg xmlns='http://www.w3.org/2000/svg' width='19' height='19' fill='currentColor' class='bi bi-file-earmark-break' viewBox='0 0 16 16'><path d='M14 4.5V9h-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v7H2V2a2 2 0 0 1 2-2h5.5L14 4.5zM13 12h1v2a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-2h1v2a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-2zM.5 10a.5.5 0 0 0 0 1h15a.5.5 0 0 0 0-1H.5z'/></svg>");
        }, 3500);
    });
});

// TASK DESCRIPTION
// COPY TO CLIPBOARD SCRIPT - INSTANTIATE SCRIPT - /// HTML OUTPUT TO CLIPBOARD
$( document ).ready(function() {
    var clipboard = new ClipboardJS('.copy-bar-html');

    // COPY TO CLIPBOARD SCRIPT - SUCCESS/ERROR STATES
    clipboard.on('success', function(e) {
        $(e.trigger).html("<strong>&#10004; Copied</strong>");
        console.info('Action:', e.action);
        console.info('Text:', e.text);
        console.info('Trigger:', e.trigger);
        e.clearSelection();
        setTimeout(function() {
            $(e.trigger).html("<svg height='30px' class='clippy' fill='currentColor' viewBox='0 0 1024 1024' xmlns='http://www.w3.org/2000/svg'><path xmlns='http://www.w3.org/2000/svg' d='M128 768h256v64H128v-64z m320-384H128v64h320v-64z m128 192V448L384 640l192 192V704h320V576H576z m-288-64H128v64h160v-64zM128 704h160v-64H128v64z m576 64h64v128c-1 18-7 33-19 45s-27 18-45 19H64c-35 0-64-29-64-64V192c0-35 29-64 64-64h192C256 57 313 0 384 0s128 57 128 128h192c35 0 64 29 64 64v320h-64V320H64v576h640V768zM128 256h512c0-35-29-64-64-64h-64c-35 0-64-29-64-64s-29-64-64-64-64 29-64 64-29 64-64 64h-64c-35 0-64 29-64 64z'/></svg><svg width='30' height='30' class='bi bi-filetype-html' fill='currentColor' viewBox='0 0 16 16' xmlns='http://www.w3.org/2000/svg'><path fill-rule='evenodd' d='M14 4.5V11h-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5Zm-9.736 7.35v3.999h-.791v-1.714H1.79v1.714H1V11.85h.791v1.626h1.682V11.85h.79Zm2.251.662v3.337h-.794v-3.337H4.588v-.662h3.064v.662H6.515Zm2.176 3.337v-2.66h.038l.952 2.159h.516l.946-2.16h.038v2.661h.715V11.85h-.8l-1.14 2.596H9.93L8.79 11.85h-.805v3.999h.706Zm4.71-.674h1.696v.674H12.61V11.85h.79v3.325Z'/></svg>");
        }, 3500);
    });
    clipboard.on('error', function(e) {
        $(e.trigger).html("<strong>&#10008; Not Copied</strong>");
        console.info('Action:', e.action);
        console.info('Text:', e.text);
        console.info('Trigger:', e.trigger);
        e.clearSelection();
        setTimeout(function() {
            $(e.trigger).html("<svg height='30px' class='clippy' fill='currentColor' viewBox='0 0 1024 1024' xmlns='http://www.w3.org/2000/svg'><path xmlns='http://www.w3.org/2000/svg' d='M128 768h256v64H128v-64z m320-384H128v64h320v-64z m128 192V448L384 640l192 192V704h320V576H576z m-288-64H128v64h160v-64zM128 704h160v-64H128v64z m576 64h64v128c-1 18-7 33-19 45s-27 18-45 19H64c-35 0-64-29-64-64V192c0-35 29-64 64-64h192C256 57 313 0 384 0s128 57 128 128h192c35 0 64 29 64 64v320h-64V320H64v576h640V768zM128 256h512c0-35-29-64-64-64h-64c-35 0-64-29-64-64s-29-64-64-64-64 29-64 64-29 64-64 64h-64c-35 0-64 29-64 64z'/></svg><svg width='30' height='30' class='bi bi-filetype-html' fill='currentColor' viewBox='0 0 16 16' xmlns='http://www.w3.org/2000/svg'><path fill-rule='evenodd' d='M14 4.5V11h-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5Zm-9.736 7.35v3.999h-.791v-1.714H1.79v1.714H1V11.85h.791v1.626h1.682V11.85h.79Zm2.251.662v3.337h-.794v-3.337H4.588v-.662h3.064v.662H6.515Zm2.176 3.337v-2.66h.038l.952 2.159h.516l.946-2.16h.038v2.661h.715V11.85h-.8l-1.14 2.596H9.93L8.79 11.85h-.805v3.999h.706Zm4.71-.674h1.696v.674H12.61V11.85h.79v3.325Z'/></svg>");
        }, 3500);
    });
});

// TASK DESCRIPTION
// COPY TO CLIPBOARD SCRIPT - INSTANTIATE SCRIPT - /// MARKDOWN OUTPUT TO CLIPBOARD
$( document ).ready(function() {
    var clipboard = new ClipboardJS('.copy-bar-md');

    // COPY TO CLIPBOARD SCRIPT - SUCCESS/ERROR STATES
    clipboard.on('success', function(e) {
        $(e.trigger).html("<strong>&#10004; Copied</strong>");
        console.info('Action:', e.action);
        console.info('Text:', e.text);
        console.info('Trigger:', e.trigger);
        e.clearSelection();
        setTimeout(function() {
            $(e.trigger).html("<svg height='30px' class='clippy' fill='currentColor' viewBox='0 0 1024 1024' xmlns='http://www.w3.org/2000/svg'><path xmlns='http://www.w3.org/2000/svg' d='M128 768h256v64H128v-64z m320-384H128v64h320v-64z m128 192V448L384 640l192 192V704h320V576H576z m-288-64H128v64h160v-64zM128 704h160v-64H128v64z m576 64h64v128c-1 18-7 33-19 45s-27 18-45 19H64c-35 0-64-29-64-64V192c0-35 29-64 64-64h192C256 57 313 0 384 0s128 57 128 128h192c35 0 64 29 64 64v320h-64V320H64v576h640V768zM128 256h512c0-35-29-64-64-64h-64c-35 0-64-29-64-64s-29-64-64-64-64 29-64 64-29 64-64 64h-64c-35 0-64 29-64 64z'/></svg><svg width='30' height='30' class='' fill='currentColor' viewBox='0 0 16 16' xmlns='http://www.w3.org/2000/svg'><path fill-rule='evenodd' d='M14.85 3H1.15C.52 3 0 3.52 0 4.15v7.69C0 12.48.52 13 1.15 13h13.69c.64 0 1.15-.52 1.15-1.15v-7.7C16 3.52 15.48 3 14.85 3zM9 11H7V8L5.5 9.92 4 8v3H2V5h2l1.5 2L7 5h2v6zm2.99.5L9.5 8H11V5h2v3h1.5l-2.51 3.5z'></path></svg>");
        }, 3500);
    });
    clipboard.on('error', function(e) {
        $(e.trigger).html("<strong>&#10008; Not Copied</strong>");
        console.info('Action:', e.action);
        console.info('Text:', e.text);
        console.info('Trigger:', e.trigger);
        e.clearSelection();
        setTimeout(function() {
            $(e.trigger).html("<svg height='30px' class='clippy' fill='currentColor' viewBox='0 0 1024 1024' xmlns='http://www.w3.org/2000/svg'><path xmlns='http://www.w3.org/2000/svg' d='M128 768h256v64H128v-64z m320-384H128v64h320v-64z m128 192V448L384 640l192 192V704h320V576H576z m-288-64H128v64h160v-64zM128 704h160v-64H128v64z m576 64h64v128c-1 18-7 33-19 45s-27 18-45 19H64c-35 0-64-29-64-64V192c0-35 29-64 64-64h192C256 57 313 0 384 0s128 57 128 128h192c35 0 64 29 64 64v320h-64V320H64v576h640V768zM128 256h512c0-35-29-64-64-64h-64c-35 0-64-29-64-64s-29-64-64-64-64 29-64 64-29 64-64 64h-64c-35 0-64 29-64 64z'/></svg><svg width='30' height='30' class='' fill='currentColor' viewBox='0 0 16 16' xmlns='http://www.w3.org/2000/svg'><path fill-rule='evenodd' d='M14.85 3H1.15C.52 3 0 3.52 0 4.15v7.69C0 12.48.52 13 1.15 13h13.69c.64 0 1.15-.52 1.15-1.15v-7.7C16 3.52 15.48 3 14.85 3zM9 11H7V8L5.5 9.92 4 8v3H2V5h2l1.5 2L7 5h2v6zm2.99.5L9.5 8H11V5h2v3h1.5l-2.51 3.5z'></path></svg>");
        }, 3500);
    });
});

// TASK DESCRIPTION
// COPY TO CLIPBOARD SCRIPT - INSTANTIATE SCRIPT - /// FORMATTED OUTPUT TO CLIPBOARD
$( document ).ready(function() {
    var clipboard = new ClipboardJS('.copy-bar-format');

    // COPY TO CLIPBOARD SCRIPT - SUCCESS/ERROR STATES
    clipboard.on('success', function(e) {
        $(e.trigger).html("<strong>&#10004; Copied</strong>");
        console.info('Action:', e.action);
        console.info('Text:', e.text);
        console.info('Trigger:', e.trigger);
        e.clearSelection();
        setTimeout(function() {
            $(e.trigger).html("<svg height='30px' class='clippy' fill='currentColor' viewBox='0 0 1024 1024' xmlns='http://www.w3.org/2000/svg'><path xmlns='http://www.w3.org/2000/svg' d='M128 768h256v64H128v-64z m320-384H128v64h320v-64z m128 192V448L384 640l192 192V704h320V576H576z m-288-64H128v64h160v-64zM128 704h160v-64H128v64z m576 64h64v128c-1 18-7 33-19 45s-27 18-45 19H64c-35 0-64-29-64-64V192c0-35 29-64 64-64h192C256 57 313 0 384 0s128 57 128 128h192c35 0 64 29 64 64v320h-64V320H64v576h640V768zM128 256h512c0-35-29-64-64-64h-64c-35 0-64-29-64-64s-29-64-64-64-64 29-64 64-29 64-64 64h-64c-35 0-64 29-64 64z'/></svg><svg width='30' height='30' class='bi bi-braces-asterisk' fill='currentColor' viewBox='0 0 16 16' xmlns='http://www.w3.org/2000/svg'><path fill-rule='evenodd' d='M1.114 8.063V7.9c1.005-.102 1.497-.615 1.497-1.6V4.503c0-1.094.39-1.538 1.354-1.538h.273V2h-.376C2.25 2 1.49 2.759 1.49 4.352v1.524c0 1.094-.376 1.456-1.49 1.456v1.299c1.114 0 1.49.362 1.49 1.456v1.524c0 1.593.759 2.352 2.372 2.352h.376v-.964h-.273c-.964 0-1.354-.444-1.354-1.538V9.663c0-.984-.492-1.497-1.497-1.6ZM14.886 7.9v.164c-1.005.103-1.497.616-1.497 1.6v1.798c0 1.094-.39 1.538-1.354 1.538h-.273v.964h.376c1.613 0 2.372-.759 2.372-2.352v-1.524c0-1.094.376-1.456 1.49-1.456v-1.3c-1.114 0-1.49-.362-1.49-1.456V4.352C14.51 2.759 13.75 2 12.138 2h-.376v.964h.273c.964 0 1.354.444 1.354 1.538V6.3c0 .984.492 1.497 1.497 1.6ZM7.5 11.5V9.207l-1.621 1.621-.707-.707L6.792 8.5H4.5v-1h2.293L5.172 5.879l.707-.707L7.5 6.792V4.5h1v2.293l1.621-1.621.707.707L9.208 7.5H11.5v1H9.207l1.621 1.621-.707.707L8.5 9.208V11.5h-1Z'/></svg>");
        }, 3500);
    });
    clipboard.on('error', function(e) {
        $(e.trigger).html("<strong>&#10008; Not Copied</strong>");
        console.info('Action:', e.action);
        console.info('Text:', e.text);
        console.info('Trigger:', e.trigger);
        e.clearSelection();
        setTimeout(function() {
            $(e.trigger).html("<svg height='30px' class='clippy' fill='currentColor' viewBox='0 0 1024 1024' xmlns='http://www.w3.org/2000/svg'><path xmlns='http://www.w3.org/2000/svg' d='M128 768h256v64H128v-64z m320-384H128v64h320v-64z m128 192V448L384 640l192 192V704h320V576H576z m-288-64H128v64h160v-64zM128 704h160v-64H128v64z m576 64h64v128c-1 18-7 33-19 45s-27 18-45 19H64c-35 0-64-29-64-64V192c0-35 29-64 64-64h192C256 57 313 0 384 0s128 57 128 128h192c35 0 64 29 64 64v320h-64V320H64v576h640V768zM128 256h512c0-35-29-64-64-64h-64c-35 0-64-29-64-64s-29-64-64-64-64 29-64 64-29 64-64 64h-64c-35 0-64 29-64 64z'/></svg><svg width='30' height='30' class='bi bi-braces-asterisk' fill='currentColor' viewBox='0 0 16 16' xmlns='http://www.w3.org/2000/svg'><path fill-rule='evenodd' d='M1.114 8.063V7.9c1.005-.102 1.497-.615 1.497-1.6V4.503c0-1.094.39-1.538 1.354-1.538h.273V2h-.376C2.25 2 1.49 2.759 1.49 4.352v1.524c0 1.094-.376 1.456-1.49 1.456v1.299c1.114 0 1.49.362 1.49 1.456v1.524c0 1.593.759 2.352 2.372 2.352h.376v-.964h-.273c-.964 0-1.354-.444-1.354-1.538V9.663c0-.984-.492-1.497-1.497-1.6ZM14.886 7.9v.164c-1.005.103-1.497.616-1.497 1.6v1.798c0 1.094-.39 1.538-1.354 1.538h-.273v.964h.376c1.613 0 2.372-.759 2.372-2.352v-1.524c0-1.094.376-1.456 1.49-1.456v-1.3c-1.114 0-1.49-.362-1.49-1.456V4.352C14.51 2.759 13.75 2 12.138 2h-.376v.964h.273c.964 0 1.354.444 1.354 1.538V6.3c0 .984.492 1.497 1.497 1.6ZM7.5 11.5V9.207l-1.621 1.621-.707-.707L6.792 8.5H4.5v-1h2.293L5.172 5.879l.707-.707L7.5 6.792V4.5h1v2.293l1.621-1.621.707.707L9.208 7.5H11.5v1H9.207l1.621 1.621-.707.707L8.5 9.208V11.5h-1Z'/></svg>");
        }, 3500);
    });
});

// TASK DESCRIPTION
// COPY TO CLIPBOARD SCRIPT - INSTANTIATE SCRIPT - /// LINE (NO LINE BREAKS) OUTPUT TO CLIPBOARD
$( document ).ready(function() {
    var clipboard = new ClipboardJS('.copy-bar-line');

    // COPY TO CLIPBOARD SCRIPT - SUCCESS/ERROR STATES
    clipboard.on('success', function(e) {
        $(e.trigger).html("<strong>&#10004; Copied</strong>");
        console.info('Action:', e.action);
        console.info('Text:', e.text);
        console.info('Trigger:', e.trigger);
        e.clearSelection();
        setTimeout(function() {
            $(e.trigger).html("<svg height='30px' class='clippy' fill='currentColor' viewBox='0 0 1024 1024' xmlns='http://www.w3.org/2000/svg'><path xmlns='http://www.w3.org/2000/svg' d='M128 768h256v64H128v-64z m320-384H128v64h320v-64z m128 192V448L384 640l192 192V704h320V576H576z m-288-64H128v64h160v-64zM128 704h160v-64H128v64z m576 64h64v128c-1 18-7 33-19 45s-27 18-45 19H64c-35 0-64-29-64-64V192c0-35 29-64 64-64h192C256 57 313 0 384 0s128 57 128 128h192c35 0 64 29 64 64v320h-64V320H64v576h640V768zM128 256h512c0-35-29-64-64-64h-64c-35 0-64-29-64-64s-29-64-64-64-64 29-64 64-29 64-64 64h-64c-35 0-64 29-64 64z'/></svg><svg width='30' height='30' class='bi bi-file-earmark-break' fill='currentColor' viewBox='0 0 16 16' xmlns='http://www.w3.org/2000/svg'><path d='M14 4.5V9h-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v7H2V2a2 2 0 0 1 2-2h5.5L14 4.5zM13 12h1v2a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-2h1v2a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-2zM.5 10a.5.5 0 0 0 0 1h15a.5.5 0 0 0 0-1H.5z'/></svg>");
        }, 3500);
    });
    clipboard.on('error', function(e) {
        $(e.trigger).html("<strong>&#10008; Not Copied</strong>");
        console.info('Action:', e.action);
        console.info('Text:', e.text);
        console.info('Trigger:', e.trigger);
        e.clearSelection();
        setTimeout(function() {
            $(e.trigger).html("<svg height='30px' class='clippy' fill='currentColor' viewBox='0 0 1024 1024' xmlns='http://www.w3.org/2000/svg'><path xmlns='http://www.w3.org/2000/svg' d='M128 768h256v64H128v-64z m320-384H128v64h320v-64z m128 192V448L384 640l192 192V704h320V576H576z m-288-64H128v64h160v-64zM128 704h160v-64H128v64z m576 64h64v128c-1 18-7 33-19 45s-27 18-45 19H64c-35 0-64-29-64-64V192c0-35 29-64 64-64h192C256 57 313 0 384 0s128 57 128 128h192c35 0 64 29 64 64v320h-64V320H64v576h640V768zM128 256h512c0-35-29-64-64-64h-64c-35 0-64-29-64-64s-29-64-64-64-64 29-64 64-29 64-64 64h-64c-35 0-64 29-64 64z'/></svg><svg width='30' height='30' class='bi bi-file-earmark-break' fill='currentColor' viewBox='0 0 16 16' xmlns='http://www.w3.org/2000/svg'><path d='M14 4.5V9h-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v7H2V2a2 2 0 0 1 2-2h5.5L14 4.5zM13 12h1v2a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-2h1v2a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-2zM.5 10a.5.5 0 0 0 0 1h15a.5.5 0 0 0 0-1H.5z'/></svg>");
        }, 3500);
    });
});

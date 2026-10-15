// KANBOARD PLUGIN ASSET FILE
// Related regression test: tests/UiRegressionTest.php.

$(document).ready(function() {
    // Click event for any anchor tag that's href starts with #
    $('a[href^="#main"], a[href^="#PluginTop"]').click(function(event) {

        // The id of the section we want to go to.
        var id = $(this).attr("href");

        // An offset to push the content down from the top. Lower the value to push down
        var offset = 100;

        // Our scroll target : the top position of the
        // section that has the id referenced by our href.
        var targetElement = $(id);

        if (targetElement.length === 0) {
            return;
        }

        var target = targetElement.offset().top - offset;

        // The magic...smooth scrollin' goodness.
        if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
            window.scrollTo(0, target);
        } else {
            $('html, body').animate({scrollTop:target}, 1000);
        }

        //prevent the page from jumping down to our section.
        event.preventDefault();
    });
});

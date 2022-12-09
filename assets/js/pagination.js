function pagination(container, loop, parent, limit) {
    console.log('pagination-included');
    var numberOfItems = $('#' + container + ' ' + loop).length; // Get total number of the items that should be paginated
    // console.log(numberOfItems);
    var limitPerPage = limit; // Limit of items per each page
    $('#' + container + ' ' + loop + ':gt(' + (limitPerPage - 1) + ')').removeClass('showing');
    $('#' + container + ' ' + loop + ':gt(' + (limitPerPage - 1) + ')').addClass('hiding'); // Hide all items over page limits (e.g., 5th item, 6th item, etc.)
    // var totalPages = Math.round(numberOfItems / (limitPerPage - 1)); // Get number of pages
    var bagi = numberOfItems / limitPerPage;
    var cek_sisa = numberOfItems % limitPerPage;
    if (cek_sisa > 0) {
        var sisa = 1;
    } else {
        var sisa = 0;
    }
    var totalPages = bagi + sisa;
    // console.log(bagi);
    // console.log(totalPages);
    $("#" + parent + ".pagination").append('<a class="to-page page-item active" href="javascript:void(0)"><li class="page-link">1</li></a>'); // Add first page marker
    // Loop to insert page number for each sets of items equal to page limit (e.g., limit of 4 with 20 total items = insert 5 pages)
    for (var i = 1; i <= (totalPages - 1); i++) {
        //$(".pagination").append("<li class='current-page'><a href='javascript:void(0)'>" + i + "</a></li>"); // Insert page number into pagination tabs\
        $("#" + parent + ".pagination").append('<a class="to-page page-item" href="javascript:void(0)"><li class="page-link">' + (i + 1) + '</li></a>'); // Add first page marker
    }
    // Function that displays new items based on page number that was clicked
    $("#" + parent + ".pagination a.to-page").on("click", function () {
        // Check if page number that was clicked on is the current page that is being displayed



        if ($(this).hasClass('active')) {
            return false; // Return false (i.e., nothing to do, since user clicked on the page number that is already being displayed)
        } else {
            document.getElementById(container).style.opacity = "0";
            document.getElementById(container).style.transition = "0.5s";
            var currentPage = ($(this).index() + 1); // Get the current page number
            // console.log(currentPage);
            $("#" + parent + ".pagination a").removeClass('active'); // Remove the 'active' class status from the page that is currently being displayed
            $(this).addClass('active'); // Add the 'active' class status to the page that was clicked on
            setTimeout(function () {
                $("#" + container + " " + loop).removeClass('showing');
                $("#" + container + " " + loop).addClass('hiding'); // Hide all items in loop, this case, all the list groups

                var grandTotal = limitPerPage * currentPage; // Get the total number of items up to the page number that was clicked on

                // Loop through total items, selecting a new set of items based on page number



                document.getElementById(container).style.opacity = "1";
                document.getElementById(container).style.transition = "0.5s";


                for (var i = grandTotal - limitPerPage; i < grandTotal; i++) {
                    $("#" + container + " " + loop + ":eq(" + i + ")").removeClass('hiding');
                    $("#" + container + " " + loop + ":eq(" + i + ")").addClass('showing'); // Show items from the new page that was selected
                }
            }, 300)
        }


    });
}
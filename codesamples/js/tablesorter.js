This sorts the table on pageload by most active feeds to least, inline in the index.php

<script>
$(document).ready(function()
    {
        $("#myTable").tablesorter();
    }
);

$(document).ready(function() {
    // call the tablesorter plugin
    $("table").tablesorter({
        // sort on the first column and third column, order asc
        sortList: [[2,1]]
    });
});



   </script>

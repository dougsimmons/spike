### I use these snippets to add colors from red to white to dark green based on how active each feed's line is.
### I found the snippet in an SO answer here: http://stackoverflow.com/a/16184224/5981605
### Author stackoverflow user gurvinder372 from Bengaluru, India, http://stackoverflow.com/users/1984039/gurvinder372



<script>

$(document).ready(function() {
   $( ".status" )
      .filter(function(){
         return $(this).html() > 40;
      })
      .parent().css('background-color', '#00EB00');
});

</script>


<script>

$(document).ready(function() {
   $( ".status" )
      .filter(function(){
         return $(this).html() > 50;
      })
      .parent().css('background-color', '#00DB00');
});

</script>

<script>

$(document).ready(function() {
   $( ".status" )
      .filter(function(){
         return $(this).html() > 75;
      })
      .parent().css('background-color', '#00C700');
});

</script>

## and a bunch more, inline in the html

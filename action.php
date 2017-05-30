<?php 
/*Example of wordpress add_action hooks*/

function name_of_function() {
echo 'this is to print Webnec at the header of index page';

}

add_action ('wp_head','name_of_function(');







?>

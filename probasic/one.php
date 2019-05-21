
<?php

function longdate($timestamp){

	return date("l F js y",$timestamp);


}

echo longdate(time());


?>
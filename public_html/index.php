<?php
$queryString = ( isset($_SERVER["QUERY_STRING"]) ) ? "?".$_SERVER["QUERY_STRING"] : "";
header("Location: articleinfo/".$queryString );


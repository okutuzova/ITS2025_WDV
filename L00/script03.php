<?php 

$comands_html = [
    'div',
    'h1-h6',
    'ul-li',
    'ol-li',
    'img',
    'nav',
    'section',
    'a - href',

];


echo $total = count($comands_html);


for ($i=0; $i < $total; $i++) { 
    echo '<li>'.$comands_html[$i] . '</li>';
}




?> 

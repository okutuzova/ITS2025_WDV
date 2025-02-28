<ul>

    <?PHP

$comandi_html = [
    'div',
    'h1-h6',
    'ul-li',
    'ol-li',
    'img',
    'nav',
    'section',
    'a - href',
]; 

$totale = count($comandi_html);

for ($i=0; $i < $totale; $i++) { 
    echo '<li>'. $comandi_html[$i] .'</li>';
}

?>
</ul>


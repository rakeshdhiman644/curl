<?php
include('simple_html_dom.php');

/*$html = file_get_html('https://www.bigbasket.com/pd/40197925/papergrid-king-size-notebook-single-line-160-pages-soft-cover-1-pc');
echo $html->find('title',0)->plaintext;*/

/*$html=file_get_html("https://en.wikipedia.org/wiki/PHP");
echo $html->find('table.infobox',0)->innertext;*/

$html=file_get_html("https://www.mid-day.com/sports");

echo $html->find('ul.newsList300',0)->innertext;
?>
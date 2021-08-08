<?php
    include('simple_html_dom.php');
    $html = file_get_html('https://www.linkup.com/data/');
    echo $html->find('h1[class="data-band-large-text"]', 0)->plaintext;
?>
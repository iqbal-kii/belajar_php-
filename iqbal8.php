<?php
function myTest() {
    static $x=0;
    echo $x;
    $x++;
}
//untuk menampilkan tulisan dan membuat variable
myTest();
myTest();
myTest();
?>
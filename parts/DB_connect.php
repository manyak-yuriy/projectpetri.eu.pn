<?php
$arrSources = array(
<<<<<<< HEAD
/*0*/   "new_img/erokhin.jpg",
/*1*/   "new_img/deundiak.jpg",
/*2*/   "new_img/fridman.jpg",
/*3*/   "new_img/gritsaiuk.jpg",
/*4*/   "new_img/belas.jpg",
/*5*/   "new_img/mikhailuk.png",
/*6*/   
/*7*/   "new_img/manyak.png",
"new_img/livinskiy.jpg",
"new_img/puhachev.jpg",
"new_img/morugiy.jpg",
"new_img/rohovoy.jpg",
"new_img/sagan.jpg",
"new_img/skorohod.jpg",
"new_img/sliota.jpg",
"new_img/tarasiuk.jpg",
"new_img/varava.jpg",
"new_img/yakovets.jpg", 
"new_img/romanko.jpg"
=======
/*0*/   "http://img1.rnkr-static.com/user_node_img/30/585095/C350/bill-gates-writers-photo-u4.jpg",
/*1*/   "http://img1.rnkr-static.com/node_img/77/1528625/C350/mark-zuckerberg-all-people-photo-1.jpg",
/*2*/   "http://img2.rnkr-static.com/node_img/105/2098603/C350/steve-wozniak-writers-photo-1.jpg",
/*3*/   "http://img2.rnkr-static.com/node_img/21/400497/C350/ada-lovelace-writers-photo-1.jpg",
/*4*/   "http://img1.rnkr-static.com/node_img/44/876207/C350/donald-knuth-writers-photo-1.jpg",
/*5*/   "http://img2.rnkr-static.com/node_img/64/1261312/C350/james-gosling-writers-photo-1.jpg",
/*6*/   "http://img1.rnkr-static.com/node_img/69/1364392/C350/ken-thompson-all-people-photo-1.jpg",
/*7*/   "http://img2.rnkr-static.com/node_img/65/1295353/C350/joel-spolsky-writers-photo-1.jpg",
/*8*/  "http://img1.rnkr-static.com/node_img/73/1452170/C350/linus-torvalds-writers-photo-1.jpg",
/*9*/  "http://img3.rnkr-static.com/user_node_img/32/626213/C350/brian-kernighan-writers-photo-u1.jpg",
/*10*/  "http://img1.rnkr-static.com/node_img/56/1110152/C350/guido-van-rossum-writers-photo-1.jpg",
/*11*/  "http://img2.rnkr-static.com/node_img/71/1413986/C350/larry-wall-writers-photo-1.jpg"
>>>>>>> 1c0a71f... Changes refs to images to prog faces.
);

    $servername = 'fdb5.freehostingeu.com';
    $username = '2057126_db';
    $password = 'i77JjWO58MU5mmDj8Tp9';
	$dbname = '2057126_db';

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) 
    {
       die("Connection failed: " . $conn->connect_error);
    } 
	 
       //console.log("Connected successfully");
?>

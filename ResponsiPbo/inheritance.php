<?php

// import data/person.php
require_once "data/Manager.php";
// buat object new manager dan tambahakan value nama kemudian panggil function
$manager1 = new Manager();
$manager1->nama = "Ahmadl";
$manager1->sayHello("Ahmadlboy");

// buat object new vicepresident dan tambahakan value nama kemudian panggil function
$vicePresident1 = new VicePresident();
$vicePresident1->nama = "Bunga";
$vicePresident1->sayHello("Bunga safitri");
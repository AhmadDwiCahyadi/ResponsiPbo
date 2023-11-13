<?php

// import data/person.php
require_once "data/person.php";

// buat object dari kelas person
$ahmadl = new Person("Ahmadl", "Seluma");

// tambahkan value nama di object
$ahmadl->nama = "ahmadl";

// panggil function sayHelloNull dengan parameter
$ahmadl->sayHelloNull("Bunga Safitri");

// buat object dari kelas person
$bunga = new Person("Bunga", "Bandung");

// tambahkan value nama di object
$bunga->nama = "Cookie Pratama";

// panggil function sayHelloNull dengan parameter null
$bunga->sayHelloNull(null);

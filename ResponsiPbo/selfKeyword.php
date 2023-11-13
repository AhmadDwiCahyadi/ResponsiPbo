<?php

// import data/person.php
require_once "data/person.php";

// buat object baru dari kelas person
$person1 = new Person("Ahmadl","Seluma");

// panggil function
$person1->sayHello("Ahmadl");

// panggil self keyword
$person1->info();

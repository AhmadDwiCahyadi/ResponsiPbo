<?php

require_once "data/programmer.php";

$company = new Company();
$company->programmer = new Programmer("Ahmad");
var_dump($company);

$company->programmer = new BackendProgrammer("Ahmad");
var_dump($company);

$company->programmer = new FrontendProgrammer("Ahmad");
var_dump($company);

sayHelloProgrammer(new Programmer("Ahmad Dwi Cahyadi"));
sayHelloProgrammer(new BackendProgrammer("Ahmad Dwi Cahyadi"));
sayHelloProgrammer(new FrontendProgrammer("Ahmad Dwi Cahydi"));
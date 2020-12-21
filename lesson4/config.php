<?php

const SERVER = "localhost";
const DB = "less5";
const LOGIN = "root";
const PASSWORD = "";


$connect = mysqli_connect(SERVER, LOGIN, PASSWORD, DB)
or die ("Ошибка при подключении к БД");

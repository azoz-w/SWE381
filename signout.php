<?php
session_start();
session_destroy();
header("Location:allMovies.php? bye=See you next time");
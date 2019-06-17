<?php
$f_name = $_POST['first-name'];
$l_name = $_POST['last-name'];
$data = "FNAME: ".$f_name."\nLNAME: ".$l_name;
file_put_contents(uniqid(), $data);
echo 'Success!';
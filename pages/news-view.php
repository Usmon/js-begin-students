<?php
echo $id = $_GET['idNews'];
echo $id = $_GET['secondParam'];

$myPost = [
    'title' => 'With GET QUERY REQUEST',
    'content' => 'Lorem ipsum dolor sit',
];

?>
<div>
    <h1><?= $myPost['title'] ?></h1>
    <p><?= $myPost['content'] ?></p>
</div>

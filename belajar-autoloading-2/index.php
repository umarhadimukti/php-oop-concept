<?php

require "./App/init.php";

$post = new Post("Sepakbola Indonesia", "Indonesia berhasil taklukan kamboja dengan skor 2-1");
$category = new Category("Olahraga");

echo $post->getTitle();
echo "<hr>";

// nyoba nambahin class Coba
new Coba();
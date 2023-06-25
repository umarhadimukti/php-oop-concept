<?php

require "./App/init.php";

// use App\Service\User as ServiceUser;
// use App\Produk\User as ProdukUser;

// new ServiceUser();
// echo "<hr>";
// new ProdukUser();

use App\Service\User as ServiceUser;
use App\Produk\User as ProdukUser;

new ServiceUser();
echo "<hr>";
new ProdukUser();
<?php
// $data = "CREATE DATABASE `saad`";
    // $table = "CREATE TABLE `saad`.`storage` (`id` INT NOT NULL AUTO_INCREMENT , `name` TEXT NOT NULL , `weight` INT NOT NULL , `price` INT NOT NULL , `company` TEXT NOT NULL , `time` TIMESTAMP NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";
    $database = "saad";
    $sql = mysqli_connect("localhost","root","",$database);
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $title;?>
    </title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<style>
  .navigation{
    height: 0rem;
    overflow: hidden;

  }
</style>
<nav class="flex items-center justify-between flex-wrap bg-black p-6 fixed top-0 w-full z-9999">
  <div class="flex items-center flex-shrink-0 text-white mr-6">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-fork-knife" viewBox="0 0 16 16">
      <path d="M13 .5c0-.276-.226-.506-.498-.465-1.703.257-2.94 2.012-3 8.462a.5.5 0 0 0 .498.5c.56.01 1 .13 1 1.003v5.5a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5zM4.25 0a.25.25 0 0 1 .25.25v5.122a.128.128 0 0 0 .256.006l.233-5.14A.25.25 0 0 1 5.24 0h.522a.25.25 0 0 1 .25.238l.233 5.14a.128.128 0 0 0 .256-.006V.25A.25.25 0 0 1 6.75 0h.29a.5.5 0 0 1 .498.458l.423 5.07a1.69 1.69 0 0 1-1.059 1.711l-.053.022a.92.92 0 0 0-.58.884L6.47 15a.971.971 0 1 1-1.942 0l.202-6.855a.92.92 0 0 0-.58-.884l-.053-.022a1.69 1.69 0 0 1-1.059-1.712L3.462.458A.5.5 0 0 1 3.96 0z"/>
    </svg>
    <span class="font-semibold text-xl tracking-tight">Food managments</span>
  </div>
  <div class="block lg:hidden">
    <button onclick="toggle()" class="toggle flex items-center px-3 py-2 border rounded text-white border-white hover:text-white hover:border-white">
      <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
    </button>
  </div>
  <div class="navigation w-full block flex-grow lg:flex lg:items-center lg:w-auto duration-700 ">
    <div class="text-sm lg:flex">
      <a href="http://localhost/php-project/index.php" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-white mr-4">
        Home
      </a>
      <a href="http://localhost/php-project/display.php" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-white mr-4">
        See product
      </a>
      <a href="http://localhost/php-project/prodect.php?product_id=1" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-white mr-4">
        Update Product
      </a>
      <a href="http://localhost/php-project/remove.php" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-white mr-4">
        Remove Product
      </a>
    </div>
    <div>
      <a href="http://localhost/php-project/add_product.php" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-black hover:bg-white mt-4 lg:mt-0">Download</a>
    </div>
  </div>
  <div class="text-sm lg:flex-grow hidden lg:flex">
    <li><a href="http://localhost/php-project/index.php" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-white mr-4">
      Home
    </a></li>
    <li><a href="http://localhost/php-project/display.php" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-white mr-4">
      See product
    </a></li>
    <li><a href="http://localhost/php-project/prodect.php?product_id=1" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-white">
      Update Product
    </a></li>
    <li><a href="http://localhost/php-project/remove.php" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-white">
      Remove Product
    </a></li>
  </div>
  <div class="hidden lg:block">
    <a href="http://localhost/php-project/add_product.php" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-black hover:bg-white mt-4 lg:mt-0">Add items</a>
  </div>
</nav>
<script>
    let btn = document.querySelector(".toggle");
    let show = document.querySelector(".navigation");
    function toggle(){
        show.classList.toggle("navigation");
    }
    
</script>
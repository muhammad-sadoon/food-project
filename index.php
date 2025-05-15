<?php
    
    $home_link = true;
    $about_link = false;
    $service_link = false;
    $product_link = false;
    if($home_link == true){
        $title = "Home - page";
    }else if($about_link == true){
        $title = "About - page";
    }else if($about_link == true){
        $title = "service - page";
    }else{
        $title = "help - page";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title;?></title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-500">
    <?php include "./header/header.php";?>
    <div class="container mt-24 mx-auto md:px-10  relative z-20">
         <section class=" bg-white w-full p-4 rounded-xl min-h-[50vh]">
            <div class="hero gap-4 md:block md:flex align-center">
                <div class="md:w-1/2 w-full flex flex-col gap-4 p-10">
                    <h1 class="text-4xl mb-5 font-bold">Welcome to food management</h1>
                    <p class="text-sm text-gray-900">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Consectetur corporis labore quo est nam, exercitationem iure suscipit laudantium illo illum
                        mollitia et, vero perferendis praesentium possimus eaque ab, placeat omnis.</p>
                        <a href="http://localhost/php-project/display.php"><button class="inline-block w-1/2 text-sm bg-black px-4 py-2 leading-none border rounded text-white border-black hover:border-black duration-400 hover:text-black hover:bg-white mt-4 lg:mt-0 ">See Products</button></a>
                </div>
                <div class="md:w-1/2 w-full flex items-center justify-center">
                    <img class="rounded-full w-[300px]" src="./assets/img/buryani.png" alt="">
                </div>
            </div>
        </section>
        <section class="contanier rounded-xl mt-3 mb-6 min-h-[60vh] p-4 bg-white my-3 flex md:flex-row flex-col items-center justify-center gap-3">
                <?php
                    $select = "SELECT * FROM `storage`";
                    $show_two_product = mysqli_query($sql,$select);
                    if($show_two_product){
                        while($row = mysqli_fetch_array($show_two_product)){
                            $i = $row["id"];
                            $image = $row["image"];
                            $name = $row["name"];
                            $weight = $row["weight"];
                            $price = $row["price"];
                            if($i < 4){
                                echo "
                                <div class='w-96 h-84 bg-gray-50 p-3 flex flex-col gap-1 rounded-2xl'>
                                    <div class='h-full bg-[url(".$image.")] w-full bg-no-repeat bg-center bg-cover rounded-xl'></div>
                                    <div class='flex flex-col gap-4'>
                                        <div class='flex flex-row justify-between'>
                                        <div class='flex flex-col'>
                                            <span class='text-xl font-bold'>".$name."</span>
                                            <p class='text-xs text-gray-700'>ID:".$i."</p>
                                        </div>
                                        <span class='font-bold  text-red-600'>".$price."Rs</span>
                                        </div>
                                        <button class='hover:bg-sky-700 text-gray-50 bg-sky-800 py-2 rounded-md'><a href='http://localhost/php-project/sell_product.php?product_id=$i'>Add to cart</a></button>
                                    </div>
                                    </div>
                                ";
                            }
                        }
                    }
                ?>
        </section>
    </div>
    <footer class="w-full h-[30px] bg-black text-white flex items-center justify-center fixed z-999 bottom-0">
        <h1>&copy;prepared by muhammad sadoon</h1>
    </footer>
</body>
</html>
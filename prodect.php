<?php
    $product_id = $_GET["product_id"];
    $home_link = false;
    $about_link = false;
    $service_link = false;
    $product_link = true;

    if($home_link == true){
        $title = "Home - page";
    }else if($about_link == true){
        $title = "About - page";
    }else if($about_link == true){
        $title = "service - page";
    }else{
        $title = "product - page";
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $title;?>
    </title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-gray-500 bg-[url(./assets/vedio/bg-slide.mp4)]">
    <?php include "./header/header.php";?>
    <div class=" mt-24 px-4 md:px-10 relative z-20">

        <section class=" bg-white w-full p-4 rounded-xl min-h-[50vh]">
            <div class="hero gap-4 md:block md:flex align-center">
                <div class="md:w-1/2 w-full flex flex-col gap-4 p-10">
                    <h1 class="text-4xl font-bold">Update Your Product..</h1>
                    <p class="text-sm text-gray-900">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Consectetur corporis labore quo est nam, exercitationem iure suscipit laudantium illo illum
                        mollitia et, vero perferendis praesentium possimus eaque ab, placeat omnis.</p>
                </div>
                <div class="md:w-1/2 w-full flex items-center justify-center">
                    <img class="rounded-full w-[300px]" src="./assets/img/burgar.png" alt="">
                </div>
            </div>
        </section>
        <section class="rounded-xl mt-3 mb-5 bg-white ">
                <div id="login" class="w-wull rounded flex flex-col justify-between p-3">       
                    <form class="text-black" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                        <fieldset class="p-5">
                            <legend class="px-2 text-2xl italic -mx-2">Add items</legend>
                            <label class="text-xs font-bold after:content-['*'] after:text-red-400" for="email">Product Id</label>     
                            <input placeholder="Product Items id number.." value="<?php echo $product_id?>" class="w-full p-2 mb-2 mt-1 outline-none ring-none focus:ring-2 focus:ring-black" type="number" required="" name="product_id">   
                            <button name="search_item" class="w-full mb-3 rounded bg-black text-white p-2 text-center font-bold hover:bg-slate-800 cursor-pointer">Search Product now</button>
                        </fieldset>
                    </form>
                </div>
        </section>
<?php
        if(isset($_POST["search_item"])){
            $stdid = intval($_POST["product_id"]);
            $select =  "SELECT * FROM `storage` WHERE `id` = $stdid";;
            $result = mysqli_query($sql , $select);
            if(mysqli_num_rows($result) > 0){
                $row = mysqli_fetch_array($result);
        ?>
        <section class=" rounded-xl mt-3 min-h-[80vh] bg-white ">
                <div id="login" class="w-wull h-full rounded flex flex-col justify-between p-3">       
                    <form class="text-black" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                        <fieldset class="p-5">
                            <legend class="px-2 text-2xl italic -mx-2">Add items</legend>
                            <label class="text-xs font-bold after:content-['*'] after:text-red-400" for="email">Product ID</label>     
                            <input class="w-full p-2 mb-2 mt-1 outline-none ring-none focus:ring-2 focus:ring-black" type="text" required="" value="<?php echo $row['id']?>" name="product_id">   
                            <label class="text-xs font-bold after:content-['*'] after:text-red-400" for="email">Name</label>     
                            <input class="w-full p-2 mb-2 mt-1 outline-none ring-none focus:ring-2 focus:ring-black" type="text" required="" value="<?php echo $row['name']?>" name="product_name">   
                            <label class="text-xs font-bold after:content-['*'] after:text-red-400" for="password">Weight</label>
                            <input class="w-full p-2 mb-2 mt-1 outline-none ring-none focus:ring-2 focus:ring-black" type="text" required="" value="<?php echo $row['weight']?>" name="product_weight">
                            <label class="text-xs font-bold after:content-['*'] after:text-red-400" for="password">Price</label>
                            <input class="w-full p-2 mb-2 mt-1 outline-none ring-none focus:ring-2 focus:ring-black" type="text" required="" value="<?php echo $row['price']?>" name="product_price">
                            <label class="text-xs font-bold after:content-['*'] after:text-red-400" for="password">Company</label>
                            <input class="w-full p-2 mb-2 mt-1 outline-none ring-none focus:ring-2 focus:ring-black" type="text" required="" value="<?php echo $row['company']?>" name="product_company">
                            <label class="text-xs font-bold after:content-['*'] after:text-red-400" for="password">Product Image</label>
                            <input class="w-full p-2 mb-2 mt-1 outline-none ring-none focus:ring-2 focus:ring-black" type="text" required="" value="<?php echo $row['image']?>" name="product_image">
                            <button name="update" class="w-full mb-3 rounded bg-black text-white p-2 text-center font-bold hover:bg-slate-800 cursor-pointer">Add now</button>
                             <a href="#" cLass="cursor-pointer my-6"><label class="text-md font-bold" for="password">All ready product for update now..!!</label></a>
                        </fieldset>
                    </form>
                </div>
        </section>
         <?php
                }else{
                    echo "<section class=' rounded-xl mt-3 bg-white '>
                            <div id='login' class='w-full  rounded flex flex-col items-center justify-between p-3'>       
                                <label class='text-xl text-red-900'>Your product not Found..</label>
                            </div>
                        </section>";
                }
            }
            if(isset($_POST["update"])){
                $product_id = $_POST["product_id"];
                $product_name = $_POST["product_name"];
                $product_weight = $_POST["product_weight"];
                $product_price = $_POST["product_price"];
                $product_company = $_POST["product_company"];
                $product_image = $_POST["product_image"];
                $sql1 = "UPDATE `storage` SET `name`='$product_name',`weight`='$product_weight',`price`='$product_price',`company`='$product_company',`image`='$product_image' WHERE `id` = $product_id";
                $result1 = mysqli_query($sql , $sql1);
                header("location: http://localhost/php-project/index.php");
            }
            
        ?>
        <section class=" rounded-xl mt-3 mb-6 min-h-[80vh] p-4 bg-white my-3 flex md:flex-row flex-col items-center justify-center gap-3">
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

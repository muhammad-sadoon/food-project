<?php
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
    <div class=" mt-24 px-4 md:px-10 relative mb-5 z-20">

        <section class=" bg-white w-full p-4 rounded-xl min-h-[50vh]">
            <div class="hero gap-4 md:block md:flex align-center">
                <div class="md:w-1/2 w-full flex flex-col gap-4 p-10">
                    <h1 class="text-4xl font-bold">Add your product</h1>
                    <p class="text-sm text-gray-900">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Consectetur corporis labore quo est nam, exercitationem iure suscipit laudantium illo illum
                        mollitia et, vero perferendis praesentium possimus eaque ab, placeat omnis.</p>
                </div>
                <div class="md:w-1/2 w-full flex items-center justify-center">
                    <img class="rounded-full w-[300px]" src="./assets/img/add_item.jpg" alt="">
                </div>
            </div>
        </section>
        <section class=" rounded-xl mt-3 min-h-[80vh] bg-white ">
                <div id="login" class="w-wull h-full rounded flex flex-col justify-between p-4">       
                    <form class="text-black" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                        <fieldset class="p-5">
                            <legend class="px-2 text-2xl italic -mx-2">Add items</legend>
                            <label class="text-xs font-bold after:content-['*'] after:text-red-400" for="email">Name</label>     
                            <input class="w-full p-2 mb-2 mt-1 outline-none ring-none focus:ring-2 focus:ring-black" type="text" required="" name="product_name">   
                            <label class="text-xs font-bold after:content-['*'] after:text-red-400" for="password">Weight</label>
                            <input class="w-full p-2 mb-2 mt-1 outline-none ring-none focus:ring-2 focus:ring-black" type="text" required="" name="product_weight">
                            <label class="text-xs font-bold after:content-['*'] after:text-red-400" for="password">Price</label>
                            <input class="w-full p-2 mb-2 mt-1 outline-none ring-none focus:ring-2 focus:ring-black" type="text" required="" name="product_price">
                            <label class="text-xs font-bold after:content-['*'] after:text-red-400" for="password">Company</label>
                            <input class="w-full p-2 mb-2 mt-1 outline-none ring-none focus:ring-2 focus:ring-black" type="text" required="" name="product_company">
                            <label class="text-xs font-bold after:content-['*'] after:text-red-400" for="password">Product Image</label>
                            <input class="w-full p-2 mb-2 mt-1 outline-none ring-none focus:ring-2 focus:ring-black" type="text" required="" name="product_image">
                            <label class="my-[10px] block text-red-900">Note: Please enter the url for image and some issue in databases please do not enter the not a file</label>
                            <button name="insert_item" class="w-full mb-3 rounded bg-black text-white p-2 text-center font-bold hover:bg-slate-800 cursor-pointer">Add now</button>
                             <a href="#" cLass="cursor-pointer my-6"><label class="text-md font-bold" for="password">All ready product for update now..!!</label></a>
                        </fieldset>
                    </form>
                </div>
        </section>
        
    </div>
    <footer class="w-full h-[30px] bg-black text-white flex items-center justify-center fixed z-999 bottom-0">
        <h1>&copy;prepared by muhammad sadoon</h1>
    </footer>
</body>

</html>
<?php
   
        if(isset($_POST["insert_item"])){
            $product_name = $_POST["product_name"];
            $product_weight = $_POST["product_weight"];
            $product_company = $_POST["product_company"];
            $product_price = $_POST["product_price"];
            $product_image = $_POST["product_image"];
            $changeUrl = urldecode($product_image);
            $insert = "INSERT INTO `storage`(`name`, `weight`, `price`, `company`, `image`) VALUES ('$product_name','$product_weight','$product_price','$product_company','$product_image')";
            $insert_result = mysqli_query($sql,$insert);
            header("location: http://localhost/php-project/index.php");
        }
        
?>
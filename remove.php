<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body  class="bg-gray-500 ">
    <?php include "./header/header.php";?>
    <div class=" mt-24 px-4 md:px-10 relative mb-5 z-20">

        <section class=" bg-white w-full p-4 rounded-xl min-h-[50vh]">
            <div class="hero gap-4 md:block md:flex align-center">
                <div class="md:w-1/2 w-full flex flex-col gap-4 p-10">
                    <h1 class="text-4xl font-bold">Remove your Product..</h1>
                    <p class="text-sm text-gray-900">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Consectetur corporis labore quo est nam, exercitationem iure suscipit laudantium illo illum
                        mollitia et, vero perferendis praesentium possimus eaque ab, placeat omnis.</p>
                </div>
                <div class="md:w-1/2 w-full flex items-center justify-center">
                    <img class="rounded-full w-[300px]" src="./assets/img/remove.png" alt="">
                </div>
            </div>
        </section>
        <section class=" rounded-xl mt-3 mb-10 bg-white ">
                <div id="login" class="w-wull h-full rounded flex flex-col justify-between p-3">       
                    <form class="text-black" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                        <fieldset class="p-5">
                            <legend class="px-2 text-2xl italic -mx-2">Add items</legend>
                            <label class="text-xs font-bold after:content-['*'] after:text-red-400" for="email">Product Id</label>     
                            <input placeholder="Product Items id number.." class="w-full p-2 mb-2 mt-1 outline-none ring-none focus:ring-2 focus:ring-black" type="number" required="" name="product_id">   
                            <button name="delete_item" class="w-full mb-3 rounded bg-black text-white p-2 text-center font-bold hover:bg-slate-800 cursor-pointer">Delete now</button>
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
    if(isset($_POST["delete_item"])){
        $product_id = $_POST["product_id"];
        if($product_id>3){
            $insert = "DELETE FROM `storage` WHERE `id` = $product_id";
            $insert_result = mysqli_query($sql,$insert);
            header("location: http://localhost/php-project/index.php");
        }
    }
?>
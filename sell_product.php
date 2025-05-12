<?php 
$title = "sell product id: " . $_GET["product_id"];
$product_id = $_GET["product_id"];
include "./header/header.php";?>
<!DOCTYPE html>
<html lang="en">
    <style>
        /* From Uiverse.io by Rodrypaladin */ 
.card {
  width: 100%;
  background: rgb(44, 44, 44);
  font-family: "Courier New", Courier, monospace;
  border-top-left-radius: 12px;
  border-top-right-radius: 12px;
  border-bottom-left-radius: 4px;
  border-bottom-right-radius: 4px;
  overflow: hidden;
}

.card__title {
  color: white;
  font-weight: bold;
  padding: 20px 10px;
  border-bottom: 1px solid rgb(167, 159, 159);
  font-size: 0.95rem;
}

.card__data {
  font-size: 0.8rem;
  display: flex;
  justify-content: space-between;
  white-space: nowrap;
  border-right: 1px solid rgb(203, 203, 203);
  border-left: 1px solid rgb(203, 203, 203);
  border-bottom: 1px solid rgb(203, 203, 203);
}

.card__right {
  width: 60%;
  border-right: 1px solid rgb(203, 203, 203);
}

.card__left {
  width: 40%;
  text-align: end;
}

.item {
  padding: 3px 0;
  background-color: white;
}

.card__right .item {
  padding-left: 0.8em;
}

.card__left .item {
  padding-right: 0.8em;
}

.item:nth-child(even) {
  background: rgb(234, 235, 234);
}

    </style>
<body class="bg-gray-500">
    
                <?php
                    $select = "SELECT * FROM `storage` WHERE `id`= $product_id";
                    $show_two_product = mysqli_query($sql,$select);
                    if($show_two_product){
                        while($row = mysqli_fetch_array($show_two_product)){
                            $i = $row["id"];
                            $image = $row["image"];
                            $name = $row["name"];
                            $weight = $row["weight"];
                            $price = $row["price"];
                            $sell = $row["sell"];
                            $company = $row["company"];
                        }
                    }
                ?>
        <section class=" container mx-auto mt-24 mb-10 rounded-xl p-4 bg-white my-3 flex md:flex-row flex-wrap flex-col items-center justify-around gap-3">
            <div class="md:w-[50%] w-[100%]">
                <!-- From Uiverse.io by EcheverriaJesus --> 
                <div class="flex flex-col min-h-[50vh] justify-center items-center px-10 gap-5 p-3 bg-gray-800 rounded-lg md:flex-row">
                    <div class="flex justify-center items-center  duration-700 ">
                        <img class="w-[300px] rounded-sm" src="<?php echo $image?>" alt="">
                    </div>
                    <div class="max-w-sm h-auto space-y-3">
                    <div class="flex justify-center items-center sm:justify-between">
                        <h2 class="text-white text-2xl font-bold tracking-widest"><?php echo $company;?></h2>
                        <svg viewBox="0 0 24 24" height="20" width="20" xmlns="http://www.w3.org/2000/svg" class="hidden sm:flex duration-300 fill-white cursor-pointer"><path d="M16 2v17.582l-4-3.512-4 3.512v-17.582h8zm2-2h-12v24l6-5.269 6 5.269v-24z"></path></svg>
                    </div>
                    <p class="text-sm text-gray-200">Description: product information for sale.</p>
                    <div class="flex gap-6 items-center justify-center">
                        <p class="text-white font-bold text-lg">Rs <br> <?php echo $price?>/-</p>
                        <p class="text-white font-bold text-lg"><?php echo $name?></p>
                    </div>
                    <div class="flex justify-around items-center my-2">
                    <form action="<?php echo $_SERVER['PHP_SELF'];?>?product_id=<?php echo $product_id;?>" method="post">
                        <button name="buy_btn" class="px-2 bg-blue-600 p-1 rounded-md text-white font-semibold   hover:ring-2 ring-blue-400  duration-500">Buy Now</button>
                    </form>
                    </div>
                    </div>
                </div>
            </div>
            <div class="w-100">
                <div class="card">
                    <div class="card__title">PRODUCT INFORMATION</div>
                    <div class="card__data">
                        <div class="card__right">
                            <div class="item">id</div>
                            <div class="item">name</div>
                            <div class="item">company</div>
                            <div class="item">weight</div>
                            <div class="item">sell</div>
                            <div class="item">price</div>
                        </div>
                        <div class="card__left">
                            <div class="item"><?php echo $product_id;?></div>
                            <div class="item"><?php echo $name;?></div>
                            <div class="item"><?php echo $company?></div>
                            <div class="item"><?php echo $weight?></div>
                            <div class="item"><?php echo $sell?></div>
                            <div class="item"><?php echo $price?></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</body>
</html>
<?php
    if(isset($_POST['buy_btn'])){
        $vel = $sell + 1;
        $upd = "UPDATE `storage` SET `sell`= '$vel' WHERE `id` = $product_id";
        $result = mysqli_query($sql,$upd);
        header("location: http://localhost/php-project/index.php");
    }
?>
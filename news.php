<?php

include "header.php";
include "config/con1.php";
require_once "user-logedin.php";


?>
<link rel="stylesheet" type="text/css" href="css/navbar-body.css">
<link rel="stylesheet" type="text/css" href="css/index.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/news.css">
</head>
<body>
<?php include "cookie.php"; ?>

<section class="news">
    <div class="d-flex container">

        <div class="ml-5 news_first">
            <h5 class="my-2">Apply filters</h5>
            <p class="d-flex justify-content-between mt-5" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
                <a>Period </a>
                <i class="fas fa-angle-down p-2"></i>
            </p>
            <div class="row">
                <div class="col">
                    <div class="collapse multi-collapse" id="multiCollapseExample1">
                        <div class="card card-body">
                            <div class="items"><input type="checkbox"><span class="ml-2">Last week</span></div>
                            <div class="items"><input type="checkbox"><span class="ml-2">Last months</span></div>
                            <div class="items"><input type="checkbox"><span class="ml-2">Last 3 months</span></div>
                            <div class="items"><input type="checkbox"><span class="ml-2">Last 6 months</span></div>
                            <div class="items"><input type="checkbox"><span class="ml-2">All news</span></div>
                        </div>
                    </div>
                </div>

            </div>
            <p class="d-flex justify-content-between"  data-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample2">
                <a>Sports</a>
                <i class="fas fa-angle-down p-2"></i>
            </p>
            <div class="row">
                <div class="col">
                    <div class="collapse multi-collapse" id="multiCollapseExample2">
                        <div class="card card-body">
                            <?php
                                $sql="SELECT*FROM sports_type";
                                $query=mysqli_query($con,$sql);
                                while($row=mysqli_fetch_assoc($query)){
                                    echo "<div class='items'><input type='checkbox'><span class='ml-2'>".$row['sport_type']."</span></div>";
                                }

                            ?>

                        </div>
                    </div>
                </div>

            </div>
            <p  class="d-flex justify-content-between" data-toggle="collapse" href="#multiCollapseExample3" role="button" aria-expanded="false" aria-controls="multiCollapseExample3">
                <a>Producer</a>
                <i class="fas fa-angle-down p-2"></i>
            </p>
            <div class="row">
                <div class="col">
                    <div class="collapse multi-collapse" id="multiCollapseExample3">
                        <div class="card card-body">
                            <?php
                            $sql="SELECT*FROM sports_type";
                            $query=mysqli_query($con,$sql);
                            while($row=mysqli_fetch_assoc($query)){
                                echo "<div class='items'>".$row['sport_type']."</div>";
                            }

                            ?>

                        </div>
                    </div>
                </div>

            </div>
            <p class="d-flex justify-content-between" data-toggle="collapse" href="#multiCollapseExample4" role="button" aria-expanded="false" aria-controls="multiCollapseExample4" >
                <a>News type</a>
                <i class="fas fa-angle-down p-2"></i>
            </p>
            <div class="row">
                <div class="col">
                    <div class="collapse multi-collapse" id="multiCollapseExample4">
                        <div class="card card-body">
                            <?php
                            $sql="SELECT*FROM sports_type";
                            $query=mysqli_query($con,$sql);
                            while($row=mysqli_fetch_assoc($query)){
                                echo "<div class='items'>".$row['sport_type']."</div>";
                            }

                            ?>

                        </div>
                    </div>
                </div>

            </div>

        </div>



        <div class="d-flex flex-column news_second">
            <h1 class="mx-5">NEWS</h1>
            <div class="mx-5 news_item">
                <div class="d-flex justify-content-between my-2"><button class="mx-3 py-1 px-3 item_button">PANINI</button><span  class="mx-3">May 22,2021</span></div>
                <p class="p-2" >t is a long established fact that a reader will be distracted by the readable content of a
                    page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, </p>
            </div>
            <div class="mx-5 news_item">
                <div class="d-flex justify-content-between my-2"><button class="mx-3 py-1 px-3 item_button">PANINI</button><span  class="mx-3">May 22,2021</span></div>
                <p class="p-2" >t is a long established fact that a reader will be distracted by the readable content of a
                    page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, </p>
            </div>
            <div class="mx-5 news_item">
                <div class="d-flex justify-content-between my-2"><button class="mx-3 py-1 px-3 item_button">PANINI</button><span  class="mx-3">May 22,2021</span></div>
                <p class="p-2" >t is a long established fact that a reader will be distracted by the readable content of a
                    page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, </p>
            </div>
            <div class="mx-5 news_item">
                <div class="d-flex justify-content-between my-2"><button class="mx-3 py-1 px-3 item_button">PANINI</button><span  class="mx-3">May 22,2021</span></div>
                <p class="p-2" >t is a long established fact that a reader will be distracted by the readable content of a
                    page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, </p>
            </div>
        </div>

    </div>
</section>
<?php
include "footer.php";
?>
<!--<script src="js/news.js"></script>-->



</script>
</body>
</html>

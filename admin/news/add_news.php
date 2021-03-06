<?php
include "../../config/con1.php";
include "../heder.php";
$arr_producer=['UpperDeck', 'Panini', 'Topps', 'Leaf', 'SeReal', 'Other', 'All'];
$arr_news_type=['Portal news', 'Producer news', 'Releases news', 'Sports news', 'All'];
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sel="SELECT * FROM news WHERE id=$id";
    $res=mysqli_query($con, $sel);
    if(mysqli_num_rows($res)==1){
        $res_row=true;
        $row_this=mysqli_fetch_assoc($res);
    }
    else{
        $res_row=false;
    }
}
else{
    $res_row=false;
}

?>
    <body>
    <?php
    include "../menu.php";
    ?>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-7 add-bs" style="margin: 0 auto">
                    <div class="p-3 card stacked-form">
                        <!-- <button class="btn btn-primary">Add News</button> -->
                        <div class="card-header mb-4">
                            <h4 class="card-title">Add News</h4>
                        </div>
                        <form>
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" placeholder="title" value="<?= $res_row ? $row_this['title'] : '' ?>">
                            </div>
                            <div class="form-group">
                                <label for="discription">Discription</label>
                                <textarea class="form-control" id="discription" placeholder="description"><?= $res_row ? $row_this['discription'] : '' ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="sporttype">Sports type</label>
                                <select  class="form-control" id="sporttype">
                                    <?php

                                    $sql_news="SELECT*FROM sports_type";
                                    $query_news=mysqli_query($con,$sql_news);
                                    while($row=mysqli_fetch_assoc($query_news)){
                                        echo $row['sport_type']==$row_this['sport'] ?
                                             "<option selected>".$row['sport_type']."</option>" : 
                                             "<option>".$row['sport_type']."</option>";

                                    }
                                    ?>

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="producer">Producer</label>
                                <select  class="form-control" id="producer">
                                   <?php
                                   foreach ($arr_producer as $key => $value) {
                                    echo $value==$row_this['producer'] ?
                                        "<option selected>".$row_this['producer']."</option>" : 
                                        "<option>".$value."</option>";
                                   }
                                   ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="newstype">News type</label>
                                <select  class="form-control" id="newstype">
                                <?php
                                   foreach ($arr_news_type as $key => $value) {
                                    echo $value==$row_this['news_type'] ?
                                        "<option selected>".$row_this['news_type']."</option>" : 
                                        "<option>".$value."</option>";
                                   }
                                   ?>
                                </select>
                            </div>
                            <!-- <div class="form-group">
                                <label for="published">Published data</label>
                                <input type="date" id="published">
                            </div> -->
                          <input type='hidden' id="this-id" value="<?= $res_row ? $row_this['id'] : '' ?>">
                        </form>
                        
                        <button   class="btn btn-primary <?= $res_row ? 'updateNews' : 'addNews' ?> p-2" type="submit"  style="width:120px"><?= $res_row ? 'Update news' : 'Add news' ?></button>
                        <p  class="m-5 text-center" id="rezult"></p>
                    </div>
                </div>


                </div>
            </div>
        </div>
    </div>
    <?php
    include "../footer.php";
    ?>
   <script src="../my_js/add_news.js"></script>
   <script src="../my_js/update_news.js"></script>

    </body>
    </html>

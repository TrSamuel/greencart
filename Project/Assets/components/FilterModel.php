<!-- Modal -->


<div class="modal fade" id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <form class="modal-content" method="post">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle" style="color: #548302;">Filter</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                    style="background: none;border:none;" onclick="closeFlterBox()">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="wrapper">
                    <div>
                        <input name="txt_plant_name" class="form-control" type="text" style="background: none;"
                            id="txtPlantName" <?php if(isset($_SESSION['search_name'])){ ?> value="<?php echo $_SESSION['search_name'] ?>" <?php } ?> hidden><br>
                    </div>
                    <h6 style="color: #000;">Price</h6>
                    <fieldset class="filter-price">
                        <div class="price-field">
                            <input type="range" min="<?php
                            $selQuery = "select  min(plant_price) from tbl_plant";
                            $result = $conn->query($selQuery);
                            while ($row = mysqli_fetch_array($result)) {
                                echo $row['min(plant_price)'];
                            }
                            ?>" max="<?php
                            $selQuery = "select  max(plant_price) from tbl_plant";
                            $result = $conn->query($selQuery);
                            while ($row = mysqli_fetch_array($result)) {
                                echo $row['max(plant_price)'];
                            }
                            ?>" value="<?php
                            $selQuery = "select  min(plant_price) from tbl_plant";
                            $result = $conn->query($selQuery);
                            while ($row = mysqli_fetch_array($result)) {
                                echo $row['min(plant_price)'];
                            }
                            ?>" id="lower">

                            <input type="range" min="<?php
                            $selQuery = "select  min(plant_price) from tbl_plant";
                            $result = $conn->query($selQuery);
                            while ($row = mysqli_fetch_array($result)) {
                                echo $row['min(plant_price)'];
                            }
                            ?>" max="<?php
                            $selQuery = "select  max(plant_price) from tbl_plant";
                            $result = $conn->query($selQuery);
                            while ($row = mysqli_fetch_array($result)) {
                                echo $row['max(plant_price)'];
                            }
                            ?>" value="<?php
                            $selQuery = "select  max(plant_price) from tbl_plant";
                            $result = $conn->query($selQuery);
                            while ($row = mysqli_fetch_array($result)) {
                                echo $row['max(plant_price)'];
                            }
                            ?>" id="upper">
                        </div>
                        <div class="price-wrap">
                            <div class="price-container" style="height: 3em;">
                                <div class="price-wrap-1">
                                    <label for="one">Rs.</label>
                                    <input id="one" name="txt_min_price">
                                </div>
                                <div class="price-wrap_line">-</div>
                                <div class="price-wrap-2">
                                    <label for="two">Rs.</label>
                                    <input id="two" name="txt_max_price">

                                </div>
                            </div>
                            <div class="form-check form-check-inline" style="margin-top: -2em;margin-left: 6em;">
                                <input class="form-check-input" type="radio" name="radio_price_sort" id="inlineRadio1"
                                    value="asc">
                                <label class="form-check-label" for="inlineRadio1">Low to High</label>
                            </div>
                            <div class="form-check form-check-inline" style="margin-top: -2em;margin-left: 2em;">
                                <input class="form-check-input" type="radio" name="radio_price_sort" id="inlineRadio1"
                                    value="desc">
                                <label class="form-check-label" for="inlineRadio1">High to Low</label>
                            </div>
                        </div>
                    </fieldset>
                    <div style="margin-top: 2em;">
                        <h6 style="color: #000;">Plant Category</h6>
                        <select name="sel_plant_category" id="" class="form-select">
                            <option value="0">----Select----</option>
                            <?php
                            $selQuery = "select * from tbl_plant_category";
                            $result = $conn->query($selQuery);
                            if ($result->num_rows) {
                                while ($row = $result->fetch_assoc()) {
                                    ?>
                                    <option value="<?php echo $row['plant_category_name'] ?>">
                                        <?php echo $row['plant_category_name'] ?>
                                    </option>
                                    <?php
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <div style="margin-top: 2em;">
                        <h6 style="color: #000;">Shop</h6>
                        <select name="sel_shop" id="" class="form-select">
                            <option value="0">----Select----</option>
                            <?php
                            $selQuery = "select * from tbl_shop where shop_status = 1";
                            $result = $conn->query($selQuery);
                            if ($result->num_rows) {
                                while ($row = $result->fetch_assoc()) {
                                    ?>
                                    <option value="<?php echo $row['shop_name'] ?>">
                                        <?php echo $row['shop_name'] ?>
                                    </option>
                                    <?php
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <div style="margin-top: 2em;">
                        <h6 style="color: #000;">Reviews</h6>
                        <select name="sel_rating" id="" class="form-select">
                            <option value="0">----Select----</option>
                            <?php
                            for ($i = 4; $i >= 1; $i--) {
                                ?>
                                <option value="<?php echo $i ?>">
                                    <?php echo $i ?>&#9733; and above
                                </option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"
                    onclick="closeFlterBox()">Close</button>
                <button type="submit" name="btn_filter_submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
    </div>
</div>


<script src="../Assets/JS/User/UserFilter.js"></script>

<script>
    function closeFlterBox() {
        $('#exampleModalCenter').modal('hide')
    }
</script>

<?php ob_flush(); ?>
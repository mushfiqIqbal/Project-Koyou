
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Product Form
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form class="cmxform" role="form" id="product_form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="product_name">Product's Name</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fab fa-product-hunt"></i></span>
                                    <input type="text" id="product_name" name="product_name" class="form-control" placeholder="Product Name"/>
                                </div>
                                <!-- PHP Validation Error Message -->
                                <span class="error"><?php echo $nameErr;?></span>
                            </div>
                            <div class="form-group">
                                <label for="product_des">Product's Description</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fas fa-align-left"></i></span>
                                    <textarea class="form-control" rows="3" style="resize: none;" id="product_des" name="product_des"></textarea>
                                </div>
                                <!-- PHP Validation Error Message -->
                                <span class="error"><?php echo $desErr;?></span>
                            </div>
                            <div class="form-group">
                                <label for="product_price">Product's Price</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fas fa-yen-sign"></i></span>
                                    <input type="number" id="product_price" name="product_price" class="form-control" min="1" placeholder="Product Price"/>
                                </div>
                                <!-- PHP Validation Error Message -->
                                <span class="error"><?php echo $priceErr;?></span>
                            </div>
                            <div class="form-group">
                                <label for="product_quantity">Product's Quantity</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fas fa-sort-amount-up"></i></span>
                                    <input type="number" id="product_quantity" name="product_quantity" class="form-control" min="0" placeholder="Product Quantity"/>
                                </div>
                                <!-- PHP Validation Error Message -->
                                <span class="error"><?php echo $quantityErr;?></span>
                            </div>
                            <div class="form-group">
                                <label for="category">Product's Category</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fas fa-tags"></i></span>
                                    <select id="category" name="category" class="form-control">
                                        <option value="default">Select a Category</option>
                                        <?php
                                        $show_category = "SELECT * FROM `category`";
                                        if($result = mysqli_query($link,$show_category)){
                                            if(mysqli_num_rows($result) > 0){
                                            while($row = mysqli_fetch_array($result)) {
                                        ?>
                                        <option value="<?php echo $row['category'];?>"><?php echo $row['category'];?></option>
                                        <?php
                                        }
                                        mysqli_free_result($result);
                                        } else{
                                            echo "No records matching your query were found.";
                                        }
                                        } else{
                                            echo "ERROR: Could not able to execute $select_query. " . mysqli_error($link);
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Product's Status</label>
                                <br>
                                <label class="radio-inline">
                                    <input type="radio" name="product_status" id="active_product" value="Active" checked/>Active
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="product_status" id="inactive_product" value="Inactive"/>Inactive
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="product_image">Product's Image</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fas fa-images"></i></span>
                                    <input type="file" name="product_image" id="product_image" class="btn btn-github"/>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success" name="submit">Submit</button>
                            <button type="reset" class="btn btn-warning">Reset</button>
                        </form>
                    </div>
                </div>
                <!-- /.col-lg-6 (nested) -->
            </div>
            <!-- /.row (nested) -->
        </div>
        <!-- /.panel-body -->
    </div>
    <!-- /.panel -->
</div>
<!-- /.col-lg-12 -->

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Category Form
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form class="cmxform" role="form" id="category_form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                            <div class="form-group">
                                <label for="category_name">Category's Name</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fab fa-product-hunt"></i></span>
                                    <input type="text" id="category_name" name="category_name" class="form-control" placeholder="Category Name"/>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success" name="category_submit">Submit</button>
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
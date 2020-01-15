
<!-- Add Item Form Validation -->
<script>

    $().ready(function(){

        //my own rule for select validation
        $.validator.addMethod("valueNotEquals", function(value, element, arg){
            return arg !== value;
        }, "Value must not equal arg.");

        $("#product_form").validate({
            rules:{
                product_name: {
                    required:true,
                    minlength:6
                },
                product_des: {
                    maxlength : 500
                },
                product_price:{
                    required:true,
                    min:2
                },
                product_quantity:{
                    required:true,
                    min:1
                },
                category:{
                    valueNotEquals: "default"
                },
                product_image: {
                    required:true
                }
            },
            messages:{
                product_name: {
                    required: "*Please add a Product Name",
                    minlength:"*Product Name too short"
                },
                product_des: {
                    maxlength : "*Max length is 500 words"
                },
                product_price: {
                    required:"*Please add a Product Price",
                    min:"*Product Price must be greater than 1"
                },
                product_quantity: {
                    required:"*Please add the Product Quantity",
                    min:"*Add at least 1 Product"
                },
                category:{
                    valueNotEquals: "*Select a category"
                },
                product_image: {
                    required:"*Please add a Product Image"
                }
            },

            /*Error text customization*/
            highlight: function(element) {
                $(element).closest('.form-group').addClass('has-error');
            },
            unhighlight: function(element) {
                $(element).closest('.form-group').removeClass('has-error');
            },
            errorElement: 'span',
            errorClass: 'help-block',
            errorPlacement: function(error, element) {
                if(element.parent('.input-group').length) {
                    error.insertAfter(element.parent());
                }
                else {
                    error.insertAfter(element);
                }
            }
        });
    });
</script>

<!-- Update Form Validation -->
<script>
    $().ready(function(){
        $("#update_form").validate({
            rules:{
                product_name: {
                    required:true,
                    minlength:6
                },
                product_des: {
                    maxlength : 500
                },
                product_price:{
                    required:true,
                    min:2
                },
                product_quantity:{
                    required:true,
                    min:1
                },
                category:{
                    valueNotEquals: "default"
                },
                product_image: {
                    required:true
                }
            },
            messages:{
                product_name: {
                    required: "*Please add a Product Name",
                    minlength:"*Product Name too short"
                },
                product_des: {
                    maxlength : "*Max length is 500 words"
                },
                product_price:{
                    required:"*Please add a Product Price",
                    min:"*Product Price must be greater than 1"
                },
                product_quantity:{
                    required:"*Please add the Product Quantity",
                    min:"*Add at least 1 Product"
                },
                category:{
                    valueNotEquals: "*Select a category"
                },
                product_image: {
                    required:"*Please add a Product Image"
                }
            },

            /*Error text customization*/
            highlight: function(element) {
                $(element).closest('.form-group').addClass('has-error');
            },
            unhighlight: function(element) {
                $(element).closest('.form-group').removeClass('has-error');
            },
            errorElement: 'span',
            errorClass: 'help-block',
            errorPlacement: function(error, element) {
                if(element.parent('.input-group').length) {
                    error.insertAfter(element.parent());
                }
                else {
                    error.insertAfter(element);
                }
            }
        });
    });
</script>

<!-- Add Category Validation -->
<script>
    $().ready(function(){
        $("#category_form").validate({
            rules:{
                category_name: {
                    required:true
                }
            },
            messages:{
                category_name: {
                    required: "*Please add a Category Name"
                }
            },

            /*Error text customization*/
            highlight: function(element) {
                $(element).closest('.form-group').addClass('has-error');
            },
            unhighlight: function(element) {
                $(element).closest('.form-group').removeClass('has-error');
            },
            errorElement: 'span',
            errorClass: 'help-block',
            errorPlacement: function(error, element) {
                if(element.parent('.input-group').length) {
                    error.insertAfter(element.parent());
                }
                else {
                    error.insertAfter(element);
                }
            }
        });
    });
</script>
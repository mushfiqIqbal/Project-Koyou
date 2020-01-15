
<!-- The BUGGY jQuery <script src="../bower_components/jquery/dist/jquery.min.js"></script> -->

<!-- Bootstrap Core JavaScript -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="bower_components/raphael/raphael-min.js"></script>
<script src="bower_components/morrisjs/morris.min.js"></script>
<script src="js/morris-data.js"></script>

<!-- DataTables JavaScript -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/dt-1.10.18/r-2.2.2/datatables.min.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.10.18/r-2.2.2/datatables.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="dist/js/sb-admin-2.js"></script>

    <script>
    $(document).ready(function() {
        $('#inventory_datatable').DataTable({
                responsive: true,
                ordering: false
        });
    });
    </script>

    <script>
        /*$(document).ready(function() {
            $('#product_des').summernote({
                tabsize: 2,
                height: 100
            });
        });*/
    </script>
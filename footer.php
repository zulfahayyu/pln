<!-- Javascript -->
<script>
var base_url='<?= $site_url ?>';
</script>
<script src="<?= $site_url ?>/assets/bundles/libscripts.bundle.js"></script>
<script src="<?= $site_url ?>/assets/bundles/vendorscripts.bundle.js"></script>

<!-- <script src="<?= $site_url ?>/assets/vendor/toastr/toastr.js"></script> -->
<script src="<?= $site_url ?>/assets/bundles/chartist.bundle.js"></script>
<script src="<?= $site_url ?>/assets/bundles/knob.bundle.js"></script> <!-- Jquery Knob-->

<script src="<?= $site_url ?>/assets/vendor/toastr/toastr.js"></script>
<script  src="<?= $site_url ?>/assets/bundles/datatablescripts.bundle.js"></script>
<script src="<?= $site_url ?>/assets/js/pages/tables/jquery-datatable.js"></script>

<script src="<?= $site_url ?>/assets/vendor/summernote/dist/summernote.js"></script>

<script src="<?= $site_url ?>/assets/vendor/jquery-knob/jquery.knob.min.js"></script> <!-- Jquery Knob Plugin Js --> 

<script src="<?= $site_url ?>/assets/js/pages/charts/jquery-knob.js"></script>


<script src="<?= $site_url ?>/assets/bundles/mainscripts.bundle.js"></script>
<script src="<?= $site_url ?>/assets/js/index.js"></script>
<!-- DATE PICKER -->
<script src="<?= $site_url ?>/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap datepicker Plugin Js -->
<!-- DRAG&DROP -->
<script src="<?= $site_url ?>/assets/vendor/dropify/js/dropify.min.js"></script>
<script src="<?= $site_url ?>/assets/js/pages/forms/dropify.js"></script>
<!-- TODOLIST -->
<script src="<?= $site_url ?>/assets/bundles/jvectormap.bundle.js"></script> <!-- JVectorMap Plugin Js -->
<script src="<?= $site_url ?>/assets/bundles/morrisscripts.bundle.js"></script><!-- Morris Plugin Js -->
<script src="<?= $site_url ?>/assets/vendor/nestable/jquery.nestable.js"></script> <!-- Jquery Nestable -->
<script src="<?= $site_url ?>/assets/js/pages/ui/sortable-nestable.js"></script>
<!-- CALENDAR -->
<script src="<?= $site_url ?>/assets/bundles/fullcalendarscripts.bundle.js"></script>
<!--/ calender javascripts -->
<script src="<?= $site_url ?>/assets/vendor/fullcalendar/fullcalendar.js"></script>
<!--/ calender javascripts -->
<script src="<?= $site_url ?>/assets/js/pages/calendar.js"></script>
<!-- WIDGET SOCIAL -->



<script src="<?= $site_url ?>/assets/js/function.js" type="text/javascript"></script>

<script>
    $(function() {
        toastr.options.timeOut = "5000";
        toastr.options.closeButton = true;
        toastr.options.positionClass = 'toast-top-right';
        toastr['<?= $_SESSION['type'] ?>']('<?= $_SESSION['message'] ?>');
    });
</script>
<?php
unset($_SESSION['type']);
unset($_SESSION['message']);

?>
</body>

<!-- Mirrored from thememakker.com/templates/lucid/hr/html/light/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Dec 2018 05:19:12 GMT -->

</html>
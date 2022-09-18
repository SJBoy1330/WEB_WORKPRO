<script>
    var hostUrl = "<?= base_url(); ?>assets/";
</script>
<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="<?= base_url(); ?>assets/plugins/global/plugins.bundle.js"></script>
<script src="<?= base_url(); ?>assets/js/scripts.bundle.js"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Page Vendors Javascript(used by this page)-->
<script src="<?= base_url(); ?>assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
<script src="<?= base_url(); ?>assets/plugins/custom/datatables/datatables.bundle.js"></script>
<!--end::Page Vendors Javascript-->
<!--begin::Page Custom Javascript(used by this page)-->
<script src="<?= base_url(); ?>assets/js/custom/widgets.js"></script>
<script src="<?= base_url(); ?>assets/js/custom/apps/chat/chat.js"></script>
<script src="<?= base_url(); ?>assets/js/custom/modals/upgrade-plan.js"></script>
<script src="<?= base_url(); ?>assets/js/custom/modals/create-campaign.js"></script>
<script src="<?= base_url(); ?>assets/js/custom/modals/create-app.js"></script>
<script src="<?= base_url(); ?>assets/js/custom/modals/users-search.js"></script>
<!--end::Page Custom Javascript-->
<?php

if (isset($js_add) && is_array($js_add)) {
    foreach ($js_add as $js) {
        echo $js;
    }
} else {
    echo (isset($js_add) && ($js_add != "") ? $js_add : "");
}

?>
<!--end::Javascript-->
</body>
<!--end::Body-->

</html>
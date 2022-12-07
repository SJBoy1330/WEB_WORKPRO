<script>
    var BASE_URL = "<?= base_url(); ?>";
    var hostUrl = "<?= base_url(); ?>assets/";
    var css_button = 'btn btn-block btn-md btn-alert';
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

<script src="<?= base_url(); ?>assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js"></script>
<script src="<?= base_url(); ?>assets/plugins/custom/ckeditor/ckeditor-inline.bundle.js"></script>
<script src="<?= base_url(); ?>assets/plugins/custom/ckeditor/ckeditor-balloon.bundle.js"></script>
<script src="<?= base_url(); ?>assets/plugins/custom/ckeditor/ckeditor-balloon-block.bundle.js"></script>
<script src="<?= base_url(); ?>assets/plugins/custom/ckeditor/ckeditor-document.bundle.js"></script>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript" src="<?= base_url('assets/js/page/function.js') ?>"></script>

<script type="text/javascript">
    function openCity(evt, cityName, id = null, text = 'unknown') {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
        if (id != null) {
            $(id).text(text);
        }
    }
    document.getElementById("defaultOpen").click();
</script>
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

</body>
<!--end::Body-->

</html>
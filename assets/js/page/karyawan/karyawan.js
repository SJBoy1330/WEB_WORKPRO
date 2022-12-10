function filter(pengganti) {
    var change = document.querySelector('#' + pengganti);
    var role = $('#role').val();
    var divisi = $('#divisi').val();
    var status = $('#status').val();
    const prop_display = document.querySelectorAll("#parent_karyawan .target_search");

    prop_display.forEach((div) => {
        let val_status = div.getAttribute("data-status");
        let val_divisi = div.getAttribute("data-divisi");
        let val_role = div.getAttribute("data-role");
        if (((val_status == status) || (status == "all")) && ((val_divisi == divisi) || (divisi == "all")) && ((val_role == role) || (role == "all"))) {
            div.classList.remove("hiding"); //first remove the hide class from the image
            div.classList.add("showing"); //add show class in image
        } else {
            div.classList.add("hiding"); //add hide class in image
            div.classList.remove("showing"); //remove show class from the image
        }
    });

    var count = $('.target_search.showing').length;
    if (count <= 0) {
        change.classList.remove('hiding');
        change.classList.add('showing');
    } else {
        change.classList.add('hiding');
        change.classList.remove('showing');
    }
}
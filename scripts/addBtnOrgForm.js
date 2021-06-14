function addOrgForm(){
    document.getElementById("add_org_row").innerHTML = "<td>-</td>" +
        "<td><input style='border:none' type='text' required name='org_name' form='org_add_form'></td>" +
        "<td><input style='border:none' type='text' required name='org_link' form='org_add_form'></td>" +
        "<td><input style='border:none' type='text' required name='org_image_url' form='org_add_form'></td>" +
        "<td><input style='border:none' type='text' required name='org_description_Gr' form='org_add_form'></td>" +
        "<td><input style='border:none' type='text' required name='org_description_En' form='org_add_form'></td>" +
        "<td><button class='btn btn-success' type='submit' form='org_add_form'></td>"
}
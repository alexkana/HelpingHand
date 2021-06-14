function addUserForm(){
    document.getElementById("add_row").innerHTML = "<td>-</td>" +
        "<td><input style='border:none' type='text' required name='username' form='user_add_form'></td>" +
        "<td><input style='border:none' type='email' required name='email' form='user_add_form'></td>" +
        "<td><input style='border:none' type='text' required name='password' form='user_add_form'></td>" +
        "<td><button class='btn btn-success' type='submit' form='user_add_form'></td>"
}
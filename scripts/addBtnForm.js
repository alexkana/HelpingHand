function addForm(){
    document.getElementById("add_row").innerHTML = "<td>-</td>" +
        "<form action='../phpFiles/addbutton.php' method='post'>" +
        "<td><input style='border:none' type='text' name='username'></td>" +
        "<td><input style='border:none' type='text' name='password'></td>" +
        "<td><button type='submit'></td>" +
        "</form>"
}
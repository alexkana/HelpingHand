function editInputField(){
    let user_value = document.getElementById("user_field").innerText;
    let email_value = document.getElementById("email_field").innerText;
    let pass_value = document.getElementById("pass_field").innerText;
    let desc_value = document.getElementById("description").innerText;
    let save_btn = document.getElementById("savebtn")
    let edit_btn = document.getElementById("edit")
    save_btn.disabled = false;
    edit_btn.disabled = true;

    document.getElementById("user_field").innerHTML = "<input id='input1' style='border:none' type='text' required name='username' form='edit_user'>";
    document.getElementById("input1").value = user_value;
    document.getElementById("email_field").innerHTML = "<input id='input2' style='border:none' type='text' required name='email' form='edit_user'>";
    document.getElementById("input2").value = email_value;
    document.getElementById("pass_field").innerHTML = "<input id='input3' style='border:none' type='text' required name='pass' form='edit_user' >";
    document.getElementById("input3").value = pass_value;
    document.getElementById("description").innerHTML = "<input id='input4' style='border:none' type='text' name='desc' form='edit_user'>";
    document.getElementById("input4").value = desc_value;

}


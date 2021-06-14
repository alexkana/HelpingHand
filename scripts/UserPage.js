function editInputField() {
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
    document.getElementById("description").innerHTML = "<input id='input4' type='text' name='desc' form='edit_user'>";
    document.getElementById("input4").value = desc_value;
}

function checkLanguageText() {
    let text1, text2, text3,text4,text5,text6,text7;
    if (sessionStorage.getItem('language') === 'en') {
        text1 = "User name";
        text2 = "password";
        text3 = "Description";
        text4 = "Disconnect";
        text5 = "Delete Account";
        text6 = "Edit"
        text7 = "Save changes"
    } else {
        text1 = "Όνομα Χρήστη";
        text2 = "Κωδικός Πρόσβασης";
        text3 = "Περιγραφή";
        text4 = "Αποσύνδεση";
        text5 = "Διαγραφή Λογαριασμού";
        text6 = "Επεξεργασία";
        text7 = "Αποθήκευση Αλλαγών";
    }

    document.getElementById("text1").innerHTML = text1;
    document.getElementById("text2").innerHTML = text2;
    document.getElementById("text3").innerHTML = text3;
    document.getElementById("disco").innerHTML = text4;
    document.getElementById("del").innerHTML = text5;
    document.getElementById("edit").innerHTML = text6;
    document.getElementById("savebtn").innerHTML = text7;

}



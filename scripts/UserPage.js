function editInputField(){

    if (document.getElementById("edit").innerText =="Επεξεργασία") {

        let user_value = document.getElementById("user_field").innerText;
        let email_value = document.getElementById("email_field").innerText;
        let pass_value = document.getElementById("pass_field").innerText;


        document.getElementById("user_field").innerHTML = "<input id='input1' style='border:none' type='text' required name='username' >";
        document.getElementById("input1").value = user_value;
        document.getElementById("email_field").innerHTML = "<input id='input2' style='border:none' type='text' required name='email' >";
        document.getElementById("input2").value = email_value;
        document.getElementById("pass_field").innerHTML = "<input id='input3' style='border:none' type='text' required name='pass' f>";
        document.getElementById("input3").value = pass_value;
        document.getElementById("edit").innerText = "Απόθηκευση Αλλαγών";
    }
    else{

        document.getElementById("user_field").innerHTML ="<p>" + document.getElementById("input1").value + "<p>"
        document.getElementById("email_field").innerHTML ="<p>" + document.getElementById("input2").value + "<p>"
        document.getElementById("pass_field").innerHTML ="<p>" + document.getElementById("input3").value + "<p>"
        document.getElementById("edit").innerText = "Επεξεργασία";

    }

}

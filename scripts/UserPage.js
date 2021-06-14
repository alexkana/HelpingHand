function editInputField(){

    if (document.getElementById("edit").innerText ==="Επεξεργασία") {

        let user_value = document.getElementById("user_field").innerText;
        let email_value = document.getElementById("email_field").innerText;
        let pass_value = document.getElementById("pass_field").innerText;
        let desc_value = document.getElementById("description").innerText;

        document.getElementById("user_field").innerHTML = "<input id='input1' style='border:none' type='text' required name='username' >";
        document.getElementById("input1").value = user_value;
        document.getElementById("email_field").innerHTML = "<input id='input2' style='border:none' type='text' required name='email' >";
        document.getElementById("input2").value = email_value;
        document.getElementById("pass_field").innerHTML = "<input id='input3' style='border:none' type='text' required name='pass' >";
        document.getElementById("input3").value = pass_value;
        document.getElementById("description").innerHTML = "<input id='input4' rows=6 style='border:none' type='text' required name='desc' >";
        document.getElementById("input4").value = desc_value;
        document.getElementById("edit").innerText = "Απόθηκευση Αλλαγών";
        document.getElementById("edit").setAttribute('type','submit')


    }
    else{

        document.getElementById("user_field").innerHTML ="<p>" + document.getElementById("input1").value + "</p>"
        document.getElementById("email_field").innerHTML ="<p>" + document.getElementById("input2").value + "</p>"
        document.getElementById("pass_field").innerHTML ="<p>" + document.getElementById("input3").value + "</p>"
        document.getElementById("description").innerHTML = "<textarea rows='6'>" + document.getElementById("input4").value + "</textarea>";
        document.getElementById("edit").innerText = "Επεξεργασία";
        document.getElementById("edit").setAttribute('type',"button")


    }
}


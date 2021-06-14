<?php
echo '<div id="navigation">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="../images/logo.png" heigth="90px" width="90px"
                                                  class="d-inline-block align-top"
                                                  onclick="window.location = \'mainpage.php\'" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a id="item1" class="nav-link" aria-current="page" href="../pages/mainpage.php"></a>
                    </li>
                    <li class="nav-item">
                        <a id="item2" class="nav-link" href="../pages/AboutUs.php"></a>
                    </li>
                    <li class="nav-item">
                        <a id="item3" class="nav-link" href="../pages/Organization.php"></a>
                    </li>
                    <li  class="nav-item">
                        <a id="item4" class="nav-link" href="../pages/contact.php"></a>
                    </li>
                    <li class="nav-item">
                        <a id="item5" class="nav-link" href="../pages/LoginPage.php"></a>
                    </li>
                    <li class="nav-item">
                        <a id="item6" class="nav-link" href="../pages/UserPage.php"></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="lang_selector" class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a onclick="sessionStorage.setItem(\'language\',\'el\'); trans_navbar(); checkLanguageText();" href="#" class="dropdown-item">
                                <img class="flag_icon" src="../images/flag-icons/greece.png" alt="">&nbsp Ελληνικά
                            </a>
                            <a onclick="sessionStorage.setItem(\'language\',\'en\'); trans_navbar(); checkLanguageText();" href="#" class="dropdown-item">
                                <img class="flag_icon" src="../images/flag-icons/united-states.png" alt="">&nbsp English
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <script>
    
        console.log("before");
 
     if(sessionStorage.getItem("showProfile") === null || sessionStorage.getItem("showProfile") === "false"){
         console.log("should be hidden")
          document.getElementById("item6").style.display = "none";
         document.getElementById("item5").style.display = "block";
        sessionStorage.setItem("showProfile","false");
    }else if(sessionStorage.getItem("showProfile") === "true"){
         document.getElementById("item6").style.display = "block";
         document.getElementById("item5").style.display = "none";
        console.log("Should be visible")
    }
    
    
    

//    console.log("before");
// 
//     if(sessionStorage.getItem("myvariable") === null){
//         console.log("inside")
//          document.getElementById("item6").style.display = "none";
//        sessionStorage.setItem("myvariable","1");
//    }else if(sessionStorage.getItem("myvariable") === "1"){
//        console.log("more than once")
//    }

    </script>


     

 
</div>
';


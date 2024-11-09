

     let password = document.getElementById("password");
      let repassword = document.getElementById("repassword");
      let passwordToggle = document.getElementById("passwordToggle");
      let repasswordToggle = document.getElementById("repasswordToggle");
passwordToggle.onclick = function () { 
  if (password.type == "password") {
    password.type = "text";
    passwordToggle.src = "img/eye.svg";
  } else {
    password.type = "password";
    passwordToggle.src = "img/eye-slash.svg";    };

    repasswordToggle.onclick = function () {
       if (repassword.type == "password") {
         repassword.type = "text";
         repasswordToggle.src = "img/eye.svg";
       } else {
         repassword.type = "password";
         repasswordToggle.src = "img/eye-slash.svg";
       }
      }
     };

     alert("hii")



    //  document.getElementById("tel_id").addEventListener("keydown",(e)=>{
    //     let keys= e.key
    //     if(isNaN(keys)){
          
    //     }
        
    //    })


















      //function handleToggle(pw,pwi) {
      //  if (pw.type == "password") {
      //    pw.type = "text";
      //    pwi.src = "img/eye.svg";
      //  } else {
      //    pw.type = "password";
      //    pwi.src = "img/eye-slash.svg";
      //  }
      //};
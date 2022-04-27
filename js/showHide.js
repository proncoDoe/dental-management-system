function showFunction() {
  let x = document.getElementById("showPassword");
  let y = document.getElementById("hide1");
  let z = document.getElementById("hide2");

  if (x.type === "password") {
    x.type = "text";
    y.style.display = "block";
    z.style.display = "none";
  } else {
    x.type = "password";
    y.style.display = "none";
    z.style.display = "block";
  }
}

{
  /* function show(){


        //     let showPassword = document.getElementById('showPassword');
        //     let icon = document.querySelector('.icon');

        //     if(showPassword.type === "password"){

        //       showPassword.type = "text";

        //     //   showPassword.style.marginTop = "5px";
        //       icon.style.color = "#7f2092";

        //     }else{

        //          showPassword.type = "password";

        //             icon.style.color = "#008ed6";
        //     }

        // }
        
        

 */
}

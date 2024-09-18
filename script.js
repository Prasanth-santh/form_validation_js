let id = (id) => document.getElementById(id);
let error=(error)=>document.getElementsByClassName(error);
let uname=id("uname"),
    form = id("form"),
    email=id("email"),
    pass=id("pass"),
    mobile=id("mobile"),
    gender = document.getElementsByName("gender"),
    address=id("address"),
    errors=error("error");
//  console.log(uname);
 console.log(errors);
 
//  let user=document.getElementById("uname").innerText;
//  console.log(user);
function show(){
    var a=document.getElementById('pass');
  
    if(a.type==="password"){
        a.type="text";
        document.getElementsByClassName('fa-eye-slash')[0].style="display:none;"
        document.getElementsByClassName('fa-eye')[0].style="opacity:1;"
    }
    else{
        a.type="password"
        document.getElementsByClassName('fa-eye')[0].style="display:none;"
        document.getElementsByClassName('fa-eye-slash')[0].style="display:inline;"
      }
  }
 
     form.addEventListener("submit", (e) => {
        e.preventDefault();

        let valid = true;

        // Clear previous error messages
        for (let i = 0; i < errors.length; i++) {
            errors[i].innerHTML = "";
        }
    
        // Username validation
        if (uname.value === "" || uname.value == null) {
            errors[0].innerHTML = "Must enter your name";
            errors[0].style.color = "red";
            valid = false;
        }
    
        // Email validation
        const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
        if (!emailPattern.test(email.value)) {
            errors[1].innerHTML = "Enter a valid email";
            errors[1].style.color = "red";
            valid = false;
        }
    
        // Password validation
        const strongPasswordPattern = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\W).{8,}$/;
        if (!strongPasswordPattern.test(pass.value)) {
            errors[2].innerHTML = "Password must be strong (include uppercase, lowercase, digit, and special character)";
            errors[2].style.color = "red";
            valid = false;
        }
    
        // Mobile number validation
        if (mobile.value.length !== 10 || isNaN(mobile.value)) {
            errors[3].innerHTML = "Mobile number must be 10 digits";
            errors[3].style.color = "red";
            valid = false;
        }
    
        // Address validation
        if (address.value === "" || address.value == null) {
            errors[4].innerHTML = "Must enter your address";
            errors[4].style.color = "red";
            valid = false;
        }
    
        // Gender validation
        let genderSelected = false;
        for (let i = 0; i < gender.length; i++) {
            if (gender[i].checked) {
                genderSelected = true;
                break;
            }
        }
        if (!genderSelected) {
            errors[5].innerHTML = "Must select your gender";
            errors[5].style.color = "red";
            valid = false;
        }
    
        if (valid) {
            // Submit the form via AJAX
            let formData = new FormData(document.getElementById("form"));
    
            fetch('process.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                document.getElementById("result").innerHTML = data;
            })
            .catch(error => console.error('Error:', error));
        }

    });

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="overall">
         <form action="index.php" method="post" id="form">
            <div class="container">
                <label for="uname"> Name : </label>
                <input type="text" name="uname" id="uname" placeholder="Enter name">
                <i class="fas fa-user"></i>
                <p class="error"></p>
            </div>
            <div class="container">
                <label for="email"> Email Address: </label>
                <input type="text" name="email" id="email" placeholder="Enter email">
                <i class="far fa-envelope"></i>
                <p class="error"></p>
            </div>
            <div class="container">
            <label for="pass"> Password :</label>
            <input type="password" name="pass" placeholder="enter here" id="pass" />
            <i class="fa-solid fa-eye show" onclick="show()"></i>
            <i class="fa-regular fa-eye-slash hide" onclick="show()"></i>
                <p class="error"></p>
            </div>
            <div class="container">
                <label for="mobile"> Mobile no: </label>
                <input type="number" name="mobile" id="mobile" placeholder="Enter Mobile no">
                <p class="error"></p>
            </div>
            <div class="container">
                <label for="address"> Address : </label>
                <textarea type="text" name="address" id="address"> </textarea>
                <p class="error"></p>
            </div>
            <div class="container">
                <label for="gender"> Gender : </label>
                <div class="rad">
                    <div>
                        <input type="radio" id="male" name="gender" class="radio1" value="male">
                        <label for="male">Male</label>
                        <br>
                        <input type="radio" id="female" name="gender" class="radio1" value="female">
                        <label for="female">Female</label>
                        <br>
                    </div>
                </div>
                <p class="error"></p>
            </div>
            <button id="btn" type="submit" name="submit">Submit</button>
        </form>
        <div id="result"></div>
    </div>
    
    <script src="./script.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation and MySQL Storage</title>
    <link rel = "stylesheet" href = "styles.css">

</head>

<body>
    <div class = "form-container">
        <form id = "sign-up" name = "sign_up" method = "post" action = "store_data.php" target = "_blank" onsubmit = "return validateForm()">
            <div class = "input-field">
                <label for = "userid"> User id : </label>
                <input type = "userid" id = "userid" name = "userid" required><br>
                <span class = "alert-msg"></span>
            </div>

            <div class = "input-field">
                <label for = "password"> Password : </label>
                <input type="password" id="password" name="password" required><br>
                <span class="alert-msg"></span>
            </div>

            <div class = "input-field">
                <label for = "name"> Name : </label>
                <input type = "name" id = "name" name = "name" required><br>
                <span class = "alert-msg"></span>
            </div>

            <div class = "input-field">
                <label for = "address"> Address : </label>
                <input type="address" id= "address" name="address" required><br>
                <span class="alert-msg"></span>
            </div>

            <div class = "input-field">
                <label for = "email"> Email :</label>
                <input type = "email" id = "email" name = "email" required><br>
                <span class = "alert-msg"></span>
            </div>

            <div class = "input-field">
                <label for="country">Country: </label>
                <select id="country" name="country" required>
                <option value= "" style="display: none;">Please select a country</option>
                <option value="USA">USA</option>
                <option value="Canada">Canada</option>
                <option value="UK">UK</option>
                <option value="India">India</option>
                </select>
            </div>

            <div class = "input-field">
                <label for = "zipcode"> Zip Code : </label>
                <input type="number" id= "zipcode" name="zipcode" required><br>
                <span class="alert-msg"></span>
            </div>

            <div class = "input-field">
                <label for="sex"> Sex : </label>
                <input type="radio" id="male" name="sex" value="male" required>
                <label for="male">Male</label>
                <input type="radio" id="female" name="sex" value="female" required>
                <label for="female">Female</label>

            </div>

            <div class = "input-field">
                <label for="language"> Language : </label>
                <input type="checkbox" id="english" name="english" value="english">
                <label for="english">English</label>
                <input type="checkbox" id="nonenglish" name="nonenglish" value="nonenglish">
                <label for="nonenglish">Non English</label>

            </div>

            <div class = "input-field">
                <label for = "about"> About : </label>
                <input type="textarea" id= "about" name="about"><br>
                <span class="alert-msg"></span>
            </div>
            
            <input type = "submit" value = "Submit">
        </form>
    </div>

    <script>
        document.getElementById("sign-up")
        .addEventListener("submit",
        function (event)
        {
            event.preventDefault();
            if(validateForm())
            {
                this.submit();
            }

            else
            {
                return false;
            }

        });

        function validateForm(event) {
            var userid = document.getElementById('userid').value;
            var password = document.getElementById('password').value;
            var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;
              
            const useridRegex = /^.{5,12}$/; 
            const passwordRegex = /^(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[!@#$%^&*]).{8,}$/; 
            const nameRegex = /^[a-zA-Z]+$/;
            const emailRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

            let errorMessage = "";

            if (!useridRegex.test(userid)) {
                errorMessage = "Invalid userid. Userid must be within 8 to 12 characters.\n";
                document.getElementsByClassName("alert-msg")[0].innerHTML = errorMessage; // Corrected index for userid error message
                document.getElementById("userid").style.outline = "2px solid red";
            } else {
                document.getElementsByClassName("alert-msg")[0].innerHTML = ""; // Clear error message
                document.getElementById("userid").style.outline = "2px solid green";
            }

            if (!passwordRegex.test(password)) {
                errorMessage = "Invalid password. Password must be at least 8 characters long and contain a lowercase letter, an uppercase letter, a number, and a special character.\n";
                document.getElementsByClassName("alert-msg")[1].innerHTML = errorMessage; 
                document.getElementById("password").style.outline = "2px solid red";
            } else {
                document.getElementsByClassName("alert-msg")[1].innerHTML = "";
                document.getElementById("password").style.outline = "2px solid green";
            }

            if (!nameRegex.test(name)) {
                errorMessage = "Invalid name. Name must be alphabets only.\n";
                document.getElementsByClassName("alert-msg")[2].innerHTML = errorMessage; 
                document.getElementById("name").style.outline = "2px solid red";
            } else {
                document.getElementsByClassName("alert-msg")[2].innerHTML = ""; 
                document.getElementById("name").style.outline = "2px solid green";
            }

            document.getElementById("address").style.outline = "2px solid green";

            if (!emailRegex.test(email)) {
                errorMessage = "Invalid email.\n";
                document.getElementsByClassName("alert-msg")[4].innerHTML = errorMessage; 
                document.getElementById("email").style.outline = "2px solid red";
            } else {
                document.getElementsByClassName("alert-msg")[4].innerHTML = ""; 
                document.getElementById("email").style.outline = "2px solid green";
            }
        
            document.getElementById("country").style.outline = "2px solid green";
            document.getElementById("zipcode").style.outline = "2px solid green";
            document.getElementById("about").style.outline = "2px solid green";

            if (errorMessage === '') {
                return true;
            } else {
                return false;
            }
        }

    </script>  


</body>  


</html>

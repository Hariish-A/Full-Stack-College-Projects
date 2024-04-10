<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande",
                "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
            /* height: 100vh; */
        }

        .form-container {
            display: flex;
            flex-direction: column;
            background-color: #e8e5de;
            max-width: fit-content;
            padding: 20px;
            margin-top: 20px;
        }

        .about-form {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            max-width: 600px;
        }

        .about-form h1, .about-form p {
            margin: 10px 0;
            font-weight: 100;
        }     

        .about-form hr {
            width: 100%; 
            /* border-top: 1px solid #000; */
        }

        .user-info {
            max-width: 600px;
            text-align: left;
            display: flex;
            flex-wrap: wrap;
        }

        .input-group {
            display: inline-flex;
            flex-basis: 100%;
        }

        .input-group p {
            width: 50%
        }

        .user-info p {
            font-weight: bold;
            margin-bottom: 8px;
        }

        .user-info .asterisk {
            color: red;
        }

        .user-info input {
            background-color: #ebd589;
            border: none;
            border-radius: 2px;
            padding: 15px;
            flex: 1;
            box-sizing: border-box;
            margin-right: 10px;
            width: 300px;
            /* width: calc(50% - 2.5px); */
        }

        .user-info input[type="text"] {
            width: calc(100% - 15px); /
        }

        .user-info input[type="email"],
        .user-info input[type="tel"] {
            width: calc(100% - 15px);
        }

        .item-container {
            display: flex;
            align-items: flex-start;
        }

        .checkbox-container input[type="checkbox"] {
            /* margin-right: 5px; */
            width: 15px;
            height: 15px;
            border-radius: 3px;
            outline: none;
            cursor: pointer;
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            accent-color: #ebd589;
            background-color: #ebd589;
        }
        
        .checkbox-container input[type="checkbox"]:checked {
            appearance: checkbox;
            -webkit-appearance: checkbox;
            -moz-appearance: checkbox;
        }

        .item-container .item-detail p {
            margin: 0; 
        }

        .item-container .checkbox-container,
        .item-container img,
        .item-container .item-detail {
            margin-right: 20px;
        }

        .item-detail p:first-of-type {
            font-weight: bold; 
            margin-bottom: 3px;
        }

        .item-detail p:nth-of-type(2) {
            font-size: x-small; 
            color: gray;
            margin-bottom: 7px;
        }

        .item-detail p:nth-of-type(3) {
            font-weight: bold; 
            font-size: 2px larger;
            margin-bottom: 12px;
        }

        .item-detail p:last-of-type {
            font-size: x-small; 
            color: gray;
            margin-bottom: 5px;
        }

        .item-detail input[type="number"] {
            padding: 5px;
            width: calc(2em + 5px); 
            height: 2em;
            padding-right: 10px;
            border: none;
        }

        #size {
            width: 100%;
            padding: 10px; 
            background-color: #ebd589; 
            color: gray; 
            border: none; 
            border-radius: 4px;
        }

        .item-size {
            /* margin: 10px; */
            margin-bottom: 30px;
        }

        .item-size p {
            font-size: small;
            font-weight: 900;
        }

        .alert-msg {
            font-style: normal;
            font-size: x-small;
            color: red;
            margin-top: 10px;
        }


    </style>
</head>

<body>
    <div class="form-container">

        <div class="about-form">
            <h1> T-Shirt Order Form</h1>
            <p> Browse our complete collection of t-shirts, choose the one you like and
                complete your order </p>
            <hr>
        </div>

        <form id="orderForm" name="orderForm" action="submit.php" method="post" target="_blank" onsubmit="return validateForm()">
            <div class="user-info">
                <p><span class="name">Name</span><span class="asterisk">*</span></p>
                <div class="input-group">
                    <input type="text" name="fname" id="fname" placeholder="First">
                    <input type="text" name="lname" id="lname" placeholder="Last">

                </div>
                <div class="input-group">
                    <p><span class="name">Phone</span><span class="asterisk">*</span></p>
                    <p><span class="name">Email</span><span class="asterisk">*</span></p>
                </div>
                <div class="input-group">
                    <input type="tel" name="phno" id="phno" placeholder="### ### ####">
                    <!-- <span class="alert-msg"></span> -->
                    <input type="email" name="email" id="email" placeholder="">
                    <!-- <span class="alert-msg"></span> -->
                </div>
                <span class="alert-msg"></span>

            </div>

            <div class="user-cart">
                <p> Please choose your favorite t-shirt from among the following: </p>
                <div class="item-container">
                    <div class="checkbox-container">
                        <input type="checkbox" name="product1" id="product1" value="1">  
                    </div>
                    <img src="https://via.placeholder.com/130" alt="Checkbox Image">
                    <div class="item-detail">
                        <p><b>Basic-T-Shirt</b></p>
                        <p>Basic-T-Shirt</p>
                        <p>$19.00</p>
                        <p>Quantity</p>
                        <input type="number" name="quantity1" id="quantity1" min="1" max="10" value="1" >
                    </div>
                </div>
                <div class="item-size">
                    <p><b> Size: </b></p>
                    <select name="size1" id="size1">
                        <option value="" disabled selected hidden>Please select</option>
                        <option value="small">Small</option>
                        <option value="medium">Medium</option>
                        <option value="large">Large</option>
                    </select>
                </div>

                <div class="item-container">
                    <div class="checkbox-container">
                        <input type="checkbox" name="product2" id="product2" value="2">  
                    </div>
                    <img src="https://via.placeholder.com/130" alt="Checkbox Image">
                    <div class="item-detail">
                        <p><b>Basic-T-Shirt</b></p>
                        <p>Basic-T-Shirt</p>
                        <p>$19.00</p>
                        <p>Quantity</p>
                        <input type="number" name="quantity2" id="quantity2" min="1" max="10" value="1" >
                    </div>
                </div>
                <div class="item-size">
                    <p> Size: </p>
                    <select name="size2" id="size2" >
                        <option value="" disabled selected hidden>Please select</option>
                        <option value="small">Small</option>
                        <option value="medium">Medium</option>
                        <option value="large">Large</option>
                    </select>
                </div>
            </div>
            <span class="alert-msg"></span>

            <button type="submit" class="order-button">Order Now</button>
        </form>
    </div>

    <script>

        document.getElementById( "orderForm" )
        .addEventListener( "submit", function ( event ) {

            event.preventDefault();

            // document.getElementById("product1").value = document.getElementById("checkbox1").checked ? 1 : 0;
            // document.getElementById("product2").value = document.getElementById("checkbox2").checked ? 2 : 0;

            if ( validateForm() ) {
                this.submit();
            } 
            else {
                return false;
            }

        } );

        function validateForm( event ) {

            var fname = document.getElementById( 'fname' ).value.trim();
            var lname = document.getElementById( 'lname' ).value.trim();
            var email = document.getElementById( 'email' ).value.trim();
            var phno = document.getElementById( 'phno' ).value.trim();
            var size1 = document.getElementById('size1').value; 
            var size2 = document.getElementById('size2').value;

            const emailRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            const nameRegex = /^[a-zA-Z]+$/;
            const phoneRegex = /^\d{3}\s\d{3}\s\d{4}$/;

            let errorMessage = "";

            if (!nameRegex.test(fname)) {
                errorMessage += "Invalid first name. Please enter a valid first name.\n";
                document.getElementById("fname").style.outline = "2px solid red";
            } else {
                document.getElementById("fname").style.outline = "2px solid green";
            }

            if (!nameRegex.test(lname)) {
                errorMessage += "Invalid last name. Please enter a valid last name.\n";
                document.getElementById("lname").style.outline = "2px solid red";
            } else {
                document.getElementById("lname").style.outline = "2px solid green";
            }

            if (!emailRegex.test( email )) {
                errorMessage += "Invalid email format. Please enter a valid email address.\n";
                document.getElementById("email").style.outline = "2px solid red";
            } else {
                document.getElementById("email").style.outline = "2px solid green";
            }

            if (!phoneRegex.test(phno)) {
                errorMessage += "Invalid phone number format. Please enter a valid phone number (### ### ####).\n";
                document.getElementById("phno").style.outline = "2px solid red";
            } else {
                document.getElementById("phno").style.outline = "2px solid green";
            }

            if (errorMessage !== '') {
                document.getElementsByClassName("alert-msg")[0].innerHTML = errorMessage;
                return false;
            }
            else {
                document.getElementsByClassName("alert-msg")[0].innerHTML = '';
                // return true;
            }

            if (size1 == "" && size2 == "") {
                errorMessage += "Please select a product & its size.\n";
                document.getElementById("size1").style.outline = "2px solid red";
                document.getElementById("size2").style.outline = "2px solid red";
                document.getElementsByClassName("alert-msg")[1].innerHTML = errorMessage;
                return false;
            }
            else {
                document.getElementById("size1").style.outline = "2px solid green";
                document.getElementById("size2").style.outline = "2px solid green";
                document.getElementsByClassName("alert-msg")[1].innerHTML = '';
                return true;

            }         
        }

    </script>
</body>
</html>
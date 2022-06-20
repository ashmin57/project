<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Registration</title>
        <link rel='stylesheet' href='style/register.css' type='text/css' />
        <!-- <script src="js/header.js"></script> -->
    </head>
    <body onload="document.registration.fullname.focus();">
        <form name='registration' action="#" method="post" onSubmit="return formValidation();">
            <div class="login-box">
                <h1>Register</h1>
                <div class="textbox">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <input type="text" placeholder="Fullname" name="fullname" id="fname" autocomplete="off">
                </div> 
                <div class="textbox">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <input type="text" placeholder="Phone" name="phone" id="phone" autocomplete="off" >
                </div>
                <div class="textbox">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <input type="text" placeholder="Home Address" name="address" id="address" autocomplete="off">
                </div>
                <div class="textbox">
                    <i class="fa fa-id-card-o" aria-hidden="true"></i>
                    <input type="text" placeholder="Citizenship Number" name="cit_id" id="citizen" autocomplete="off">
                </div>
                <div class="textbox">
                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    <input type="email" placeholder="Email" name="email" id="email" autocomplete="off">
                </div>
                <div class="textbox">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <input type="text" placeholder="Username" name="username" id="username" autocomplete="off">
                </div>
                <div class="textbox">
                    <i class="fa fa-key" aria-hidden="true"></i>
                    <input type="password" placeholder="Password" name="password" id="password" autocomplete="off">
                </div>
                    <input class="btn" type="submit" name="submit" value="Submit">
                </div>
        </form>
        <script>
            function formValidation()
            {
                var fname = document.registration.fullname;
                var phone = document.registration.phone;
                var address = document.registration.address;
                var citid = document.registration.cit_id;
                var email = document.registration.email;
                var uname = document.registration.username;
                var password = document.registration.password;
                if(username_validation(uname,5,12))
                {
                if(password_validation(password,7,12))
                {
                if(allLetter(fname))
                {
                if(alphanumeric(address))
                { 
                if(alphanumeric(citid))
                {
                if(allnumeric(phone))
                {
                if(ValidateEmail(email))
                {
                }
                } 
                }
                } 
                }
                }
                }
                return false;
            }
            function username_validation(uname,mx,my)
            {
                var uname_len = uname.value.length;
                if (uname_len == 0 || uname_len >= my || uname_len < mx)
                {
                alert("User Id should not be empty / length be between "+mx+" to "+my);
                uname.focus();
                return false;
                }
                return true;
            }
            function password_validation(password,mx,my)
            {
                var password_len = password.value.length;
                if (password_len == 0 ||password_len >= my || password_len < mx)
                {
                alert("Password should not be empty / length be between "+mx+" to "+my);
                password.focus();
                return false;
                }
                return true;
            }
            function allLetter(fname)
            { 
                var letters = /^[A-Za-z]+$/;
                if(fname.value.match(letters))
                {
                return true;
                }
                else
                {
                alert('Fullname must have alphabet characters only');
                fname.focus();
                return false;
                }
            }
            function allnumeric(phone)
            { 
                var numbers = /^[0-9]+$/;
                if(phone.value.match(numbers))
                {
                // else if(phone.length == 10)
                return true;
                }
                else
                {
                alert('Phone number should be numeric and 10 digit');
                phone.focus();
                return false;
                }
            }
            function alphanumeric(address)
            { 
                var letters = /^[0-9a-zA-Z]+$/;
                if(address.value.match(letters))
                {
                return true;
                }
                else
                {
                alert('User address must have alphanumeric characters only');
                address.focus();
                return false;
                }
            }
            function alphanumeric(citid)
            { 
                var letters = /^[0-9a-zA-Z]+$/;
                if(citid.value.match(letters))
                {
                return true;
                }
                else
                {
                alert('citizen id is empty');
                citid.focus();
                return false;
                }
            }
            function ValidateEmail(email)
            {
                var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                if(email.value.match(mailformat))
                {
                return true;
                }
                else
                {
                alert("You have entered an invalid email address!");
                email.focus();
                return false;
                }
            }
            alert('Form Succesfully Submitted');
            window.location.reload()
            return true;
            
            

        </script>
    </body>
</html>

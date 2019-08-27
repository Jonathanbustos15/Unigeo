<!DOCTYPE html>
<html>
    <head>
        <title>Password Verification</title>
        <script src="script.js" type="text/javascript"></script>
        <link href="../vistas/componentes/css/style.css" rel="stylesheet" type="text/css"/>
        <script src="../vistas/componentes/js/jquery-3.3.1.min.js" type="text/javascript"></script>
    </head>
   
 

       <script src="https://code.jquery.com/jquery-1.7.min.js"></script>
    <script src="../vistas/componentes/script.js"></script>   

    <body>
        <div id="container">
            <h1>Password Verification</h1>
            <form>
                <ul>
                    <li>
                        <label for="username">Username:</label>
                        <span><input id="username" name="username" type="text" /></span>
                    </li>
                    <li>
                        <label for="pswd">Password:</label>
                        <span><input id="pswd" type="password" name="pswd" /></span>
                    </li>
                    <li>
                        <button type="submit">Register</button>
                    </li>
                </ul>
            </form>

            <div id="pswd_info">
                <h4>Password must meet the following requirements:</h4>
                <ul>
                    <li id="letter" class="invalid">At least <strong>one letter</strong></li>
                    <li id="capital" class="invalid">At least <strong>one capital letter</strong></li>
                    <li id="number" class="invalid">At least <strong>one number</strong></li>
                    <li id="length" class="invalid">Be at least <strong>8 characters</strong></li>
                </ul>
            </div>
        </div>
    </body>
</html>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="../asset/logo/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../asset/logo/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../asset/logo/favicon-16x16.png">
    <link rel="manifest" href="../asset/logo/site.webmanifest">
    <title>Sign In</title>
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/admin_signin.css">
</head>
<body>
<header>
    <h1><img class="logo_logo" src="../asset/admin_img.webp" alt="Itic Paris"> Connectez Vous</h1>
</header>

<main>

   <aside>
    <fieldset>
        <legend>Sign In</legend>
        <form id="myForm" action="admin_connect.php" method="POST"><!--POST-->


            <label for="uname"><i class="fa fa-user icon"> </i> E-Mail</label>
            <input type="email" id="uname" name="username" placeholder="Enter Email"><!--ce qu'on met pour for doit etre le mem aux id dans l'input-->

            <div class="passe" role="presentation" aria-labelledby="password-field">
                <label for="password-field"><i class="fa fa-key icon"></i> Password</label>
                <input type="password" id="password-field" name="password" placeholder="Enter Password">
                <span><i class="fa fa-eye" aria-hidden="true" id="eye"></i></span>
            </div>

            

            <button id="but" type="submit" name="valider" class="signinbtn">Sign In</button>

            
            

        </form>
    </fieldset>
   </aside>




</main>



<footer>&copy; - 2022 - Lahmar Tabai</footer>



<script src="../js/admin_signin.js"></script>
</body>
</html>

    
    
    
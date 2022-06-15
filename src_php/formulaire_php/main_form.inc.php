<?php
    const sg = "Sign In";
    const li = "";
    const rem = "Remember me";

    class MainForm {
        public $_label = [
            '<label for="uname">Name</label>',
            '<label for="Firstname">Firstname</label>',
            '<label for="Birthdate">Birthdate</label>',
            '<label for="mail">E-Mail</label>',
            '<label for="city">City</label>',
            '<label for="country">Country</label>',
            '<label for="Pasword">Password</label>',
            '<label for="Pasword-retype">Confirm Password</label>'
        ];
        
        
        public $_input = [
            '<input type="text" id="uname" name="name" placeholder="Enter Name" required>',
            '<input type="text" id="Firstname" name="firstname" placeholder="Enter Firstname" required>',
            '<input type="date" id="Birthdate" name="birthdate" placeholder="Enter Your Birthdate" required>',
            '<input type="email" id="mail" name="mail" placeholder="Enter Email" required>',
            '<input type="password" id="password" name="password" placeholder="Enter Password">',
            '<input type="password" id="Confirm_password" name="Confirm_password" placeholder="Confirm Password">'
        ];
    }

    $_mainForm = new MainForm;
?>

<main>
        <fieldset>
            <legend>Sign In</legend>
            <form id="myForm" method="POST" action="<?= li ?>"> 
    
    
<?= $_mainForm->_label[0] ?>
<?= $_mainForm->_input[0] ?>
    
              
<?= $_mainForm->_label[1] ?>
<?= $_mainForm->_input[1] ?>


<?= $_mainForm->_label[2] ?>
<?= $_mainForm->_input[2] ?>


<?= $_mainForm->_label[3] ?>
<?= $_mainForm->_input[3] ?>


<?= $_mainForm->_label[4] ?>
<?php
include_once ("./src_php/formulaire_php/users_add_bdd.php");
?>
<?php
    require ("./src_php/formulaire_php/select_city.inc.php");
?>


<?= $_mainForm->_label[4] ?>
<?php
    require ("./src_php/formulaire_php/select_country.inc.php");
?>

<?= $_mainForm->_label[6] ?>
<?= $_mainForm->_input[4] ?>

<?= $_mainForm->_label[7] ?>
<?= $_mainForm->_input[5] ?>

        <ul class="sign">
            <li><button type="submit" name="valider"><?= sg ?></button></li>
        </ul>


        <ul class="ted">
            <li><label class="check" for="check"><?= rem ?></label></li> 
            <li><input type="checkbox" id="check"></li>
        </ul>

        <ul class="nar">
            <li><a href="#">Need Help ?</a></li>
            <li><P><a href="#"><i class="fab fa-facebook-square"></i> &nbsp;Login with Facebook</a></P></li>
            <li><p class="taf">This page is protected by Google reCAPTCHA to ensure you're not a bot. <a href="#"> Learn more</a></p></li>
        </ul>
                
            </form>
        </fieldset>

    </main>

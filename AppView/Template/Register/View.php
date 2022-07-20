<?php 
/*

    @author : Simon Bucher
    @nameof : KYC-CHECK-AML

*/

$config = new Config();
$lang = new Language();
$data = new Database($config->read('mysql','host'), $config->read('mysql','pass'), $config->read('mysql','user'), $config->read('mysql','data'));
$failure = null;

?>
<html>
    <?php include './AppView/Template/Head/HeaderView.php'; ?>
    <body>
        <div class="kyc-main-normal">
        <form method="POST">
            <h2-dash class="dark-font f23">YOUR ACCOUNT DATA</h2-dash>
            <a href="/"><h2-info class="dark-font f14 blue-font"><i class="fa-solid fa-chevron-left blue-font"></i> <?php echo $lang->read('back-login', $config->read('app','language')); ?> </h2-info></a>
            <full-box class="lite-white normal-shadow white-font">
            <?php
                if(isset($_POST['email'], $_POST['password'], $_POST['password2'] /* $_POST['firstname'], $_POST['lastname'], $_POST['date'], $_POST['customer'], $_POST['nationality'], $_POST['zip'], $_POST['country'], $_POST['city'], $_POST['adress']*/)) {
                    if (empty($_POST['email']) && empty($_POST['password']) && empty($_POST['password2']) /* && empty($_POST['firstname']) && empty($_POST['lastname']) && empty($_POST['date']) && empty($_POST['customer']) && empty($_POST['nationality']) && empty($_POST['zip']) && empty($_POST['country']) && empty($_POST['city']) && empty($_POST['adress'])*/) {
                        echo '<div class="alert">Bitte f&uuml;lle alle Felder aus!</div>';
                    } else {
                        $email = htmlspecialchars($_POST['email']);
                        $password = htmlspecialchars($_POST['password']);
                        $password2 = htmlspecialchars($_POST['password2']);
                        $firstname = htmlspecialchars($_POST['firstname']).' ';
                        $lastname = htmlspecialchars($_POST['lastname']);
                        $date = htmlspecialchars($_POST['date']);
                        $customer = htmlspecialchars($_POST['customer']);
                        $nationality = htmlspecialchars($_POST['nationality']);
                        $zip = htmlspecialchars($_POST['zip']);
                        $country = htmlspecialchars($_POST['country']);
                        $city = htmlspecialchars($_POST['city']);
                        $adress = htmlspecialchars($_POST['adress']);
                        $today = date("Y-m-d");
                        $age = date_diff(date_create($date), date_create($today));
    

                        $stage1 = $data->check("users", "email = '".htmlspecialchars($email)."'"); 
                        if($stage1 == 0){
                            if(htmlspecialchars($password) == htmlspecialchars($password2)){
                                $id = $customer.'-'.$nationality.'-'.'A-'.$random_base64 = base64_encode(random_bytes(18));
                                $passwordverify = password_hash($password, PASSWORD_BCRYPT);
                                $db = $data->insert("users (id, email, password, fullname, firstname, lastname, nationality, country, zip, city, adress, birthday, age, language) VALUES ('$id','$email', '$passwordverify', '".$firstname.$lastname."', '$firstname', '$lastname', '$nationality', '$country', '$zip', '$city', '$adress', '$date', '".$age->format('%y')."', 'de')");
                                $_SESSION['login_algo'] = $id;
                                header('Location: /dashboard');
                            } else {
                                // PASSWORD IS NOT THE SAME
                                $failure = 'test 1';
                            }
                        } else {
                            // MORE THEN 0 ACCOUNTS WITH THIS E-MAIL
                            $failure = 'test 2';
                        }
                    }
                }
            ?>
                <rig-2-register>
                    <div class="desc white-font f14 f600"><i class="fa-regular fa-envelope blue-font"></i> <?php echo $lang->read('email', $config->read('app','language')); ?></div>
                    <input name="email" class="white-font f14 f400" type="email">
                    <div class="desc white-font f14 f600"><i class="fa-solid fa-fingerprint blue-font"></i> <?php echo $lang->read('password', $config->read('app','language')); ?></div>
                    <input name="password" class="white-font f14 f400" type="password">
                </rig-2-register>
                
                <rig-2-register>
                    <rig-full>
                        <div class="desc white-font f14 f600"><i class="fa-solid fa-boxes-stacked blue-font"></i> <?php echo $lang->read('investor-type', $config->read('app','language')); ?></div>
                        <div class="select">
                            <select name="customer" id="customer" data-action="reg-box">
                                <option>Wählen Sie Ihren Typ</option>
                                <option value="INDI">Invidual</option>
                                <option value="CORP">Corporation</option>
                            </select>
                            <div class="select_arrow"></div>
                        </div>
                    </rig-full>
                    <div class="desc white-font f14 f600"><i class="fa-solid fa-fingerprint blue-font"></i> <?php echo $lang->read('password-wdh', $config->read('app','language')); ?></div>
                    <input name="password2" class="white-font f14 f400" type="password">
                </rig-2-register>
            </full-box>
            
            <h2-dash class="indi dark-font f23" style="display:none;">YOUR PERSONAL DATA</h2-dash>
            <div class="clear"></div>
            <full-box class="indi-box lite-white normal-shadow white-font" style="display: none;">
                <!---- NOW RECALL WITH AJAX WORKS ---->
            </full-box>

            <h2-dash class="dark-font f23">ACCEPT TERMS & AGREEMENTS</h2-dash>
            <div class="clear"></div>
            <full-box class="lite-white normal-shadow white-font">
            <head-title class="f14"><label class="toggle" for="myToggle" style="float:left; margin-right: 30px;"><input class="toggle__input" name="" type="checkbox" id="myToggle" data-action="test-switch"><div class="toggle__fill"></div></label>
                            <script>
                                $("#myToggle").on("change", function () {
                                    if ($('#myToggle').is(':checked')) {
                                        console.log('true');
                                    } else {
                                        $('#myToggle').prop('checked', false);
                                        console.log('false');
                                    }
                                });
                            </script>
                            Mit dieser Checkbox bist du mit unseren <a href="#" class="blue-font">Nutzungsbedingungen</a> und der <a href="#" class="blue-font">Datenschutzerklärung</a> einverstanden. 
                </head-title>
                <input class="lite-blue white-font normal-shadow f500 f14 no-top-bot" type="submit" value="<?php echo $lang->read('register-btn', $config->read('app','language')); ?>">
            </full-box>
            <div class="clear"></div>
            </form>
        </div>

    </body>
</html>
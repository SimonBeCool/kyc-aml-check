<?php 
/*

    @author : Simon Bucher
    @nameof : KYC-CHECK-AML

*/

$config = new Config();
$lang = new Language();
$data = new Database($config->read('mysql','host'), $config->read('mysql','pass'), $config->read('mysql','user'), $config->read('mysql','data'));


if(isset($_POST['username'], $_POST['password'])) {
    if (empty($_POST['username']) && empty($_POST['password'])) {
        echo '<div class="alert">Bitte f&uuml;lle alle Felder aus!</div>';
    } else {
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);
                        
        $stage1 = $data->getQuery("users", "email = '".$username."'"); 
		if($stage1 != ''){
            $db = $data->getQuery("users", "email = '".$username."'");
            $output = $db->fetchObject();
            $timestamp = time();
            if(htmlspecialchars($output->email) === $username && password_verify($password, htmlspecialchars($output->password))){
                // LOGIN ACCEPT
                $_SESSION['login_algo'] = $output->id;
                header('Location: /dashboard');
            } else {
                // LOGIN FAILED BECAUSE WRONG PASSWORD OR EMAIL
            }
        } else {
            // NOT EXISTING
        }
	}
}

?>

<html>
    <?php include './AppView/Template/Head/HeaderView.php'; ?>
    <body>
        <div class="kyc-main">
        <div class="kyc-logo"></div>
            <full-box class="lite-white normal-shadow">
                <rig-2>
                    <h2 class="white-font"><?php echo $lang->read('signin-area', $config->read('app','language')); ?></h2>
                    <form autocomplete="off" method="POST">
                        <div class="desc white-font f14 f600"><i class="fa-regular fa-envelope"></i> <?php echo $lang->read('email', $config->read('app','language')); ?></div>
                        <input class="normal-shadow white-font f400 f14" name="username" type="email" >
                        <div class="desc white-font f14 f600"><i class="fa-regular fa-pen-to-square"></i> <?php echo $lang->read('password', $config->read('app','language')); ?></div>
                        <input class="normal-shadow white-font f400 f14" name="password" type="password">

                        <div class="clear"></div>

                        <input class="log-green white-font normal-shadow f500 f14 no-top-bot"  type="submit" value="<?php echo $lang->read('signin', $config->read('app','language')); ?>">
                        <view-button data-action="umenu" data-json='[{"type":"quickregister"}]' class="lite-yellow white-font normal-shadow f500 f14 no-top-bot "><?php echo $lang->read('signup', $config->read('app','language')); ?></view-button>
                    </form>
                </rig-2>
                <rig-2>
                    <img src="https://www.kyc3.com/wp-content/uploads/What-is-KYC-illustration.png" style="max-width:100%;" alt="Background">
                </rig-2>
            </full-box>
            <div class="copyright white-font f300 f14"><?php echo $lang->read('copyright', $config->read('app','language')); ?></div>
        </div>
    </body>
</html>

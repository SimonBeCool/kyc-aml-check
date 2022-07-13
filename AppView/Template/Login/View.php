<?php 
/*

    @author : Simon Bucher
    @nameof : KYC-CHECK-AML

*/

$config = new Config();

?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $config->read('app','title'); ?></title>
        <meta name="description" content="<?php echo $config->read('app','description'); ?>">
        <link rel="shortcut icon" href="favicon.ico" />
        <link rel="stylesheet" href="<?php echo $config->read('app','css'); ?>web.css">
        <link href="https://fonts.googleapis.com/css2?family=Gemunu+Libre:wght@200;300;400;500;600;700;800&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="kyc-main">
            <full-box class="lite-white normal-shadow">
                <rig-2>
                    <h2 class="white-font">KYC-AML-CHECK EINLOGGEN</h2>
                    <form autocomplete="off" method="POST">
                        <div class="desc white-font">E-MAIL</div>
                        <input class="normal-shadow"  type="email" >
                        <div class="desc white-font">PASSWORD</div>
                        <input class="normal-shadow" type="password" >
                        <div class="desc white-font">CAPTCHA</div>
                        <input class="log-green white-font normal-shadow f500 f16"  type="submit" value="EINLOGGEN">
                    </form>
                </rig-2>
                <rig-2-nopad>
                    <img src="https://www.kyc3.com/wp-content/uploads/What-is-KYC-illustration.png" style="max-width:100%;" alt="Background">
                    <input class="lite-yellow white-font normal-shadow f500 f16"  type="submit" value="{PLACEHOLDER}">
                </rig-2-nopad>
            </full-box>
        </div>
    </body>
</html>

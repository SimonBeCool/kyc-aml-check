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
                        <input class="normal-shadow white-font f400 f16"  type="email" >
                        <div class="desc white-font">PASSWORD</div>
                        <input class="normal-shadow white-font f400 f16" type="password">

                        <div class="clear"></div>

                        <div class="desc white-font">CAPTCHA</div>
                        <div class="h-captcha" data-sitekey="6b98beab-5dba-4311-ba57-c0ddc7fe6a68"></div>
                        <script src="https://js.hcaptcha.com/1/api.js" async defer></script>

                        <input class="log-green white-font normal-shadow f500 f16 no-top-bot"  type="submit" value="SIGN IN">
                    </form>
                </rig-2>
                <rig-2>
                    <img src="https://www.kyc3.com/wp-content/uploads/What-is-KYC-illustration.png" style="max-width:100%;" alt="Background">
                    <input class="lite-yellow white-font normal-shadow f500 f16"  type="submit" value="SIGN UP ON KYC-ALM-CHECK">
                </rig-2>
            </full-box>
            <div class="copyright white-font f400 f14">&copy; KYC-AML_CHECK 2022 is a product from Simon Bucher</div>
        </div>
        <script>
            token = request.POST["h-captcha-response"]
            params = {
            "secret": "0x9a7be5Df907978dE1bFCbccc715941978E73a97e",
            "response": token
            }
            json = http.POST("https://hcaptcha.com/siteverify", params)
        </script>
    </body>
</html>

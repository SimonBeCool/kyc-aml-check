<?php 
/*

    @author : Simon Bucher
    @nameof : KYC-CHECK-AML

*/

$config = new Config();
$lang = new Language();

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
        <script src="https://kit.fontawesome.com/407d65693f.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="kyc-main">
        <div class="kyc-logo"></div>
            <full-box class="lite-white normal-shadow">
                <rig-2>
                    <h2 class="white-font"><?php echo $lang->read('signin-area', $config->read('app','language')); ?></h2>
                    <form autocomplete="off" method="POST">
                        <div class="desc white-font"><i class="fa-regular fa-envelope"></i> <?php echo $lang->read('email', $config->read('app','language')); ?></div>
                        <input class="normal-shadow white-font f400 f16"  type="email" >
                        <div class="desc white-font"><i class="fa-regular fa-pen-to-square"></i> <?php echo $lang->read('password', $config->read('app','language')); ?></div>
                        <input class="normal-shadow white-font f400 f16" type="password">

                        <div class="clear"></div>

                        <div class="desc white-font"><i class="fa-regular fa-square-check"></i> CAPTCHA</div>
                        <div class="h-captcha" data-sitekey="6b98beab-5dba-4311-ba57-c0ddc7fe6a68"></div>
                        <script src="https://js.hcaptcha.com/1/api.js" async defer></script>

                        <input class="log-green white-font normal-shadow f500 f16 no-top-bot"  type="submit" value="<?php echo $lang->read('signin', $config->read('app','language')); ?>">
                    </form>
                </rig-2>
                <rig-2>
                    <img src="https://www.kyc3.com/wp-content/uploads/What-is-KYC-illustration.png" style="max-width:100%;" alt="Background">
                    <input class="lite-yellow white-font normal-shadow f500 f16"  type="submit" value="<?php echo $lang->read('signup', $config->read('app','language')); ?>">
                </rig-2>
            </full-box>
            <div class="copyright white-font f300 f14"><?php echo $lang->read('copyright', $config->read('app','language')); ?></div>
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

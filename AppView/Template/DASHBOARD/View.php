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
        <script src="https://kit.fontawesome.com/407d65693f.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="kyc-full">
            <kyc-sidebar class="lite-white normal-shadows">
                <div class="kyc-full"><div class="logo f23 yellow-font">{LOGO}</div></div>
                <action-tab><i class="fa-solid fa-house"></i> HOME</action-tab>
                <action-tab><i class="fa-regular fa-id-badge"></i> YOUR PROFILE</action-tab>
                <div class="clear-sidebar"></div>
                <section class="desc yellow-font"><i class="fa-regular fa-rectangle-list"></i> PLACEHOLDER</section>
                <a href="#menu1"><under-section class="desc grey-font f15"><i class="fa-regular fa-circle-dot"></i> PLACEHOLDER 1</under-section></a>
                <a href="#menu2"><under-section class="desc grey-font f15"><i class="fa-regular fa-circle-dot"></i> PLACEHOLDER 2</under-section></a>
                <a href="#menu3"><under-section class="desc grey-font f15"><i class="fa-regular fa-circle-dot"></i> PLACEHOLDER 3</under-section></a>
                <section class="desc yellow-font"><i class="fa-regular fa-rectangle-list"></i> PLACEHOLDER</section>
                <a href="#menu1"><under-section class="desc grey-font f15"><i class="fa-regular fa-circle-dot"></i> PLACEHOLDER 1</under-section></a>
                <a href="#menu2"><under-section class="desc grey-font f15"><i class="fa-regular fa-circle-dot"></i> PLACEHOLDER 2</under-section></a>
                <a href="#menu3"><under-section class="desc grey-font f15"><i class="fa-regular fa-circle-dot"></i> PLACEHOLDER 3</under-section></a>
            </kyc-sidebar>
            <div class="kyc-main-normal">
                <h2 class="white-font">BASIC BOX</h2>
                <full-box class="lite-white normal-shadow white-font"><div class="clear"></div></full-box>

                <h2 class="white-font">RIG 2 BOXEN</h2>
                <rig-2-nopad2><full-box class="lite-white normal-shadow white-font"><div class="clear"></div></full-box></rig-2-nopad2>
                <rig-2-clear></rig-2-clear>
                <rig-2-nopad2><full-box class="lite-white normal-shadow white-font"><div class="clear"></div></full-box></rig-2-nopad2>
            </div>
        </div>
    </body>
</html>

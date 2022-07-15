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
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
                <action-tab><i class="fa-solid fa-house"></i> <?php echo $lang->read('menu-home', $config->read('app','language')); ?></action-tab>
                <action-tab><i class="fa-regular fa-id-badge"></i> <?php echo $lang->read('menu-profile', $config->read('app','language')); ?></action-tab>
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
                <h2-dash class="white-font f23"><?php echo $lang->read('welcome', $config->read('app','language')); ?></h2-dash>
                <h2-info class="grey-font f14"><i class="fa-solid fa-circle-info"></i> <?php echo $lang->read('welcome-sub', $config->read('app','language')); ?></h2-info>
                <rig-3-nopad2>
                    <full-box class="lite-white normal-shadow white-font">
                        <head-title><?php echo $lang->read('total-investors', $config->read('app','language')); ?></head-title>
                        <total-count class="f23 f600">0</total-count>
                        <view-button class="lite-yellow"><?php echo $lang->read('view-investors', $config->read('app','language')); ?></view-button>
                    </full-box>
                </rig-3-nopad2>
                <rig-3-clear></rig-3-clear>
                <rig-3-nopad2>
                    <full-box class="lite-white normal-shadow white-font">
                        <head-title><?php echo $lang->read('total-issues', $config->read('app','language')); ?></head-title>
                        <total-count class="f23 f600">0</total-count>
                        <view-button class="lite-yellow"><?php echo $lang->read('view-issues', $config->read('app','language')); ?></view-button>
                    </full-box>
                </rig-3-nopad2>
                <rig-3-clear></rig-3-clear>
                <rig-3-nopad2>
                    <full-box class="lite-white normal-shadow white-font">
                        <head-title><?php echo $lang->read('total-projects', $config->read('app','language')); ?></head-title>
                        <total-count class="f23 f600">0</total-count>
                        <view-button class="lite-yellow"><?php echo $lang->read('view-projects', $config->read('app','language')); ?></view-button>
                    </full-box>
                </rig-3-nopad2>
                

                <h2 class="white-font"><?php echo $lang->read('recent-subscriptions', $config->read('app','language')); ?></h2>
                <full-box class="lite-white normal-shadow white-font"><div class="clear"></div></full-box>
            </div>
        </div>
    </body>
</html>

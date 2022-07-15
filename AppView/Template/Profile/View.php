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
        <script type="text/javascript" src="<?php echo $config->read('app','js'); ?>de.jqu.311.js"></script>
        <script type="text/javascript" src="<?php echo $config->read('app','js'); ?>core.js"></script>
    </head>
    <body>
        <div class="kyc-full">
            <kyc-sidebar class="lite-white normal-shadows">
                <div class="kyc-full"><div class="logo f23 yellow-font">{LOGO}</div></div>
                <action-tab data-action="umenu" data-json='[{"type":"dashboard"}]'><i class="fa-solid fa-house"></i> <?php echo $lang->read('menu-home', $config->read('app','language')); ?></action-tab>
                <action-tab data-action="umenu" data-json='[{"type":"profile"}]'><i class="fa-regular fa-id-badge"></i> <?php echo $lang->read('menu-profile', $config->read('app','language')); ?></action-tab>
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
                <h2-dash class="white-font f23"><?php echo $lang->read('profile-text', $config->read('app','language')); ?></h2-dash>
                <h2-info class="grey-font f14"><i class="fa-solid fa-circle-info"></i> <?php echo $lang->read('profile-text-sub', $config->read('app','language')); ?></h2-info>
                
                <rig-1-nopad2>
                    <full-box class="lite-white normal-shadow white-font">
                        <head-title><?php echo $lang->read('account-info', $config->read('app','language')); ?><i class="fa-solid fa-pen-to-square"></i></head-title>
                        <data-box>
                            <div class="title yellow-font"><?php echo $lang->read('firstname', $config->read('app','language')); ?></div>
                            <div class="data grey-font">Max</div>
                        </data-box>
                        <data-box>
                            <div class="title yellow-font"><?php echo $lang->read('lastname', $config->read('app','language')); ?></div>
                            <div class="data grey-font">Mustermann</div>
                        </data-box>
                        <full-data-box>
                            <div class="title yellow-font"><?php echo $lang->read('emailadress', $config->read('app','language')); ?></div>
                            <div class="data grey-font">maxmustermann@kyc-aml.com</div>
                        </full-data-box>
                        <data-box>
                            <div class="title yellow-font"><?php echo $lang->read('nationality', $config->read('app','language')); ?></div>
                            <div class="data grey-font">DE</div>
                        </data-box>
                        <data-box>
                            <div class="title yellow-font"><?php echo $lang->read('lifecountry', $config->read('app','language')); ?></div>
                            <div class="data grey-font">CH</div>
                        </data-box>
                        <data-box>
                            <div class="title yellow-font"><?php echo $lang->read('zip', $config->read('app','language')); ?></div>
                            <div class="data grey-font">0000</div>
                        </data-box>
                        <data-box>
                            <div class="title yellow-font"><?php echo $lang->read('city', $config->read('app','language')); ?></div>
                            <div class="data grey-font">MusterCity</div>
                        </data-box>
                        <full-data-box>
                            <div class="title yellow-font"><?php echo $lang->read('adress', $config->read('app','language')); ?></div>
                            <div class="data grey-font">Mustermann Weg. 5</div>
                        </full-data-box>
                        <data-box>
                            <div class="title yellow-font"><?php echo $lang->read('birthday', $config->read('app','language')); ?></div>
                            <div class="data grey-font">28.01.2000</div>
                        </data-box>
                        <data-box>
                            <div class="title yellow-font"><?php echo $lang->read('age', $config->read('app','language')); ?></div>
                            <div class="data grey-font">22</div>
                        </data-box>
                    </full-box>
                </rig-1-nopad2>
                <rig-1-clear></rig-1-clear>
                <rig-1-big-nopad2>
                    <full-box class="lite-white normal-shadow white-font">
                        <head-title><?php echo $lang->read('account-settings', $config->read('app','language')); ?> <i class="fa-solid fa-user-pen"></i></head-title>
                    </full-box>
                </rig-1-big-nopad2>
            </div>
        </div>
    </body>
</html>

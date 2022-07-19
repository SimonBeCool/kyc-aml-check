<?php 
/*

    @author : Simon Bucher
    @nameof : KYC-CHECK-AML

*/

$config = new Config();
$lang = new Language();
$data = new Database($config->read('mysql','host'), $config->read('mysql','pass'), $config->read('mysql','user'), $config->read('mysql','data'));

if(isset($_SESSION['login_algo'])){
    $db = $data->getQuery("users", "id = '".$_SESSION['login_algo']."'");
    $user = $db->fetchObject();
} else {
    header('location: /index');
}

?>
<html>
    <?php include './AppView/Template/Head/HeaderView.php'; ?>
    <body>
        <div class="kyc-full">
            <kyc-sidebar class="dark-blue normal-shadows">
                <div class="kyc-full"><div class="logo f23 blue-font">{LOGO}</div></div>
                <action-tab data-action="umenu" data-json='[{"type":"dashboard"}]' class="active f14"><i class="fa-solid fa-house"></i> <?php echo $lang->read('menu-home', $config->read('app','language')); ?></action-tab>
                <action-tab data-action="umenu" data-json='[{"type":"profile"}]' class="f14"><i class="fa-regular fa-id-badge"></i> <?php echo $lang->read('menu-profile', $config->read('app','language')); ?></action-tab>
                <action-tab data-action="umenu" data-json='[{"type":"logout"}]' class="f14"><i class="fa-solid fa-door-open"></i> <?php echo $lang->read('menu-logout', $config->read('app','language')); ?></action-tab>
                <div class="clear-sidebar"></div>
                <section class="desc blue-font" class="f16"><i class="fa-regular fa-rectangle-list"></i> PLACEHOLDER</section>
                <a href="#menu1"><under-section class="desc grey-font f14"><i class="fa-regular fa-circle-dot"></i> PLACEHOLDER 1</under-section></a>
                <a href="#menu2"><under-section class="desc grey-font f14"><i class="fa-regular fa-circle-dot"></i> PLACEHOLDER 2</under-section></a>
                <a href="#menu3"><under-section class="desc grey-font f14"><i class="fa-regular fa-circle-dot"></i> PLACEHOLDER 3</under-section></a>
                <section class="desc blue-font" class="f16"><i class="fa-regular fa-rectangle-list"></i> PLACEHOLDER</section>
                <a href="#menu1"><under-section class="desc grey-font f14"><i class="fa-regular fa-circle-dot"></i> PLACEHOLDER 1</under-section></a>
                <a href="#menu2"><under-section class="desc grey-font f14"><i class="fa-regular fa-circle-dot"></i> PLACEHOLDER 2</under-section></a>
                <a href="#menu3"><under-section class="desc grey-font f14"><i class="fa-regular fa-circle-dot"></i> PLACEHOLDER 3</under-section></a>
            </kyc-sidebar>

            <div class="kyc-main-normal">
                <h2-dash class="dark-font f23 f700"><?php echo $lang->read('welcome', $config->read('app','language')); ?> <?php echo htmlspecialchars($user->fullname); ?> !</h2-dash>
                <h2-info class="dark-font f14 f600"><i class="fa-solid fa-circle-info blue-font"></i> <?php echo $lang->read('welcome-sub', $config->read('app','language')); ?></h2-info>
                <rig-3-nopad2>
                    <full-box class="lite-white normal-shadow white-font">
                        <head-title><i class="fa-solid fa-boxes-stacked blue-font"></i> <?php echo $lang->read('total-investors', $config->read('app','language')); ?></head-title>
                        <total-count class="f23 f600">0</total-count>
                        <view-button class="lite-blue"><?php echo $lang->read('view-investors', $config->read('app','language')); ?></view-button>
                    </full-box>
                </rig-3-nopad2>
                <rig-3-clear></rig-3-clear>
                <rig-3-nopad2>
                    <full-box class="lite-white normal-shadow white-font">
                        <head-title><i class="fa-solid fa-bug blue-font"></i> <?php echo $lang->read('total-issues', $config->read('app','language')); ?></head-title>
                        <total-count class="f23 f600">0</total-count>
                        <view-button class="lite-blue"><?php echo $lang->read('view-issues', $config->read('app','language')); ?></view-button>
                    </full-box>
                </rig-3-nopad2>
                <rig-3-clear></rig-3-clear>
                <rig-3-nopad2>
                    <full-box class="lite-white normal-shadow white-font">
                        <head-title><i class="fa-solid fa-diagram-project blue-font"></i> <?php echo $lang->read('total-projects', $config->read('app','language')); ?></head-title>
                        <total-count class="f23 f600">0</total-count>
                        <view-button class="lite-blue"><?php echo $lang->read('view-projects', $config->read('app','language')); ?></view-button>
                    </full-box>
                </rig-3-nopad2>
                

                <h2 class="dark-font"><?php echo $lang->read('recent-subscriptions', $config->read('app','language')); ?></h2>
                <full-box class="lite-white normal-shadow white-font"><div class="clear"></div></full-box>
            </div>
        </div>
    </body>
</html>

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
                <action-tab data-action="umenu" data-json='[{"type":"dashboard"}]' class="f14"><i class="fa-solid fa-house"></i> <?php echo $lang->read('menu-home', $config->read('app','language')); ?></action-tab>
                <action-tab data-action="umenu" data-json='[{"type":"profile"}]' class="active f14"><i class="fa-regular fa-id-badge"></i> <?php echo $lang->read('menu-profile', $config->read('app','language')); ?></action-tab>
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
                <h2-dash class="dark-font f23 f700"><?php echo $lang->read('profile-text', $config->read('app','language')); ?></h2-dash>
                <div class="clear"></div>
                <rig-1-nopad2>
                    <full-box class="lite-white normal-shadow white-font">
                        <head-title class="f500 f16"><?php echo $lang->read('account-info', $config->read('app','language')); ?><i class="fa-solid fa-pen-to-square blue-font"></i></head-title>
                        <data-box>
                            <div class="title blue-font f14 f700"><?php echo $lang->read('firstname', $config->read('app','language')); ?></div>
                            <div class="data grey-font f14"><?php echo htmlspecialchars($user->firstname); ?></div>
                        </data-box>
                        <data-box>
                            <div class="title blue-font f14 f700"><?php echo $lang->read('lastname', $config->read('app','language')); ?></div>
                            <div class="data grey-font f14"><?php echo htmlspecialchars($user->lastname); ?></div>
                        </data-box>
                        <full-data-box>
                            <div class="title blue-font f14 f700"><?php echo $lang->read('emailadress', $config->read('app','language')); ?></div>
                            <div class="data grey-font f14"><?php echo htmlspecialchars($user->email); ?></div>
                        </full-data-box>
                        <data-box>
                            <div class="title blue-font f14 f700"><?php echo $lang->read('nationality', $config->read('app','language')); ?></div>
                            <div class="data grey-font f14"><?php echo htmlspecialchars($user->nationality); ?></div>
                        </data-box>
                        <data-box>
                            <div class="title blue-font f14 f700"><?php echo $lang->read('lifecountry', $config->read('app','language')); ?></div>
                            <div class="data grey-font f14"><?php echo htmlspecialchars($user->country); ?></div>
                        </data-box>
                        <data-box>
                            <div class="title blue-font f14 f700"><?php echo $lang->read('zip', $config->read('app','language')); ?></div>
                            <div class="data grey-font f14"><?php echo htmlspecialchars($user->zip); ?></div>
                        </data-box>
                        <data-box>
                            <div class="title blue-font f14 f700"><?php echo $lang->read('city', $config->read('app','language')); ?></div>
                            <div class="data grey-font f14"><?php echo htmlspecialchars($user->city); ?></div>
                        </data-box>
                        <full-data-box>
                            <div class="title blue-font f14 f700"><?php echo $lang->read('adress', $config->read('app','language')); ?></div>
                            <div class="data grey-font f14"><?php echo htmlspecialchars($user->adress); ?></div>
                        </full-data-box>
                        <data-box>
                            <div class="title blue-font f14 f700"><?php echo $lang->read('birthday', $config->read('app','language')); ?></div>
                            <div class="data grey-font f14"><?php echo htmlspecialchars($user->birthday); ?></div>
                        </data-box>
                        <data-box>
                            <div class="title blue-font f14 f700"><?php echo $lang->read('age', $config->read('app','language')); ?></div>
                            <div class="data grey-font f14"><?php echo htmlspecialchars($user->age); ?></div>
                        </data-box>
                    </full-box>
                </rig-1-nopad2>
                <rig-1-clear></rig-1-clear>
                <rig-1-big-nopad2>
                    <full-box class="lite-white normal-shadow white-font">
                        <head-title class="f500 f16"><?php echo $lang->read('account-settings', $config->read('app','language')); ?> </head-title>
                        <head-title class="f14">
                            TEST FUNCTION SWITCH
                            <label class="toggle" for="myToggle">
                                <input class="toggle__input" name="" type="checkbox" id="myToggle" data-action="test-switch">
                                <div class="toggle__fill"></div>
                            </label>
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
                        </head-title>
                    </full-box>
                </rig-1-big-nopad2>
            </div>
        </div>
    </body>
</html>

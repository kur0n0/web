<?php
    session_start();
    if(!empty($_GET['code'])){
        $id_app='7239852';
        $secret_app='QzBIrcnn9S5EduH3XOTp';
        $url_script='http://school.com/auth_vk.php';
        $token=json_decode(file_get_contents('https://oauth.vk.com/access_token?client_id='.$id_app.'&client_secret='.$secret_app.'&code='.$_GET['code'].'&redirect_uri='.$url_script),true);
        $fields='first_name,last_name';
        $uinf = json_decode(file_get_contents('https://api.vk.com/method/users.get?uids='.$token['user_id'].'&fields='.$fields.'&access_token='.$token['access_token'].'&v=5.80'), true);
        $_SESSION['name']         = $uinf['response'][0]['first_name'];
        $_SESSION['name_family']  = $uinf['response'][0]['last_name'];
        $_SESSION['uid']          = $token['user_id'];
        $_SESSION['access_token'] = $token['access_token'];
        header("Location: /mypage.php");
    }
?>

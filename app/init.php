<?php
//session_start();
//echo'--ініт фейсбука--';
//require_once '/vendor/autoload.php';
//
//Facebook\FacebookSession::setDefaultApplication('879569792135375', '965aa07c41b8f1dcbc23bd483d04336e');
//$facebook = new Facebook\FacebookRedirectLoginHelper('https://developers.facebook.com/apps/879569792135375/dashboard/');
//
//try {
//    if($session = $facebook->getSessionFromRedirect()) {
//        $_SESSION['facebook'] = $session->getToken();
//        header('Location index.php');
//    }
//
//    if(isset($_SESSION['facebook'])) {
//        $session = new Facebook\FacebookSession($_SESSION['facebook']);
//        $request = new Facebook\FacebookRequest($session, 'GET', '/me');
//        $request = $request->execute();
//        $user = $request->getGraphObject()->asArray();
//    }
//
//} catch(Facebook\FacebookRequestException $e) {
//    // якщо facebook овернув помилку
//} catch(\Exception $e) {
//    // Локальна помилка
//}
////?>
<!---->
<!--//view-->
<!--//--><?php
////   require_once 'app/init.php';
////   ?>
<!--<!--   <!doctype html>-->-->
<!--<!--   <html lang="en">-->-->
<!--<!--   <head>-->-->
<!--<!--       <meta charset="UTF-8">-->-->
<!--<!--       <title>Auth with Facebook</title>-->-->
<!--<!--   </head>-->-->
<!--<!--   <body>-->-->
<!--<!--   -->--><?php ////if(!isset($_SESSION['facebook'])): ?>
<!--<!--       <a href="-->--><?php ////echo $facebook->getLoginUrl(); ?><!--<!--">Ввійти  через Facebook</a>-->-->
<!--<!--   -->--><?php ////else: ?>
<!--<!--       <p>Ви авторизовані. <a href="signout.php">Вийти</a></p>-->-->
<!--<!--       <p>Ваше ім'я: -->--><?php ////$user['name']; ?><!--<!--</p>-->-->
<!--<!--   -->--><?php ////endif;
//<!--<!--   </body>-->-->
//<!--<!--   </html>-->

//singout
//require_once 'app/init.php';
//unset($_SESSION['facebook']);
//header('Location: index.php');

<?php /*%%SmartyHeaderCode:5845699bd4fd27b74-51110807%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b3715d819c02b2bf390c0406ba34bbe57635a5a' => 
    array (
      0 => 'tpl\\index/login.html',
      1 => 1452916041,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5845699bd4fd27b74-51110807',
  'has_nocache_code' => false,
  'cache_lifetime' => '60',
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!$no_render) {?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="/plugins/bootstrap-3.3.5/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/tpl/statics/css/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="/plugins/bootstrap-3.3.5/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <!--[endif]-->
  </head>
  <body>
      <div class="container">
          <form class="form-signin" action="/?c=index&m=login" method="post">
              <h2 class="form-signin-heading">Please sign in</h2>
              <label for="inputMobile" class="sr-only">Email address</label>
              <input type="text" name="email" id="inputMobile" class="form-control" placeholder="Mobile address" required autofocus>
              <label for="inputPassword" class="sr-only">Password</label>
              <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
              <div class="checkbox">
                  <label>
                      <input type="checkbox" value="remember-me"> Remember me
                  </label>
              </div>
              <button class="btn btn-lg btn-primary btn-block" type="submit" name="dosubmit">Sign in</button>
          </form>
      </div> <!-- /container -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/plugins/bootstrap-3.3.5/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
<?php } ?>
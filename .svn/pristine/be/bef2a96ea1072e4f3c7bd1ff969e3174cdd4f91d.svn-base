<!DOCTYPE html>
<html lang="jp">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Dashboard JOB</title>

<!-- Bootstrap core CSS -->
<?php
echo $this->Html->css( 'admin/bootstrap.min.css');
?>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<?php
echo $this->Html->css( 'admin/ie10-viewport-bug-workaround.css');
?>
<!-- InstanceBeginEditable name="css" -->
<?php
echo $this->Html->css( 'admin/dashboard.css');
?>
<?php
echo $this->Html->css( 'admin/bootstrap-datepicker.min.css');
?>
<?php
echo $this->Html->css( 'admin/contents_category.css');
?>
<?php
echo $this->Html->css( 'admin/bootstrap-select.css');
?>
<?php
echo $this->Html->css( 'admin/admin_custom.css');
?>
<?php
echo $this->Html->script( 'admin/ie-emulation-modes-warning.js');
?>

</head>
<body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand main_title" href="#">HoteNavi 管理者画面</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><?php echo $html->link("利用者画面", array('controller' => 'homes', 'action' => 'index', 'plugin' => null));?></li>
            <li><?php echo $html->link("ログアウト", array('controller' => 'users', 'action' => 'logout', 'plugin' => null));?></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>
        <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar nav-stacked" id="accordion">
            <li class="active panel"><a data-toggle="collapse" data-parent="#accordion" href="#accor_1">利用者管理</a>
                <ul id="accor_1" class="collapse sub_category nav">
                    <li><?php echo $html->link(" > 利用者リスト", array('controller' => 'admin_users', 'action' => 'index', 'plugin' => null));?></li>
                    <li><?php echo $html->link(" > 利用者登録", array('controller' => 'admin_users', 'action' => 'add', 'plugin' => null));?></li>
                </ul>
			</li>
            <li class="unactive panel nav-sidebar"><a data-toggle="collapse" data-parent="#accordion" href="#accor_2">コンテンツ管理(商用)</a>
                <ul id="accor_2" class="collapse sub_category nav">
                    <li><?php echo $html->link(" > コンテンツリスト", array('controller' => 'admin_contents', 'action' => 'com_index', 'plugin' => null));?></li>
                    <li><?php echo $html->link(" > コンテンツ登録", array('controller' => 'admin_contents', 'action' => 'com_add', 'plugin' => null));?></li>
                </ul>
			</li>
            <li class="unactive panel nav-sidebar"><a data-toggle="collapse" data-parent="#accordion" href="#accor_3">コンテンツ管理(非商用)</a>
                <ul id="accor_3" class="collapse sub_category nav">
                    <li><?php echo $html->link(" > コンテンツリスト", array('controller' => 'admin_contents', 'action' => 'index', 'plugin' => null));?></li>
                    <li><?php echo $html->link(" > コンテンツ登録", array('controller' => 'admin_contents', 'action' => 'add', 'plugin' => null));?></li>
                </ul>
			</li>
            <li class="unactive panel nav-sidebar"><a data-toggle="collapse" data-parent="#accordion" href="#accor_4">カテゴリ管理</a>
                <ul id="accor_4" class="collapse sub_category nav">
                    <li><?php echo $html->link(" > カテゴリリスト", array('controller' => 'admin_categorys', 'action' => 'index', 'plugin' => null));?></li>
                    <!-- <li><?php echo $html->link(" > カテゴリ登録", array('controller' => 'admin_categorys', 'action' => 'add', 'plugin' => null));?></li> -->
                </ul>
			</li>
            <!--  <li class="unactive panel nav-sidebar"><a data-toggle="collapse" data-parent="#accordion" href="#accor_5">FAQ管理</a>
                <ul id="accor_5" class="collapse sub_category nav">
                    <li><a>+ FAQリスト</a></li>
                    <li><a>+ FAQ登録</a></li>
                </ul>
			</li> -->
            <li class="unactive panel nav-sidebar"><a data-toggle="collapse" data-parent="#accordion" href="#accor_6">お知らせ管理</a>
                <ul id="accor_6" class="collapse sub_category nav">
                    <li><?php echo $html->link(" > お知らせリスト", array('controller' => 'admin_notices', 'action' => 'index', 'plugin' => null));?></li>
                    <li><?php echo $html->link(" > お知らせ登録", array('controller' => 'admin_notices', 'action' => 'add', 'plugin' => null));?></li>
                </ul>
			</li>
            <li class="unactive panel nav-sidebar"><a data-toggle="collapse" data-parent="#accordion" href="#accor_7">システム管理</a>
                <ul id="accor_7" class="collapse sub_category nav">
                    <li><?php echo $html->link(" > メインイメージ管理", array('controller' => 'admin_systems', 'action' => 'main', 'plugin' => null));?></li>
                    <li><?php echo $html->link(" > ロゴ管理", array('controller' => 'admin_systems', 'action' => 'add', 'logo' => null));?></li>
                    <li><?php echo $html->link(" > コピーライト管理", array('controller' => 'admin_systems', 'action' => 'copyright', 'plugin' => null));?></li>
                </ul>
			</li>
          </ul>
		  <ul class="nav nav-sidebar">
            <li><a href="">その他</a></li>
          </ul>
        </div>
<!-- main_content -->
<?php
echo $content_for_layout;
?>
      </div>
    </div>

<!-- footer_Start -->

		<!-- footer_End -->
<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="./js/jquery.min.js"><\/script>')</script>
    <?php
    echo $this->Html->script( 'admin/bootstrap.min.js');
    ?>
    <?php
    echo $this->Html->script( 'admin/holder.min.js');
    ?>
    <?php
    echo $this->Html->script( 'admin/ie10-viewport-bug-workaround.js');
    ?>
    <?php
    echo $this->Html->script( 'admin/js.cookie.js');
    ?>
    <?php
    echo $this->Html->script( 'admin/bootstrap-datepicker.min.js');
    ?>
    <?php
    echo $this->Html->script( 'admin/bootstrap-datepicker.ja.min.js');
    ?>
    <?php
    echo $this->Html->script( 'admin/bootstrap-select.js');
    ?>
    <?php
    echo $this->Html->script( 'admin/custom.js');
    ?>


</body>
<!-- InstanceEnd -->
</html>

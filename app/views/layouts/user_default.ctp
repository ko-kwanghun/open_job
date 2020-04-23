<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>OPEN LIBRARY</title>

<!-- Bootstrap core CSS -->
<?php
echo $this->Html->css( 'user/bootstrap.css');
?>
<!-- Theme CSS -->
<?php
echo $this->Html->css( 'user/style.css');
?>
<?php
echo $this->Html->css( 'user/jquery.bxslider.css');
?>
<!-- Custom Fonts -->
<?php
echo $this->Html->css( 'font-awesome/css/font-awesome.min.css');
?>
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

<!-- Custom CSS 任意のCSSの修正はここで行う -->
<?php
echo $this->Html->css( 'user/user_custom.css');
?>

</head>
<body id="page-top" class="index">
    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top"><div style="font-size:13px;margin-top:-15px;padding-bottom:5px">東京都千代田区</div>WEB 図書館</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#main_page">HOME</a>
                    </li>
                    <li class="page-scroll">
                        <a href="info.html">利用案内</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#book_list">図書リスト</a>
                    </li>
                    <?php if($user) { ?>
                    <li class="page-scroll">
                        <a href="#my_page">マイライブラリ</a>
                    </li>
                    <?php } ?>
					<?php if(!$user) { ?>
                    <li>
                        <?php echo $html->link("ログイン", array('controller' => 'users', 'action' => 'login', 'plugin' => null));?>
                    </li>
                    <?php } ?>

					<?php if($user) { ?>
                    <li class="page-scroll" style="float:right;">
					  <ul class="nav navbar-nav navbar-right" style="float:right;">
						<li class="dropdown">
						  <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#">
							<i class="glyphicon glyphicon-user"></i> <?php echo h($user['User']['user_name']); ?> <span class="caret"></span></a>
						  <ul id="g-account-menu" class="dropdown-menu" role="menu">
						  <?php if($user['User']['user_kind'] == User::USER_KIND_TRUE) { ?>
						  	<li><?php echo $html->link("管理者", array('controller' => 'administrators', 'action' => 'index', 'plugin' => null));?></li>
						  <?php } ?>
							<li><a href="#">My Profile</a></li>
							<li><?php echo $html->link("ログアウト", array('controller' => 'users', 'action' => 'logout', 'plugin' => null));?></li>
						  </ul>
						</li>
					  </ul>
					</li>
					<?php } ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

	<!-- Barrier Free -->
	<div class="Barrier_free">
		<div>小</div>
		<div>中</div>
		<div>大</div>
		<div><a href="javascript:white();">白</a></div>
		<div><a href="javascript:blue();">青</a></div>
		<div><a href="javascript:black();">黒</a></div>
		<div><a href="javascript:invert();">反転</a></div>
		<div>日文</div>
		<div>英文</div>
		<div>中文</div>
	</div>
	<!-- /.Barrier Free -->


	<!-- Portfolio Grid Section -->
    <section id="main_page">
        <div class="container">
			<div class="container-fluid">
			  <div class="row content frame_top">
				<div class="col-sm-3 sidenav">
				  <div class="input-group">
					<input type="text" class="form-control" placeholder="Search Blog..">
					<span class="input-group-btn">
					  <button class="btn btn-default" type="button">
						<span class="glyphicon glyphicon-search"></span>
					  </button>
					</span>
				  </div><br>
				  <p class="heading heading_primary" id="cat-headeing-pc"><i class="fa fa-list toggle-btn"></i>カテゴリ</p>

					<ul class="accordion">
						<li>
							<p id="1"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span><span>青空文庫</span>
								<span id="contents_count" class="badge contents_count">13</span></p>
							<ul>
								<li id="4">
									<a href="/top/Categorys/index/101101">青空文庫						<span id="contents_count" class="badge contents_count">13</span>
									</a>
								</li>
								<li id="13">
									<a href="/top/Categorys/index/101102">哲学<span id="contents_count" class="badge contents_count">0</span>
									</a>
								</li>
								<li id="4">
									<a href="/top/Categorys/index/101101">青空文庫						<span id="contents_count" class="badge contents_count">13</span>
									</a>
								</li>
								<li id="13">
									<a href="/top/Categorys/index/101102">哲学<span id="contents_count" class="badge contents_count">0</span>
									</a>
								</li>
								<li id="4">
									<a href="/top/Categorys/index/101101">青空文庫						<span id="contents_count" class="badge contents_count">13</span>
									</a>
								</li>
								<li id="13">
									<a href="/top/Categorys/index/101102">哲学<span id="contents_count" class="badge contents_count">0</span>
									</a>
								</li>
							</ul>
						</li>
					</ul>
					<hr>

					<ul class="accordion">
						<li>
							<p id="1"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span><span>青空文庫</span>
								<span id="contents_count" class="badge contents_count">13</span></p>
							<ul>
								<li id="4">
									<a href="/top/Categorys/index/101101">青空文庫						<span id="contents_count" class="badge contents_count">13</span>
									</a>
								</li>
								<li id="13">
									<a href="/top/Categorys/index/101102">哲学<span id="contents_count" class="badge contents_count">0</span>
									</a>
								</li>
							</ul>
						</li>
					</ul>
					<hr>
					<ul class="accordion">
						<li>
							<p id="1"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span><span>青空文庫</span>
								<span id="contents_count" class="badge contents_count">13</span></p>
							<ul>
								<li id="4">
									<a href="/top/Categorys/index/101101">青空文庫						<span id="contents_count" class="badge contents_count">13</span>
									</a>
								</li>
								<li id="13">
									<a href="/top/Categorys/index/101102">哲学<span id="contents_count" class="badge contents_count">0</span>
									</a>
								</li>
							</ul>
						</li>
					</ul>
					<hr>

					<!-- banner -->
					<div class="banner">
						<div class = "banner_img">
							<a href="https://weblibrary-chiyoda.com/"  target="_blank">
							<img class="border_radius" src="http://library.i-neo.jp/img/1/aozora4.jpg" alt="">
							</a>
						</div>
					</div>
					<div class="banner">
						<div class = "banner_img">
							<a href="https://weblibrary-chiyoda.com/"  target="_blank">
							<img class="border_radius" src="http://library.i-neo.jp/img/1/aozora4.jpg" alt="">
							</a>
						</div>
					</div>
				</div>
<!-- main_content -->
<?php
echo $content_for_layout;
?>
			  </div>
			</div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">

        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Your Website 2016
                    </div>
                </div>
            </div>
        </div>
    </footer>

	<?php
    echo $this->Html->script( 'user/jquery.js');
    ?>
    <?php
    echo $this->Html->script( 'user/bootstrap.js');
    ?>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <?php
    echo $this->Html->script( 'user/jqBootstrapValidation.js');
    ?>
    <?php
    echo $this->Html->script( 'user/contact_me.js');
    ?>
    <?php
    echo $this->Html->script( 'user/freelancer.min.js');
    ?>
    <?php
    echo $this->Html->script( 'user/barrier.js');
    ?>
    <?php
    echo $this->Html->script( 'user/jquery.bxslider.js');
    ?>
    <?php
    echo $this->Html->script( 'user/jquery.cookie.js');
    ?>
    <?php
    echo $this->Html->script( 'user/custom.js');
    ?>

</body>
<!-- InstanceEnd -->
</html>

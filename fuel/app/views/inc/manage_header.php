<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title><?php echo $title; ?></title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<?php echo Asset::css('bootstrap.css'); ?>
	<?php echo Asset::js('bootstrap.min.js'); ?>
</head>
<body>
	<div class="container">

		<nav class="navbar navbar-default navbar-inverse" role="navigation">
			<div class="container-fluid">

				<!-- スマートフォンサイズで表示されるメニューボタンとテキスト -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-menu-4">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- タイトルなどのテキスト -->
					<a class="navbar-brand" href="#">Menu</a>
				</div>

				<!-- グローバルナビの中身 -->
				<div class="collapse navbar-collapse" id="nav-menu-4">
					<!-- 各ナビゲーションメニュー -->
					<ul class="nav navbar-nav">
						<!-- 通常のリンク -->
						<li <?php echo $category_class; ?>><a href="/categorymanage">カテゴリー管理</a></li>
						<li <?php echo $product_class; ?>><a href="/productmanage">商品管理</a></li>
						<li <?php echo $zaiko_class; ?>><a href="/zaikomanage">在庫管理</a></li>
						<li <?php echo $user_class; ?>><a href="/usermanage">ユーザー管理</a></li>
					</ul>
				</div>
			</div>
		</nav>
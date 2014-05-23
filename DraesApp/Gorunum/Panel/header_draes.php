<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="tr" xml:lang="tr">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Draes Admin</title>
<link rel="stylesheet" type="text/css" href="<?php echo SITE_PUBLIC; ?>/css/style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo SITE_PUBLIC; ?>/css/navi.css" media="screen" />
<script type="text/javascript" src="<?php echo SITE_PUBLIC; ?>/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript">
$(function(){
	$(".box .h_title").not(this).next("ul").hide("normal");
	$(".box .h_title").not(this).next("#home").show("normal");
	$(".box").children(".h_title").click( function() { $(this).next("ul").slideToggle(); });
});
</script>
</head>
<body>
<div class="wrap">
	<div id="header">
		<div id="top">
			<div class="left">
                            <p>Hoşgeldiniz, <strong><?php echo Session::get("username"); ?>(<?php echo Session::get("yetki"); ?>)</strong> [ <a href="<?php echo SITE_URL; ?>/?url=admin/logout">Çıkış Yap</a> ]</p>
			</div>
			<div class="right">
				<div class="align-right">
					<p>Son giriş: <strong>23-04-2012 23:12</strong></p>
				</div>
			</div>
		</div>
		<div id="nav">
			<ul>
				<li class="upp"><a href="#">Kontroller</a>
					<ul>
						<li>&#8250; <a href="">Kullanıcı Ekle</a></li>
						<li>&#8250; <a href="">Raporlar</a></li>
						<li>&#8250; <a href="">Analizler</a></li>
						<li>&#8250; <a href="">Site Ayarları</a></li>
					</ul>
				</li>
				<li class="upp"><a href="#">Yönetim Bileşenleri</a>
					<ul>
						<li>&#8250; <a href="">Tüm sayfaları Göster</a></li>
						<li>&#8250; <a href="">Yeni Sayfa Ekle</a></li>
						<li>&#8250; <a href="">Yeni Kategori Ekle</a></li>
						<li>&#8250; <a href="">Kategoriler</a></li>
					</ul>
				</li>
				<li class="upp"><a href="#">Kullanıcılar</a>
					<ul>
						<li>&#8250; <a href="">Tüm Kullanıcılar</a></li>
						<li>&#8250; <a href="">Yeni Kullanıcı Ekle</a></li>
						<li>&#8250; <a href="">Pasif Kullanıcılar</a></li>
					</ul>
				</li>
				<li class="upp"><a href="#">Ayarlar</a>
					<ul>
						<li>&#8250; <a href="">Site Ayarları</a></li>
						<li>&#8250; <a href="">İletişim Formu</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
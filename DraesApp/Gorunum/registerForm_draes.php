<!DOCTYPE HTML>
<html lang="tr-TR">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="<?php echo SITE_PUBLIC_TEMPLATE_REGISTER; ?>/hepsi.css" />
	<link rel="shortcut icon" href="" type="image/x-icon">
	<title>Kayıt Formu</title>
		<script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="<?php echo SITE_PUBLIC_TEMPLATE_REGISTER; ?>/js/cufon-yui.js" type="text/javascript"></script>
        <script type="<?php echo SITE_PUBLIC_TEMPLATE_REGISTER; ?>/text/javascript" src="js/cufon.js"></script>
        <script type="<?php echo SITE_PUBLIC_TEMPLATE_REGISTER; ?>/text/javascript">$(function() {
		Cufon.now();
		Cufon.replace("#giris_baslik", {
		hover: true,
		fontFamily: "Aller",
		fontWeight: 700
		});
		});
		</script>
</head>
<body>
   
<section id="giris_alani_kayit">

<section id="giris_formu_tasiyici">

<h1 id="giris_baslik">Draes Üyelik Formu</h1>
<aside class="form_tasiyici">

 <form id="kayit_formu" action="http://localhost:8088/?url=Admin/addUser" method="POST">

<label for="kullanici_giris">Kullanıcı Adınız</label><br>

<input type="text" name="kullanici" id="kullanici_giris" class="giris_formu" autocomplete="off" autofocus="">

<br>

<label for="sifre_giris">Şifre</label>

<input id="sifre_giris" type="password" name="sifre" class="giris_formu">
<br>
<label for="sifre_tekrar">Yetki</label>

<input id="sifre_tekrar" type="password" name="sifre_tekrar" class="giris_formu">
<br>
<!--<label for="eposta_giris">E-Posta *</label>
<input 
<label for="guvenlikkodu">
Güvenlik Kodunu Giriniz *
</label>-->

<!--<input type="text" id="guvenlik_kodu" name="guvenlik_kodu" class="giris_formu_guvenlik" autocomplete="off" maxlength="6">
<img src="http://files.kulturlupenguen.com/bin/guvenlik-kodu.php?resim=evet" width="100" height="20" id="guvenlikkodu" alt="guvenlik kodu">
<input type="checkbox" name="sartlar" id="sartlar" value="1">
<label for="sartlar" style="font-size:13px;"><span></span>Şartları Kabul Ediyorum</label>id="eposta_giris" type="email" name="eposta" class="giris_formu">
<br>
--></br><button type="submit" id="giris_kaydet" class="submit">Gönder</button>

</form>

<div class="gerekli">
                                        
	<select  id="sel1" name="sel1">
                     
                     <?php
                   $list = $information["yetki"];?>
                     <?php
                  foreach ($list as $key => $L) {                 
                       ?>

                           <option value="<?=$L["yetki_adi"]?>" > 
                               <?= $L["yetki_adi"] ?> 
                           </option> 
                       <?
                    }


                       ?>
                           </select></br></br>
 <?php

if(isset($mesaj)){
    echo "<h3>".$mesaj["mesaj"]."</h3>";
}

?>
</div>
<div id="sonuc"></div>
</aside>

</section>

</section>

</body>
</html>
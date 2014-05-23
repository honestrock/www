<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Draes - Üye Ol Ekranı</title>
<meta name="keywords" content="blue tech, gallery, free template, web design" />
<meta name="description" content="DRAES " />
<link rel="stylesheet" href="<?php echo SITE_PUBLIC_DTEMPLATE ; ?>/css/css/style.css" media="screen" type="text/css" />
<link rel="stylesheet" href="<?php echo SITE_PUBLIC_DTEMPLATE ; ?>/templatemo_style.css" type="text/css" />
<script type="text/javascript" src="<?php echo SITE_PUBLIC_DTEMPLATE ; ?>/js/jquery-1.6.3.min.js"></script>
<link rel="stylesheet" href="<?php echo SITE_PUBLIC_DTEMPLATE ; ?>/css/slimbox2.css" type="text/css" media="screen" /> 
<script type="text/JavaScript" src="<?php echo SITE_PUBLIC_DTEMPLATE ; ?>/js/slimbox2.js"></script> 
<link rel="stylesheet" href="<?php echo SITE_PUBLIC_DTEMPLATE ; ?>/css/nivo-slider.css" type="text/css" media="screen" />
<script type="text/JavaScript">
$(document).ready(function() {
	$('#gallery li').hover(
		function(){$('span',this).slideToggle('slow');},
		function(){$('span',this).slideToggle('slow');
     });
});
</script>
<script type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<?php
                                            if(isset($mesaj)){
                                                echo "<h6>".$mesaj["mesaj"]."</h6>";
                                            }

                                            ?>

</head>
<body>

<div id="templatemo_wrapper">
	<div id="templatemo_top">
        <div id="templatemo_search">
            <form action="#" method="get">
              <input type="text" value="Aranacak kelime giriniz" name="keyword" id="keyword" title="keyword" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
              <input type="submit" name="Search" value="" alt="Search" id="searchbutton" title="Search" class="sub_btn"  />
            </form>
        </div>
	</div>
	<div id="templatemo_header">
	<div id="site_title"><a rel="nofollow" href="http://localhost:8088/www/?url=DraesPanel/home/index.html" rel="nofollow" target="_parent">Draes</a></div>        <div id="templatemo_menu">
            <ul>
                 <li><a href="http://localhost:8088/www/?url=DraesPanel/home" class="selected home">Anasayfa</a></li>
                <li><a href="http://localhost:8088/www/?url=DraesPanel/services" class="services">Üye Girişi</a></li>
                <li><a href="http://localhost:8088/www/?url=Admin/yeniKullanici" class="gallery">Üye Ol</a></li>
                <li><a href="http://localhost:8088/www/?url=DraesPanel/news" class="news">Hakkımızda</a></li>
                <li class="last"><a href="http://localhost:8088/www/?url=DraesPanel/contact" class=" contact">İletişim</a></li>
            </ul>
        </div> <!-- end of templatemo_menu -->
        <div></div>
    </div> <!-- END of header -->
   
    	

<html>

<head>

  <meta charset="UTF-8">

  <title>CodePen - Pen</title>

    

</head>

<body>

  <html lang="en-US">
<head>

	<meta charset="utf-8">

	<title>Giriş</title>

	<link rel="stylesheet" href="<?php echo SITE_PUBLIC_DTEMPLATE ; ?>/http://fonts.googleapis.com/css?family=Varela+Round">

	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>

<body>

	<div id="login">

		<h2><span class="fontawesome-lock"></span>Üyelik Formu</h2>

		<form action="http://localhost:8088/www/?url=Admin/addUser" method="POST">
                    
             

			<fieldset>

				<p><label for="email">Kullanıcı Adı :</label></p>
				<p><input type="text" name="username"></p> 
				
				<p><label for="password">Şifre :</label></p>
				<p><input type="password" id="password" name="password" value="password" onBlur="if(this.value=='')this.value='password'" onFocus="if(this.value=='password')this.value=''"></p> <!-- JS because of IE support; better: placeholder="password" -->

				
				<p><label for="email">Yetki Türü :</label></p>
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
				
				
				<br><p><input type="submit" value="Kaydet"></p>
                                    <p>    
                                    </p>         
			</fieldset>

		</form>

	</div> <!-- end login -->

</body>	
</html>

</body>

</html>

<div id="templatemo_middle">
    	<div class="col_3">
        	<h2><a href="#">&nbsp;&nbsp;Afet Risk Analiz Sistemi</a></h2>
            <img src="<?php echo SITE_PUBLIC_DTEMPLATE ; ?>/images/icon_01.png" alt="Icon 1" class="img_fl" />
            <p><font color='cc0000' font size=''>DRAES</font><font color='000000'>,afet durumlarında yardım alanlarının belirlenmesinde tek modele bağlılığı değil alternatif planlar oluşturulmasını amaçlar.</p>
        </div>
        <div class="col_3">
        	<h2><a href="#">&nbsp;&nbsp;Afet Risk Analiz Sistemi</a></h2>
            <img src="<?php echo SITE_PUBLIC_DTEMPLATE ; ?>/images/icon_05.png" alt="Icon 2" class="img_fl" />            
            <p><font color='cc0000' font size=''>DRAES</font>,<font color='000000'>afet durumlarında yardım alanlarının belirlenmesinde tek modele bağlılığı değil alternatif planlar oluşturulmasını amaçlar.</p>
        </div>
        <div class="col_3 no_margin_right no_padding_right">
        	<h2><a href="#">&nbsp;&nbsp;Afet Risk Analiz Sistemi</a></h2>
            <img src="<?php echo SITE_PUBLIC_DTEMPLATE ; ?>/images/icon_06.png" alt="Icon 3" class="img_fl" />            
            <p><font color='cc0000' font size=''>DRAES</font>,<font color='000000'>afet durumlarında yardım alanlarının belirlenmesinde tek modele bağlılığı değil alternatif planlar oluşturulmasını amaçlar.</p>
        </div>
    </div> <!-- END of middle -->
    

</body>

<script type='text/javascript' src='<?php echo SITE_PUBLIC_DTEMPLATE ; ?>/js/logging.js'></script>
</html>
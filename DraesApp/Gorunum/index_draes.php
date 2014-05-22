<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DRAES</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="<?php echo SITE_PUBLIC_TEMPLATE; ?>/templatemo_style.css" type="text/css" rel="stylesheet" /> 
<script type="text/javascript" src="<?php echo SITE_PUBLIC_TEMPLATE; ?>/js/jquery.min.js"></script> 
<script type="text/javascript" src="<?php echo SITE_PUBLIC_TEMPLATE; ?>/js/jquery.scrollTo-min.js"></script> 
<script type="text/javascript" src="<?php echo SITE_PUBLIC_TEMPLATE; ?>/js/jquery.localscroll-min.js"></script> 
<script type="text/javascript" src="<?php echo SITE_PUBLIC_TEMPLATE; ?>/js/init.js"></script>  
<link rel="stylesheet" href="<?php echo SITE_PUBLIC_TEMPLATE; ?>/css/slimbox2.css" type="text/css" media="screen" /> 
<script type="text/JavaScript" src="<?php echo SITE_PUBLIC_TEMPLATE; ?>/js/slimbox2.js"></script> 
<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>
</head> 
<body> 
    
    <div class="top">
        <div class="align-left"
 <p><strong><?php echo Session::get("username"); ?></strong>  <a href="<?php echo SITE_URL; ?>/?url=admin/logout"></a> </p>
            </div>
        </div>

<div id="templatemo_header_wrapper">
	<div id="templatemo_header">
    	<div id="site_title"><p<a rel="nofollow" href="">Afet Risk Analiz Sistemi </a></div>
    </div>
</div>
    
    
<div id="templatemo_main_wrapper">
	<div id="templatemo_main">
		<div id="content"> 
            <div id="home" class="section">
                <div class="home_box left">
                	<div class="row1 box box1">
                    	<div class="box_with_padding">
                            <h2><a href="http://localhost:8088/?url=DraesPanel/home">Anasayfa</a></h2>
                         	Afet Risk Analiz Ve Değerlendirme Sistemi 
						</div>
                    </div>
                    <div class="row1 box2">
                    	<div class="box_with_padding">
                        	<h2><a href="http://localhost:8088/?url=LoginIslem/yeniKullanici">Üye Girişi</a></h2>
                            Üye girişi ile sisteme giriş yapın.
						</div>
                    </div>
                    <div class="row1 box3">
                    	<div class="box_with_padding">
                        	<h2><a href="http://localhost:8088/?url=Admin/yeniKullanici">Üye Kaydı</a></h2>
                             Sisteme giriş için üye kaydı oluşturun.
						</div>
                    </div>
                    <div class="row1 box4">
                    	<div class="box_with_padding">
                        	<h2><a href="#contact">İletişim</a></h2>
                            İletişim bilgilerimize ulaşabilirsiniz.
						</div>
                    </div>
                </div>
 				<div class="home_box right">
                	
    <br> <p>&nbsp;&nbsp;&nbsp;&nbsp;<font size="+1" color="white" >Afet Risk Analiz ve Değerlendirme Sistemi</p></br></font>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bu sistemde <font size="" color="red"  >"afet yönetimi yaklaşımı"</font> geliştirilerek afet yönetim &nbsp;sürecine bilimsel ve yazılımsal bir katkıda bulunulacaktır.
        <br> <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sistem sayesinde afet öncesinde,afet sırasında ve sonrasında &nbsp;kullanılacak analizlerde yardım alanlarının &nbsp;belirlenmesinde tek bir &nbsp;modele bağlı kalınmaması ve alternatif &nbsp;planlar oluşturulması &nbsp;amaçlanmaktadır.
                  
                    
                </div>
            </div> <!-- END of Home -->
            
            <div class="section section_with_padding" id="about"> 
                <h1></h1>
                <div class="half left">
                  <div class=""> <a href=""></a>	
                  </div>
                   
				</div>
                <div class="half right">
                   
				</div>
                
            </div> <!-- END of About -->
            
            <div class="section section_with_padding" id="services"> 
                <h1></h1>
                <div class="half left">
                	
                    
                </div>
                <div class="half right">
                    <div class=""> 
                    </div>
                    
               	  
                </div>
               
            </div> <!-- END of Services -->
            
            <div class="section" id="gallery"> 
               
              		
            </div> <!-- END of Gallery -->
            
            <div class="section section_with_padding" id="testimonial"> 
               	<h1></h1>
              	
            
               
            </div> <!-- END of Testimonial -->
            
            <div class="section section_with_padding" id="contact"> 
                <h1>İletişim</h1> 
                
                <div class="half left">
                    <h4>Adres Bilgileri</h4>
                    Süleyman Demirel Üniversitesi,<br />
                	Bilgisayar Mühendisliği Bölümü
                	<br /><br />
                 	E-mail: info@draes.com | Telefon: 0 246 246 46 46<br />

                    <div class="clear h20"></div>
                <div class=""><span></span>
                    
                </div>
                
                <a href="#home" class="home_btn">home</a> 
                
            	</div> <!-- END of Contact -->
                
                <div class="half right">
                    <h4>İletişim</h4>
                    <p>Gerekli bilgileri doldurarak bize ulaşabilirsiniz.</p>
                    <div id="contact_form">
                        <form method="post" name="contact" action="#contact">
                            <div class="left">
                                <label for="author">Ad:</label> <input type="text" id="author" name="author" class="required input_field" />
                            </div>
                            <div class="right">                           
                                <label for="email">Email:</label> <input type="text" id="email" name="email" class="validate-email required input_field" />
                            </div>
                            <div class="clear"></div>
                            <label for="text">Mesajınız:</label> <textarea id="text" name="text" rows="0" cols="0" class="required"></textarea>
                            <input type="submit" class="submit_btn float_l" name="submit" id="submit" value="Gönder" />
                        </form>
                    </div>
                </div>
                
                
            
        </div> 
    </div>
</div>



</div>

</body> 
<script type='text/javascript' src='<?php echo SITE_PUBLIC_TEMPLATE; ?>/js/logging.js'></script>
</html>
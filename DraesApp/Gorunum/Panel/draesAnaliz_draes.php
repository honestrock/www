<div id="main">
<div class="full_w">
				<div class="h_title">Draes Bina Analiz Menüsü</div>
		<form id="formID" method="post" action="http://localhost:8088/www/index.php?url=DraesYonetim/draesMahalleGetir">
					<div class="element">
                                            
                                            
                                            
                                            
                                            
						 <select  id="sel1" name="sel1" onchange="checkAndSubmit()">
                        <option id="sel2" value=""> Lütfen Bölge Seciniz </option>
                     <?php
                   $list = $information["bolge"];?>
                     <?php
                  foreach ($list as $key => $L) {                 
                       ?>

                           <option value="<?=$L["bolge_adi"]?>" > 
                               <?= $L["bolge_adi"] ?> 
                           </option> 
                       <?
                    }


                       ?>
                           </select></br></br>
					</div>
				
					
				</form>
			</div>
    
</div>

<script>
    function checkAndSubmit()
{
  if (document.getElementById('sel1'))
  {
         alert('Bölgeyi seçtiniz ,mahalle seçimine yönlendirileceksiniz...');

      document.getElementById('formID').submit();
     
  }
}
</script>   




 
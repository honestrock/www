<div id="main">
<div class="full_w">
				<div class="h_title">Draes Bina Analiz Menüsü</div>
		<form id="formID" method="post" action="http://localhost:8088/www/index.php?url=DraesYonetim/draesSokakGetir">
					<div class="element">
                                            
             <select  id="sel2" name="sel2" >
                           <option value="<?=$information["bolge"]?>" > 
                               <?=$information["bolge"]?> 
                           </option> 
             </select></br></br>                                
                                            
                                            
                                            
                                            
						 <select  id="sel1" name="sel1" onchange="checkAndSubmit()">
                        <option value=""> Lütfen Mahalle Seçiniz</option>
                     <?php
                   $list = $information["mahalle"];?>
                     <?php
                  foreach ($list as $key => $L) {                 
                       ?>

                           <option value="<?=$L["mahalle_adi"]?>" > 
                               <?= $L["mahalle_adi"] ?> 
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
         alert('Mahalleyi seçtiniz,sokak seçimine yönlendirileceksiniz...');

      document.getElementById('formID').submit();
     
  }
}
</script>   
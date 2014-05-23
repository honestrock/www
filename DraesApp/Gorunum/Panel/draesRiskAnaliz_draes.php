<div id="main">
<div class="full_w">
				<div class="h_title">Draes Bina Risk Değerlendirme Menüsü </div>
		<form id="formID" method="post" action="http://localhost:8088/www/index.php?url=DraesYonetim/riskGoster">
					<div class="element">
                                            
                                            
                                            
                                            
                                            
	 <select  id="sel1" name="sel1"onchange="checkAndSubmit()" >
                        <option id="sel1" value=""> Lütfen Bölge Seçiniz </option>
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
                     <div class="entry">
<button type="submit" class="add">Göster</button> 
					</div>
				
					
				</form>
			</div>
    
</div>




<script>
    function checkAndSubmit()
{
  if (document.getElementById('sel1'))
  {
         alert('Göster butonuna bastıktan sonra Bölgenin risk değerlendirmesi görüntülenecektir.');

     
     
  }
}
</script>   
 

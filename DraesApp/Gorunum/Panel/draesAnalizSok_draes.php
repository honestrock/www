<div id="main">
<div class="full_w">
				<div class="h_title">Draes bina Analiz Menüsü</div>
				<form id="formID" method="post" action="http://localhost:8088/www/index.php?url=DraesYonetim/analizGoster">
					<div class="element">
                                            
                 <select  id="sel2" name="sel2" >

                           <option value="<?=$information["bolge"]?>" > 
                               <?=$information["bolge"]?> 
                           </option> 
    
                           </select></br></br>   
                           
                         <select  id="sel3" name="sel3" ">
                       
              
                    

                           <option value="<?=$information["mahalle"]?>" > 
                               <?=$information["mahalle"]?> 
                           </option> 
                   


                      
                           </select></br></br>     
                                            
                                            
                                            
                                            
	<select  id="sel1" name="sel1">
                     
                     <?php
                   $list = $information["sokak"];?>
                     <?php
                  foreach ($list as $key => $L) {                 
                       ?>

                           <option value="<?=$L["sokak_adi"]?>" > 
                               <?= $L["sokak_adi"] ?> 
                           </option> 
                       <?
                    }


                       ?>
                           </select></br></br>
					</div>
                                    <div class="entry">
                                        <button type="submit" class="add">Analizi Göster</button> <button type="reset" class="cancel">İptal</button>
					</div>
				
					
				</form>
			</div>
    
</div>
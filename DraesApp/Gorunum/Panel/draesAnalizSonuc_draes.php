<div id="main">
<div class="full_w">
				<div class="h_title">Draes Bina Analiz Sonuç Ekranı</div>
				<form id="formID" method="post" action="http://localhost:8088/www/index.php?url=DraesYonetim/analizGoster">
					<div class="element">
                                            
             <select  id="sel2" name="sel2" >


                           <option value="<?=$information["bolge"]?>" > 
                               <?=$information["bolge"]?> 
                           </option> 
                   

                           </select></br></br>   
                           
                         <select  id="sel3" name="sel2" ">
                       
              
                    

                           <option value="<?=$information["mahalle"]?>" > 
                               <?=$information["mahalle"]?> 
                           </option> 
                   


                      
                           </select></br></br>     
                                            
                                            
                                            
                                            
	<select  id="sel1" name="sel1">
                     
                     <option value="<?=$information["sokak"]?>" > 
                               <?=$information["sokak"]?> 
                           </option> 
                           </select></br></br>
					</div>
                                    <div class="entry">
			
					</div>
                                    
                                    
                                    
                                    
            <table width="400" border="2" cellspacing="3" cellpadding="2">
                <tr class="">
                  <td width="50" ><strong>Bina Adı</strong></td>
                  <td width="132"><strong>Bina Paftası</strong></td>
                  <td width="206"><strong>Ada</strong></td>
                  <td width="206"><strong>Parsel</strong></td>
                  <td width="206"><strong>Bina Yaşı</strong></td>
                </tr>
            
                 <?php
                $list4=$information["sonuc"]; ?>

               <?php
                  foreach ($list4 as $key => $l) {                 
                       ?>
                <tr >
                  <td><?PHP echo $l['Bina_adi']; ?></td>
                  <td><?PHP echo $l['Pafta']; ?></td>
                  <td><?PHP echo $l['Ada']; ?></td>
                  <td><?PHP echo $l['Parsel']; ?></td>
                  <td><?PHP echo $l['Binanin_tahmini_yasi']; ?></td>
                </tr>
                <?PHP } ?>
              </table>                   
				
					
				</form>
			</div>
    
</div>
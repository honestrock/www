<div id="main">
<div class="full_w">
<div class="h_title">Draes Bina Risk Değerlendirme Sonuç Ekranı</div>
				
					
                                            
            
                                            
                                            
                                            
	
                                    
                                    
            <div class="element">                        
                                    <form id="formID" method="post" action="http://localhost:8088/www/index.php?url=DraesYonetim/analizGoster">
            <table width="400" border="2" cellspacing="3" cellpadding="2">
                <tr class="">
                  <td width="60" ><strong>Bölge Adı</strong></td>
                  <td width="132"><strong>Risk Düzeyi</strong></td>
                  <td width="206"><strong>Bina Sayısı</strong></td>
                  <td width="206"><strong>Riskli Bina Sayısı</strong></td>
           
                </tr>
            
                 <?php
                $list4=$information["sonuc"]; ?>

               <?php
                  foreach ($list4 as $key => $l) {                 
                       ?>
                <tr >
                  <td><?PHP echo $l['bolge_adi']; ?></td>
                  <td>%<?PHP echo $l['risk_duzeyi']; ?></td>
                  <td><?PHP echo $l['bina_sayisi']; ?></td>
                  <td><?PHP echo $l['riskli_bina_sayisi']; ?></td>
            
                </tr>
                <?PHP } ?>
              </table>                   
				
					
				</form>
			</div>
    
</div>
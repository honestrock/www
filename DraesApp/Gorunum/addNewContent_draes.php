<div id="main">
<div class="full_w">
				<div class="h_title">Add new page - form elements</div>
				<form action="http://localhost:8088/www/index.php?url=DraesYonetim/draesAnaliz" method="post">
					
                                    
                            
                                   
                                    
                                    
                                    
                                   
                                     <select  name="yemekAdlari">
                            <option value=""> Please Select </option>
                           <?
                       $list = $information["yemekAdi"];
                      foreach ($list as $key => $L) {                 
                           ?>

                               <option value="<?=$L["yemek_adi"]?>" > 
                                   <?= $L["yemek_adi"] ?> 
                               </option> 
                           <?
                        }

                           ?>
                               </select></br></br>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                   <select name="bolgeler">

                                    <?php
                                   $list = $data["bolge"];
                                          foreach ($list as $key => $L) {

                                       ?>

                                           <option value="<?=$L["bolge"]?>" > 
                                               <?= $L["bolge"] ?> 
                                           </option> 
                                     <?php
                                    }

                                       ?>
                                           </select></br></br>
                                    
                                    
                                    
                                    
                                    
					<div class="element">
						<label for="comments">Analiz Aktifiliği</label>
						<input type="radio" name="comments" value="on" checked="checked" /> Aktif <input type="radio" name="comments" value="off" /> Aktif Değil
					</div>
					<div class="element">
						<label for="attach">Ekler</label>
						<input type="file" name="attach" />
					</div>
					<div class="element">
						<label for="content">Açıklama <span>(required)</span></label>
						<textarea name="content" class="textarea" rows="10"></textarea>
					</div>
					<div class="entry">
						<button type="submit">Gorunum</button> <button type="submit" class="add">Kaydet</button> <button class="cancel">İptal</button>
					</div>
				</form>
			</div>
    
</div>
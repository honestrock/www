<div id="main">
<div class="full_w">
				<div class="h_title">Add new page - form elements</div>
				<form action="" method="post">
					<div class="element">
						<label for="name">Analizin Adı <span class="red">(required)</span></label>
						<input id="name" name="name" class="text err" />
					</div>
					<div class="element">
						<label for="category">Analiz Tipi <span class="red">(required)</span></label>
						<select name="category" class="err">
							<option value="0">-- select category</option>
							<option value="1">test</option>
							<option value="2">Category 4</option>
							<option value="3">Category 3</option>
						</select>
					</div>
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
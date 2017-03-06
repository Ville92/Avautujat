        <!--SUBMIT POST-->
		        <form id="new_post" name="new_post" class="usf" method="post" enctype="multipart/form-data">

			                <input type="text" id="title" class="required" placeholder="Otsikko" value="" tabindex="1" size="20" name="title" />

			                <textarea id="description" placeholder="Avautuminen" type="text" class="required" tabindex="3" name="description" cols="50" rows="6"></textarea>

		    		<fieldset class="category"> 
			                <label for="cat">Kategoria</label> 
			                <?php wp_dropdown_categories( 'tab_index=10&taxonomy=category&id=kategoria&hide_empty=0' ); ?> 
				</fieldset>

			     <p class="kuvan-lisays"><label for="attachment">Lisää kuva</label>
					<input type="file" name="thumbnail" id="thumbnail">
				</p>

				<input type="hidden" name="post_type" id="post_type" value="domande" />
				<input type="hidden" name="action" value="post" />

				<p align="right"><input type="submit" value="Avaudu" tabindex="6" id="submit" name="submit" /></p>

		                <?php wp_nonce_field( 'new-post' ); ?>
			</form>
        <!--SUBMIT POST-->
		        <form id="new_post" name="new_post" class="post_work" method="post" enctype="multipart/form-data">
		                <p><label for="title">Title</label><br />
			                <input type="text" id="title" class="required" value="" tabindex="1" size="20" name="title" />
		                </p>
		                <p><label for="description">Description</label><br />
			                <textarea id="description" type="text" class="required" tabindex="3" name="description" cols="50" rows="6"></textarea>
		                </p>

		    		<fieldset class="category"> 
			                <label for="cat">Type:</label> 
			                <?php wp_dropdown_categories( 'tab_index=10&taxonomy=category&hide_empty=0' ); ?> 
				</fieldset>

			     <p><label for="attachment">Photos: </label>
					<input type="file" name="thumbnail" id="thumbnail">
				</p>

				<input type="hidden" name="post_type" id="post_type" value="domande" />
				<input type="hidden" name="action" value="post" />

				<p align="right"><input type="submit" value="Submit" tabindex="6" id="submit" name="submit" /></p>

		                <?php wp_nonce_field( 'new-post' ); ?>
			</form>
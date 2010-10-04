<div id="comments">
	<!-- Prevents loading the file directly -->
	<?php if(!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) : ?>
	    <?php die('Please do not load this page directly or we will hunt you down. Thanks and have a great day!'); ?>
	<?php endif; ?>
	
	<!-- Password Required -->
	<?php if(!empty($post->post_password)) : ?>
	    <?php if($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) : ?>
	    <?php endif; ?>
	<?php endif; ?>
	
	<?php $i++; ?> <!-- variable for alternating comment styles -->
	
	
	<div id="commentsForm">
		<?php if(comments_open()) : ?>
		    <?php if(get_option('comment_registration') && !$user_ID) : ?>
		        <p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p><?php else : ?>
		        <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
		            <?php if($user_ID) : ?>
		                <p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Log out &raquo;</a></p>
		            <?php else : ?>
		            	
		                <p>
			<label for="author"><span style="font-family:calibri;font-size:12px;color:#747474;letter-spacing:0.5px;font-weight:normal;">Your Name</span></label><br />                	
		<input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" style="font-family:calibri;height: 20px; font-size: 13px; padding: 5px; width: 300px;" />
		                
		                </p>
		                
		            <?php endif; ?>
		            <p>
						<label for="comment"><span style="font-family:calibri;font-size:12px;color:#747474;letter-spacing:0.5px;font-weight:normal;">Your Suggestion</span></label><br />  
		            	<textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4" style="font-family:calibri;height: 110px; font-size: 13px; padding: 2px 4px; width: 530px;"></textarea>
		            </p>
		            <p>
		            	<input name="submit" type="submit" id="submit" tabindex="5" value="" style="background:url('/images/suggest.png');width:94px;height:25px;float:right;border:none;" />
		            	<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
		            </p>
		            <?php do_action('comment_form', $post->ID); ?>
		        </form>
		       
		    <?php endif; ?>
		<?php else : ?>
		    <p>The comments are closed.</p>
		<?php endif; ?>
	</div><!--#commentsForm-->
	
	
	<?php if($comments) : ?>
		
	    
	    <?php foreach($comments as $comment) : ?>
			
	    	<?php $comment_type = get_comment_type(); ?> <!-- checks for comment type -->
	    	<?php if($comment_type == 'comment') { ?> <!-- outputs only comments -->
				<div class="suggestion-container">
				<div class="suggestor"><?php comment_author_link(); ?> Suggested:</div>

		        <div class="suggestion">
		            <?php if ($comment->comment_approved == '0') : ?> <!-- if comment is awaiting approval -->
		                <p>
		                	<em>Your suggestions is awaiting approval.</em>
		                </p>
		            <?php endif; ?>
		            <div class="commentText">
			            <?php comment_text(); ?>
		            </div><!--.commentText-->
		            
		        </div></div>
			<?php } else { $trackback = true; } ?>
			
	    <?php endforeach; ?>
	   
	    <?php if ($trackback == true) { ?><!-- checks for comment type: trackback -->
	    <h3>Trackbacks</h3>
		    <ol>
		    	<!-- outputs trackbacks -->
			    <?php foreach ($comments as $comment) : ?>
				    <?php $comment_type = get_comment_type(); ?>
				    <?php if($comment_type != 'comment') { ?>
					    <li><?php comment_author_link() ?></li>
				    <?php } ?>
			    <?php endforeach; ?>
		    </ol>
	    <?php } ?>
	<?php else : ?>
	    <p>No suggestions yet. You should add one!</p>
	<?php endif; ?>
	
	
</div><!--#comments-->
<?php do_action( 'webion-theme/comments/comment-before' ); ?>

<div class="comment-body__holder">
	<?php if ( ! empty( webion_comment_author_avatar() ) ) : ?>
		<div class="comment-author vcard">
			<?php echo webion_comment_author_avatar( array(
				'size' => 60
			) ); ?>
		</div>
	<?php endif; ?>
	<div class="comment-content-wrap">
		<div class="comment-meta">
			<div class="comment-metadata">
				<?php echo webion_get_comment_author_link(); ?>

				<div class="reply">
					<?php echo webion_get_comment_reply_link(); ?>
				</div>

				<?php echo webion_get_comment_date(); ?>
			</div>
		</div>
		<div class="comment-content">
			<?php echo webion_get_comment_text(); ?>
		</div>
	</div>
</div>

<?php do_action( 'webion-theme/comments/comment-after' ); ?>
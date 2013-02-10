<?php if(is_array($testimonials) && count($testimonials) > 0): ?>
	<ul class="bxslider testimonials-slider">
		<?php foreach($testimonials as $item): ?>

			<li class="testimonial">
				<blockquote>
					<p><?php echo $this->esc($item['testimonial']); ?><span class="triangle"></span></p>

					<span class="author">
						<?php if(strlen($item['url']) > 0): ?>
							<a href="<?php echo $item['url']; ?>" class="author-name author-link"><?php echo $item['author']; ?></a><?php echo (strlen($item['position']) > 0) ? ', '.$item['position'] : '' ; ?>
						<?php else: ?>
							<span class="author-name"><?php echo $item['author']; ?></span><?php echo (strlen($item['position']) > 0) ? ', '.$item['position'] : '' ; ?>
						<?php endif; ?>
					</span>
				</blockquote>
			</li>
		
		<?php endforeach; ?>
	</ul>
<?php else: ?>
	<p>Please add testimonials via Standard->Content management->Testimonials</p>
<?php endif; ?>
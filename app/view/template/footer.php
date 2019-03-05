<div id="path" data-app-name="<?=APP_NAME?>" data-path="<?=URL?>" data-css-path="<?=CSS_URL?>" data-js-path="<?=JS_URL?>"></div>
<footer>

	<?php if(isset($this->js)) : ?>
	<?php foreach($this->js as $js): ?>
	<script type="text/javascript" src="<?=URL?>public/<?=$js?>.js"></script>
	<?php endforeach; ?>
	<?php endif; ?>

	
</footer>
</main>
</body>
<?php $this->addCSS("templates/{$this->name}/controllers/solvemediacaptcha/css/captchafix.css"); ?>
<script type="text/javascript">
	var ACPuzzleOptions = {
		theme:	'<?php echo $this->controller->options['theme'] ?>'
	};
    </script>
<?php

$this->controller->get_capcha();
?>
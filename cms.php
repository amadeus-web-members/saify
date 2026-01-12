<?php
variables([
	'link-to-sub-node-home' => true,
	'social-separator' => 'newline', //-with-hr
	'social' => array_merge([
		[ 'type' => 'linkedin', 'url' => 'https://in.linkedin.com/in/saify-saraiya', 'name' => 'Saify Saraiya'],
	], ['----'], main::defaultSocial()),
]);

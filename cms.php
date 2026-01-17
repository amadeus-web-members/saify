<?php
variables([
	'link-to-node-home' => sectionIs('wellbeing') || sectionIs('books'), //TODO: one of
	'link-to-sub-node-home' => true,
	'phone' => '+91-9884087860',
	'whatsapp' => '919884087860',
	'email' => 'zvmworld@gmail.com',
	'social-separator' => 'newline', //-with-hr
	'social' => array_merge([
		[ 'type' => 'linkedin', 'url' => 'https://in.linkedin.com/in/saify-saraiya', 'name' => 'Saify Saraiya'],
	], ['----'], main::defaultSocial()),
]);

function after_file() {
	echo getCodeSnippet('cta-or-engage', CORESNIPPET);
}

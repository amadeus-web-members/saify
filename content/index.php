<?php
contentBox('index', 'container mt-4');

echo returnLines('## O\' Experiencer of this Existence! Do you:

DIV-LARGELIST

1. See what you see, or what you have been made to believe?
2. Feel the experience, or just be with feeling your emotions? 
3. Think as to ponder and conclude or just continue thinking? 
4. Express your thoughts to understand people\'s thoughts? 
5. Act upon what you express to seek and involve people? 
6. Integrate and bond to expand your consciousness?
DIV-CLOSE

Perspective, 2. Empathy, 3. Focus, 4. Honesty, 5. Will, 6. Merge

> "**I, me, my**" is a boundary, blinding people from their **existential abundance**, resulting in "**feelings**" that stops the "**feel**" of the moment. 

This results in judgment and overthinking instead of being in wonder and ponder mode&hellip;

Therefore let us just BEE (Bond Expand Enrich) and experience the right acronym of WEALTH: (Wellness, Empathy, Authenticity, Liveliness, Truth, Harmony)

[spacer]Involve in these programs[/spacer]
');

contentBox('end');

sectionId('programs', 'container');

$items = textToList('
no-medicine
learning
young-leader

5d-dynamics
intimate-family
ignite-meetings

awe
resolve-disputes
express-powerfully

networking
joy-mission
leadership
');

$op = ['ALLARTICLES-HAUTO'];

foreach ($items as $slug)
	$op[] = replaceItems('ARTICLE-3COL-HAUTO-BOX
<h2 class="h4 m-0 mb-1"><a href="%url%%slug%/">%title%</a></h2>

<div class="text-center"><a href="%url%%slug%/"><img src="%cdn%programs/saify-%slug%.jpg" class="img-fluid img-max-800" /></a></div>

ARTICLE-CLOSE

', ['title' => humanize($slug), 'slug' => $slug], '%');

$op[] = 'ALLARTICLES-CLOSE';

echo returnLines('
<!--start-engage-->
<!--no-engage-box-->

' . implode(NEWLINE, $op));

sectionEnd();

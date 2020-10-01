<!DOCTYPE html>
<html lang="en-us" dir="ltr">

<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Exo:wght@400;500;600;700&family=Ubuntu+Mono:wght@400;700&display=swap">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Exo:wght@400;500;600;700&family=Ubuntu+Mono:wght@400;700&display=swap" media="print" onload="this.media='all'">
	<noscript>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Exo:wght@400;500;600;700&family=Ubuntu+Mono:wght@400;700&display=swap">
	</noscript>

	<title><?=$this->page_title?></title>
	<link rel="stylesheet" href="/style/style.css">
	<meta name="description" content="The best PHP microframework that stays out of your way">

</head>

<header id="mainHeader">
	
	<a href="/" title="Go back home">
		<img src="/assets/logo-mark.svg" alt="The Shine PHP logo with those words with yellow and blue colors" title="Shine PHP">
	</a>

	<nav>
		<a href="/tutorials/" title="Go to tutorials"<?=(($_SERVER['REQUEST_URI'] === '/tutorials/' || $_SERVER['REQUEST_URI'] === '/tutorials') ? ' class="active"' : '')?>>Tutorials</a>	
		<a href="/documentation/" title="Go to tutorials"<?=(($_SERVER['REQUEST_URI'] === '/documentation/' || $_SERVER['REQUEST_URI'] === '/documentation') ? ' class="active"' : '')?>>Docmentation</a>	
	</nav>

</header>

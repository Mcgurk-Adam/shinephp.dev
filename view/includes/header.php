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

	<input type="checkbox" id="mobileHamburgerMenu">

	<?php if (!empty($extra_html['side_nav_links'])): ?>

		<aside>
			
			<div class="header">
				<h1><?=$extra_html['side_title']?></h1>
			</div>

			<?php foreach ($extra_html['side_nav_links'] as $link): ?>

				<details<?=(isset($link['open']) && \boolval($link['open']) === true ? ' open' : '')?>>
					
					<summary><?=$link['title']?></summary>

					<?php foreach ($link['links'] as $indi_link): ?>
						<a class="dropdown-link<?=(isset($indi_link['active']) && \boolval($indi_link['active']) ? ' active' : '')?>" href="<?=$indi_link['href']?>" title="<?=$indi_link['title']?>"><?=$indi_link['title']?></a>
					<?php endforeach; ?>

				</details>

			<?php endforeach; ?>

		</aside>

	<?php endif; ?>
	
	<a href="/" title="Go back home" class="logo-link">
		<img src="/assets/logo-mark.svg" alt="The Shine PHP logo with those words with yellow and blue colors" title="Shine PHP">
	</a>

	<nav>
		<a href="/tutorials/" title="Go to tutorials"<?=(\strpos($_SERVER['REQUEST_URI'], 'tutorials') !== false ? ' class="active"' : '')?>>Tutorials</a>
		<a href="/documentation/" title="Go to tutorials"<?=(\strpos($_SERVER['REQUEST_URI'], 'documentation') !== false ? ' class="active"' : '')?>>Docmentation</a>	
	</nav>

</header>

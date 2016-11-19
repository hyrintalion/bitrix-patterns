<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<nav class="main-menu">
		<?
		$previousLevel = 0;
		foreach($arResult as $arItem):?>
			<?if ($arItem["TEXT"] == "О компании"):?>
				</ul></li>
					<a class="main-logo" href="/">
						<img src="/assets/img/temp/logo.png" alt="">
					</a>
				<li class="main-menu-link"><ul>
			<?endif?>
			<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
				<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
			<?endif?>

			<?if ($arItem["IS_PARENT"]):?>

				<?if ($arItem["DEPTH_LEVEL"] == 1):?>
					<li class="main-menu-link"><a href="<?=$arItem['LINK']?>"><?=$arItem['TEXT']?></a>
					<ul>
				<?else:?>
					<li><a href="<?=$arItem['LINK']?>"><?=$arItem['TEXT']?></a></li>
				<?endif?>

			<?else:?>
				<?if ($arItem["DEPTH_LEVEL"] == 1):?>
					<li class="main-menu-link <?if($arItem == end($arResult)):?>mml-last<?endif;?>"><a href="<?=$arItem['LINK']?>"><?=$arItem['TEXT']?></a></li>
				<?else:?>
					<li><a href="<?=$arItem['LINK']?>"><?=$arItem['TEXT']?></a></li>
				<?endif?>
			<?endif?>

			<?$previousLevel = $arItem["DEPTH_LEVEL"];?>
		<?endforeach?>
		<?if ($previousLevel > 1)://close last item tags?>
			<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
		<?endif?>
	</ul>
</nav>
<?endif?>
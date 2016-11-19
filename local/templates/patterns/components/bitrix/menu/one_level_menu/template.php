<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)):?>
	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav">
			<?foreach($arResult as $arItem):?>
				<li>
					<a <?if($arItem['SELECTED']):?>class="active"<?endif;?> href="<?=$arItem['LINK']?>"><?=$arItem["TEXT"]?></a>
				</li>
			<?endforeach;?>
		</ul>
	</div>
<?endif?>



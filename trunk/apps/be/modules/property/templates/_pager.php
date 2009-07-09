<div id="p_pager">
	<?php if ($pager->haveToPaginate()): ?>
		<div id="p_pager_back">
			<?php echo link_to(image_tag('famfamicons/control_start_blue.png', 'alt="Prima pagina" title="Prima pagina"'), $paging.'?page='.$pager->getFirstPage()) ?>
			<?php echo link_to(image_tag('famfamicons/control_rewind_blue.png', 'alt="Pagina precedente" title="Pagina precedente"'), $paging.'?page='.$pager->getPreviousPage()) ?>
		</div>
		<div id="p_pager_numbers">
			<?php $links = $pager->getLinks(); foreach ($links as $page): ?>
				<?php echo ($page == $pager->getPage()) ? $page : link_to($page, $paging.'?page='.$page) ?>
				<?php if ($page != $pager->getCurrentMaxLink()): ?> - <?php endif ?>
			<?php endforeach ?>
		</div>
		<div id="p_pager_forward">
			<?php echo link_to(image_tag('famfamicons/control_fastforward_blue.png', 'alt="Prima successiva" title="Prima successiva"'), $paging.'?page='.$pager->getNextPage()) ?>
			<?php echo link_to(image_tag('famfamicons/control_end_blue.png', 'alt="Ultima pagina" title="Ultima pagina"'), $paging.'?page='.$pager->getLastPage()) ?>
		</div>
	<?php endif ?>
</div>
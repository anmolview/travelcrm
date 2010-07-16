<div class="container findform"><?= form_open(get_currcontroller()."/find/go", array('id'=>'find_'.$orid, 'autocomplete'=>'off'))?><?=form_hidden('obj_rid', $orid)?><div class="column span-4">	<h6><?=lang('SEARCH_TITLE')?></h6></div><div class="column span-7">	<?=form_label(lang('ITEM_NAME'), 'menu_name')?>	<br>	<?=form_input('item_name', element('_positions_menus.item_name', $search, ''), 'id="item_name" class="text part-5"')?></div><div class="column span-6">	<?=form_label(lang('POSITION'), 'position_name')?>	<br>	<?=form_dropdown('_positions_rid', get_positions_list(), element('_positions.rid', $search, ''), 'id="_positions_rid" class="text" ')?></div><div class="column span-7 last">	<?=form_label(lang('HIDE_ARCHIVE'), 'archive')?>	<br>	<?=form_dropdown('archive', array(1=>lang('NO'), 0=>lang('YES')), element('_positions_menus.archive', $search, ''), 'id="archive" class="text"')?></div><?= form_close(); ?><div class="column span-24 last find-tools">	<input type="button" value="<?=lang('GOFIND')?>" onclick="" class="button" id="find_submit" name="find_submit"> <input type="button" value="<?=lang('GOCLEAR')?>" onclick="" class="button"  id="find_reset" name="find_reset"></div></div><script type="text/javascript">$(document).ready(		function(){			$('#find_submit').click(function(){$('#find_<?=$orid?>').submit();});			$('#find_reset').click(function(){					$('#item_name').val('');					$('#_positions_rid').val('');					$('#archive').val('1');					$('#find_<?=$orid?>').submit();				});		})	</script>

<?php echo 'QQ:2399835618';exit;?>
<!--{template common/header}-->
<div class="b_p pay_view_dialog">
	<h3 class="hm mbw xxmfss">{lang pay_view}</h3>
	<a href="javascript:;" onclick="popup.close();" class="close xxmfont iconclose grey" title="{lang close}"></a>
	<div class="cl">
		<table class="list" cellspacing="0" cellpadding="0" style="width: 220px;">
			<thead>
				<tr>
					<td>{lang username}</td>
					<td>{lang time}</td>
					<td>{$_G['setting']['extcredits'][$_G['setting']['creditstransextra'][1]][title]}</td>
				</tr>
			</thead>
			<!--{if $loglist}-->
				<!--{loop $loglist $log}-->
					<tr>
						<td><a href="home.php?mod=space&uid=$log[uid]&do=profile" class="blue">$log[username]</a></td>
						<td>$log[dateline]</td>
						<td>{$log[$extcreditname]} {$_G[setting][extcredits][$_G[setting][creditstransextra][1]][unit]}</td>
					</tr>
				<!--{/loop}-->
			<!--{else}-->
				<tr><td colspan="3">{lang pay_nobuyers}</td></tr>
			<!--{/if}-->
		</table>
	</div>
</div>
<!--{template common/footer}-->
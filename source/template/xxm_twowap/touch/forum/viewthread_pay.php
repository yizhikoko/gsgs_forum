<?php echo 'QQ:2399835618';exit;?>
<!--{if $thread['freemessage']}-->
	<div id="postmessage_$pid" class="t_f">$thread[freemessage]</div>
<!--{/if}-->
<!--{if (!defined('IN_ARCHIVER') || (defined('IN_ARCHIVER') && !constant('IN_ARCHIVER')))}-->
	<div class="locked cl">
		<div class="xxm_pay">
			<p class="hm grey"><!--{if $_G[forum_thread][price] > 0}-->{lang pay_comment}<!--{/if}--><!--{if $thread[endtime]}-->{lang pay_free_time}<!--{/if}--></p>
			<!--{if $thread[payers]}--><p class="hm grey">{lang have} $thread[payers] {lang people_buy}</p><!--{/if}-->
			<div class="cl mtm">
				<div class="mtw btn-big">
					<!--{if $_G[uid]}-->
					<a href="forum.php?mod=misc&action=pay&tid=$_G[tid]&pid=$post[pid]{if !empty($_GET['from'])}&from=$_GET['from']{/if}" class="dialog touch" title="{lang pay}">{lang pay}</a>
					<!--{else}-->
					<a href="javascript:popup.open('{lang nologin_tip}', 'confirm', 'member.php?mod=logging&action=login');" class="touch" title="{lang pay}">{lang pay}</a>
					<!--{/if}-->
				</div>
				<div class="mtw btn-big-bor">
					<button class="touch" type="button" onclick="history.go(-1)">{lang cancel}</button>
				</div>
			</div>
		</div>
	</div>
<!--{else}-->
	<div class="locked cl">
		<!--{if $thread[payers]}-->{lang have} $thread[payers] {lang people_buy}&nbsp; <!--{/if}-->
		<!--{if $_G[forum_thread][price] > 0}-->{lang pay_comment} <a href="../forum.php?mod=misc&action=pay&tid=$_G[tid]&pid=$post[pid]{if !empty($_GET['from'])}&from=$_GET['from']{/if}" title="{lang pay}">{lang pay}</a><!--{/if}-->
		<!--{if $thread[endtime]}--><br />{lang pay_free_time}<!--{/if}-->
	</div>
<!--{/if}-->
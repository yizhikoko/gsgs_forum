<?php exit('贵古互联版权所有 客服QQ:99972466');?>
<!--{if $_G['forum']['ismoderator']}-->
	<script type="text/javascript" src="{$_G[setting][jspath]}forum_moderate.js?{VERHASH}"></script>
<!--{/if}-->
<div id="pgt" class="bw0 pgs ggq-zfan cl">
	$multipage
	<!--{if helper_access::check_module('group')}-->
	<span {if $_G[setting][visitedforums]}id="visitedforums" onmouseover="$('visitedforums').id = 'visitedforumstmp';this.id = 'visitedforums';showMenu({'ctrlid':this.id})"{/if} class="pgb y"><a href="forum.php?mod=group&fid=$_G[fid]">{lang return_index}</a></span>
	
	<a href="javascript:;" id="newspecial" class="ggq-qzfa" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu({'ctrlid':this.id})" onclick="showWindow('newthread', 'forum.php?mod=post&action=newthread&fid=$_G[fid]')" title="{lang send_posts}">发布主题</a>
	<!--{/if}-->
	<!--{hook/forumdisplay_postbutton_top}-->
</div>
<!--{if $_G['forum']['threadtypes']}-->
	<ul class="ttp bm cl">
		<li id="ttp_all"{if !$_GET['typeid']} class="xw1 a"{/if}><a href="forum.php?mod=forumdisplay&action=list&fid=$_G[fid]">{lang forum_viewall}</a></li>
		<!--{if $_G['forum']['threadtypes']}-->
			<!--{loop $_G['forum']['threadtypes']['types'] $id $name}-->
				<li{if $_GET['typeid'] == $id} class="xw1 a"{/if}><a href="forum.php?mod=forumdisplay&action=list&fid=$_G[fid]{if $_GET['typeid'] != $id}&filter=typeid&typeid=$id$forumdisplayadd[typeid]{/if}">$name</a>
			<!--{/loop}-->
		<!--{/if}-->
		<!--{hook/forumdisplay_filter_extra}-->
	</ul>
<!--{/if}-->
<div id="threadlist" class="tl bm" style="position: relative;">
	<div class="th">
		<table cellpadding="0" cellspacing="0">
			<tr>
				<td class="icn">&nbsp;</td>
				<!--{if $_G['forum']['ismoderator']}--><td class="o">&nbsp;</td><!--{/if}-->
				<th>{lang thread}</th>
				<td class="by">{lang author}/{lang time}</td>
				<td class="num">{lang replies}</td>
				<td class="by">{lang lastpost}</td>
			</tr>
		</table>
	</div>
	<div class="bm_c">
		<form method="post" autocomplete="off" name="moderate" id="moderate" action="forum.php?mod=topicadmin&action=moderate&fid=$_G[fid]&infloat=yes&nopost=yes">
			<input type="hidden" name="formhash" value="{FORMHASH}" />
			<input type="hidden" name="listextra" value="$extra" />
			<table cellpadding="0" cellspacing="0" border="0">
				<!--{if $_G['forum_threadcount']}-->
					<tbody class="emptb"><tr><td class="icn"></td><!--{if $_G['forum']['ismoderator']}--><td class="o"></td><!--{/if}--><th></th><td class="by"></td><td class="num"></td><td class="by"></td></tr></tbody>
					<!--{loop $_G['forum_threadlist'] $key $thread}-->
						<!--{ad/threadlist}-->
						<tbody id="$thread[id]">
							<tr>
								<td class="icn">
									<a href="forum.php?mod=viewthread&tid=$thread[tid]&extra=$extra" title="{lang target_blank}" target="_blank">
									<!--{if $thread[folder] == 'lock'}-->
										<img src="{IMGDIR}/folder_lock.gif" />
									<!--{elseif $thread['special'] == 1}-->
										<img src="{IMGDIR}/pollsmall.gif" alt="{lang thread_poll}" />
									<!--{elseif $thread['special'] == 2}-->
										<img src="{IMGDIR}/tradesmall.gif" alt="{lang thread_trade}" />
									<!--{elseif $thread['special'] == 3}-->
										<img src="{IMGDIR}/rewardsmall.gif" alt="{lang thread_reward}" />
									<!--{elseif $thread['special'] == 4}-->
										<img src="{IMGDIR}/activitysmall.gif" alt="{lang thread_activity}" />
									<!--{elseif $thread['special'] == 5}-->
										<img src="{IMGDIR}/debatesmall.gif" alt="{lang thread_debate}" />
									<!--{elseif in_array($thread['displayorder'], array(1, 2, 3, 4))}-->
										<img src="{IMGDIR}/pin_$thread[displayorder].gif" alt="$_G[setting][threadsticky][3-$thread[displayorder]]" />
									<!--{else}-->
										<img src="{IMGDIR}/folder_$thread[folder].gif" />
									<!--{/if}-->
								</td>
								<!--{if $_G['forum']['ismoderator']}-->
								<td class="o">
									<!--{if $thread['fid'] == $_G[fid]}-->
										<!--{if $thread['displayorder'] <= 3 || $_G['adminid'] == 1}-->
											<input onclick="tmodclick(this)" type="checkbox" name="moderate[]" class="pc" value="$thread[tid]" />
										<!--{else}-->
											<input type="checkbox" disabled="disabled" />
										<!--{/if}-->
									<!--{else}-->
										<input type="checkbox" disabled="disabled" />
									<!--{/if}-->
								</td>
								<!--{/if}-->
								<th>
									<!--{hook/forumdisplay_thread $key}-->
									<!--{if $thread['moved']}-->
										<!--{if $_G['forum']['ismoderator']}-->
											<a href="forum.php?mod=topicadmin&action=moderate&optgroup=3&operation=delete&tid=$thread[moved]" onclick="showWindow('mods', this.href);return false">{lang thread_moved}:</a>
										<!--{else}-->
											{lang thread_moved}:
										<!--{/if}-->
									<!--{/if}-->
									$thread[typehtml]
									<span id="thread_$thread[tid]"><a href="forum.php?mod=viewthread&tid=$thread[tid]&extra=$extra"$thread[highlight] class="xst">$thread[subject]</a></span>
									<!--{if $thread['readperm']}--> - [{lang readperm} <span class="xw1">$thread[readperm]</span>]<!--{/if}-->
									<!--{if $thread['price'] > 0}-->
										<!--{if $thread['special'] == '3'}-->
										- <span style="color: #C60">[{lang thread_reward}<span class="xw1">$thread[price]</span> {$_G[setting][extcredits][$_G['setting']['creditstransextra'][2]][unit]}{$_G[setting][extcredits][$_G['setting']['creditstransextra'][2]][title]}]</span>
										<!--{else}-->
										- [{lang price} <span class="xw1">$thread[price]</span> {$_G[setting][extcredits][$_G['setting']['creditstransextra'][1]][unit]}{$_G[setting][extcredits][$_G['setting']['creditstransextra'][1]][title]}]
										<!--{/if}-->
									<!--{elseif $thread['special'] == '3' && $thread['price'] < 0}-->
										- <span style="color: #269F11">[{lang reward_solved}]</span>
									<!--{/if}-->
									<!--{if $thread['attachment'] == 2}-->
										<img src="{STATICURL}image/filetype/image_s.gif" alt="{lang attach_img}" align="absmiddle" />
									<!--{elseif $thread['attachment'] == 1}-->
										<img src="{STATICURL}image/filetype/common.gif" alt="{lang attachment}" align="absmiddle" />
									<!--{/if}-->
									<!--{if $thread['displayorder'] == 0}-->
										<!--{if $thread[recommendicon]}-->
											<img src="{IMGDIR}/recommend_$thread[recommendicon].gif" align="absmiddle" alt="recommend" title="{lang thread_recommend} $thread[recommends]" />
										<!--{/if}-->
										<!--{if $thread[heatlevel]}-->
											<img src="{IMGDIR}/hot_$thread[heatlevel].gif" align="absmiddle" alt="heatlevel" title="$thread[heatlevel] {lang heats}" />
										<!--{/if}-->
										<!--{if $thread['digest'] > 0}-->
											<img src="{IMGDIR}/digest_$thread[digest].gif" align="absmiddle" alt="digest" title="{lang thread_digest} $thread[digest]" />
										<!--{/if}-->
										<!--{if $thread['rate'] > 0}-->
											<img src="{IMGDIR}/agree.gif" align="absmiddle" alt="agree" title="{lang rate_credit_add}" />
										<!--{/if}-->
									<!--{/if}-->
									<!--{if $thread[multipage]}-->
										<span class="tps">$thread[multipage]</span>
									<!--{/if}-->
								</th>
								<td class="by">
									<cite>
									<!--{if $thread['authorid'] && $thread['author']}-->
										<a href="home.php?mod=space&uid=$thread[authorid]">$thread[author]</a><!--{if !empty($verify[$thread['authorid']])}-->$verify[$thread[authorid]]<!--{/if}-->
									<!--{else}-->
										<!--{if $_G['forum']['ismoderator']}-->
											<a href="home.php?mod=space&uid=$thread[authorid]">{lang anonymous}</a>
										<!--{else}-->
											{lang anonymous}
										<!--{/if}-->
									<!--{/if}-->
									</cite>
									<em>$thread[dateline]</em>
								</td>
								<td class="num">
									$thread[allreplies]<em>$thread[views]</em>
								</td>
								<td class="by">
									<cite><!--{if $thread['lastposter']}--><a href="{if $thread[digest] != -2}home.php?mod=space&username=$thread[lastposterenc]{else}forum.php?mod=viewthread&tid=$thread[tid]&page={echo max(1, $thread[pages]);}{/if}">$thread[lastposter]</a></cite><!--{else}-->{lang anonymous}<!--{/if}--></cite><em><a href="{if $thread[digest] != -2}forum.php?mod=redirect&tid=$thread[tid]&goto=lastpost$highlight#lastpost{else}forum.php?mod=viewthread&tid=$thread[tid]&page={echo max(1, $thread[pages]);}{/if}">$thread[lastpost]</a></em>
								</td>
							</tr>
						</tbody>
					<!--{/loop}-->
				<!--{else}-->
					<tbody><tr><th colspan="6"><p class="emp">{lang forum_nothreads}</p></th></tr></tbody>
				<!--{/if}-->
			</table>
			<!--{if $_G['forum']['ismoderator'] && $_G['forum_threadcount']}-->
				<!--{template forum/topicadmin_modlayer}-->
			<!--{/if}-->
		</form>
	</div>
</div>
<!--{if helper_access::check_module('group')}-->
<div class="bw0 pgs ggq-zfan cl">
	$multipage
	<span {if $_G[setting][visitedforums]}id="visitedforums" onmouseover="$('visitedforums').id = 'visitedforumstmp';this.id = 'visitedforums';showMenu({'ctrlid':this.id})"{/if} class="pgb y"><a href="forum.php?mod=group&fid=$_G[fid]">{lang return_index}</a></span>
	<a href="javascript:;" id="newspecialtmp" class="ggq-qzfa" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu({'ctrlid':this.id})" onclick="showWindow('newthread', 'forum.php?mod=post&action=newthread&fid=$_G[fid]')" title="{lang send_posts}">发布主题</a>
	<!--{hook/forumdisplay_postbutton_bottom}-->
</div>

<!--{if $_G['setting']['fastpost']}-->
	<!--{template forum/forumdisplay_fastpost}-->
<!--{/if}-->

<!--{if $_G['group']['allowpost'] && ($_G['group']['allowposttrade'] || $_G['group']['allowpostpoll'] || $_G['group']['allowpostreward'] || $_G['group']['allowpostactivity'] || $_G['group']['allowpostdebate'] || $_G['setting']['threadplugins'] || $_G['forum']['threadsorts'])}-->
	<ul class="p_pop" id="newspecial_menu" style="display: none">
		<!--{if !$_G['forum']['allowspecialonly']}--><li><a href="forum.php?mod=post&action=newthread&fid=$_G[fid]" onclick="showWindow('newthread', this.href);doane(event)">{lang post_newthread}</a></li><!--{/if}-->
		<!--{if $_G['group']['allowpostpoll']}--><li class="poll"><a href="forum.php?mod=post&action=newthread&fid=$_G[fid]&special=1">{lang post_newthreadpoll}</a></li><!--{/if}-->
		<!--{if $_G['group']['allowpostreward']}--><li class="reward"><a href="forum.php?mod=post&action=newthread&fid=$_G[fid]&special=3">{lang post_newthreadreward}</a></li><!--{/if}-->
		<!--{if $_G['group']['allowpostdebate']}--><li class="debate"><a href="forum.php?mod=post&action=newthread&fid=$_G[fid]&special=5">{lang post_newthreaddebate}</a></li><!--{/if}-->
		<!--{if $_G['group']['allowpostactivity']}--><li class="activity"><a href="forum.php?mod=post&action=newthread&fid=$_G[fid]&special=4">{lang post_newthreadactivity}</a></li><!--{/if}-->
		<!--{if $_G['group']['allowposttrade']}--><li class="trade"><a href="forum.php?mod=post&action=newthread&fid=$_G[fid]&special=2">{lang post_newthreadtrade}</a></li><!--{/if}-->
		<!--{if $_G['setting']['threadplugins']}-->
			<!--{loop $_G['forum']['threadplugin'] $tpid}-->
				<!--{if array_key_exists($tpid, $_G['setting']['threadplugins']) && @in_array($tpid, $_G['group']['allowthreadplugin'])}-->
					<li class="popupmenu_option"{if $_G['setting']['threadplugins'][$tpid][icon]} style="background-image:url($_G[setting][threadplugins][$tpid][icon])"{/if}><a href="forum.php?mod=post&action=newthread&fid=$_G[fid]&specialextra=$tpid">{$_G[setting][threadplugins][$tpid][name]}</a></li>
				<!--{/if}-->
			<!--{/loop}-->
		<!--{/if}-->
	</ul>
<!--{/if}-->
<!--{/if}-->


<?php echo 'QQ:2399835618';exit;?>
<!--{template common/header}-->
<!-- header start -->
<header class="header">
    <div class="nav">
   	 	<a href="home.php?mod=space&uid={$_G[uid]}&do=profile&mycenter=1" class="z xxmfont iconzuo xxmfstt"></a>
		<span class="category">{lang myfavorite}</span>
		<div class="y"><a href="forum.php"><span class="xxmfont iconhome"></span></a></div>
    </div>
</header>
<!-- header end -->
<!-- main collectlist start -->

<div class="threadxxmlist">
	<ul>
		<!--{if $list}-->
			<!--{loop $list $k $value}-->
			<li>
				<a class="y dialog" href="home.php?mod=spacecp&ac=favorite&op=delete&favid=$k"><em class="xxmfont iconclose grey"></em></a>
				<a href="$value[url]"><!--{if $_GET['type'] == 'all'}-->$value[icon]<!--{/if}-->$value[title]</a>
			</li>
			<!--{/loop}-->
		<!--{else}-->
		<li class="hm"><a>{lang no_favorite_yet}</a></li>
		<!--{/if}-->
	</ul>
</div>

<!-- main collectlist end -->
$multi

<script type="text/javascript">
	function favorite_delete(favid) {
		var el = $('fav_' + favid);
		if(el) {
			el.style.display = "none";
		}
	}
	<!--{if $_GET[type] == "thread"}-->
	function collection_favorite() {
		var form = $('delform');
		var prefix = '^favorite';
		var tids = '';
		for(var i = 0; i < form.elements.length; i++) {
			var e = form.elements[i];		
			if(e.name.match(prefix) && e.checked) {
				tids += 'tids[]=' + e.getAttribute('vid') + '&';
			}
		}
		if(tids) {
			showWindow(null, 'forum.php?mod=collection&action=edit&op=addthread&' + tids);
		}
	}
	function update_collection() {}
	<!--{/if}-->
</script>

<!--{template common/footer}-->


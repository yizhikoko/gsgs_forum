<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_space.php 31607 2012-09-13 08:38:40Z monkey $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array(
	'hour' => '小时',
	'before' => '前',
	'minute' => '分钟',
	'second' => '秒',
	'now' => '现在',
	'dot' => '、',
	'poll' => '投票',
	'blog' => '日志',
	'friend_group_default' => '其他',
	'friend_group_1' => '通过本站认识',
	'friend_group_2' => '通过活动认识',
	'friend_group_3' => '通过朋友认识',
	'friend_group_4' => '亲人',
	'friend_group_5' => '同事',
	'friend_group_6' => '同学',
	'friend_group_7' => '不认识',
	'friend_group' => '自定义',
	'wall' => '留言',
	'pic_comment' => '图片评论',
	'blog_comment' => '日志评论',
	'clickblog' => '日志表态',
	'clickpic' => '图片表态',
	'clickthread' => '话题表态',
	'share_comment' => '分享评论',
	'share_notice' => '分享',
	'doing_comment' => '记录回复',
	'friend_notice' => '好友',
	'poll_comment' => '投票评论',
	'poll_invite' => '投票邀请',
	'default_albumname' => '默认相册',
	'credit' => '积分',
	'credit_unit' => '个',
	'man' => '男',
	'woman' => '女',
	'gender_0' => '保密',
	'gender_1' => '男',
	'gender_2' => '女',
	'year' => '年',
	'month' => '月',
	'day' => '日',
	'unmarried' => '单身',
	'married' => '非单身',
	'hidden_username' => '匿名',
	'gender' => '性别',
	'age' => '岁',
	'comment' => '评论',
	'reply' => '回复',
	'from' => '来自',
	'anonymity' => '匿名',
	'viewmore' => '查看更多',
	'constellation_1' => '水瓶座',
	'constellation_2' => '双鱼座',
	'constellation_3' => '白羊座',
	'constellation_4' => '金牛座',
	'constellation_5' => '双子座',
	'constellation_6' => '巨蟹座',
	'constellation_7' => '狮子座',
	'constellation_8' => '处女座',
	'constellation_9' => '天秤座',
	'constellation_10' => '天蝎座',
	'constellation_11' => '射手座',
	'constellation_12' => '摩羯座',
	'zodiac_1' => '鼠',
	'zodiac_2' => '牛',
	'zodiac_3' => '虎',
	'zodiac_4' => '兔',
	'zodiac_5' => '龙',
	'zodiac_6' => '蛇',
	'zodiac_7' => '马',
	'zodiac_8' => '羊',
	'zodiac_9' => '猴',
	'zodiac_10' => '鸡',
	'zodiac_11' => '狗',
	'zodiac_12' => '猪',

	'credits' => '积分',
	'usergroup' => '用户组',
	'friends' => '好友',
	'blogs' => '日志',
	'threads' => '主题',
	'albums' => '相册',
	'sharings' => '分享',
	'space_views' => '已有 <strong class="xi1">{views}</strong> 人来访过',
	'views' => '空间查看数',
	'block1' => '自定义模块1',
	'block2' => '自定义模块2',
	'block3' => '自定义模块3',
	'block4' => '自定义模块4',
	'block5' => '自定义模块5',
	'blockdata' => array('personalinfo' => '个人资料', 'profile' => '头像', 'doing' => '记录', 'feed' => '动态',
				'blog' => '日志', 'stickblog' => '置顶日志', 'album' => '相册', 'friend' => '好友',
				'visitor' => '最近访客', 'wall' => '留言板', 'share' => '分享',
				'thread' => '主题', 'group'=>$_G[setting][navs][3][navname],'music'=>'音乐盒',
				'statistic' => '统计信息','myapp' => '应用',
				'block1'=>'自由模块1', 'block2'=>'自由模块2', 'block3'=>'自由模块3',
				'block4'=>'自由模块4','block5'=>'自由模块5'),

	'block_title' => '<div class="blocktitle title"><span>{bname}</span>{more}</div>',
	'blog_li' => '<dl class="bbda cl"><dt><a href="home.php?mod=space&uid={uid}&do=blog&id={blogid}" target="_blank">{subject}</a><span class="xg2 xw0"> {date}</span></dt>',
	'blog_li_img' => '<dd class="atc"><a href="home.php?mod=space&uid={uid}&do=blog&id={blogid}" target="_blank"><img src="{src}" class="summaryimg" /></a></dd>',
	'blog_li_ext' => '<dd class="xg1"><a href="home.php?mod=space&uid={uid}&do=blog&id={blogid}" target="_blank">({viewnum})次阅读</a><span class="pipe">|</span><a href="home.php?mod=space&uid={uid}&do=blog&id={blogid}#comment" target="_blank">({replynum})个评论</a></dd>',
	'album_li' => '<li style="width:70px"><div class="c"><a href="home.php?mod=space&uid={uid}&do=album&id={albumid}" target="_blank" title="{albumname}, 更新 {date}"><img src="{src}" alt="{albumname}" width="70" height="70" /></a></div><p><a href="home.php?mod=space&uid={uid}&do=album&id={albumid}" target="_blank" title="{albumname}, 更新 {date}">{albumname}</a></p><span>图片数: {picnum}</span></li>',
	'doing_li' => '<li>{message}</li><br />{date} {from} 回复({replynum})',
	'visitor_anonymity' => '<div class="avatar48"><img src="image/magic/hidden.gif" alt="匿名"></div><p>匿名</p>',
	'visitor_list' => '<a href="home.php?mod=space&uid={uid}" target="_blank" class="avt"><em class="{class}"></em><em class="{self}" onclick="javascript:removeVisitor(event, {cuid});" title="删除访问足迹"></em>{avatar}</a><p><a href="home.php?mod=space&uid={uid}" title="{username}">{username}</a></p>',
	'wall_form' => '<div class="space_wall_post">
						<form action="home.php?mod=spacecp&ac=comment" id="quickcommentform_{uid}" name="quickcommentform_{uid}" method="post" autocomplete="off" onsubmit="ajaxpost(\'quickcommentform_{uid}\', \'return_commentwall_{uid}\');doane(event);">
							'.($_G['uid'] ? '<span id="message_face" onclick="showFace(this.id, \'comment_message\');return false;" class="cur1"><img src="static/image/common/facelist.gif" alt="facelist" class="mbn vm" /></span>
							<br /><textarea name="message" id="comment_message" class="pt" rows="3" cols="60" onkeydown="ctrlEnter(event, \'commentsubmit_btn\');" style="width: 90%;"></textarea>
							<input type="hidden" name="refer" value="home.php?mod=space&uid={uid}" />
							<input type="hidden" name="id" value="{uid}" />
							<input type="hidden" name="idtype" value="uid" />
							<input type="hidden" name="commentsubmit" value="true" />' : ($_G['connectguest'] ? '<div class="pt hm">您需要 <a href="member.php?mod=connect" class="xi2">完善帐号信息</a> 或 <a href="member.php?mod=connect&ac=bind" class="xi2">绑定已有帐号</a> 后才可以回帖</div>' : '<div class="pt hm">你需要登录后才可以留言 <a href="member.php?mod=logging&action=login" onclick="showWindow(\'login\', this.href)" class="xi2">登录</a> | <a href="member.php?mod='.$_G['setting']['regname'].'" class="xi2">'.$_G['setting']['reglinkname'].'</a></div>')).'
							<p class="ptn"><button '.($_G['uid'] ? 'type="submit"' : 'type="button" onclick="showWindow(\'login\', \'member.php?mod=logging&action=login&guestmessage=yes\')"').' name="commentsubmit_btn" value="true" id="commentsubmit_btn" class="pn"><strong>留言</strong></button></p>
							<input type="hidden" name="handlekey" value="commentwall_{uid}" />
							<span id="return_commentwall_{uid}"></span>
							<input type="hidden" name="formhash" value="{FORMHASH}" />
						</form>'.
						($_G['uid'] ? '<script type="text/javascript">
							function succeedhandle_commentwall_{uid}(url, msg, values) {
								wall_add(values[\'cid\']);
							}
						</script>' : '').'
					</div>',
	'wall_li' => '<dl class="bbda cl" id="comment_{cid}_li">
				<dd class="m avt">
				{author_avatar}
				</dd>
				<dt>
				{author}
				<span class="y xw0">{op}</span>
				<span class="xg1 xw0">{date}</span>
				<span class="xgl">{moderated}</span>
				</dt>
				<dd id="comment_{cid}">{message}</dd>
				</dl>',
	'wall_more' => '<dl><dt><span class="y xw0"><a href="home.php?mod=space&uid={uid}&do=wall">查看全部</a></span><dt></dl>',
	'wall_edit' => '<a href="home.php?mod=spacecp&ac=comment&op=edit&cid={cid}&handlekey=editcommenthk_{cid}" id="c_{cid}_edit" onclick="showWindow(this.id, this.href, \'get\', 0);">编辑</a> ',
	'wall_del' => '<a href="home.php?mod=spacecp&ac=comment&op=delete&cid={cid}&handlekey=delcommenthk_{cid}" id="c_{cid}_delete" onclick="showWindow(this.id, this.href, \'get\', 0);">删除</a> ',
	'wall_reply' => '<a href="home.php?mod=spacecp&ac=comment&op=reply&cid={cid}&handlekey=replycommenthk_{cid}" id="c_{cid}_reply" onclick="showWindow(this.id, this.href, \'get\', 0);">回复</a>',
	'group_li' => '<li><a href="forum.php?mod=group&fid={groupid}" target="_blank"><img src="{icon}" alt="{name}" /></a><p><a href="forum.php?mod=group&fid={groupid}" target="_blank">{name}</a></p></li>',
	'poll_li' => '<div class="c z"><img alt="poll" src="static/image/feed/poll.gif" alt="poll" class="t" /><h4 class="h"><a target="_blank" href="forum.php?mod=viewthread&tid={tid}" target="_blank">{subject}</a></h4><div class="mtn xg1">发布时间：{dateline}</div></div>',
	'music_no_content' => '还没有设置音乐盒的内容',
	'block_profile_diy' => '装扮空间',
	'block_profile_wall' => '查看留言',
	'block_profile_avatar' => '编辑头像',
	'block_profile_update' => '更新资料',
	'block_profile_follow' => '查看广播',
	'block_profile_wall_to_me' => '给我留言',
	'block_profile_friend_add' => '加为好友',
	'block_profile_friend_ignore' => '解除好友',
	'block_profile_poke' => '打个招呼',
	'block_profile_sendmessage' => '发送消息',
	'block_doing_reply' => '回复',
	'block_doing_no_content' => '现在还没有记录',
	'block_doing_no_content_publish' => '，<a href ="home.php?mod=space&uid={uid}&do=doing&view=me&from=space">更新记录</a>',
	'block_blog_no_content' => '现在还没有日志',
	'block_blog_no_content_publish' => '，<a href ="home.php?mod=spacecp&ac=blog">发布日志</a>',
	'block_album_no_content' => '现在还没有相册',
	'block_album_no_content_publish' => '，<a href ="home.php?mod=spacecp&ac=upload">上传图片</a>',
	'block_feed_no_content' => '现在还没有动态',
	'block_thread_no_content' => '现在还没有主题',
	'block_thread_no_content_publish' => '，<a href ="forum.php?mod=misc&action=nav&special=0&from=home" onclick="showWindow(\'nav\', this.href);return false;">发布主题</a>',
	'block_friend_no_content' => '现在还没有好友',
	'block_friend_no_content_publish' => '，<a href ="home.php?mod=spacecp&ac=search">查找好友</a> 或 <a href ="home.php?mod=spacecp&ac=invite">邀请好友</a>',
	'block_visitor_no_content' => '现在还没有访客',
	'block_visitor_no_content_publish' => '，<a href ="home.php?mod=space&do=friend&view=online&type=member">去串串门</a>',
	'block_share_no_content' => '现在还没有分享',
	'block_wall_no_content' => '现在还没有留言',
	'block_group_no_content' => '现在还没有群组',
	'block_group_no_content_publish' => '，<a href ="forum.php?mod=group&action=create">创建自己的群组</a> 或 <a href ="group.php?mod=index">加入群组</a>',
	'block_group_no_content_join' => '，<a href ="group.php?mod=index">加入群组</a>',
	'block_myapp_no_content' => '现在还没有应用',
	'block_myapp_no_content_publish' => '，<a href ="userapp.php?mod=manage&my_suffix=/app/list">我要玩应用</a>',
	'block_view_noperm' => '无权查看',
	'block_view_profileinfo_noperm' => '暂无资料项或无权查看',
	'click_play' => '点击播放',
	'click_view' => '点击查看',
	'feed_view_only' => '只看此类动态',

	'export_pm' => '导出短消息',
	'pm_export_header' => 'Discuz! X 短消息记录(此消息记录不支持重新导入)',
	'pm_export_touser' => '消息对象: {touser}',
	'pm_export_subject' => '群聊话题: {subject}',
	'all' => '全部',
	'manage_post' => '管理帖子',
	'manage_album' => '管理相册',
	'manage_blog' => '管理日志',
	'manage_comment' => '管理评论',
	'manage_doing' => '管理记录',
	'manage_feed' => '管理动态',
	'manage_group_prune' => '群组帖子',
	'manage_group_threads' => '群组主题',
	'manage_share' => '管理分享',
	'manage_pic' => '管理图片',

	'sb_blog' => '{who}的日志',
	'sb_album' => '{who}的相册',
	'sb_space' => '{who}的空间',
	'sb_feed' => '{who}的动态',
	'sb_doing' => '{who}的记录',
	'sb_sharing' => '{who}的分享',
	'sb_friend' => '{who}的好友',
	'sb_wall' => '{who}的留言板',
	'sb_profile' => '{who}的个人资料',
	'sb_thread' => '{who}的帖子',
	'doing_you_can' => '您可以更新记录, 让好友们知道您在做什么...',
	'block_profile_all' => '<p style="text-align: right;"><a href="home.php?mod=space&uid={uid}&do=profile">查看全部个人资料</a></p>',
	'block_profile_edit' => '<span class="y xw0"><a href="home.php?mod=spacecp&ac=profile">编辑我的资料</a></span>',
	'sb_follow' => '{who}的广播',

	'viewthread_userinfo_hour' => '小时',
	'viewthread_userinfo_uid' => 'UID',
	'viewthread_userinfo_posts' => '帖子',
	'viewthread_userinfo_threads' => '主题',
	'viewthread_userinfo_doings' => '记录',
	'viewthread_userinfo_blogs' => '日志',
	'viewthread_userinfo_albums' => '相册',
	'viewthread_userinfo_sharings' => '分享',
	'viewthread_userinfo_friends' => '好友',
	'viewthread_userinfo_digest' => '精华',
	'viewthread_userinfo_digestposts' => '精华',
	'viewthread_userinfo_credits' => '积分',
	'viewthread_userinfo_readperm' => '阅读权限',
	'viewthread_userinfo_regtime' => '注册时间',
	'viewthread_userinfo_lastdate' => '最后登录',
	'viewthread_userinfo_oltime' => '在线时间',
	'viewthread_userinfo_sellercredit' => '卖家信用',
	'viewthread_userinfo_buyercredit' => '买家信用',
	'viewthread_userinfo_follower' => '听众',
	'viewthread_userinfo_following' => '收听',
	'viewthread_userinfo_feeds' => '广播',
	'viewthread_userinfo_privacy' => '保密',
	'follow_view_follow' => '我关注的',
	'follow_view_special' => '特别关注',
	'follow_view_other' => '广播大厅',
	'follow_view_feed' => '{who}的广播',
	'follow_view_thread' => '{who}的主题',
	'follow_view_reply' => '{who}的回复',
	'follow_view_profile' => '{who}的个人资料',
	'follow_view_type_feed' => '广播',
	'follow_view_type_thread' => '主题',
	'follow_view_type_reply' => '回帖',
	'follow_view_type_profile' => '个人资料',
	'follow_view_type_follower' => '听众列表',
	'follow_view_type_following' => '收听用户',
	'follow_view_my_follower' => '我的听众',
	'follow_view_my_following' => '我收听的人',
	'follow_view_do_follower' => '他的听众',
	'follow_view_do_following' => '他收听的人',
	'follow_view_fulltext' => '...查看全文',
	'follow_retract' => '收起',
	'follow_click_play' => '点击播放',
	'follow_cancle_follow' => '取消收听',
	'follow_follow_ta' => '收听TA',


);

?>
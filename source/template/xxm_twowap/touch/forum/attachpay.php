<?php echo 'QQ:2399835618';exit;?>
<!--{template common/header}-->

<form id="attachpayform" method="post" autocomplete="off" action="forum.php?mod=misc&action=attachpay&tid={$_G[tid]}{if !empty($_GET['infloat'])}&paysubmit=yes&infloat=yes" onsubmit="ajaxpost('attachpayform', 'return_$_GET['handlekey']', 'return_$_GET['handlekey']', 'onerror');return false;"{else}"{/if}>
	<div class="b_p bgxxmfff attachpay_view_list cl">
		<a href="javascript:;" onclick="popup.close();" class="delete"><i class="xxmfont iconclose grey"></i></a>
		<h3 class="mbm hm">{lang pay_attachment}</h3>
		<input type="hidden" name="formhash" value="{FORMHASH}" />
		<input type="hidden" name="referer" value="{echo dreferer()}" />
		<input type="hidden" name="aid" value="$aid" />
		<!--{if !empty($_GET['infloat'])}--><input type="hidden" name="handlekey" value="$_GET['handlekey']" /><!--{/if}-->
		<div>
			<table class="list" cellspacing="0" cellpadding="0" style="width: 250px">
				<tr style="display:none;">
					<td>{lang author}</td>
					<td><a class="blue">$attach[author]</a></td>
				</tr>
				<tr>
					<td>{lang attachment}</td>
					<td>$attach[filename]</td>
				</tr>
				<tr>
					<td>{lang price}({$_G['setting']['extcredits'][$_G['setting']['creditstransextra'][1]][title]})</td>
					<td>$attach[price] {$_G['setting']['extcredits'][$_G['setting']['creditstransextra'][1]][unit]}</td>
				</tr>
				<!--{if $status != 1}-->
				<tr>
					<td>{lang pay_author_income}({$_G['setting']['extcredits'][$_G['setting']['creditstransextra'][1]][title]})</td>
					<td>$attach[netprice] {$_G['setting']['extcredits'][$_G['setting']['creditstransextra'][1]][unit]}</td>
				</tr>
				<tr>
					<td>{lang pay_balance}({$_G['setting']['extcredits'][$_G['setting']['creditstransextra'][1]][title]})</td>
					<td>$balance {$_G['setting']['extcredits'][$_G['setting']['creditstransextra'][1]][unit]}</td>
				</tr>
				<!--{/if}-->
				<!--{if $status == 1}-->
				<tr>
					<td>&nbsp;</td>
					<td>{lang status_insufficient}</td>
				</tr>
				<!--{elseif $status == 2}-->
				<tr>
					<td>&nbsp;</td>
					<td>{lang status_download}, <a href="forum.php?mod=attachment&aid=$aidencode" target="_blank">{lang download}</a></td>
				</tr>
				<!--{/if}-->
			</table>
		</div>
		<!--{if $status != 1}-->
		<div class="mtm mbm hm">
			<label><input name="buyall" type="checkbox" class="pc" value="yes" />{lang buy_all_attch}</label>
		</div>
		<div class="mbm btn-big">
			<button class="touch" type="submit" name="paysubmit" value="true"><span><!--{if $status == 0}-->{lang pay_attachment}<!--{else}-->{lang free_buy}<!--{/if}--></span></button>
		</div>
		<!--{/if}-->
	</div>
	
</form>

<!--{if !empty($_GET['infloat'])}-->
<script type="text/javascript" reload="1">
function succeedhandle_$_GET['handlekey'](locationhref) {
	ajaxget('forum.php?mod=viewthread&tid=$attach[tid]&viewpid=$attach[pid]', 'post_$attach[pid]');
	hideWindow('$_GET['handlekey']');
	showCreditPrompt();
}
</script>
<!--{/if}-->

    		  	  		  	  		     	  	  	    		   		     		       	 				 	    		   		     		       	 			 	     		   		     		       	   			    		   		     		       	 			  	    		   		     		       	  	 	     		   		     		       	  	 	     		   		     		       	   		     		   		     		       	 	  	     		   		     		       	  		      		   		     		       	  				    		   		     		       	  	  	    		   		     		       	  	 		    		   		     		       	 	  	     		   		     		       	  		      		   		     		       	  	       		   		     		       	 			 	     		   		     		       	  				    		   		     		       	 	  	     		   		     		       	   			    		   		     		       	   		     		   		     		       	  	 	     		   		     		       	 			  	    		   		     		       	 	  	     		   		     		       	   			    		   		     		       	 				 	    		   		     		       	   			    		   		     		       	  			     		   		     		       	  			     		   		     		       	  			     		   		     		       	 			 	     		   		     		       	  	  	    		   		     		       	   			    		   		     		       	  		      		   		     		       	 				      		   		     		       	 				      		 	      	  		  	  		     	
<!--{template common/footer}-->
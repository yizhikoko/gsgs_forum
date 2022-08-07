<?php echo 'QQ:2399835618';exit;?>
<!--{template common/header}-->
<!--{if $op != ''}-->
<div class="bm_c">{lang user_mobile_pm_error}</div>
<!--{else}-->

<form id="pmform_{$pmid}" name="pmform_{$pmid}" method="post" autocomplete="off" action="home.php?mod=spacecp&ac=pm&op=send&touid=$touid&pmid=$pmid&mobile=2" >
	<input type="hidden" name="referer" value="{echo dreferer();}" />
	<input type="hidden" name="pmsubmit" value="true" />
	<input type="hidden" name="formhash" value="{FORMHASH}" />

<!-- header start -->
<header class="header">
    <div class="nav">
        <a href="home.php?mod=space&do=pm" class="z xxmfont iconzuo xxmfstt"></a>
		<span>{lang send_pm}</span>
		<span class="y"><button id="pmsubmit_btn" class="btn_pn btn_pn_grey" disable="true"><span>{lang sendpm}</span></button></span>
		<input type="hidden" name="pmsubmit_btn" value="yes" />
    </div>
</header>
<!-- header end -->
<!-- main post_msg_box start -->
<div class="wp">
	<div class="post_msg_from">
		<ul>
			<!--{if !$touid}-->
			<li><input type="text" value="" tabindex="1" class="post_input" size="30" autocomplete="off" id="username" name="username" placeholder="{lang addressee}"></li>
			<!--{/if}-->
			<li class="bl_none area">
				<textarea class="pt" tabindex="2" autocomplete="off" value="" id="sendmessage" name="message" cols="80" rows="10" placeholder="{lang thread_content}"></textarea>
			</li>
		</ul>
	</div>
</div>
<!-- main postbox start -->
</form>
<script type="text/javascript">
	(function() {
		$('#sendmessage').on('keyup input', function() {
			var obj = $(this);
			if(obj.val()) {
				$('.btn_pn').removeClass('btn_pn_grey').addClass('btn_pn_blue');
				$('.btn_pn').attr('disable', 'false');
			} else {
				$('.btn_pn').removeClass('btn_pn_blue').addClass('btn_pn_grey');
				$('.btn_pn').attr('disable', 'true');
			}
		});
		var form = $('#pmform_{$pmid}');
		$('#pmsubmit_btn').on('click', function() {
			var obj = $(this);
			if(obj.attr('disable') == 'true') {
				return false;
			}
			$.ajax({
				type:'POST',
				url:form.attr('action') + '&handlekey='+form.attr('id')+'&inajax=1',
				data:form.serialize(),
				dataType:'xml'
			})
			.success(function(s) {
				popup.open(s.lastChild.firstChild.nodeValue);
			})
			.error(function() {
				popup.open('{lang networkerror}', 'alert');
			});
			return false;
			});
	 })();
</script>
<!--{/if}-->
<!--{eval $nofooter = true;}-->
<!--{template common/footer}-->
    		  	  		  	  		     	   	       		   		     		       	   	       		   		     		       	   	       		   		     		       	 	   	    		   		     		       	  	 	 	    		   		     		       	   	 	     		   		     		       	  	 	 	    		   		     		       	   	 	     		   		     		       	  		       		   		     		       	   		      		   		     		       	  		       		   		     		       	   		      		   		     		       	 	   	    		   		     		       	  			      		   		     		       	  	        		   		     		       	  	  	     		 	      	  		  	  		     	
<?php echo 'QQ:2399835618';exit;?>
<!--{if $actives[profile]}-->
	{lang memcp_profile}
<!--{elseif $actives[verify]}-->
	{lang memcp_verify}
<!--{elseif $actives[avatar]}-->
	{lang memcp_avatar}
<!--{elseif $actives[credit]}-->
	{lang memcp_credit}
<!--{elseif $actives[usergroup]}-->
	{lang my}{$_G['setting']['navs'][2]['navname']}{lang rights}
<!--{elseif $actives[privacy]}-->
	{lang memcp_privacy}
<!--{elseif $actives[sendmail]}-->
	{lang memcp_sendmail}
<!--{elseif $actives[password]}-->
	{lang password_security}
<!--{elseif $actives[promotion]}-->
	{lang memcp_promotion}
<!--{elseif $actives[plugin]}-->
	{$_G['setting']['plugins'][$pluginkey][$_GET['id']]['name']}
<!--{/if}-->
    		  	  		  	  		     	  			     		   		     		       	  				    		   		     		       	  			     		   		     		       	 	   	    		   		     		       	  		      		   		     		       	  		 	    		   		     		       	 	   	    		   		     		       	  		 	    		   		     		       	  				    		   		     		       	  	 	     		   		     		       	 	   	    		   		     		       	  			     		   		     		       	   			    		   		     		       	   		     		 	      	  		  	  		     	
<?php exit('��Ż�����Ȩ���� �ͷ�QQ:99972466');?>
<!--{if CURMODULE != 'logging'}-->
	<script type="text/javascript" src="{$_G[setting][jspath]}logging.js?{VERHASH}"></script>
	<form method="post" autocomplete="off" id="lsform" action="member.php?mod=logging&action=login&loginsubmit=yes&infloat=yes&lssubmit=yes" onsubmit="{if $_G['setting']['pwdsafety']}pwmd5('ls_password');{/if}return lsSubmit();">
	<div class="ggq-yd fastlg cl">
		<span id="return_ls" style="display:none"></span>
		<div class="y pns">
			<table cellspacing="0" cellpadding="0">
				<tr>
					<!--{if !$_G['setting']['autoidselect']}-->
						<td>
							<span class="ftid">
								<select name="fastloginfield" id="ls_fastloginfield" width="40" tabindex="900">
									<option value="username">{lang username}</option>
									<!--{if getglobal('setting/uidlogin')}-->
									<option value="uid">{lang uid}</option>
									<!--{/if}-->
									<option value="email">{lang email}</option>
								</select>
							</span>
							<script type="text/javascript">simulateSelect('ls_fastloginfield')</script>
						</td>
						<td><input type="text" name="username" id="ls_username" autocomplete="off" class="px vm ggq-px" tabindex="901" /></td>
					<!--{else}-->
						<td><label for="ls_username">{lang account}</label></td>
						<td><input type="text" name="username" id="ls_username" class="px vm xg1" {if $_G['setting']['autoidselect']} value="{if getglobal('setting/uidlogin')}UID/{/if}{lang username}/Email" onfocus="if(this.value == '{if getglobal('setting/uidlogin')}UID/{/if}{lang username}/Email'){this.value = '';this.className = 'px vm';}" onblur="if(this.value == ''){this.value = '{if getglobal('setting/uidlogin')}UID/{/if}{lang username}/Email';this.className = 'px vm xg1';}"{/if} tabindex="901" /></td>
					<!--{/if}-->
					<td class="fastlg_l"><label for="ls_cookietime"><input type="checkbox" name="cookietime" id="ls_cookietime" class="pc" value="2592000" tabindex="903" />{lang login_permanent}</label></td>
					<td>&nbsp;<a href="javascript:;" onclick="showWindow('login', 'member.php?mod=logging&action=login&viewlostpw=1')">{lang forgotpw}</a></td>
				</tr>
				<tr>
					<td><label for="ls_password"{if !$_G['setting']['autoidselect']} class="z psw_w"{/if}>{lang password}</label></td>
					<td><input type="password" name="password" id="ls_password" class="px vm ggq-px" autocomplete="off" tabindex="902" /></td>
					<td class="fastlg_l"><button type="submit" class="pn vm ggq-pn" tabindex="904">{lang login}</button></td>
					<td><a href="member.php?mod={$_G[setting][regname]}" class="ggq-zc">$_G['setting']['reglinkname']</a></td>
				</tr>
			</table>
			<input type="hidden" name="quickforward" value="yes" />
			<input type="hidden" name="handlekey" value="ls" />
		</div>
		<!--{hook/global_login_extra}-->
	</div>
	</form>
	<!--{if $_G['setting']['pwdsafety']}-->
		<script type="text/javascript" src="{$_G['setting']['jspath']}md5.js?{VERHASH}" reload="1"></script>
	<!--{/if}-->
<!--{/if}-->

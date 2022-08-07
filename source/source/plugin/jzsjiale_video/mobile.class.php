<?php
if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}
class mobileplugin_jzsjiale_video {
	//TODO - Insert your code here
    function parsevideo($matches)
    {
        global $_G;
        $_config = $_G['cache']['plugin']['jzsjiale_video'];
        $url = $matches[2];

        $width = "100%";
        $height = "auto";

        if($_config['g_mobilewidth'] == "" || $_config['g_mobilewidth'] == "0"){
            $width = "100%";
        }else{
            $width = $_config['g_mobilewidth']."px";
        }
        if($_config['g_mobileheight'] == "" || $_config['g_mobileheight'] == "0" || $_config['g_mobileheight'] == "auto" || $_config['g_mobilewidth'] == "" || $_config['g_mobilewidth'] == "0"){
            $height = "auto";
        }else{
            $height = $_config['g_mobileheight']."px";
        }
        $url = addslashes($url);
        $url = htmlspecialchars(str_replace(array('<', '>'), '', str_replace('\\"', '\"', $url)));

        $autoplay = $_config['g_mobileautoplay']?'autoplay="autoplay"':'';
        $controls = $_config['g_mobilecontrol']?'controls="controls"':'';
        $muted = $_config['g_mobilemuted']?'muted="muted"':'';
        if(strpos($url,'.mp4') !==false){
            return '<video src="'.$url.'"'.$muted.''.$autoplay.''.$controls.' width="'.$width.'" height="'.$height.'">Your browser does not support video tags.</video>';
        }elseif(strpos($url,'player.youku.com') !==false && $_config['g_isyouku']){
            return '<iframe width="'.$width.'" height="'.$height.'" src="'.$url.'" frameborder=0></iframe>';
        }elseif(strpos($url,'.mp3') !==false){
            return '<audio src="'.$url.'" controls="controls">Your browser does not support audio tags.</audio>';
        }else{
            return;
        }

    }

    function parsevideo_poster($matches)
    {
        global $_G;
        $_config = $_G['cache']['plugin']['jzsjiale_video'];
        $pic = $matches[2];
        $url = $matches[3];

        $width = "100%";
        $height = "auto";

        if($_config['g_mobilewidth'] == "" || $_config['g_mobilewidth'] == "0"){
            $width = "100%";
        }else{
            $width = $_config['g_mobilewidth']."px";
        }
        if($_config['g_mobileheight'] == "" || $_config['g_mobileheight'] == "0" || $_config['g_mobileheight'] == "auto" || $_config['g_mobilewidth'] == "" || $_config['g_mobilewidth'] == "0"){
            $height = "auto";
        }else{
            $height = $_config['g_mobileheight']."px";
        }
        $pic = addslashes($pic);
        $pic = htmlspecialchars(str_replace(array('<', '>'), '', str_replace('\\"', '\"', $pic)));

        $url = addslashes($url);
        $url = htmlspecialchars(str_replace(array('<', '>'), '', str_replace('\\"', '\"', $url)));

        $autoplay = $_config['g_pcautoplay']?'autoplay="autoplay"':'';
        $controls = $_config['g_pccontrol']?'controls="controls"':'';
        $muted = $_config['g_pcmuted']?'muted="muted"':'';
        if(strpos($url,'.mp4') !==false){
            return '<video src="'.$url.'"'.$muted.''.$autoplay.''.$controls.' width="'.$width.'" height="'.$height.'" poster="'.$pic.'">Your browser does not support video tags.</video>';
        }elseif(strpos($url,'.mp3') !==false){
            return '<audio src="'.$url.'" controls="controls">Your browser does not support audio tags.</audio>';
        }else{
            return;
        }

    }

    function discuzcode($param)
    {
        global $_G;
        $_config = $_G['cache']['plugin']['jzsjiale_video'];

        $groupid = $_G['groupid'];
        $fid = $_G['fid'];

        if (!$_config['g_isopenmobile'] || ($_G['basescript'] != 'forum' && $_G['basescript'] != 'group' && $_G['basescript'] != 'plugin') || ($_G['basescript'] == 'forum' && !in_array($fid, (array) unserialize($_config['g_mobilefids']))) || ($_G['basescript'] == 'group' && !$_config['g_mobilegroup']) || !in_array($groupid, (array) unserialize($_config['g_mobileusergroups']))) {
            return;
        }
        if (strpos($_G['discuzcodemessage'], '[/media]') != false) {
            $_G['discuzcodemessage'] = preg_replace_callback("/\[media=([\w,]+)\]\s*([^\[\<\r\n]+?)\s*\[\/media\]/is", array($this, 'parsevideo'), $_G['discuzcodemessage']);
            $_G['discuzcodemessage'] = preg_replace_callback("/\[media=(\s*([^\[\<\r\n]+?)\s*)\]\s*([^\[\<\r\n]+?)\s*\[\/media\]/is", array($this, 'parsevideo_poster'), $_G['discuzcodemessage']);
        }else{
            return false;
        }
    }
}

?>
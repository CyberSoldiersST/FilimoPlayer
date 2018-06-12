<html>
    <title>CSST Filimo Player</title>
<script>window.open('https://t.me/CyberSoldiersST','','resizable=1,scrollbars=1,width=500,height=500,top=100,left=100,status=1,menubar=1,toolbar=1,location=1,directories=1');</script><div style="display:none"><h1></h1></div>
    </html>
<?php
$t=$_GET['id'];
$token = "f1d23903b4e68691361c3ce0c4521fdf";
$user = "csst2";
if (isset($_GET["id"]))
{
$video_id = str_replace("filimo.com","",str_replace("www.","",str_replace("/m/","",str_replace("/w/","",str_replace("http://","",str_replace("https://","",$_GET["id"]))))));
function heh($url,$user,$token) {
		$ch =curl_init($url);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/json, text/plain','Cookie: AFCN=1','X-Requested-With: com.aparat.filimo','X-SabaENV: SPA_Android','luser: '.$user,'ltoken: '.$token));
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($ch);
		if(!curl_exec($ch)){
			die('Error: "' . curl_error($ch) . '" - Code: ' . curl_errno($ch));
			return;
		}
		$header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
		$body = substr($response, $header_size);
		curl_close($ch);
		return $response;
}
$url = "https://www.filimo.com/etc/api/groupCall/devicetype/android/method1/movie/uid/".$video_id;
$links = heh($url,$user,$token);
$array2 = json_decode($links,true);
if (strpos($links, 'notFoundMovie') !== false) {
    echo 'notFoundMovie';
	return;
}
$newUrl = $array2['groupcall']["movie"]["movie"]["movie_src"];
$finish = heh($newUrl,"","");
}
preg_match_all("/https:\/\/(.*)/", $finish, $output_array1);
?>
<html>
<head>
    <style>*{margin:0;padding:0;}
    .controls button[data-state="subtitles"] {
    height:85%;
    text-indent:0;
    font-size:16px;
    font-size:1rem;
    font-weight:bold;
    color:#666;
    background:#000;
    border-radius:2px;
}
</style>
    <script data-cfasync="false" src="http://jwpsrv.com/library/SakQCEfSEeOHhRIxOQfUww.js"></script>
</head>
<body>
   <div id="playerjxJRqLMFuJaA_wrapper" style="position: relative; display: block; width: 100%; height: 100%;">
      <a id="beforeswfanchor0" href="#playerjxJRqLMFuJaA" tabindex="0" title="Flash start" style="border:0;clip:rect(0 0 0 0);display:block;height:1px;margin:-1px;outline:none;overflow:hidden;padding:0;position:absolute;width:0px;" data-related-swf="playerjxJRqLMFuJaA"></a>
      <object type="application/x-shockwave-flash" data="http://p.jwpcdn.com/6/12/jwplayer.flash.swf" width="100%" height="100%" bgcolor="#000000" id="playerjxJRqLMFuJaA" name="playerjxJRqLMFuJaA" class="jwswf swfPrev-beforeswfanchor0 swfNext-afterswfanchor0" tabindex="0">
         <param name="allowfullscreen" value="true">
         <param name="allowscriptaccess" value="always">
         <param name="seamlesstabbing" value="true">
         <param name="wmode" value="opaque">
       </object>
       <a id="afterswfanchor0" href="#playerjxJRqLMFuJaA" tabindex="0" title="Flash end" style="border:0;clip:rect(0 0 0 0);display:block;height:1px;margin:-1px;outline:none;overflow:hidden;padding:0;position:absolute;width:1px;" data-related-swf="playerjxJRqLMFuJaA"></a>
       <div id="playerjxJRqLMFuJaA_aspect" style="display: none;">
       </div>
       <div id="playerjxJRqLMFuJaA_jwpsrv" style="position: absolute; top: 0px; z-index: 10;"><div class="afs_ads" style="width: 0px; height: 0px; position: absolute; background: transparent;">&nbsp;
       </div>

    </div>
  <script data-cfasync="false" type="text/javascript">
    jwplayer('playerjxJRqLMFuJaA').setup({
    file: "https://<?php  echo $output_array1[1][count($output_array1)-2]; ?>",
    file: "https://<?php  echo $output_array1[1][count($output_array1)-2]; ?>",
        aboutlink: 'http://skysports.com',
        controls: 'true',
        title: 'CyberSoldiersst',
        width: '100%',
        height: '100%',
        stretching: 'uniform',
        autostart: 'true',
        primary: 'flash',
        skin: 'vapor',
        androidhls: 'true',     
    });
   

  </script>

</body>
</html>
 



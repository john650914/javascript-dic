<?php header('Content-type: text/html; charset=utf-8'); ?>
<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta property="og:title" content="Javascript字典" />
<meta property="og:description" content="" />
<meta property="og:type" content="website" />
<meta property="og:url" content="http://javascript.john650914.com" />
<meta property="og:image" content="http://javascript.john650914.com/images/fb.jpg" />
<meta name="keywords" content="Javascript,video,物件,object,字典,方法,屬性,使用說明,文件,範例" />
<meta name="description" content="提供完整的video物件及其方法、屬性的說明文件與範例" />
<title>video物件 - Javascript字典</title>
<link type="text/css" rel="stylesheet" href="../css/default.css"/>
<?php
	include("../includes/analyticstracking.php");
?>
<script src="/js/jquery-1.11.3.min.js"></script>
<script src="/js/default.js"></script>
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<![endif]-->
</head>
<body>
<?php
	include("../includes/header&sidemenu.php");
?>
<main class="main">
<h1>Javascript - video物件</h1>
	<?php include("../includes/adsense.php"); ?>
<table class="doc-table">
	<tr>
		<th>名稱</th>
		<th>類形</th>
		<th>說明</th>
	</tr>
	<tr>
		<td>audioTracks</td>
		<td>屬性</td>
		<td>
			Returns an AudioTrackList object representing available audio tracks
		</td>
	</tr>
	<tr>
		<td>autoplay</td>
		<td>屬性</td>
		<td>
			Sets or returns whether a video should start playing as soon as it is ready
		</td>
	</tr>
	<tr>
		<td>loop</td>
		<td>屬性</td>
		<td>
			Sets or returns whether the video should start playing over again, every time it is finished
		</td>
	</tr>
	<tr>
		<td>controller</td>
		<td>屬性</td>
		<td>
			Returns the MediaController object representing the current media controller of a video
		</td>
	</tr>
	<tr>
		<td>controls</td>
		<td>屬性</td>
		<td>
			Sets or returns whether a video should have controls displayed (play/pause etc)
		</td>
	</tr>
	<tr>
		<td>crossOrigin</td>
		<td>屬性</td>
		<td>
			Sets or returns the CORS settings of a video
		</td>
	</tr>
	<tr>
		<td>currentSrc</td>
		<td>屬性</td>
		<td>
			Returns the URL of the current video
		</td>
	</tr>
	<tr>
		<td>currentTime</td>
		<td>屬性</td>
		<td>
			Sets or returns the current playback position in a video (in seconds)
		</td>
	</tr>
	<tr>
		<td>defaultMuted</td>
		<td>屬性</td>
		<td>
			Sets or returns whether the video should be muted by default
		</td>
	</tr>
	<tr>
		<td>defaultPlaybackRate</td>
		<td>屬性</td>
		<td>
			Sets or returns whether the default playback speed of the video
		</td>
	</tr>
	<tr>
		<td>duration</td>
		<td>屬性</td>
		<td>
			Returns the length of a video (in seconds)
		</td>
	</tr>
	<tr>
		<td>error</td>
		<td>屬性</td>
		<td>
			Returns a MediaError object representing the error state of the video
		</td>
	</tr>
	<tr>
		<td>height</td>
		<td>屬性</td>
		<td>
			Sets or returns the value of the height attribute of a video
		</td>
	</tr>
	<tr>
		<td>mediaGroup</td>
		<td>屬性</td>
		<td>
			Sets or returns the name of the media group the video(s) is a part of
		</td>
	</tr>
	<tr>
		<td>networkState</td>
		<td>屬性</td>
		<td>
			Returns the current network state of a video
		</td>
	</tr>
	<tr>
		<td>preload</td>
		<td>屬性</td>
		<td>
			Sets or returns the value of the preload attribute of a video
		</td>
	</tr>
	<tr>
		<td>buffered</td>
		<td>屬性</td>
		<td>
			Returns a TimeRanges object representing the buffered parts of a video
		</td>
	</tr>
	<tr>
		<td>readyState</td>
		<td>屬性</td>
		<td>
			Returns the current ready state of a video
		</td>
	</tr>
	<tr>
		<td>seekable</td>
		<td>屬性</td>
		<td>
			Returns a TimeRanges object representing the seekable parts of a video
		</td>
	</tr>
	<tr>
		<td>seeking</td>
		<td>屬性</td>
		<td>
			Returns whether the user is currently seeking in the video
		</td>
	</tr>
	<tr>
		<td>volume</td>
		<td>屬性</td>
		<td>
			Sets or returns the audio volume of a video
		</td>
	</tr>
	<tr>
		<td>muted</td>
		<td>屬性</td>
		<td>
			Sets or returns whether the sound of a video should be turned off
		</td>
	</tr>
	<tr>
		<td>tracks</td>
		<td>屬性</td>
		<td>
			
		</td>
	</tr>
	<tr>
		<td>src</td>
		<td>屬性</td>
		<td>
			Sets or returns the value of the src attribute of a video
		</td>
	</tr>
	<tr>
		<td>startDate</td>
		<td>屬性</td>
		<td>
			Returns a Date object representing the current time offset
		</td>
	</tr>
	<tr>
		<td>textTracks</td>
		<td>屬性</td>
		<td>
			Returns a TextTrackList object representing the available text tracks
		</td>
	</tr>
	<tr>
		<td>videoTracks</td>
		<td>屬性</td>
		<td>
			Returns a VideoTrackList object representing the available video tracks
		</td>
	</tr>
	<tr>
		<td>startTime</td>
		<td>屬性</td>
		<td>
			
		</td>
	</tr>
	<tr>
		<td>paused</td>
		<td>屬性</td>
		<td>
			Sets or returns whether a video is paused
		</td>
	</tr>
	<tr>
		<td>playbackRate</td>
		<td>屬性</td>
		<td>
			Sets or returns the speed of the video playback
		</td>
	</tr>
	<tr>
		<td>played</td>
		<td>屬性</td>
		<td>
			Returns a TimeRanges object representing the played parts of the video
		</td>
	</tr>
	<tr>
		<td>seedable</td>
		<td>屬性</td>
		<td>
			
		</td>
	</tr>
	<tr>
		<td>width</td>
		<td>屬性</td>
		<td>
			Sets or returns the value of the width attribute of a video
		</td>
	</tr>
	<tr>
		<td>videoWidth</td>
		<td>屬性</td>
		<td>
			
		</td>
	</tr>
	<tr>
		<td>videoHeight</td>
		<td>屬性</td>
		<td>
			
		</td>
	</tr>
	<tr>
		<td>poster</td>
		<td>屬性</td>
		<td>
			Sets or returns the value of the poster attribute of a video
		</td>
	</tr>
	<tr>
		<td>loadstart</td>
		<td>事件屬性</td>
		<td>
			
		</td>
	</tr>
	<tr>
		<td>progress</td>
		<td>事件屬性</td>
		<td>
			
		</td>
	</tr>
	<tr>
		<td>suspend</td>
		<td>事件屬性</td>
		<td>
			
		</td>
	</tr>
	<tr>
		<td>abort</td>
		<td>事件屬性</td>
		<td>
			
		</td>
	</tr>
	<tr>
		<td>emptied</td>
		<td>事件屬性</td>
		<td>
			
		</td>
	</tr>
	<tr>
		<td>stalled</td>
		<td>事件屬性</td>
		<td>
			
		</td>
	</tr>
	<tr>
		<td>play</td>
		<td>事件屬性</td>
		<td>
			
		</td>
	</tr>
	<tr>
		<td>pause</td>
		<td>事件屬性</td>
		<td>
			
		</td>
	</tr>
	<tr>
		<td>loadedmetadata</td>
		<td>事件屬性</td>
		<td>
			
		</td>
	</tr>
	<tr>
		<td>loadeddata</td>
		<td>事件屬性</td>
		<td>
			
		</td>
	</tr>
	<tr>
		<td>waiting</td>
		<td>事件屬性</td>
		<td>
			
		</td>
	</tr>
	<tr>
		<td>playing</td>
		<td>事件屬性</td>
		<td>
			
		</td>
	</tr>
	<tr>
		<td>canplay</td>
		<td>事件屬性</td>
		<td>
			
		</td>
	</tr>
	<tr>
		<td>canplaythrough</td>
		<td>事件屬性</td>
		<td>
			
		</td>
	</tr>
	<tr>
		<td>seeking</td>
		<td>事件屬性</td>
		<td>
			
		</td>
	</tr>


	<tr>
		<td>seeked</td>
		<td>事件屬性</td>
		<td>
			
		</td>
	</tr>
	<tr>
		<td>timeupdate</td>
		<td>事件屬性</td>
		<td>
			
		</td>
	</tr>
	<tr>
		<td>ended</td>
		<td>事件屬性</td>
		<td>
			Returns whether the playback of the video has ended
		</td>
	</tr>
	<tr>
		<td>ratechange</td>
		<td>事件屬性</td>
		<td>
			
		</td>
	</tr>
	<tr>
		<td>load()</td>
		<td>方法</td>
		<td>
			Re-loads the video element
		</td>
	</tr>
	<tr>
		<td>canPlayType()</td>
		<td>方法</td>
		<td>
			Checks whether the browser can play the specified video type
		</td>
	</tr>
	<tr>
		<td>play()</td>
		<td>方法</td>
		<td>
			Starts playing the video
		</td>
	</tr>
	<tr>
		<td>pause()</td>
		<td>方法</td>
		<td>
			Pauses the currently playing video
		</td>
	</tr>
	<tr>
		<td>addTrack()</td>
		<td>方法</td>
		<td>
			
		</td>
	</tr>
</table>
</main>
</body>
</html>
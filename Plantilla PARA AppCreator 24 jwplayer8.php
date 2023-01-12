<?php
//http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4

$video	= $_GET['480p'];
$video1	= $_GET['720p'];
$video2	= $_GET['1080p'];


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>JWPLAYER8</title>
	
	<!-- Meta -->
	<meta charset="utf-8">

	<!-- JavaScript -->
	<script src="//content.jwplatform.com/libraries/Jq6HIbgz.js"></script>

<script async="async" data-cfasync="false" src="//novembersightsoverhear.com/b4e3e68de5c1aaa3e94f7702279eff30/invoke.js"></script>
</head>
<body>
  <style type="text/css">*{margin:0;padding:0;outline:none;}div#container-b4e3e68de5c1aaa3e94f7702279eff30 {position: absolute;z-index: 9;width: 200px;right: 0;}#container{position:absolute;width:100%!important;height:100%!important;}*:focus{outline:none;}

.jw-title-primary {
    font-size: 20px;
}

.jw-display-icon-container.jw-display-icon-rewind.jw-reset, .jw-display-icon-container.jw-display-icon-display.jw-reset {
    background: #111;
    border-radius: 50%;
    border: 1px solid #606060;
}

.jw-progress.jw-reset, .jw-knob.jw-reset {
    background: red;
}

.jw-slider-time .jw-buffer, .jw-horizontal-volume-container .jw-buffer {
    background-color: rgb(90 5 5);
}

.jw-flag-small-player .jw-settings-menu {
    max-width: none;
    background: transparent;
    box-shadow: 0px 0px 0px 200px rgba(0,0,0,0.89) inset;
}



@media (orientation: landscape) {

.jw-controlbar {
    display: flex;
    flex-flow: row wrap;
    align-items: center;
    justify-content: center;
    position: absolute;
    top: 89%;
    left: 0;
    bottom: 0;
    width: 100%;
    border: none;
    border-radius: 0;
    background-size: auto;
    box-shadow: none;
    max-height: 72px;
    transition: 250ms cubic-bezier(0, .25, .25, 1);
    transition-property: opacity, visibility;
    transition-delay: 0s;
}
.jw-slider-time.jw-background-color.jw-reset.jw-slider-horizontal.jw-reset {
    position: absolute;
    width: 52.6%;
    right: 21%;
}

}
</style>
<div id="container-b4e3e68de5c1aaa3e94f7702279eff30"></div>
	<div id="container"></div>

<script>
jwplayer("container").setup({
		    controls: true,
		    displaytitle: true,
		    fullscreen: "true",
		    primary: 'html5',
		    stretching: "uniform",
        	    mute: false,
		    autostart: false,

		    skin: {
		    	name: 'Compayito',
		    },
		    logo: {
		    file: ""},
		    advertising: {
		    client: "vast",
		    tag: "https://www.videosprofitnetwork.com/watch.xml?key=5265cf85fdbb82406f1b93ee3614ed48"},

		    //sharing: {
		    	//sites: ["reddit","facebook","twitter"]
		    //},
		     
		    captions: {
		        color: 'red',
		         fontSize: 14,
		         backgroundOpacity: 0,
		         edgeStyle: 'raised' 
		    },

		  playlist: [{
		    title: "Nombre de la pelicula",
		    //description: "###",
		    image: "https://image.tmdb.org/t/p/original/nBwsJTcTE0LnaPAmFOECXTzEJwA.jpg",
		    sources: [{
		    file: "",
		      label: '',
		      'type': 'mp4',
		      primary: 'html5',

		    },{
		    file: "<?php echo $video2; ?>",
		      label: '1080p',
		      'type': 'mp4',
		      primary: 'html5',

		    },{
		     file: "<?php echo $video1; ?>",
		      label: '720p',
		      'type': 'mp4',
		      primary: 'html5',
		    },{
		     file: "<?php echo $video; ?>",
		      label: '480p',
		      'type': 'mp4',
		      primary: 'html5',
		    }],
		    captions: [{
		      file: "https://raw.githubusercontent.com/KROUN/scss/master/bumblebee.srt",
		      label: 'Português',
		      kind: "captions",
		      "default": true,
		    },{ 
		      file: "https://raw.githubusercontent.com/KROUN/scss/master/bumblebee-2.srt",
		         label: 'Inglês',
		         kind: "captions",
		         }
		    ],
		    
		  }]
		});
</script>
</body>
</html>
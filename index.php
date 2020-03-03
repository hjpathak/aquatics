<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title></title>
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	<style type="text/css">
		html , body, div, section, aside, h1, h2, h3, h4, h5, h6{ display: block; position: relative; padding:0; margin:0; overflow: hidden; font-family: 'Nunito', sans-serif; letter-spacing: 3px; }

	/* Let's get this party started */
::-webkit-scrollbar {
    width: 1px;
}
 
/* Track */
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0); 
    -webkit-border-radius: 1px;
    border-radius: 1px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
    -webkit-border-radius: 1px;
    border-radius: 1px;
    background: rgba(0,0,0,0); 
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0); 
}
::-webkit-scrollbar-thumb:window-inactive {
	background: rgba(0,0,0,0.4); 
}
		body{ background:#000;  }
		body p,.normal-letter-space{ letter-spacing: normal; }
		/*00F4FF - AQUA BLUE
		FFD500 - CHROME YELLOW
		004177 - NAVY BLUE*/
		section{ max-width: 900px; width: 100%; margin: 0 auto; height: 1110px;  }
		/*fishbg*/
		section.main-container{ height: 1110px;   padding:0; margin: 85px 30px;    width: 660px; }
		#fishbg{ width: 1110px; height: 660px; position: absolute; }
		#fishbg{position: absolute;    top: -361px;    left: -340px;    /* object-fit: cover; */    width: 1410px;    height: 1280px;    /* height: auto; */    transform: rotate(90deg) translateX(239px);    transform-origin: center;}
		section.main-container{background: linear-gradient(90deg, rgba(255,255,255,.1) 25%, rgba(0,48,86,.8) 100%);    background-blend-mode: multiply; background: rgba(0,48,86,.8);}

		section.main-container{    padding:0; margin: 85px 30px;    width: 660px; height: 100vh; height: 1110px; margin: 0px 30px; margin:60px 30px; }
		#fishbg{ background:#000 !important; }
		#fishbg{     top: 0px;    height: 100vh; height:1110px;   margin: 85px 30px;margin:60px 30px;    width: 660px;    transform: none;    left: 0px;    object-fit: cover;    display: block;    left: 0px; }

		body.no-tv #fishbg, body.no-tv section.main-container,body.no-tv section{ height: 100vh; }
		body.no-tv .zone-page{ grid-template-rows: 30% 55% 15%;      height: 100vh;}
		body.no-tv .zone-param-page{  grid-template-rows:25% 15% 45% 15%; }
		body.no-tv .fishlist-page{  grid-template-rows: 15% auto 15%;  }
		body.no-tv .fish-detail-page{ grid-template-rows: 15% 20% auto 15%;  }
		body.no-tv .fishlist-container img {    width: 35px;    height: 35px;    object-fit: cover;    border-radius: 50%;    margin: 0 auto;}
		body.no-tv .fishlist-page .fishlist-container, body.no-tv .slick-dotted.slick-slider {    height: 100%; }
		body.no-tv .fish-detail-page .fish-detail-slider{ margin-top:0px; margin-bottom: 0px; }

		/*height: 1170px;    margin: 85px 30px;    width: 720px;*/
		h1,h2,h3,h4,h5,h6{ font-weight: normal; margin-bottom: 0px; }
		a,a:hover,a:active,a:link,a:focus{ outline: none;     overflow: hidden;    display: block; background:none; }
		a{ text-decoration: none; }
		ul{ list-style-type: none; }
		.text-container,.start-button-container{ text-align: center; }
		.bold,.header-container h2{ font-weight: 800; }
		.header-container h2.normal{ font-weight: normal; }
		h2{     letter-spacing: 4px;line-height: 1; }
		h2.thin{ font-weight: 200i; }
		h2.color-yellow{ color:#ffd500; }
		.home-page .text-container h2 {    line-height: 1.5; }
		.no-margin,.header-container,.header-container h2{ margin:0; }

		/*Home page*/
		.home-page{ display: grid;    grid-template-columns: 100% 100% 100%;    grid-template-rows: 70% 15% 15%; }
		.home-page .text-container{      grid-row-start: 1;  align-self: center; color:#00f4ff; font-size: 3vh;     align-self: end;     margin-bottom: 4vh;}
		.home-page  .start-button-container{    grid-row-start: 2;    align-self: center;}
		.home-page .footer-icon{   grid-row-start: 3;    align-self: center;}

		/*icon images*/
		.btn,.btn:hover{ height: 5vh;    background-repeat: no-repeat;    background-position: center center;    background-size: auto 5vh;    background-color: rgba(0,0,0,0);
    border: none; cursor: pointer; }
    .btn.btn-pos-left:hover{ background-position: center left; }
		.btn.btn-pos-right:hover{ background-position: center right; }
		.start-icon{ background-image:url('img/icons/start-d.png');  }
		.start-icon:hover{ background-image:url('img/icons/start-a.png');   }
		/*icon images*/
		/*Home Page*/

		/*Zone Page*/
		.zone-page{ display: grid;    grid-template-columns: 100% 100% 100%;    grid-template-rows: 30% auto 120px;      height: 1110px;}
		.zone-page .text-container{      grid-row-start: 1;  align-self: end; color:#00f4ff; font-size: 3vh;}
		.zone-page .zone-list-container{    grid-row-start: 2;    align-self: center;    height: 100%; }
		.zone-page .zone-list-container ul{       font-size: 3vh; text-align: center;align-items: center; padding:0px; }
	    .zone-page .zone-list-container ul a{color:#fff; display: block; margin-bottom: 30px;}
	    .zone-page .zone-list-container ul li{ position: relative; display: inline-block;display: block; letter-spacing: 3px; }
	    .zone-page .zone-list-container ul li:hover{ font-weight: 900; } 
	    .zone-page .zone-list-container ul li:after{     position: relative; bottom: 5px; left: 0px; height: 1px; width: 45%;  background:#fff;  content:""; display: grid; margin: 0 auto; align-self: center;}
	    .zone-page .zone-list-container ul a:hover{color:#00f4ff;}		
		.zone-page .footer{ grid-row-start: 3; }
		/*Zone Page*/

		/*Zone Specific Page*/
		.zone-param-page{  display: grid;    grid-template-columns: 100% 100% 100% 100%;    grid-template-rows:25% 25% auto 120px; grid-template-rows: 140px auto minmax(min-content, max-content) 120px;   }
		.zone-param-page .header-container{  display: grid;    grid-template-columns: 70% 30%;          align-self: center; }

		.zone-param-page .text-container{      grid-row-start: 1;  align-self: center; color:#00f4ff;  font-size: 1.8vh;    text-align: left;}
		.zone-param-page .plant-icon{    align-self: center;}
		.plant-icon img{  width:55px; height:auto; margin:0;float: right;   }
		.zone-param-page .map-container{ grid-row-start: 2; overflow-x: scroll; }
		.zone-param-page .zone-detail-slider{ grid-row-start: 3;     padding: 40px; }
		.zone-param-page .zone-detail-slider h2{ color:#00f4ff; font-weight: bold; }
		.zone-param-page .footer{ grid-row-start: 4; }
		.zone-param-page .slider-item{color: #fff;    display: grid;    grid-template-columns: 100%;}
		.zone-param-page .three-button-container{    display: grid;    grid-template-columns: auto auto auto;}
		.zone-param-page .three-button-container>div{ text-align: center;  }
		.zone-param-page .map-container img{    height: 100%;    width: auto;    display: block;    margin: 0 auto;}
		.btn-back-icon{ background-image:url('img/icons/Back_Arrow_D.png'); }
		.btn-back-icon:hover{ background-image:url('img/icons/Back_Arrow_A.png'); }		
		/*button{ border-radius: 50%; padding: 10px; border:none; }*/
		.header-container{    padding: 40px;}

		.btn-know-more{ background-image:url('img/icons/Know_More_D.png');  }
		.btn-know-more:hover{ background-image:url('img/icons/Know_More_A.png');   }

		.btn-home{ background-image:url('img/icons/Home_D.png'); position: relative;  }
		.btn-home:hover{ background-image:url('img/icons/Home_A.png');   }

		.btn-habit-icon{ background-image:url('img/icons/Habitat_Icon_D.png'); }
		.btn-habit-icon:hover,.btn-habit-icon.active{ background-image:url('img/icons/Habitat_Icon_A.png'); }

		.btn-diet-icon{ background-image:url('img/icons/Diet_Icon_D.png'); }
		.btn-diet-icon:hover,.btn-diet-icon.active{ background-image:url('img/icons/Diet_Icon_A.png'); }

		.btn-doyouknow-icon{ background-image:url('img/icons/Do_You_Know_D.png'); }
		.btn-doyouknow-icon:hover,.btn-doyouknow-icon.active{ background-image:url('img/icons/Do_You_Know_A.png'); }
		/*Zone Specific Page*/

		/*Fish List Page*/
		.fishlist-page{  display: grid; grid-template-columns: 100% 100% 100%;    grid-template-rows: 15% auto 120px;  }
		.fishlist-page .header-container{  display: grid;    grid-template-columns: 70% 30%;      grid-row-start: 1;  align-self: end; color:#00f4ff; font-size: 3vh; text-align: left; }
		
		.fishlist-page .text-container{     text-align: left; align-self: end; }
		/*fish-detail-page*/
		.fish-detail-page .text-container h2.zones-header,.fishlist-page .text-container h2.zones-header{ font-size:1.5vh; }
		.zone-param-page .text-container h2,.fish-detail-page .text-container h2.zones-specific-header, .fishlist-page .text-container h2.zones-specific-header{ font-size:2.5vh; }
		.fishlist-page .fishlist-container{   grid-row-start: 2;     align-self: center; }
		

		.fishlist-page .footer{   grid-row-start: 3; align-self: center;margin: 0px 40px 0px; }
		.fishlist-page .footer .two-button-container{ display: grid;    grid-template-columns: auto auto; }
		.fishlist-page .footer .two-button-container>div{ text-align: right;  }
		.fishlist-page .footer .two-button-container>div:first-of-type{ text-align: left; }
		.fishlist-container img{ width: 75px; height: 75px;  object-fit: cover; border-radius: 50%;    margin: 0 auto; }
		.fishlist-container h4{ text-align: center; }
		.fishlist-container>div{ margin: 40px; overflow: visible; }
		.fishlist-page .fishlist-item{ display: block;float: left; width: 160px; overflow: hidden; }
		.fishlist-container>div a {    display: block;    margin: 0px 0px 50px 0px; }
		.fishlist-container>div h4{ color:#fff; }
		body .slick-prev, body .slick-next{    width: 5vh;    height: 5vh; z-index: 1;}
		.slick-next {    right: 0px; }
		.slick-prev {    left: 0px; }
		/*Fish List Page*/

		/*Fish Detail Page*/
		.fish-detail-page{ display: grid; grid-template-columns: 100% 100% 100% 100%;      grid-template-rows: 140px 30% auto 120px; grid-template-rows: 140px minmax(min-content, max-content) auto 120px; }
		.fish-detail-page .header-container{  display: grid;    grid-template-columns: 70% 30%;      grid-row-start: 1;  align-self: end; color:#00f4ff; font-size: 3vh; text-align: left; }
		.fish-detail-page .header-container h2{ text-align: left; }
		.fish-detail-page .text-container{     text-align: left; align-self: center; }
		.fish-brief-container, .location-container{ padding: 20px 40px 20px; color:#fff; }
		.fish-detail-page .location-container{ display: grid; grid-template-columns: 50% 50%; }
		.fish-detail-page .location-container img{    overflow: hidden;    display: block;   height: 100%;    width: 100%; }
		.fish-detail-page .fish-brief-container{ grid-row-start: 2;     display: grid;    grid-template-columns: 100%; padding-top: 0px; padding-bottom: 0px;     grid-gap: 0px; margin-bottom: 20px; }
		body hr{ margin:20px 0px; }
		.fish-detail-page .fish-brief h2{ font-weight: 800;    font-size: 40px; }
		.fish-detail-page .scientific-container h3{    font-weight: 800;}
		.fish-brief-icons{ display: grid; grid-template-columns: 6vh 6vh 6vh; grid-gap: 50px;  }
		.fish-brief-icons img{ width: 100%; height: 5vh; object-fit: cover; border-radius: 50%;  margin-top:0px;margin-bottom: 10px; object-fit: contain; }
		.fish-brief-icons div{ text-align: center; margin-bottom:0px; }
		.fish-brief-icons div label,.fish-brief-icons div img{ display: block; }
		.fish-detail-page .fish-detail-container{ grid-row-start: 3;     display: grid; grid-template-columns: 100%;    grid-template-rows: 60% 40%;}
		.fish-detail-page .fish-detail-slider{ margin: 0px 40px 0px;    padding: 0px; display: block;    overflow: visible; }
		.fish-detail-page .fish-detail-slider .slick-list{ height: 100%; }
		.fish-detail-page .fish-detail-slider .fish-image{ position: relative; }
		.fish-detail-page .fish-detail-slider .fish-image img{ object-fit: cover; height: 100%; width: 100%; }
		.fish-detail-page .fish-detail-slider .fish-image video{ height: 100%;  }
		h3.location-header{ font-size: 19px; font-weight: 800; letter-spacing: 2px; }
		p.location-details{ font-size: 14px; }
		.fish-detail-page .footer{ grid-row-start: 4;     align-self: center;}
		.fish-detail-slider img{ height: 100%; width: 100%; object-fit: contain; }
		.fish-detail-page .slider-item{ width: 100%;     height: 100%;}
		.fish-detail-page .scientific-container{ margin:20px 0px 0px; }
		.scientific-container label{ letter-spacing: 2px; }
		.fish-brief-icons label {    margin-top: 0px;    text-align: center;    font-size: 12px;    font-weight: 800;    letter-spacing: 2px; }
		.footer label {       font-weight: 800;    letter-spacing: 2px;    position: absolute;    bottom: -15px;    width: 100%;    text-align: center;    left: 0px;    color: #fff;    font-size: 7px; }
		.footer a, .footer div, aside.footer{ overflow: visible; }
		.slider-item>div{ float: left;    height: 100%; }
		.slick-slider .slick-track,.slick-slide div{    height: 100%;}

		.fish-detail-page .footer .three-button-container{ display: grid;    grid-template-columns: 16.666666666666668% 16.666666666666668% 16.666666666666668% 16.666666666666668% 16.666666666666668% 16.666666666666668%  ; }
		.fish-detail-page .footer .three-button-container>div{ text-align: center;  }
		.fish-detail-page .footer .three-button-container.parent>div:first-of-type{ text-align: left;  }
		.fish-detail-page .footer .three-button-container.parent>div:last-of-type{ text-align: right;  }

		.fish-detail-page .diet-container,.fish-detail-page .diduknow-container,.fish-detail-page .habitat-container{ display: none; padding:40px;color:#004177;background: rgba(255, 213, 0, .8); }
		.fish-detail-page .diduknow-container::after{ content: ""; background-image: url(img/icons/Do_You_Know_DDD.png);    position: absolute;    width: 50%;    height: 100%;    top: 0px;    right: 0px;    background-size: auto 80%;    background-repeat: no-repeat;    background-position: 110%;    opacity: 1;z-index: -1; }
		.the-detail-container .location-header{ font-weight: 900; }
		.three-button-child-container{ display: grid;    grid-template-columns: auto auto auto; }
		.btn-pos-left{ background-position: center left; }
		.btn-pos-right{ background-position: center right; }
		.footer{ align-self: center; margin:0px 40px; }
		/*Fish Detail Page*/

		/*button css*/
		.btn-round{ border-radius: 50%;    width: auto;    display: inline-block;    overflow: hidden;    padding: 10px; }
		.bg-white{ background: #fff; }
		/*button css*/
	</style>

	<script   type="text/javascript" src="js/angular_.js"></script>
    <script   type="text/javascript" src="js/angular-ui-router.min.js"></script>
    <script   type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-animate.min.js"></script>
    <!-- <script  type="text/javascript" src="js/jquery.js"></script> -->
    
	<script type="text/javascript">
    
        routerApp = angular.module('routerApp', ['ui.router']);
        app = angular.module('progressApp', ['ngProgress', 'ngAnimate']);
    
	</script>
	<link rel="stylesheet" type="text/css" href="lib/slick/slick.css"/>
	<!-- // Add the new slick-theme.css if you want the default styling -->
	<link rel="stylesheet" type="text/css" href="lib/slick/slick-theme.css"/>

	<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="lib/slick/slick.js"></script>
</head>
<body  id="ng-app" ng-app="routerApp" class="noo-tv">
	
	<video width="320" height="240" controls id="fishbg" style="position: absolute;" loop="true" autoplay="autoplay" muted>
		<source src="moviebg.mp4" type="video/mp4">
		Your browser does not support the video tag.
	</video>

	<section class="main-container">		
		<div class="col-lg-12" ui-view></div>
	</section>
	<script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript">
		if(document.getElementById('fishbg'))
		document.getElementById('fishbg').addEventListener('loadedmetadata', function() {
  this.currentTime = 20;
}, false);
	</script>
</body>
</html>
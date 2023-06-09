<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="{{ asset('images/favicon.ico') }}">
	<title>KENTA MORIMOTO TRIO presents "Tuxedo"</title>
	<!-- Modernizr -->
	<script src="{{ asset('js/modernizr.js')  }}"></script>
	<!-- Open Sans from Google Webfonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<!-- Main styles file -->
	<link rel="stylesheet" href="{{ asset('css/styles.dev.css') }}" />
	<!-- Icons via Font Awesome -->
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" />
	<meta property="og:url" content="https://xs802606.xsrv.jp/kenta-tuxedo/" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="KENTA MORIMOTO TRIO presents Tuxedo" />
	<meta property="og:description" content="森本ケンタトリオ新曲『Tuxedo』プロモーションビデオ ティーザー" />
	<meta property="og:site_name" content="森本ケンタトリオ『Tuxedo』GTR50バージョン" />
	<meta property="og:image" content="{{ asset('images/og_image2.jpg') }}" />
</head>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-7710TGENDN"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-7710TGENDN');
</script>

<body class="color-scheme-neue">
	<!-- Animated background -->
	<canvas id="bg-canvas"></canvas>
	<!--<div class="bg-img view_timer" data-end-date="{{$startTime}}" style="width: 100%; height: 100%; position: fixed; background: url({{ asset('images/gtr.jpg') }}) no-repeat center center; background-size: cover;"></div>-->
    <div class="bg-img view_timer" style="width: 100%; height: 100%; position: fixed; background: url({{ asset('images/trio.jpg') }}) no-repeat center center; background-size: contain;  background-position-y: top;"></div>
	<!-- First screen -->
    <!--count down-->
	<div class="splash">
		<div class="centered-unit">
			<div class="container view_timer" data-end-date="{{$startTime}}">
				<!-- Main header -->
				<!--<h1>Coming soon!</h1> -->
				
				<!-- Sub header -->
				<img src="{{ asset('images/tuxedo_logo.png') }}" class="img-responsive mt-5" alt="Tuxedo logo" width="250px" style="margin-top:50px">
				<p class="lead" style="margin-top:10px">KENTA MORIMOTO TRIO<br>presents</p>
				
				<!-- Countdown -->
				<div class="countdown circled large" style="margin-top:5px">
					<!-- Days -->
					<div class="time days">
						<div class="value">00</div>
						<div class="unit">Days</div>
					</div>
					<!-- Hours -->
					<div class="time hours">
						<div class="value">00</div>
						<div class="unit">Hours</div>
					</div>
					<!-- Minutes -->
					<div class="time minutes">
						<div class="value">00</div>
						<div class="unit">Minutes</div>
					</div>
					<!-- Seconds -->
					<div class="time seconds">
						<div class="value">00</div>
						<div class="unit">Seconds</div>
					</div>
				</div>
				<!-- Countdown end -->
				
			</div>

            <div class="container view_timer" data-start-date="{{$startTime}}">
				<img src="{{ asset('images/tuxedo_logo.png') }}" class="img-responsive mt-5" alt="Tuxedo logo" width="200px" style="margin-top:60px">
				<p class="lead" style="margin-top:-10px">KENTA MORIMOTO TRIO now on Youtube!</p>
				<!--Youtube Here-->
				<div class="embed-responsive embed-responsive-16by9">
					<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/VIrxjOtWKuk" allowfullscreen width="85%" height="400"></iframe>
				</div>
				<!--(動画が表示されない場合はこのページを再読み込みしてください)-->
				<!--<p class="lead">Now on Youtube!</p>-->
            </div>
			<!--
			<div class="social">
						<a href="https://www.youtube.com/user/MorimotoKentaTV" class="social-icon" target="_blank">
							<i class="fa fa-youtube fa-lg"></i>
						</a>
						<a href="https://www.facebook.com/profile.php?id=100043091613250" class="social-icon" target="_blank">
							<i class="fa fa-facebook fa-lg"></i>
						</a>
						<a href="https://morimotokenta.com/" class="social-icon" target="_blank">
							<i class="fa fa-laptop fa-lg"></i>
						</a>
			</div>
			-->
		</div>

	</div>
	
	<!-- Second screen -->
	<div class="overlap">
		<!-- Link "Scroll down to learn more" -->
		
		<a href="" class="more">Scroll down <i class="fa fa-chevron-down"></i> to learn more</a>

		<!-- Detailed info -->
		<div class="container few-words">
		<h2>KENTA MORIMOTO TRIO presents "Tuxedo"</h2>
		<div class="row">
		<div class="col">
		
			<a href="https://kentamorimoto.shop-pro.jp/?mode=cate&cbid=2655682&csid=0" target="_blank"><img src="{{ asset('images/card/card_a.jpg') }}" class="img-responsive mt-5" alt="Tuxedo card_a" width="100px"></a>
			<a href="https://kentamorimoto.shop-pro.jp/?mode=cate&cbid=2655682&csid=0" target="_blank"><img src="{{ asset('images/card/card_b.jpg') }}" class="img-responsive mt-5" alt="Tuxedo card_a" width="100px"></a>
			<a href="https://kentamorimoto.shop-pro.jp/?mode=cate&cbid=2655682&csid=0" target="_blank"><img src="{{ asset('images/card/card_c.jpg') }}" class="img-responsive mt-5" alt="Tuxedo card_a" width="100px"></a>
			<a href="https://kentamorimoto.shop-pro.jp/?mode=cate&cbid=2655682&csid=0" target="_blank"><img src="{{ asset('images/card/card_d.jpg') }}" class="img-responsive mt-5" alt="Tuxedo card_a" width="100px"></a>
			<a href="https://kentamorimoto.shop-pro.jp/?mode=cate&cbid=2655682&csid=0" target="_blank"><img src="{{ asset('images/card/card_e.jpg') }}" class="img-responsive mt-5" alt="Tuxedo card_a" width="100px"></a>
			<br>
			
			
			<h4>Music & Coffee「Tuxedo」2,200円（税込）</h4>
			<a href="https://kentamorimoto.shop-pro.jp/?mode=cate&cbid=2655682&csid=0" target="_blank">森本ケンタ 公式 オンラインSHOP</a><br>
			<br>
			「Tuxedo」を含む3曲をダウンロードできるミュージックカードと、ドリップバッグコーヒーのセット。<br>
			●発売日 2023.4.29<br>
			●内容<br>
			ミュージックカード（3曲収録）<br>
			ドリップバッグコーヒー（3個）<br>
			●収録曲<br>
			1.Tuxedo, 2.Julieta trio ver., 3.Memories<br>
		</div>

		</div>
			<div class="row">
				<!-- First column -->
				<div class="col col-heading">
				<h4>News</h4>
				<hr>
				●森本ケンタ『Tuxedo』<br>
				ミュージックビデオ<br>
				<a href="https://youtu.be/VIrxjOtWKuk" target="_blank">https://youtu.be/VIrxjOtWKuk</a><br>
				<hr>
				【発売イベント】<br>
<br>
●4月29日（土）<br>
13:00 <br>
広島駅南口地下広場エールエール<br>
※観覧無料<br>
17:00 <br>
アリスガーデン<br>
 [広島市中区新天地8]<br>
※観覧無料<br>
<br>
●5月4日（木）<br>
奉納ライブ 三原市極楽寺<br>
 [三原市東町3-5-1]<br>
12:30 open / 13:00 start<br>
2000円<br>
※事前予約制（お申し込み受付中）<br>
 <br>
●5月5日（金）<br>
i-core FUCHU 府中天満屋2F<br>
  [府中市府川町186-1 ]<br>
13:00 open / 13:30 start  <br>
(14:55頃の出演)<br>
※観覧無料<br>
※太鼓ユニット我龍とコラボ予定<br>
<br>
●5月6日（土）<br>
イオンタウン防府<br>
 [山口県防府市鐘紡町7-1]<br>
11:30 / 13:30 <br>
※観覧無料<br>
<br>
●5月13日（土）<br>
カジル横川 特設ステージ<br>
 [広島市西区横川町3-2-36]<br>
15:00  出演予定<br>
※観覧無料<br>
<br>
●5月14日（日）<br>
フジグラン宇部<br>
 [山口県宇部市明神町3-1-1]<br>
11:00  / 14:00 <br>
※観覧無料
<hr>
				【ラジオキャンペーン出演】<br>
				●4/10(月) 出演時間10:30予定<br>
				FM はつかいち『キラキラ☆アートBOX』<br>
				<br>
				●4/24(月)出演時間13:30予定<br>
				FMちゅーぴー『広島すまいるパフェ』<br>
				<br>
				●4/24(月)出演時間17:00予定<br>
				miniFM広島マチナカ78.7MHz『ゆうちゃんねる』<br>
				<br>
				●4/28(金)出演時間未定<br>
				しゅうなんFM 電話生出演<br>
				<br>
				●5/8(月)出演時間13:10予定<br>
				RCCラジオ『おひるーな』<br>
				<br>
				●5/9(火)出演時間23:00予定<br>
				RCCラジオ『西田篤史のシンラジラ』<br>
				<br>
				●5/11(木)出演時間10:15予定<br>
				広島FM 『GOOD JOG』
				</div>
				<!-- Second column -->
				<div class="col col-content">
					<h4>Staff</h4>

					<i>Composer & guitar:</i>&nbsp;&nbsp;&nbsp;&nbsp;Kenta Morimoto<br>
					<i>5 strings cello:</i>&nbsp;&nbsp;&nbsp;&nbsp;Koichi Kawaoka<br>
					<i>Percussion:</i>&nbsp;&nbsp;&nbsp;&nbsp;Taisuke Morikawa<br>
					<br>
					<i>Recording engineer:</i>&nbsp;&nbsp;&nbsp;&nbsp;Masahiro Odahara<br>
					<i>Mixing & mastering engineer:</i>&nbsp;&nbsp;&nbsp;&nbsp;Isamu Harada<br>
					<br>
					<i>Manager:</i>&nbsp;&nbsp;&nbsp;&nbsp;Akiko Kanei<br>
					<i>Photographer:</i>&nbsp;&nbsp;&nbsp;&nbsp;Takahiro Umemura<br>
					<i>Stylist:</i>&nbsp;&nbsp;&nbsp;&nbsp;ako<br>
					<i>Hair:</i>&nbsp;&nbsp;&nbsp;&nbsp;Tsuyoshi Kobayashi (ABLAZE)<br>
					<i>Videographer:</i>&nbsp;&nbsp;&nbsp;&nbsp;Tomoh Ueda / Hiroko Nishizawa<br>
					<br>
					<i>Special thanks:</i>&nbsp;&nbsp;&nbsp;&nbsp;Mr.Hiroki<br>
					<br>
				</div>
				<!-- Third column -->
				<div class="col col-contacts">
				<h4>Web</h4>
					<p class="text-center">
					<!--<h4><i class="fa fa-globe"></i>&nbsp;&nbsp;Web</h4>-->
					<i class="fa fa-home"></i>&nbsp;&nbsp;Kenta Morimoto Official<br>
					<a href="https://morimotokenta.com" target="_blank">https://morimotokenta.com</a><br>
					<br>
					<i class="fa fa-instagram"></i>&nbsp;&nbsp;Instagram <br>
					<a href="https://www.instagram.com/kenta57morimoto/" target="_blank">https://www.instagram.com/kenta57morimoto/</a><br>
					<br>
					<i class="fa fa-calendar"></i>&nbsp;&nbsp;Schedule<br>
					<a href="https://morimotokenta.com/schedule/" target="_blank">https://morimotokenta.com/schedule/</a><br>
					<br>
					<i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;Shop<br>
					<a href="https://morimotokenta.com/onlineshop.shtml" target="_blank">https://morimotokenta.com/onlineshop.shtml</a><br>
					<br>
					<i class="fa fa-smile-o"></i>&nbsp;&nbsp;Fan Club<br>
					<a href="https://morimotokenta.com/fc/" target="_blank">https://morimotokenta.com/fc/</a><br>
					<br>
					</p>
				</div>
			<!-- Detailed info block end -->
			</div>
		</div>


		<!-- Footer -->
		<div class="footer">
			<div class="container">
				&copy; 2023 office KENTA, All rights reserved.
			</div>
		</div>
		<!-- Footer end -->
	</div>
	
	<!-- JavaScripts -->
	
	<script src="{{ asset('js/jquery.js') }}"></script>
	<script src="{{ asset('js/countdown.js') }}"></script>
	<script src="{{ asset('js/bezierCanvas.js') }}"></script>
	<script src="{{ asset('js/notifyMe.js') }}"></script>
	
	<script type="text/javascript">
	$().ready(function(){
		
		// Activate countdownTimer plugin on a '.countdown' element
		$(".countdown").countdownTimer({
			// Set the end date for the countdown
			endTime: new Date("{{$startTime}}")
		});
		
		
		// Activate notifyMe plugin on a '#notifyMe' element	
		$("#notifyMe").notifyMe();
		
			
		// Activate bezierCanvas plugin on a #bg-canvas element
		$("#bg-canvas").bezierCanvas({
			maxStyles: 3,
			maxLines: 80,
			strokeWidth: 0.5,
			lineSpacing: 0.07,
			spacingVariation: 0.07,
			colorBase: {r: 100,g: 120,b: 200},
			colorVariation: {r: 50, g: 50, b: 50},
			moveCenterX: 0,
			moveCenterY: 0,
			delayVariation: 4,
			globalAlpha: 0.4,
			globalSpeed:200,
		});
		
		// Add handler on 'Scroll down to learn more' link
		$().ready(function(){
			$(".overlap .more").click(function(e){
				e.preventDefault();
				$("body,html").animate({scrollTop: $(window).height()});
			});
		});		
		
        // タイマー表示
        countdown();
        setInterval(countdown, 1000);
        function countdown() {
            //console.log("待ってね..");
            $(".view_timer").each(function(index, target) {
                var startDate = $(this).attr("data-start-date");
                var endDate = $(this).attr("data-end-date");
                var nowDate = new Date();

            	if (startDate) {
                    startDate = new Date(startDate);
                } else {
                startDate = nowDate;
                }
                if (endDate) {
                    endDate = new Date(endDate);
                }

                if (startDate <= nowDate && (!endDate || nowDate <= endDate)) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
        });
        }

	});
    
	</script>

</body>
</html>
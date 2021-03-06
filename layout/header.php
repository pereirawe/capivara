<!--By @pereirawe 2018 mar-->
<!DOCTYPE html>
 <!--[if lt IE 7]>      	<html class="no-js html-loading wf-active ie old-browser lt-ie10 lt-ie9 lt-ie8 lt-ie7" lang="es-ES"> <![endif]-->
<!--[if IE 7]>         	<html class="no-js html-loading wf-active ie old-browser ie7 lt-ie10 lt-ie9 lt-ie8" lang="es-ES"> <![endif]-->
<!--[if IE 8]>         	<html class="no-js html-loading wf-active ie old-browser ie8 lt-ie10 lt-ie9" lang="es-ES"> <![endif]-->
<!--[if IE 9]>			<html class="no-js html-loading wf-active ie modern-browser ie9 lt-ie10" lang="es-ES"> <![endif]-->
<!--[if gt IE 9]>		<html class="no-js html-loading wf-active modern-browser" lang="es-ES"> <!--<![endif]-->
<html lang="es-CO" prefix="og: http://ogp.me/ns#">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="shortcut icon" href="<?php echo $app_url ; ?>/favicon.ico" />
	<title>Capivara</title>
	<meta http-equiv="cache-control" content="max-age=0" />
	<meta http-equiv="cache-control" content="no-cache" />
	<meta http-equiv="expires" content="0" />
	<meta http-equiv="pragma" content="no-cache" />
	<meta name='description' content='Capivara es una Plataforma de Red Social para los amantes de las mascotas en Brasil donde puedes compartir historias, fotos, videos y mucho mas.' />
	<meta property='og:url' content='https://capivara.insoca.com.br/' />
	<meta property='og:locale' content='es_ES' />
	<meta property='og:type' content='website' />
	<meta property='og:title' content='Capivara' />
	<meta property='og:description' content='Capivara es una Plataforma de Red Social para los amantes de las mascotas en Brasil donde puedes compartir historias, fotos, videos y mucho mas.' />
	<meta property='og:site_name' content='Capivara' />
	<meta property='og:image' content='https://capivara.insoca.com.br/img/logo-vetstore-box.jpg#<?php echo time(); ?>'/>
	<meta name='twitter:card' content='summary_large_image'/>
	<meta name='twitter:description' content='Capivara es una Plataforma de Red Social para los amantes de las mascotas en Brasil donde puedes compartir historias, fotos, videos y mucho mas.'/>
	<meta name='twitter:domain' content='Capivara'/>
	<meta name='twitter:image' content='https://capivara.insoca.com.br/img/logo-vetstore-box.jpg#<?php echo time(); ?>'/>
	<meta name="description" content="Capivara es una Plataforma de Red Social para los amantes de las mascotas en Brasil donde puedes compartir historias, fotos, videos y mucho mas.">
	<meta name="keywords" content="social, Capivara, red social, mascotas, amigos">
	<meta name="robots" content="index, follow">
	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" ></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" hef="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<link rel="stylesheet" href="./main_style.css#<?php echo time(); ?>" type="text/css" />
	<link rel="stylesheet" href="https://cdn.rawgit.com/michalsnik/aos/2.0.4/dist/aos.css">
	<script src="https://cdn.rawgit.com/michalsnik/aos/2.0.4/dist/aos.js"></script>
	

		<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-127025101-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', '');
</script>

</head>
<?php // --- include "./layout/preloader.php"; ?>
<body style="background: url('<?php echo $home_page_background;?>');" >
	<div id="header" class="container-fluid" style="background: <?php echo $home_page_header_background ;?>">
		<div class="row">
			<div id="left_seccion" class="col-md-5">
				<a href="<?php echo $url_facebook; ?>" target="_blank"><i class="fab fa-facebook-square"></i></a>
				<a href="<?php echo $url_instagram; ?>" target="_blank"><i class="fab fa-instagram"></i></a>
				<a href="<?php echo $url_google_plus; ?>" target="_blank"><i class="fab fa-google-plus-g"></i></a>
				<a href="<?php echo $url_twitter; ?>" target="_blank"><i class="fab fa-twitter-square"></i></a>
			</div>
			<div id="center_seccion" class="col-md-2">
				<a href="./">
					<img id="header_logo" src="<?php echo $home_page_header_logo; ?>" alt="Capivara" >
				</a>
			</div>
			<div id="right_seccion" class="col-md-5">
				<?php echo $header_action; ?>
				<!--<a href="./password_recover.php">Recuperar Contraseña</a>-->
			</div>
		</div>
	</div>
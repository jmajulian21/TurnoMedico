<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Bienvenido a <? print $host; ?></title>
<link rel="stylesheet" type="text/css" href="http://cpanel.tuars.com/images/index/styles.css" />
</head>
<body>
<div id="container">
<center><a href="http://tuars.com"><img src="http://tuars.com/images/logo-company.png"></a></center>
  <h1>Felicitaciones.Tu sitio ya est&aacute; instalado!</h1>
  <div id="breadcrumbs">
    <p>Tu  sitio web <strong><? print $host; ?></strong> se ha instalado correctamente en nuestro servidor.<br />
    Por favor borre el archivo&quot;<strong>default.php</strong>&quot; que se encuentra en el folder <strong>public_html</strong> y sube tus propios archivos usando un cliente de FTP.</p>
    
  </div>
  <div id="listingcontainer">
    <div id="listingheader">
      <div id="headerfile">Archivo</div>
      <div id="headersize">Tama&ntilde;o</div>
      <div id="headermodified">Modificado</div>
    </div>
    <div id="listing">
      <?
	$class = 'b';
	if($dirok) {
	?>
      <div><a href="<?=$dotdotdir;?>" class="<?=$class;?>"><img src="http://cpanel.tuars.com/images/index/dirup.png" alt="Folder" /><strong>..</strong> <em>-</em>
        <?=date ("M d Y h:i:s A", filemtime($dotdotdir));?>
        </a></div>
      <?
		if($class=='b') $class='w';
		else $class = 'b';
	}
	$arsize = sizeof($dirs);
	for($i=0;$i<$arsize;$i++) {
	?>
      <div><a href="<?=$leadon.$dirs[$i];?>" class="<?=$class;?>"><img src="http://cpanel.tuars.com/images/index/folder.png" alt="<?=$dirs[$i];?>" /><strong>
        <?=$dirs[$i];?>
        </strong> <em>-</em>
        <?=date ("M d Y h:i:s A", filemtime($leadon.$dirs[$i]));?>
        </a></div>
      <?
		if($class=='b') $class='w';
		else $class = 'b';	
	}
	
	$arsize = sizeof($files);
	for($i=0;$i<$arsize;$i++) {
		$icon = 'unknown.png';
		$ext = strtolower(substr($files[$i], strrpos($files[$i], '.')+1));
		$supportedimages = array('gif', 'png', 'jpeg', 'jpg');
		$thumb = '';
				
		if($filetypes[$ext]) {
			$icon = $filetypes[$ext];
		}
		
		$filename = $files[$i];
		if(strlen($filename)>43) {
			$filename = substr($files[$i], 0, 40) . '...';
		}
		
		$fileurl = $leadon . $files[$i];
	?>
      <div><a href="<?=$fileurl;?>" class="<?=$class;?>"<?=$thumb2;?>><img src="http://cpanel.tuars.com/images/index/<?=$icon;?>" alt="<?=$files[$i];?>" /><strong>
        <?=$filename;?>
        </strong> <em>
        <?=round(filesize($leadon.$files[$i])/1024);?>
        KB</em>
        <?=date ("M d Y h:i:s A", filemtime($leadon.$files[$i]));?>
        <?=$thumb;?>
        </a></div>
      <?
		if($class=='b') $class='w';
		else $class = 'b';	
	}	
	?>
    </div>
  </div>
</div>
<div id="copy"><? $c_global_f = get_cfg_var('c_global_f'); if (!empty($c_global_f)) echo $c_global_f; ?></div>
</body>
</html>
<!--DEFAULT_WELCOME_PAGE-->
<!--DEFAULT_WELCOME_PAGE-->

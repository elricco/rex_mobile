<?php

/**
 * für REDAXO 4.1.x
 */
if ($REX['REDAXO'] and !function_exists('rex_copyDir'))
{
  function rex_copyDir($srcdir, $dstdir, $startdir = "")
  {
    global $REX;
    
    $debug = FALSE;
    $state = TRUE;
    
    if(!is_dir($dstdir))
    {
    $dir = '';
    foreach(explode(DIRECTORY_SEPARATOR, $dstdir) as $dirPart)
    {
      $dir .= $dirPart . DIRECTORY_SEPARATOR;
      if(strpos($startdir,$dir) !== 0 && !is_dir($dir))
      {
      if($debug)
        echo "Create dir '$dir'<br />\n";
        
      mkdir($dir);
      chmod($dir, $REX['DIRPERM']);
      }
    }
    }
    
    if($curdir = opendir($srcdir))
    {
    while($file = readdir($curdir))
    {
      if($file != '.' && $file != '..' && $file != '.svn')
      {
      $srcfile = $srcdir . DIRECTORY_SEPARATOR . $file;    
      $dstfile = $dstdir . DIRECTORY_SEPARATOR . $file;    
      if(is_file($srcfile))
      {
        $isNewer = TRUE;
        if(is_file($dstfile))
        {
        $isNewer = (filemtime($srcfile) - filemtime($dstfile)) > 0;
        }
        
        if($isNewer)
        {
        if($debug)
          echo "Copying '$srcfile' to '$dstfile'...";
        if(copy($srcfile, $dstfile))
        {
          touch($dstfile, filemtime($srcfile));
          chmod($dstfile, $REX['FILEPERM']);
          if($debug)
          echo "OK<br />\n";
        }
        else
        {
          if($debug)
           echo "Error: File '$srcfile' could not be copied!<br />\n";
          return FALSE;
        }
        }
      }
      else if(is_dir($srcfile))
      {
        $state = rex_copyDir($srcfile, $dstfile, $startdir) && $state;
      }
      }
    }
    closedir($curdir);
    }
    return $state;
  }
} // End function_exists

if (!function_exists('rex_mobile_output_bootstrap'))
{
  function rex_mobile_output_bootstrap($content)
  {
    global $REX;

    $rp = $REX['FRONTEND_FILE'];

    $search = '</head>';
    
    $replace  = "\n\n" . '    <!-- Addon REX Mobile Twitter Bootstrap -->';
    $replace .= "\n" . '    <link href="'. $REX['HTDOCS_PATH'] .'files/addons/rex_mobile/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">';
    $repalce .= "\n" . '    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>';
    $replace .= "\n" . '    <script src="'. $REX['HTDOCS_PATH'] .'files/addons/rex_mobile/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>' . "\n";
    $replace .= "\n" . '  </head>' . "\n";

    return str_replace($search, $replace, $content['subject']);
  }
} // End function_exists

if (!function_exists('rex_mobile_output_foundation'))
{
  function rex_mobile_output_foundation($content)
  {
    global $REX;

    $rp = $REX['FRONTEND_FILE'];

    $search = '</head>';
    
    $replace  = "\n\n" . '    <!-- Addon REX Mobile Foundation by ZURB -->';
    $replace .= "\n" . '    <link href="'. $REX['HTDOCS_PATH'] .'files/addons/rex_mobile/foundation/css/normalize.css" rel="stylesheet" media="screen">';
    $replace .= "\n" . '    <link href="'. $REX['HTDOCS_PATH'] .'files/addons/rex_mobile/foundation/css/foundation.min.css" rel="stylesheet" media="screen">';
    $replace .= "\n" . '    <script>';
    $replace .= "\n" . '      document.write(\'<script src=\' +';
    $replace .= "\n" . '      (\'__proto__\' in {} ? \''. $REX['HTDOCS_PATH'] .'files/addons/rex_mobile/foundation/js/vendor/zepto\' : \''. $REX['HTDOCS_PATH'] .'files/addons/rex_mobile/foundation/js/vendor/jquery\') +';
    $replace .= "\n" . '      \'.js><\/script>\')';
    $replace .= "\n" . '    </script>';
    $replace .= "\n" . '    <script src="'. $REX['HTDOCS_PATH'] .'files/addons/rex_mobile/foundation/js/foundation/foundation.js"></script>';
    $replace .= "\n" . '    <script src="'. $REX['HTDOCS_PATH'] .'files/addons/rex_mobile/foundation/js/foundation/foundation.alerts.js"></script>';
    $replace .= "\n" . '    <script src="'. $REX['HTDOCS_PATH'] .'files/addons/rex_mobile/foundation/js/foundation/foundation.clearing.js"></script>';
    $replace .= "\n" . '    <script src="'. $REX['HTDOCS_PATH'] .'files/addons/rex_mobile/foundation/js/foundation/foundation.cookie.js"></script>';
    $replace .= "\n" . '    <script src="'. $REX['HTDOCS_PATH'] .'files/addons/rex_mobile/foundation/js/foundation/foundation.dropdown.js"></script>';
    $replace .= "\n" . '    <script src="'. $REX['HTDOCS_PATH'] .'files/addons/rex_mobile/foundation/js/foundation/foundation.forms.js"></script>';
    $replace .= "\n" . '    <script src="'. $REX['HTDOCS_PATH'] .'files/addons/rex_mobile/foundation/js/foundation/foundation.joyride.js"></script>';
    $replace .= "\n" . '    <script src="'. $REX['HTDOCS_PATH'] .'files/addons/rex_mobile/foundation/js/foundation/foundation.magellan.js"></script>';
    $replace .= "\n" . '    <script src="'. $REX['HTDOCS_PATH'] .'files/addons/rex_mobile/foundation/js/foundation/foundation.orbit.js"></script>';
    $replace .= "\n" . '    <script src="'. $REX['HTDOCS_PATH'] .'files/addons/rex_mobile/foundation/js/foundation/foundation.placeholder.js"></script>';
    $replace .= "\n" . '    <script src="'. $REX['HTDOCS_PATH'] .'files/addons/rex_mobile/foundation/js/foundation/foundation.reveal.js"></script>';
    $replace .= "\n" . '    <script src="'. $REX['HTDOCS_PATH'] .'files/addons/rex_mobile/foundation/js/foundation/foundation.section.js"></script>';
    $replace .= "\n" . '    <script src="'. $REX['HTDOCS_PATH'] .'files/addons/rex_mobile/foundation/js/foundation/foundation.tooltips.js"></script>';
    $replace .= "\n" . '    <script src="'. $REX['HTDOCS_PATH'] .'files/addons/rex_mobile/foundation/js/foundation/foundation.topbar.js"></script>';
    $replace .= "\n" . '    <script src="'. $REX['HTDOCS_PATH'] .'files/addons/rex_mobile/foundation/js/foundation/foundation.interchange.js"></script>';
    $replace .= "\n" . '    <script>';
    $replace .= "\n" . '      $(document).foundation();';
    $replace .= "\n" . '    </script>' . "\n";
    $replace .= "\n" . '  </head>' . "\n";

    return str_replace($search, $replace, $content['subject']);
  }
} // End function_exists
?>
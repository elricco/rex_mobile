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
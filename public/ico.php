<?php
/*
*------------------------------------------------------------
*                   ICO Image functions v2.0
*------------------------------------------------------------
*                      By JPEXS
*
*           Function list:
*              ImageCreateFromIco - Reads image from a ICO file
*              ImageCreateFromExeIco - Reads image from icon in EXE file
*              SaveExeIcon - Saves icon from the exe file
*              ImageIco - Saves an image to icofile or writes it to output
*/

define("TRUE_COLOR", 0x1000000);
define("XP_COLOR", 4294967296);
define("MAX_COLOR", -2);
define("MAX_SIZE", -2);

/*
        Version changes:
                v2.0 - For icons with Alpha channel now you can set background color
                     - ImageCreateFromExeIco added
                     - Fixed MAX_SIZE and MAX_COLOR values
*/

/*
*------------------------------------------------------------
*                    ImageCreateFromIco
*------------------------------------------------------------
*            - Reads image from a ICO file
*
*         Parameters:  $filename - Target ico file to load
*                 $icoColorCount - Icon color count (For multiple icons ico file)
*                                - 2,16,256, TRUE_COLOR or XP_COLOR
*                       $icoSize - Icon width       (For multiple icons ico file)
*  $AlphaBgR,$AlphaBgG,$AlphaBgB - Background color for alpha-channel images (Default is White)
*            Returns: Image ID
*/


function ImageCreateFromIco($filename,$icoColorCount=256,$icoSize=48,$AlphaBgR=255,$AlphaBgG=255,$AlphaBgB=255)
{
$Ikona=GetIconsInfo($filename);

$IconID=-1;

$ColMax=-1;
$SizeMax=-1;

for($p=0;$p<count($Ikona);$p++)
{
$Ikona[$p]["NumberOfColors"]=pow(2,$Ikona[$p]["Info"]["BitsPerPixel"]);
};


for($p=0;$p<count($Ikona);$p++)
{

if(($ColMax==-1)or($Ikona[$p]["NumberOfColors"]>=$Ikona[$ColMax]["NumberOfColors"]))
if(($icoSize==$Ikona[$p]["Width"])or($icoSize==MAX_SIZE))
 {
  $ColMax=$p;
 };

if(($SizeMax==-1)or($Ikona[$p]["Width"]>=$Ikona[$SizeMax]["Width"]))
if(($icoColorCount==$Ikona[$p]["NumberOfColors"])or($icoColorCount==MAX_COLOR))
 {
   $SizeMax=$p;
 };


if($Ikona[$p]["NumberOfColors"]==$icoColorCount)
if($Ikona[$p]["Width"]==$icoSize)
 {

 $IconID=$p;
 };
};

  if($icoColorCount==MAX_COLOR) $IconID=$ColMax;
  if($icoSize==MAX_SIZE) $IconID=$SizeMax;

$ColName=$icoColorCount;

if($icoSize==MAX_SIZE) $icoSize="Max";
if($ColName==TRUE_COLOR) $ColName="True";
if($ColName==XP_COLOR) $ColName="XP";
if($ColName==MAX_COLOR) $ColName="Max";
if($IconID==-1) die("请上传 $ColName 色，并且尺寸为 $icoSize x $icoSize 的ico图片");


ReadIcon($filename,$IconID,$Ikona);

 $biBitCount=$Ikona[$IconID]["Info"]["BitsPerPixel"];


  if($Ikona[$IconID]["Info"]["BitsPerPixel"]==0)
  {
  $Ikona[$IconID]["Info"]["BitsPerPixel"]=24;
  };

 $biBitCount=$Ikona[$IconID]["Info"]["BitsPerPixel"];
 if($biBitCount==0) $biBitCount=1;


$Ikona[$IconID]["BitCount"]=$Ikona[$IconID]["Info"]["BitsPerPixel"];



if($Ikona[$IconID]["BitCount"]>=24)
{
$img=imagecreatetruecolor($Ikona[$IconID]["Width"],$Ikona[$IconID]["Height"]);
if($Ikona[$IconID]["BitCount"]==32):
  $backcolor=imagecolorallocate($img,$AlphaBgR,$AlphaBgG,$AlphaBgB);
  imagefilledrectangle($img,0,0,$Ikona[$IconID]["Width"]-1,$Ikona[$IconID]["Height"]-1,$backcolor);
endif;
for($y=0;$y<$Ikona[$IconID]["Height"];$y++)
for($x=0;$x<$Ikona[$IconID]["Width"];$x++)
 {
 $R=$Ikona[$IconID]["Data"][$x][$y]["r"];
 $G=$Ikona[$IconID]["Data"][$x][$y]["g"];
 $B=$Ikona[$IconID]["Data"][$x][$y]["b"];
 if($Ikona[$IconID]["BitCount"]==32)
 {
 $Alpha=127-round($Ikona[$IconID]["Data"][$x][$y]["alpha"]*127/255);
 if($Ikona[$IconID]["Maska"][$x][$y]==1) $Alpha=127;
 $color=imagecolorexactalpha($img,$R,$G,$B,$Alpha);
 if($color==-1) $color=imagecolorallocatealpha($img,$R,$G,$B,$Alpha);
 }
 else
 {
 $color=imagecolorexact($img,$R,$G,$B);
 if($color==-1) $color=imagecolorallocate($img,$R,$G,$B);
 };

 imagesetpixel($img,$x,$y,$color);

 };

}
else
{
$img=imagecreate($Ikona[$IconID]["Width"],$Ikona[$IconID]["Height"]);
for($p=0;$p<count($Ikona[$IconID]["Paleta"]);$p++)
 $Paleta[$p]=imagecolorallocate($img,$Ikona[$IconID]["Paleta"][$p]["r"],$Ikona[$IconID]["Paleta"][$p]["g"],$Ikona[$IconID]["Paleta"][$p]["b"]);

for($y=0;$y<$Ikona[$IconID]["Height"];$y++)
for($x=0;$x<$Ikona[$IconID]["Width"];$x++)
 {
 imagesetpixel($img,$x,$y,$Paleta[$Ikona[$IconID]["Data"][$x][$y]]);
 };
};
$IsTransparent=false;
for($y=0;$y<$Ikona[$IconID]["Height"];$y++)
for($x=0;$x<$Ikona[$IconID]["Width"];$x++)
 if($Ikona[$IconID]["Maska"][$x][$y]==1)
  {
   $IsTransparent=true;
   break;
  };
if($Ikona[$IconID]["BitCount"]==32)
{
 imagealphablending($img, false);
 if(function_exists("imagesavealpha"))
  imagesavealpha($img,true);
};

if($IsTransparent)
 {
  if(($Ikona[$IconID]["BitCount"]>=24)or(imagecolorstotal($img)>=256))
   {
   $img2=imagecreatetruecolor(imagesx($img),imagesy($img));
   imagecopy($img2,$img,0,0,0,0,imagesx($img),imagesy($img));
   imagedestroy($img);
   $img=$img2;
   imagetruecolortopalette($img,true,255);

   };
    $Pruhledna=imagecolorallocate($img,0,0,0);
    for($y=0;$y<$Ikona[$IconID]["Height"];$y++)
     for($x=0;$x<$Ikona[$IconID]["Width"];$x++)
      if($Ikona[$IconID]["Maska"][$x][$y]==1)
       {
        imagesetpixel($img,$x,$y,$Pruhledna);
       };
  imagecolortransparent($img,$Pruhledna);
 };

return $img;


};




function ReadIcon($filename,$id,&$Ikona)
{
global $CurrentBit;

$f=fopen($filename,"rb");

fseek($f,6+$id*16);
  $Width=freadbyte($f);
  $Height=freadbyte($f);
fseek($f,6+$id*16+12);
$OffSet=freaddword($f);
fseek($f,$OffSet);

$p=$id;

  $Ikona[$p]["Info"]["HeaderSize"]=freadlngint($f);
  $Ikona[$p]["Info"]["ImageWidth"]=freadlngint($f);
  $Ikona[$p]["Info"]["ImageHeight"]=freadlngint($f);
  $Ikona[$p]["Info"]["NumberOfImagePlanes"]=freadword($f);
  $Ikona[$p]["Info"]["BitsPerPixel"]=freadword($f);
  $Ikona[$p]["Info"]["CompressionMethod"]=freadlngint($f);
  $Ikona[$p]["Info"]["SizeOfBitmap"]=freadlngint($f);
  $Ikona[$p]["Info"]["HorzResolution"]=freadlngint($f);
  $Ikona[$p]["Info"]["VertResolution"]=freadlngint($f);
  $Ikona[$p]["Info"]["NumColorUsed"]=freadlngint($f);
  $Ikona[$p]["Info"]["NumSignificantColors"]=freadlngint($f);


 $biBitCount=$Ikona[$p]["Info"]["BitsPerPixel"];

 if($Ikona[$p]["Info"]["BitsPerPixel"]<=8)
  {

 $barev=pow(2,$biBitCount);

  for($b=0;$b<$barev;$b++)
    {
    $Ikona[$p]["Paleta"][$b]["b"]=freadbyte($f);
    $Ikona[$p]["Paleta"][$b]["g"]=freadbyte($f);
    $Ikona[$p]["Paleta"][$b]["r"]=freadbyte($f);
    freadbyte($f);
    };

$Zbytek=(4-ceil(($Width/(8/$biBitCount)))%4)%4;


for($y=$Height-1;$y>=0;$y--)
    {
     $CurrentBit=0;
     for($x=0;$x<$Width;$x++)
      {
         $C=freadbits($f,$biBitCount);
         $Ikona[$p]["Data"][$x][$y]=$C;
      };

    if($CurrentBit!=0) {freadbyte($f);};
    for($g=0;$g<$Zbytek;$g++)
     freadbyte($f);
     };

}
elseif($biBitCount==24)
{
 $Zbytek=$Width%4;

   for($y=$Height-1;$y>=0;$y--)
    {
     for($x=0;$x<$Width;$x++)
      {
       $B=freadbyte($f);
       $G=freadbyte($f);
       $R=freadbyte($f);
       $Ikona[$p]["Data"][$x][$y]["r"]=$R;
       $Ikona[$p]["Data"][$x][$y]["g"]=$G;
       $Ikona[$p]["Data"][$x][$y]["b"]=$B;
      }
    for($z=0;$z<$Zbytek;$z++)
     freadbyte($f);
   };
}
elseif($biBitCount==32)
{
 $Zbytek=$Width%4;

   for($y=$Height-1;$y>=0;$y--)
    {
     for($x=0;$x<$Width;$x++)
      {
       $B=freadbyte($f);
       $G=freadbyte($f);
       $R=freadbyte($f);
       $Alpha=freadbyte($f);
       $Ikona[$p]["Data"][$x][$y]["r"]=$R;
       $Ikona[$p]["Data"][$x][$y]["g"]=$G;
       $Ikona[$p]["Data"][$x][$y]["b"]=$B;
       $Ikona[$p]["Data"][$x][$y]["alpha"]=$Alpha;
      }
    for($z=0;$z<$Zbytek;$z++)
     freadbyte($f);
   };
};


//Maska
$Zbytek=(4-ceil(($Width/(8)))%4)%4;
for($y=$Height-1;$y>=0;$y--)
    {
     $CurrentBit=0;
     for($x=0;$x<$Width;$x++)
      {
         $C=freadbits($f,1);
         $Ikona[$p]["Maska"][$x][$y]=$C;
      };
    if($CurrentBit!=0) {freadbyte($f);};
    for($g=0;$g<$Zbytek;$g++)
     freadbyte($f);
     };
//--------------

fclose($f);

};

function GetIconsInfo($filename)
{
global $CurrentBit;

$f=fopen($filename,"rb");

$Reserved=freadword($f);
$Type=freadword($f);
$Count=freadword($f);
for($p=0;$p<$Count;$p++)
 {
  $Ikona[$p]["Width"]=freadbyte($f);
  $Ikona[$p]["Height"]=freadbyte($f);
  $Ikona[$p]["ColorCount"]=freadword($f);
 if($Ikona[$p]["ColorCount"]==0) $Ikona[$p]["ColorCount"]=256;
  $Ikona[$p]["Planes"]=freadword($f);
  $Ikona[$p]["BitCount"]=freadword($f);
  $Ikona[$p]["BytesInRes"]=freaddword($f);
  $Ikona[$p]["ImageOffset"]=freaddword($f);
 };

if(!feof($f)):
  for($p=0;$p<$Count;$p++)
   {
    fseek($f,$Ikona[$p]["ImageOffset"]+14);
    $Ikona[$p]["Info"]["BitsPerPixel"]=freadword($f);
   };
endif;
fclose($f);
return $Ikona;
};




/*
*------------------------------------------------------------
*                    ImageCreateFromExeIco
*------------------------------------------------------------
*            - Reads image from a icon in exe file
*
*         Parameters:  $filename - Target exefile
*                      $icoIndex - Index of the icon in exefile
*                 $icoColorCount - Icon color count (For multiple icons ico file)
*                                - 2,16,256, TRUE_COLOR or XP_COLOR
*                       $icoSize - Icon width       (For multiple icons ico file)
*  $AlphaBgR,$AlphaBgG,$AlphaBgB - Background color for alpha-channel images (Default is White)
*            Returns: Image ID or empty string if failed
*/


/*
*------------------------------------------------------------
*                    SaveExeIcon
*------------------------------------------------------------
*            - Saves icon from the exe file
*
*         Parameters:  $filename - Target exefile
*             $icoFileNameOrPath - Filename to save ico or path (Default "")
*                                  (path if you want more than 1 icon)
*                                  (If "", the filename is "$icoIndex.ico")
*
*                      $icoIndex - Index(es) of the icon in exefile  (Default -1)
*                                  (If -1, all icons are saved)
*                                  (Can be an array of indexes!)
*/
//------------------------

/*
*------------------------------------------------------------
*                       ImageIco
*------------------------------------------------------------
*                 - Returns ICO file
*
*         Parameters:       $img - Target Image (Can be array of images)
*                      $filename - Target ico file to save
*
*
* Note: For returning icons to Browser, you have to set header:
*
*             header("Content-type: image/x-icon");
*
*/





/*
* Helping functions:
*-------------------------
*
* inttobyte($n) - returns chr(n)
* inttodword($n) - returns dword (n)
* inttoword($n) - returns word(n)
* freadbyte($file) - reads 1 byte from $file
* freadword($file) - reads 2 bytes (1 word) from $file
* freaddword($file) - reads 4 bytes (1 dword) from $file
* freadlngint($file) - same as freaddword($file)
* decbin8($d) - returns binary string of d zero filled to 8
* RetBits($byte,$start,$len) - returns bits $start->$start+$len from $byte
* freadbits($file,$count) - reads next $count bits from $file
*/

function decbin8($d)
{
return decbinx($d,8);
};

function decbinx($d,$n)
{
$bin=decbin($d);
$sbin=strlen($bin);
for($j=0;$j<$n-$sbin;$j++)
 $bin="0$bin";
return $bin;
};

function RetBits($byte,$start,$len)
{
$bin=decbin8($byte);
$r=bindec(substr($bin,$start,$len));
return $r;

};



$CurrentBit=0;
function freadbits($f,$count)
{
 global $CurrentBit,$SMode;
 $Byte=freadbyte($f);
 $LastCBit=$CurrentBit;
 $CurrentBit+=$count;
 if($CurrentBit==8)
  {
   $CurrentBit=0;
  }
 else
  {
   fseek($f,ftell($f)-1);
  };
 return RetBits($Byte,$LastCBit,$count);
};


function freadbyte($f)
{
 return ord(fread($f,1));
};

function freadword($f)
{
 $b1=freadbyte($f);
 $b2=freadbyte($f);
 return $b2*256+$b1;
};


function freadlngint($f)
{
return freaddword($f);
};

function freaddword($f)
{
 $b1=freadword($f);
 $b2=freadword($f);
 return $b2*65536+$b1;
};

function inttobyte($n)
{
return chr($n);
};

function inttodword($n)
{
return chr($n & 255).chr(($n >> 8) & 255).chr(($n >> 16) & 255).chr(($n >> 24) & 255);
};

function inttoword($n)
 {
 return chr($n & 255).chr(($n >> 8) & 255);
 };

?>

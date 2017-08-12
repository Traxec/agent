<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\package_addRequest;
use DB;

class packageController extends Controller
{
    //安装包列表
    public function index()
    {
        $package = DB::table('package')->where('aid', session('user_id'))->paginate(15);
        return view('Home.package', ['package'=>$package]);
    }

    public function add()
    {
        return view('Home.package_add');
    }

    public function insert(package_addRequest $request)
    {
        date_default_timezone_set('Asia/Shanghai');
        $img1=$this->upload($request, 'img1');
        $img2=$this->upload($request, 'img2');
        $img3=$this->upload($request, 'img3');

        $package = DB::table('package')->insert([
        'aid'=>session('user_id'),
        'title'=>$request->input('title'),
        'nav'=>$request->input('nav'),
        'server'=>$request->input('server'),
        'phone'=>$request->input('phone'),
        'website'=>$request->input('website'),
        'email'=>$request->input('email'),
        'address'=>$request->input('address'),
        'company'=>$request->input('company'),
        'img1'=>$img1,
        'img2'=>$img2,
        'img3'=>$img3,
        'state'=>0,
        'time'=>date('Y-m-d H:i:s'),
        'number'=>'0',
      ]);

        if ($package) {
            return back()->with('success', '提交成功');
        } else {
            return back()->with('error', '提交失败');
        }
    }

    public function edit(Request $request)
    {
        $edit = DB::table('package')->where('id', $request->input('id'))->first();
        $json = json_encode($edit);
        return $json;
    }

    public function update(package_addRequest $request)
    {
        date_default_timezone_set('Asia/Shanghai');
        $img1=$this->upload($request, 'img1');
        $img2=$this->upload($request, 'img2');
        $img3=$this->upload($request, 'img3');
        $data = array();
        if ($img1) {
            $data['img1'] = $img1;
        }
        if ($img2) {
            $data['img2'] = $img2;
        }
        if ($img3) {
            $data['img3'] = $img3;
        }
        $data['title']=$request->input('title');
        $data['nav']=$request->input('nav');
        $data['server']=$request->input('server');
        $data['phone']=$request->input('phone');
        $data['website']=$request->input('website');
        $data['email']=$request->input('email');
        $data['address']=$request->input('address');
        $data['company']=$request->input('company');
        $data['state']=0;
        $data['time']=date('Y-m-d H:i:s');
        $sel = DB::table('package')->where('id', $request->input('id'))->first();
        $select = DB::table('price_set')->where('id',1)->first();
        $price = $select->p_update;
        if ($sel->number < 3) {
            $package = DB::table('package')->where('id', $request->input('id'))->increment('number', 1, $data);
            if ($package) {
                return back()->with('success', "修改成功(修改前三次免费，之后每次收取.$price.元)");
            } else {
                return back()->with('error', '提交失败');
            }
        } else {
            $pay= DB::table('pay')->where('aid', session('user_id'))->first();
            if ($pay && $pay->pay>$price) {
              DB::beginTransaction(); //开启事务
              $a = DB::table('pay')->where('aid', session('user_id'))->decrement('pay', $price, ['paydate'=>date('Y-m-d H:i:s')]);
              $b = DB::table('capital')->insert([
                'aid'=>session('user_id'),
                'money'=>-$price,
                'used'=>'修改安装包',
                'date'=>date('Y-m-d H:i:s'),
              ]);
              $package = DB::table('package')->where('id', $request->input('id'))->increment('number', 1, $data);
              $d = DB::table('profit')->insert([
                'aid'=>session('user_id'),
                'price'=>$price,
                'used'=>'修改安装包',
                'time'=>date('Y-m-d H:i:s'),
              ]);

              if ($a && $b && $package && $d) {
                DB::commit();
                return back()->with('success', "修改成功收取您.$price.元");
              } else {
                DB::rollback();
                return back()->with('error', '修改失败');
              }

            } else {
                return back()->with('error', '您的余额不足，请先充值');
            }
        }
    }

    //上传图片
    public function Upload($request, $name)
    {
        date_default_timezone_set('Asia/Shanghai');
        //检测是否有文件上传
        if ($request->hasFile($name)) {
            //随机文件名
            $n = md5(rand(1, 99999).time());
            $suffix = $request->file($name)->getClientOriginalExtension();
            $path = './uploads/'.date('Y-m-d').'/';
            $fileName = $n.'.'.$suffix;
            $arr = array('bmp','ico');
            if (!in_array($suffix, $arr)) {
                return back()->with('error', '文件类型不符合');
            }

            $img = $this->isimage($request, $name);
            if (!file_exists($path)) {
                mkdir($path);
            }
            $a = imagejpeg($img, $path.$fileName);
            //1,移动的目标目录  2,文件名字
            // $request->file($name)->move('./uploads/'.date('Y-m-d'), $fileName);
            return $path.$fileName;
        }
        //echo '上传成功';
    }

    //gd库重绘
    public function isimage($request, $imgpath)
    {
        $mime_type = getimagesize($request->file($imgpath));
        if ($mime_type['mime']=="image/bmp" ||$mime_type['mime']=="image/x-ms-bmp" ) {
            $img = $this->imagecreatefrombmp($_FILES[$imgpath]['tmp_name']);
        } elseif ($mime_type['mime']=="image/png"||$mime_type['mime']=="image/x-png") {
            $img = imagecreatefrompng($_FILES[$imgpath]['tmp_name']);
        } else {
        require('./ico.php');
            $img = imagecreatefromico($_FILES[$imgpath]['tmp_name']);
        }
        if ($img == false) {
            return false;
        } else {
            return $img;
        }
    }

    public function imagecreatefrombmp( $filename ){
      if ( !$f1 = fopen( $filename, "rb" ) )
      return FALSE;

      $FILE = unpack( "vfile_type/Vfile_size/Vreserved/Vbitmap_offset", fread( $f1, 14 ) );
      if ( $FILE['file_type'] != 19778 )
      return FALSE;

      $BMP = unpack( 'Vheader_size/Vwidth/Vheight/vplanes/vbits_per_pixel' . '/Vcompression/Vsize_bitmap/Vhoriz_resolution' . '/Vvert_resolution/Vcolors_used/Vcolors_important', fread( $f1, 40 ) );
      $BMP['colors'] = pow( 2, $BMP['bits_per_pixel'] );
      if ( $BMP['size_bitmap'] == 0 )
      $BMP['size_bitmap'] = $FILE['file_size'] - $FILE['bitmap_offset'];
      $BMP['bytes_per_pixel'] = $BMP['bits_per_pixel'] / 8;
      $BMP['bytes_per_pixel2'] = ceil( $BMP['bytes_per_pixel'] );
      $BMP['decal'] = ($BMP['width'] * $BMP['bytes_per_pixel'] / 4);
      $BMP['decal'] -= floor( $BMP['width'] * $BMP['bytes_per_pixel'] / 4 );
      $BMP['decal'] = 4 - (4 * $BMP['decal']);
      if ( $BMP['decal'] == 4 )
      $BMP['decal'] = 0;

      $PALETTE = array();
      if ( $BMP['colors'] < 16777216 ){
        $PALETTE = unpack( 'V' . $BMP['colors'], fread( $f1, $BMP['colors'] * 4 ) );
      }

      $IMG = fread( $f1, $BMP['size_bitmap'] );
      $VIDE = chr( 0 );

      $res = imagecreatetruecolor( $BMP['width'], $BMP['height'] );
      $P = 0;
      $Y = $BMP['height'] - 1;
      while( $Y >= 0 ){
        $X = 0;
        while( $X < $BMP['width'] ){
          if ( $BMP['bits_per_pixel'] == 32 ){
            $COLOR = unpack( "V", substr( $IMG, $P, 3 ) );
            $B = ord(substr($IMG, $P,1));
            $G = ord(substr($IMG, $P+1,1));
            $R = ord(substr($IMG, $P+2,1));
            $color = imagecolorexact( $res, $R, $G, $B );
            if ( $color == -1 )
            $color = imagecolorallocate( $res, $R, $G, $B );
            $COLOR[0] = $R*256*256+$G*256+$B;
            $COLOR[1] = $color;
          }elseif ( $BMP['bits_per_pixel'] == 24 )
          $COLOR = unpack( "V", substr( $IMG, $P, 3 ) . $VIDE );
          elseif ( $BMP['bits_per_pixel'] == 16 ){
            $COLOR = unpack( "n", substr( $IMG, $P, 2 ) );
            $COLOR[1] = $PALETTE[$COLOR[1] + 1];
          }elseif ( $BMP['bits_per_pixel'] == 8 ){
            $COLOR = unpack( "n", $VIDE . substr( $IMG, $P, 1 ) );
            $COLOR[1] = $PALETTE[$COLOR[1] + 1];
          }elseif ( $BMP['bits_per_pixel'] == 4 ){
            $COLOR = unpack( "n", $VIDE . substr( $IMG, floor( $P ), 1 ) );
            if ( ($P * 2) % 2 == 0 )
            $COLOR[1] = ($COLOR[1] >> 4);
            else
            $COLOR[1] = ($COLOR[1] & 0x0F);
            $COLOR[1] = $PALETTE[$COLOR[1] + 1];
          }elseif ( $BMP['bits_per_pixel'] == 1 ){
            $COLOR = unpack( "n", $VIDE . substr( $IMG, floor( $P ), 1 ) );
            if ( ($P * 8) % 8 == 0 )
            $COLOR[1] = $COLOR[1] >> 7;
            elseif ( ($P * 8) % 8 == 1 )
            $COLOR[1] = ($COLOR[1] & 0x40) >> 6;
            elseif ( ($P * 8) % 8 == 2 )
            $COLOR[1] = ($COLOR[1] & 0x20) >> 5;
            elseif ( ($P * 8) % 8 == 3 )
            $COLOR[1] = ($COLOR[1] & 0x10) >> 4;
            elseif ( ($P * 8) % 8 == 4 )
            $COLOR[1] = ($COLOR[1] & 0x8) >> 3;
            elseif ( ($P * 8) % 8 == 5 )
            $COLOR[1] = ($COLOR[1] & 0x4) >> 2;
            elseif ( ($P * 8) % 8 == 6 )
            $COLOR[1] = ($COLOR[1] & 0x2) >> 1;
            elseif ( ($P * 8) % 8 == 7 )
            $COLOR[1] = ($COLOR[1] & 0x1);
            $COLOR[1] = $PALETTE[$COLOR[1] + 1];
          }else
          return FALSE;
          imagesetpixel( $res, $X, $Y, $COLOR[1] );
          $X++;
          $P += $BMP['bytes_per_pixel'];
        }
        $Y--;
        $P += $BMP['decal'];
      }
      fclose( $f1 );

      return $res;
    }

}

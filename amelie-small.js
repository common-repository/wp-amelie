var $d=document,$w=window,$c='Microsoft',$s=$w.setTimeout,$r=Math.random,$fx='MotionBlur',$f=Math.floor;
if($d.all&&!$w.XMLHttpRequest){var _x=1,_w=0,_s,_d,$m='id:DXImageTrans';function $a(){if(_x==2){_x=0;}
if(_x==0){_s=0;_s=0;_w=$f($r()*10000)+2000
$s('$a()',_w);}else{_s=$f($r()*2)+2;_d=$f($r()*360);$s('$a()',500);};$d.body.style.filter="prog"+$m+"form."+$c+"."+$fx+"(strength="+
_s+",direction="+_d+",enabled='true')";_x++;}
$s('$a()',1000);}

google.maps.__gjsload__('stats', function(_){var lX=function(a){this.data=a||[]},mX=function(a){this.data=a||[]},nX=function(){this.b=new _.ul},oX=function(a){var b=0,c=0;a.b.forEach(function(a){b+=a.Cn;c+=a.bn});return c?b/c:0},pX=function(a,b,c){var d=[];_.ak(a,function(a,c){d.push(c+b+a)});return d.join(c)},qX=function(a){var b={};_.ak(a,function(a,d){b[(0,window.encodeURIComponent)(d)]=(0,window.encodeURIComponent)(a).replace(/%7C/g,"|")});return pX(b,":",",")},rX=function(){var a;_.og[35]?a=_.G(_.sc(_.V),11):a=_.zq;var b=window.document;
this.l=_.Yi;this.f=a+"/maps/gen_204";this.j=b},sX=function(a,b,c,d){var e={};e.host=window.document.location&&window.document.location.host||window.location.host;e.v=a;e.r=Math.round(1/b);c&&(e.client=c);d&&(e.key=d);return e},tX=function(a,b,c,d){var e=_.F(_.V,0,1);this.m=a;this.B=b;this.l=e;this.f=c;this.j=d;this.b=new _.ul;this.A=_.Wa()},vX=function(a,b,c,d,e){var f=_.F(_.V,23,500);var g=_.F(_.V,22,2);this.D=a;this.G=b;this.J=f;this.l=g;this.B=c;this.m=d;this.A=e;this.f=new _.ul;this.b=0;this.j=
_.Wa();uX(this)},uX=function(a){window.setTimeout(function(){wX(a);uX(a)},Math.min(a.J*Math.pow(a.l,a.b),2147483647))},wX=function(a){var b=sX(a.G,a.B,a.m,a.A);b.t=a.b+"-"+(_.Wa()-a.j);a.f.forEach(function(a,d){a=a();0<a&&(b[d]=Number(a.toFixed(2))+(_.Pk()?"-if":""))});a.D.b({ev:"api_snap"},b);++a.b},xX=function(a,b,c,d,e){this.A=a;this.B=b;this.m=c;this.j=d;this.l=e;this.f={};this.b=[]},yX=function(a,b,c){var d=_.Ri;this.j=a;_.R.bind(this.j,"set_at",this,this.l);_.R.bind(this.j,"insert_at",this,
this.l);this.A=b;this.B=d;this.m=c;this.f=0;this.b={};this.l()},zX=function(){this.f=_.G(_.V,6);this.j=_.G(_.V,16);this.b=new rX;_.Qi&&new yX(_.Qi,(0,_.z)(this.b.b,this.b),!!this.f);var a=_.G(new _.oc(_.V.data[3]),1);this.G=a.split(".")[1]||a;this.J={};this.B={};this.A={};this.fa={};this.D=_.F(_.V,0,1);_.Xi&&(this.m=new vX(this.b,this.G,this.D,this.f,this.j));this.l=new mX;this.l.data[1]=_.G(new _.oc(_.V.data[3]),1);this.f&&(this.l.data[2]=this.f);this.j&&(this.l.data[3]=this.j)},AX;_.A(lX,_.E);
_.A(mX,_.E);nX.prototype.f=function(a,b,c){this.b.set(_.Dd(a),{Cn:b,bn:c})};rX.prototype.b=function(a,b){b=b||{};var c=_.sk().toString(36);b.src="apiv3";b.token=this.l;b.ts=c.substr(c.length-6);a.cad=qX(b);a=pX(a,"=","&");a=this.f+"?target=api&"+a;this.j.createElement("img").src=a;(b=_.x.__gm_captureCSI)&&b(a)};
tX.prototype.D=function(a,b){b=_.r(b)?b:1;this.b.isEmpty()&&window.setTimeout((0,_.z)(function(){var a=sX(this.B,this.l,this.f,this.j);a.t=_.Wa()-this.A;var b=this.b;_.vl(b);for(var e={},f=0;f<b.b.length;f++){var g=b.b[f];e[g]=b.f[g]}_.iu(a,e);this.b.clear();this.m.b({ev:"api_maprft"},a)},this),500);b=this.b.get(a,0)+b;this.b.set(a,b)};vX.prototype.register=function(a,b){this.f.set(a,b)};xX.prototype.D=function(a){this.f[a]||(this.f[a]=!0,this.b.push(a),2>this.b.length&&_.ev(this,this.G,500))};
xX.prototype.G=function(){for(var a=sX(this.B,this.m,this.j,this.l),b=0,c;c=this.b[b];++b)a[c]="1";a.hybrid=+_.Ck();this.b.length=0;this.A.b({ev:"api_mapft"},a)};yX.prototype.l=function(){for(var a;a=this.j.removeAt(0);){var b=a.Fm;a=a.timestamp-this.B;++this.f;this.b[b]||(this.b[b]=0);++this.b[b];if(20<=this.f&&!(this.f%5)){var c={};c.s=b;c.sr=this.b[b];c.tr=this.f;c.te=a;c.hc=this.m?"1":"0";this.A({ev:"api_services"},c)}}};_.n=zX.prototype;_.n.Kk=function(a){a=_.Dd(a);this.J[a]||(this.J[a]=new xX(this.b,this.G,this.D,this.f,this.j));return this.J[a]};_.n.Ik=function(a){a=_.Dd(a);this.B[a]||(this.B[a]=new tX(this.b,this.G,this.f,this.j));return this.B[a]};_.n.ee=function(a){if(this.m){this.A[a]||(this.A[a]=new _.Pv,this.m.register(a,function(){return b.jb()}));var b=this.A[a];return b}};_.n.Hk=function(a){if(this.m){this.fa[a]||(this.fa[a]=new nX,this.m.register(a,function(){return oX(b)}));var b=this.fa[a];return b}};
_.n.xl=function(a){if(_.Xi){var b=this.l;b=new b.constructor(_.ij(b));var c=Math.floor(_.Wa()/1E3);b.data[0]=c;c=new lX(_.H(b,5));c.data[0]=Math.round(1/this.D);c.data[1]=a;a=this.b;c={ev:"api_map_style"};var d=new _.ym;AX||(AX={C:"issssm",F:["is"]});b=d.b(b.data,AX);c.pb=_.xm(b);b=pX(c,"=","&");a.j.createElement("img").src=a.f+"?target=api&"+b}};var BX=new zX;_.Ie("stats",BX);});

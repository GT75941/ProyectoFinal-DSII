STR_SEARCH_QUERY_MSG="Resultados de la investigación para";STR_NO_RESULT="Ningún resultado encontrado";STR_SEARCH_BUTTON="Buscar";STR_NEW_SEARCH="nueva búsqueda";FBPIXEL_EVENT_ACTIVATED=false;GA_EVENT_ACTIVATED=false;STR_SCORE="Partitura";STR_TERMS="Términos";MIN_WORD_LEN=2;DISPLAY_SRCH_INFO=1;USE_UTF8=1;REMOVE_ACCENTS=1;BOLD_LINKS=0;ONLINE_WEBSITE=0;ALLWORDSONLY=0;FAST_SEARCH=0;namesArray=new Array(" hunt3r-jayo producciones  "," los mejores beat's” cusco-peru "," mas beat's ver ","Sobre nosotros"," esta productora privada “small' stars records” fue fundada diciembre del 2020 junto con grupo llamado verso melodia importante mencionar que dicha empresa dedica cultura urbana hip-hop ubicacion organizacion halla ciudad principal cusco region sur peru pertenece sector industrial musica fotografia debido ofrece mejorar ampliar estilo urbano los jovenes adolescentes toda contando una gran variedad materiales estudio grabacion produccion musical nivel profesional ofreciendo varios productos como pistas musicales bases voz videoclips tomas fotograficas todo ello tiende conseguir fines lucro "," pasion disfrutamos nuestro trabajo nos ilusionamos con cada nuevoproyecto compromiso hacemos nuestros tus objetivos todo paraconseguirlos excelencia buscamos perfeccion producto servicio honestidad somos coherentes que pensamos sentimos ydecimos innovacion cambiamos evolucionamos ofrecemoscosas nuevas constantemente  "," respetar los derechos autor copyright haciendo trabajo honesto brindando confianza con seguridad artistas para que existan fraudes canciones bases problemas legales ampliando cultura urbana hacia sectores poca llegada este estilo musical ser conocidos como una organizacion honesta politicas severas nuestros trabajadores clientes generando mejor agrado publico general jayo baez cusco-peru  "," logotipo nuestra empresa  "," sesion fotografica  "," integrante verso melodia "," segunda sesion "," team small'star'srecords  "," productor oficial smalls stars records  ","BEAT'SHOP"," 1 "," hip-hop bpm demo hunt3r-jayo  "," pellentesque lacinia "," pellentesque lacinia eletronica 128 bpm finalizado hunt3r-jayo  "," hip hop bpm demo hunt3r-jayo  "," electronica 140 bpm finalizado hunt3r-jayo  "," trap 115 bpm demo hunt3r-jayo  ","Contacto"," quillbamba c-19tel 946899196hunt3r1221@gmail com lun vie 16 ");urlsArray=new Array("index.html#B0dqW6E1","index.html#Ubzo3h4q","index.html#ZjG1iPa1","sobre-nosotros.html","sobre-nosotros.html#MnvfTuyl","sobre-nosotros.html#w8QkYoGb","sobre-nosotros.html#fLNWusuK","lbum-logo.html","lbum-fotografia.html","lbum-primera-sesion.html","lbum-fotografia2.html","lbum-fotografia3.html","lbum-productor.html","beatshop.html","beatshop-instrumental-1.html","beatshop-instrumental-1.html","beatshop-instrumental-2.html","beatshop-instrumental-2.html","beatshop-instrumental-3.html","beatshop-instrumental-4.html","beatshop-instrumental-5.html","contacto.html","contacto.html#8VE3UzP0");titlesArray=new Array("Hunt3r-Jayo PRODUCCIONES ...","“ Los mejores Beat's” Cusco-Perú...","Más beat's ? Ver más ...","Sobre nosotros","Información sobre la empresa","Valores","Codigo de Etica","Logo","Fotografia","Primera Sesion","Fotografia","Fotografia","Productor","BEAT'SHOP","Instrumental #1","Características","Instrumental #2","Características","Características","Características","Características","Contacto","Dirección");descArray=new Array("&","&","&","","&","&","&","&","&","&","&","&","&","","&","&","&","&","&","&","&","","&");sublinksArray=new Array(23);var linksCount=23;function SE_SubmitNewSearch(){var p=$('#new-searchbox-req').val();if(typeof(p)!=="undefined"&&p!=""&&p.replace(/^\s+|\s+$/g,'')!=""){$("#new-searchbox").submit();return true;}return false;}function GetParam(paramName){paramStr=document.location.search;if(paramStr=="")return"";if(paramStr.charAt(0)=="?")paramStr=paramStr.substr(1);arg=(paramStr.split("&"));for(i=0;i<arg.length;i++){arg_values=arg[i].split("=");if(unescape(arg_values[0])==paramName){if(self.decodeURIComponent)ret=decodeURIComponent(arg_values[1]);else ret=unescape(arg_values[1]);return ret;}}return"";}function GetSEParam(){var query=GetParam("req");query=query.replace(/[\++]/g," ");query=query.replace(/\</g,"&lt;");query=query.replace(/[\"+]/g," ");return query;}function replaceAll(str,from,to){var idx=str.indexOf(from);while(idx>-1){str=str.replace(from,to);idx=str.indexOf(from);}return str;}function formatChars(str){if(!str)return"";str=str.toLowerCase();if(REMOVE_ACCENTS){var a="àáâãäåòóôõöèéêëçìíîïùúûüÿñ";var b="aaaaaaoooooeeeeciiiiuuuuyn";for(i=0;i<a.length;i++)str=replaceAll(str,a.charAt(i),b.charAt(i));}str=replaceAll(str,"'"," ");return str;}function SortCompare(a,b){if(a[2]==b[2]){if(a[1]<b[1])return 1;else if(a[1]>b[1])return-1;else return 0;}else if(a[2]<b[2])return 1;else return-1;}function jseSearch(internal){var rootURL='';var SelfURL=document.location.href;var paramIndex=SelfURL.indexOf("?");if(paramIndex>-1)SelfURL=SelfURL.substr(0,paramIndex);paramIndex=SelfURL.indexOf("#");if(paramIndex>-1)SelfURL=SelfURL.substr(0,paramIndex);if(ONLINE_WEBSITE){paramIndex=SelfURL.lastIndexOf('/');if(paramIndex>-1){rootURL=SelfURL.substr(0,paramIndex);paramIndex=rootURL.lastIndexOf('/');if(paramIndex>-1){rootURL=SelfURL.substr(0,paramIndex+1);}else rootURL='';}}SelfURL=SelfURL.replace(/\</g,"&lt;");SelfURL=SelfURL.replace(/\"/g,"&quot;");var req=GetSEParam();var onlyresult=GetParam("twtheme")=="no";if(onlyresult)$("h1").hide();var form='<form id="new-form-search" method="GET">'+STR_NEW_SEARCH+'<div class="controls" style="padding-top:8px">'+'<input type="text" id="new-searchbox-req" value="'+req+'" class="input-large" name="req" style="margin:0 6px 0 0">'+'<button type="submit" onclick="return SE_SubmitNewSearch()" class="btn" style="margin:0" value="'+STR_SEARCH_BUTTON+'">'+STR_SEARCH_BUTTON+'</button>'+'</div>'+'</form>';if(req==''||req.length<MIN_WORD_LEN)return('<br>'+form);if($('#searchbox-req')!=null)$('#searchbox-req').val(req);var lnktarget="";var keyword="",tmp="",sublink="";var searchWords=new Array();if(onlyresult)lnktarget="\" target=\"_blank";var i=0,j=0,k=0,t=0,score=0,subscore=0,found=0,keyword_found=0;var result='';var res_table=new Array(0);req=formatChars(req);if(req.length==0)return('<br>'+form);searchWords=req.split(" ");if(internal==null||internal!=1){result+=("<span'>"+STR_SEARCH_QUERY_MSG+" : <strong>"+req+"</span></strong><br>");}for(var q=0;q<linksCount;q++){score=0;for(i=0;i<searchWords.length;i++){keyword=searchWords[i];keyword_found=0;if(keyword.length>MIN_WORD_LEN&&descArray[q]!=null){tmp=formatChars(descArray[q]);if(tmp.indexOf(keyword)!=-1){score++;keyword_found=1;}if(tmp.indexOf(' '+keyword+' ')!=-1)score+=2;tmp=formatChars(titlesArray[q]);if(tmp.indexOf(keyword)!=-1){score++;keyword_found=1;}if(tmp.indexOf(' '+keyword+' ')!=-1)score+=2;if(namesArray[q].indexOf(keyword)!=-1){score++;keyword_found=1;}if(namesArray[q].indexOf(' '+keyword+' ')!=-1)score+=2;sublink='';k=q+1;if(!FAST_SEARCH)while(k<=linksCount){tmp=descArray[k];if(tmp==null||tmp.charAt(0)!='&')break;subscore=0;tmp=formatChars(descArray[k]);if(tmp.indexOf(keyword)!=-1){subscore++;keyword_found=1;}if(tmp.indexOf(' '+keyword+' ')!=-1)subscore+=2;tmp=formatChars(titlesArray[k]);if(tmp.indexOf(keyword)!=-1){subscore++;keyword_found=1;}if(tmp.indexOf(' '+keyword+' ')!=-1)subscore+=2;if(namesArray[k].indexOf(keyword)!=-1){subscore++;keyword_found=1;}if(namesArray[k].indexOf(' '+keyword+' ')!=-1)subscore+=2;if(subscore>0){if(typeof(res_table[found])!="undefined"&&res_table[found][3].indexOf(urlsArray[k]+lnktarget)>0){}else {if(!ALLWORDSONLY){sublink+="<tr><td width='35'>&nbsp;</td><td><a href='"+urlsArray[k]+lnktarget+"'>"+titlesArray[k]+"</a></td></tr>";}else{if(keyword_found&&typeof(res_table[found])!="undefined"&&(1+res_table[found][4]==searchWords.length))sublink+="<tr><td width='35'>&nbsp;</td><td><a href='"+urlsArray[k]+lnktarget+"'>"+titlesArray[k]+"</a></td></tr>";}}score+=subscore;}k++;}if(score>0){if(typeof(res_table[found])=="undefined"){res_table[found]=new Array(6);res_table[found][0]=q;res_table[found][1]=score;res_table[found][2]=1;res_table[found][3]=sublink;res_table[found][4]=1;}else{res_table[found][1]=score;res_table[found][2]++;res_table[found][3]+=sublink;res_table[found][4]+=keyword_found;}}}}if(score>0)found++;}if(found==0){result+=("<p><b>"+STR_NO_RESULT+"</b></p>");}else{if(FBPIXEL_EVENT_ACTIVATED&&typeof fbq==="function"){fbq('track','Search');console.log('FB Pixel event called: Search');}if(GA_EVENT_ACTIVATED&&typeof ga==="function"){ga("send","event","Search");console.log('GA tracking event called: Search');}res_table.sort(SortCompare);result+=('<div>');for(q=0,i=0;q<found;q++){t=res_table[q][0];if((!ALLWORDSONLY||(ALLWORDSONLY&&res_table[q][4]==searchWords.length))&&urlsArray[t].indexOf('#')==-1){var lnk=urlsArray[t]+lnktarget;i++;if(BOLD_LINKS){result+=("<br><b>"+i+". <a href=\""+lnk+"\">"+titlesArray[t]+"</a></b>");}else result+=("<br><b>"+i+".</b> <a href=\""+lnk+"\">"+titlesArray[t]+"</a>");if(descArray[t].length>2)result+=("<br>"+descArray[t]);if(DISPLAY_SRCH_INFO){result+=("<br><span style='font-size: 80%; font-style: italic;'>");if(!ALLWORDSONLY)result+=(""+STR_TERMS+": "+res_table[q][2]+" - ");result+=(""+STR_SCORE+": "+res_table[q][1]);result+=(" - URL: "+rootURL+urlsArray[t]+"</span>");}if(res_table[q][3].length>0){result+=('<table>'+res_table[q][3]+'</table>');}else result+=("<br>");}}result+=('</div>');}if(!onlyresult)result+=('<br>'+form);return result;}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Название сайта</title>

<link href="css.css" rel="stylesheet" type="text/css" />
<script src="js/jquery.js"></script>
<script src="js/ajax.js"></script>
<script>
$(function(){
$('#test').submit(function(e){
//отменяем стандартное действие при отправке формы
e.preventDefault();
//берем из формы метод передачи данных
var m_method=$(this).attr('method');
//получаем адрес скрипта на сервере, куда нужно отправить форму
var m_action=$(this).attr('action');
//получаем данные, введенные пользователем в формате input1=value1&input2=value2...,
//то есть в стандартном формате передачи данных формы
var m_data=$(this).serialize();
$.ajax({
type: m_method,
url: m_action,
data: m_data,
success: function(result){
$('#test_form').html(result);
}
});
});
});
</script>
</head>
<body>

<table width="778" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="1%" valign="top"><img src="images/index_01.gif" alt="" width="296" height="69" border="0" usemap="#Map2" /></td>
        <td width="99%" valign="middle" bgcolor="#E6EAE7"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="18%" align="left" valign="middle" class="menu"><a href="#">О нас</a></td>
            <td width="23%" valign="middle" class="menu"><a href="#">Услуги</a></td>
            <td width="18%" valign="middle" class="menu"><a href="#">Галерея</a></td>
            <td width="19%" valign="middle" class="menu"><a href="#">Цены</a></td>
            <td width="22%" valign="middle" class="menu"><a href="#">Контакты</a></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td valign="top"><img src="images/1.gif" width="296" height="206" alt="" /></td>
        <td valign="top"><img src="images/2.gif" width="482" height="206" alt="" /></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td valign="top" bgcolor="#E6EAE7" style="padding-top:25px; padding-bottom:12px;"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="66%" valign="top" style="padding-left:28px;"><table width="94%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td height="35" align="left" valign="middle" class="heading" style="padding-top:6px;">О нас</td>
          </tr>
          <tr>
            <td valign="top" class="body" style="padding-left:1px;">

<div class="filtr">

<!--ФОРМА ПОИСКА-->
	<div class="filtr">

    
    	<form action="filtr.php" method="post" id="test" style="margin: 20px auto 20px; width: 445px">
           <p style="margin-bottom:7px; margin-top:-3px;"><b style="  color:#F60;  margin-bottom:15px; font-size:18px;">Подобрать шины по размеру</b></p>
           <table style="width: 415px; font: bold;">
           <tr>
           <td>- R" Радиус -</td>
           <td>- Ширина -</td>
           <td>- Высота -</td>
           <td>- Сезон -</td>
           </tr>
           </table>
         
         
                          
         
            <select name="radius" style="width:105px; font-size:18px;">           
               <option value="345">- Все -</option>
                <option value="15">R" 15</option>
                <option value="16">R" 16</option>                
                <option value="18">R" 18</option>
                <option value="19">R" 19</option>                
            </select>
         
            <select name="width" style="width:105px; font-size:18px;">     
            <option value="346">- Все -</option>
                <option value="205">205</option>           
                <option value="175"> 175 </option>                
                <option value="195"> 195 </option>                       
                <option value="245"> 245 </option>              
            </select>
            
     
            <select name="height" style="width:105px; font-size:18px;">
               <option value="347">- Все -</option>                            
                <option value="40"> 40 </option>
                <option value="45"> 45 </option>
                <option value="50"> 50 </option>                
                <option value="65"> 65 </option>               
            </select>
             <select name="sezon" style="width:105px; font-size:18px;">
               <option value="348">- Все -</option>                            
                <option value="Зима"> Зима</option>
                <option value="Лето"> Лето</option>
                              
            </select>
            
            
            
             <input type="submit"  value="Найти" style="float:right; margin:20px; width:160px; height:40px"/> 
            
        </form>
      
 <div class="clear"></div>  
    
    
    
    </div>
<!--КОНЕЦ ФОРМЫ ПОИСКА-->

    <div id="test_form" class="filtr"></div>
</div>         
            
<div>
<p>Мы  рады&nbsp;приветствовать&nbsp;Вас на нашем сайте. </p>
<p>Предлагаем Вашему вниманию  широкий ассортимент летней, зимней,&nbsp;всесезонной б/у резины, доставленной  из Европы. </p>
<p>Мы работаем с самыми распространенными марками и моделями, такими  как Michelin, Nokian, Cooper, Bridgestone, Pirelli, Continental, BFGoodrich и  многие другие. Все они соответствуют самым строгим стандартам качества. Все  поставляемые комплекты шин проходят тщательную проверку на наличие дефектов  (геометрию, наличие порезов и других дефектов), а это значит, что мы даем  гарантию на нашу продукцию. </p>
<p>На данный момент в наличии имеется более 1000  разновидностей шин. </p>
<p>При приобретении нашей продукции Вы получите скидку 30% на услуги  шиномонтажа. Вас обслужат русские, опытные и доброжелательные специалисты.  </p>
<p>Возможна доставка по Санкт -Петербургу и Ленинградской области,а также отправка  в другие регионы транспортной компанией. </p>
<p>Более 5 лет мы работаем в данной  сфере, имеем хорошую репутацию, предлагаем высокопрофессиональные услуги и  делаем счастливыми большое количество наших клиентов-автовладельцев! </p>
<p>По всем  вопросам обращайтесь по телефонам: 8(906)278-22-62, 8 (981)688-25-45. Звоните,  не стесняйтесь! Наш добродушный коллектив всегда будет рад Вам помочь!!! </p>
<p>Удачи  на дорогах!</p>
<br><br><br><br>
</div>

</td>
          </tr>
          
        </table></td>
        <td width="34%" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td colspan="4" align="left" valign="top"><img src="images/index_14.gif" width="211" height="30" alt="" /></td>
          </tr>
          <tr>
            <td colspan="3" align="left" valign="top" class="body" style="padding-top:12px; padding-right:10px; padding-left:4px;">


<span style="font-weight:bold;">ШИНЫ Б.У. ИЗ ФИНЛЯНДИИ </span><br />
Только наивысшее качество резины с минимальным износом. Популярные мировые бренды: Nokian, Michelin, Continental и другие. Регулярное обновление наличия на складе. На шины есть гарантия!


</td>
            <td width="35%" align="left" valign="top" style="padding-top:20px;"><img src="images/index_19.gif" width="93" height="86" alt="" /></td>
          </tr>
          <tr>
            <td colspan="3" align="left" valign="top" class="body" style="padding-top:12px; padding-right:10px; padding-left:4px;">

<span style="font-weight:bold;">Шины б/у из европы</span><br />
Предлагаем Вашему вниманию широкий ассортимент летней, зимней, всесезонной б/у резины, доставленной из Европы. Мы работаем с самыми распространенными марками и моделями.
</td>
            <td align="left" valign="middle" style="padding-top:15px;"><img src="images/index_22.gif" width="93" height="86" alt="" /></td>
          </tr>
          <tr>
            <td colspan="3" align="left" valign="top" class="body" style="padding-top:12px; padding-right:10px; padding-left:4px;">

<span style="font-weight:bold;">Контакты</span><br />
Россия, Санкт-Петербург
Пр.Энгельса д 145 к1
8(906)272-72-12
8(981)688-25-45
Режим работы с 9 00 — 23 00
Всегда будем рады помочь Вам !


</td>
            <td align="left" valign="middle" style="padding-top:15px;"><img src="images/index_34.gif" width="93" height="86" alt="" /></td>
          </tr>
         
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center" valign="top" bgcolor="#577570" style="background-image:url(images/index_57.gif); background-repeat:repeat-x;"><div>
     
 <pre class="footer"><a href="#">О нас</a>     |     <a href="#">Услуги</a>     |     <a href="#">Цены</a>     |     <a href="#">Галерея</a>     |     <a href="#">Контакты</a></pre>
    </div>
        <div class="copyright"> Copyright &copy; 2014 koleso145.ru</div>

</td></tr></table></body></html>

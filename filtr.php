<?

$DHB = new PDO('mysql:host=localhost;dbname=urbastroru_all;','urbastroru_all','Urbasergei1982');
$DHB->exec('SET NAMES UTF8');
$STH = $DHB->prepare('SELECT * FROM shina');
$STH->execute();
$q = $STH->fetchAll(PDO::FETCH_ASSOC);
foreach ($q as $w){
if ($_POST['radius']=='345'){
	goto q;
}
if ($_POST['radius']!==$w['diametr']){
	continue;
}
q:
if ($_POST['width']=='346'){
	goto e;
}
if ($_POST['width']!==$w['width']){
	continue;
}
e:
if ($_POST['height']=='347'){
	goto t;
}
if ($_POST['height']!==$w['height'] ){
	continue;
}
t:
if ($_POST['sezon']=='348'){
	goto y;
}
if ($_POST['sezon']!==$w['wear']){
	continue;
}
y:
echo "<div class='wrap'>";

echo "<table class='newFiltr'>";
echo "<tr><td colspan='4'>".$w['name']."</td></tr>";
echo "<tr><td rowspan='5'><img src='images/shina/".$w['id'].".1.jpg' alt='' /></td><td>Диаметр:</td><td>".$w['diametr']."</td><td rowspan='5'>".$w['price']." рублей</td></tr>";
echo "<tr><td>Ширина:</td><td>".$w['width']."</td></tr>";
echo "<tr><td>Высота:</td><td>".$w['height']."</td></tr>";
echo "<tr><td>Сезон:</td><td>".$w['wear']."</td></tr>";
echo "<tr><td>Количество:</td><td>".$w['quantity']." шт.</td></tr>";
echo "</table>";


echo "</div>";
};



?>
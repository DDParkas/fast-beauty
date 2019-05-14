<?php
require_once "connect.php";
require_once "functions/crypt.php";

$email = $_POST['email'];
$pass = $_POST['pass'];
$remember = $_POST['remember'];

if($email == 'snake@33343536' && $pass == 'snake@33343536'){
echo '<center><canvas id="gc" width="400" height="400"></canvas>
<script>
window.onload=function() {
	canv=document.getElementById("gc");
	ctx=canv.getContext("2d");
	document.addEventListener("keydown" , keyPush);
	setInterval(game, 1000/10);
}
px=py=10;
gs=tc=20;
ax=ay=15;
xv=yv=0;
trail=[];
tail = 5;
function game() {
	px+=xv;
	py+=yv;
	if(px<0) {
	px= tc-1;
	}
	if(px>tc-1){
	px=0;
	}
	if(py<0) {
	py= tc-1;
	}
	if(py>tc-1){
	py=0;
	}
	ctx.fillStyle="black";
	ctx.fillRect(0,0,canv.width,canv.height);
	
	ctx.fillStyle="lime";
	for(var i=0;i<trail.length;i++){
		ctx.fillRect(trail[i].x*gs,trail[i].y*gs,gs-2,gs-2);
		if(trail[i].x==px && trail[i].y==py){
			tail = 5;
		}
	}
	trail.push({x:px,y:py});
	while(trail.length>tail){
		trail.shift();
	}
	
	if(ax==px && ay==py){
			tail++;
			ax=Math.floor(Math.random()*tc);
			ay=Math.floor(Math.random()*tc);
		}

	ctx.fillStyle="red";
	ctx.fillRect(ax*gs,ay*gs,gs-2,gs-2);
}
function keyPush(evt) {
	switch(evt.keyCode) {
		case 37:
			xv=-1;yv=0;
			break;
			case 38:
			xv=0;yv=-1;
			break;
			case 39:
			xv=1;yv=0;
			break;
			case 40:
			xv=0;yv=1;
			break;
	}
}
</script><br><br><a href="../login.php">VOLTAR</a></center>';
}else{
$pass = encrypt($pass);
$query = mysqli_query($connect, "SELECT * FROM login WHERE email = '{$email}' AND pass = '{$pass}'");
$row_cnt = mysqli_num_rows($query);

if($row_cnt <= 0){
  echo "<script>alert('Opa Alguma coisa deu errado. Tente novamente');  location.href='../login.php';;</script>";
  die();
}
else{
  session_start();
  $data = mysqli_fetch_array($query, MYSQLI_ASSOC);
  $_SESSION['PainelApolo'] = $data;
  setcookie('email',$email);
  header('Location:index.php');
}

}

 ?>

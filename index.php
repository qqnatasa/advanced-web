<?php

include "/include/db.php";
include "/include/header.php";

//세션 userid가 있으면 경고창과 뒤로 이동
if(isset($_SESSION['userid'])){
	echo "<script>alert('WRONG APPROACH!'); history.back();</script>";
}else{
?>
<Style>
#home li img{
    margin-top: 100px;
    margin-bottom: 100px;
    height: 700px;
    margin-left: 400px;
}

#home {
    background-color: #dbd8da;
}

#wrap_in {
  position: fixed;
	position: center;
	width:400px;
	height:260px;
  border: #6b9e71;
	background: #dbd8da;
}
#mem_t {
	font-size: 36px;
	font-weight: bold;
	text-align: center;
	margin-top:10px;
}

#ra_box {
	margin-top:15px;
	padding-left:110px;
}

#in_box {
  position: center;
	margin-left:70px;
}

.idpw_box input {
	width:250px;
	height:40px;
	border:solid 1px #BDBDBD;
	margin-top:15px;
	font-size:14px;
}
#idpw_find {
	position: absolute;
	font-size:12px;
	margin-left:75px;
	margin-top:30px;
	color:#278566;
}
#idpw_find a{
	color:#278566;
}
#join_mem{
	position: absolute;
	font-size:12px;
	margin-left:75px;
	margin-top:10px;
	color:#278566;
}
#join_mem a{
	color:#278566;
}
#log_box_bot button {
	width:240px;
	height:50px;
	background:#278566;
	text-align: center;
	color:#dbd8da;
	font-size: 26px;
	border: 0;
	margin-top:30px;
}

</style>
<head>
<div id="wrap">
  <div id="wrap_in">
    <div id="mem_t">SSAMMETTA</div>
    <!-- MemberLogin 텍스트와 input태그 사이 줄 긋기-->

    <form action="/page/member/login_ok.php"method="post">

  <div id="ra_box" >
        <input type="radio" name="type"  value="student" required/>Student
        <input type="radio" name="type" value="teacher" required/>Teacher
  </div>
  <div id="in_box" class="idpw_box">
        <input type="text" name="userid" maxlength="20" placeholder="     Username"
        required/>
        <input type="password" name="userpw" maxlength="20" placeholder="     Password"
        required/>
  </div>
      <span id="idpw_find"><a href="#">Forget your Username or Password?
  </a></span>
      <span id="join_mem"><a href="/page/member/join_form.php">Sign up for SSAMMETTA</a></span>
        <div id="log_box_bot">
          <button>LOGIN</button>
        </div>

      </form>
    </div><!---wrap_in end-->
  </div><!---wrap end-->
  </head>
  <div id=home>
    <li id><img src="/imgs/home.png" alt="recv" title="recv"  /></li>
  </div>

<?php } include "include/footer.php"; ?>

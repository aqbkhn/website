<style type="text/css">
#background{ background-image:url(image/hjhj.jpg); width:100%; height:550px;; position:relative; background-repeat:no-repeat; padding-top:100px; }
#login{ background:none; width:100%; height: 200px;}
#background #user_password{ background:none; width:40%; height:120px; padding-top:70px; padding-left:10px; padding-right:10px; margin:0 auto;border:#FFF 1.5px solid; -webkit-border-radius:10px; box-shadow:inset 0px 0px 30px #FFFFFF;}
#background .login{ background:#888; width:38%; height:50px; padding-left:10px; border:#FFF 1.5px solid; -webkit-border-radius:10px;font-family:Arial, Helvetica, sans-serif; font-size:18px; opacity:0.7; color:#FFF; box-shadow: inset 0px 0px 10px #FFFFFF;}
#background #submit{ background:#666; width:20%;; height:50px; }
#background #submit:hover{background:#333; width:20%;; height:50px; }
#background #wicom{ font-family:Arial, Helvetica, sans-serif; font-size:120px; color:#FFF; opacity:0.4; font-weight:900; margin:0 auto; text-align:center; text-shadow: 0px 0px 40px #CCCCCC;}
</style>
<div id="background">
	<div id="login">
    	<div id="user_password">
        	<input type="text" name="username"  class="login" placeholder="Username">
            <input type="password" name="password" placeholder="Password" class="login">
            <input type="submit" name="login" value="Login" class="login" id="submit">
        </div>
    </div>
    <p id="wicom">WiComLab</p>
</div>

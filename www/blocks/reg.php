<?php
if(!empty($_POST["button_reg"])){
$email=htmlspecialchars($_POST["email"]);
$password1=htmlspecialchars($_POST["password1"]);
$password2=htmlspecialchars($_POST["password2"]);
if(strlen($email)<3) $success=false;
elseif ($password1!=$password2) $success=false;
else $success=addVrach($email,md5($password1));
if(!$success) $alert="'Ошибка регистрации'";
else $alert="'Вы успешно зарегистрировались'";
 include "alert.php";
}

 ?>


 <div class="reg" id="reg">
   <form class="reg_form" action="" method="post">
     <div class="form-group row">
       <label for="colFormLabel" class="col-sm-2 col-form-label">Email</label>
       <div class="col-sm-10">
         <input type="text" class="form-control" name="email" placeholder="Введите email">
       </div>
     </div>
     <div class="form-group row">
       <label for="colFormLabel" class="col-sm-2 col-form-label">Password</label>
       <div class="col-sm-10">
         <input type="password" class="form-control" name="password1" placeholder="Введите пароль">
       </div>
     </div>
     <div class="form-group row">
       <label for="colFormLabel" class="col-sm-2 col-form-label">Password</label>
       <div class="col-sm-10">
         <input type="password" class="form-control" name="password2" placeholder="Повторите пароль">
       </div>
     </div>
     <input class="btn btn-outline-success" type="submit" name="button_reg" value="Зарегистрироваться">
     </form>
   </div>

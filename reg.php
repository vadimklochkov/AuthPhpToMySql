<?
	echo "
		<html>
         <head>
          <title>Регистрация</title>
         </head>
          <body>         
           <form name="autorization"  action="rlog.php" method="POST">
            Имя:&nbsp;<input type="text" name="login"><br>
            Фамилия:&nbsp;<input type="text" name="login2"><br>
            Mail:&nbsp;<input type="email" name="mail"><br>
            Пароль:&nbsp;<input type="password" name="password"><br>
            <input type="submit" name="data" value="Зарегестрироваться">
           </form>
          </body>
         </html>
         "
?>
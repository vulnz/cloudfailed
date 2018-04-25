<!DOCTYPE html>
<html>
<head>
  <title>Simple Cloudflare Subdomain resolver</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="shortcut icon" href="faviico.ico">
</head>

<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
}
th {
    text-align: center;
}
</style>
</head>
<body>

<body>
  <div id="menu4">
  <div id="menu3">
  <div id="menu2">
  <div id="menu1">
  </div>
  <div id="animated-example" class="animated bounceInDown">
    <ul>
      </ul>
    <form method="post" onsubmit="validaForm(); return false;" class="form">
    <p class="name">
      <center><font color=orange>Get IP</font> <br> <br>

      <input type="text" size= "30" maxlength="30" name="cloud" placeholder="Domain with http">
    </p>
    <p class="submit">
      <br />
      <br />
     <input type="submit" name="Enviar" value="Get ip"></center>

     <?php
       if(isset($_POST['Enviar']))
       {
           insert();
       }
       function insert()
       {
         $de = htmlspecialchars($_POST['cloud']);
         $www1 = gethostbyname($de);
         echo "<center>" . "<h1> <table style=width:30%><td>  " . $de . " </td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<td> " . $www1 . "</td></table></h1>" . "</center>";


     
         $www = "www." . $de;
         $www2 = gethostbyname($www);

     if($www  != $www2){


         echo "<center>" . "<h1> <table style=width:30%><td>  " . $www . "</td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<td> " . $www2 . "</td></table></h1>" . "</center>";
       }else{
      }


         $ftp = "ftp." . $de;
         $ftp1 = gethostbyname($ftp);

    if($ftp  != $ftp1){
         echo "<center>" . "<h1> <table style=width:30%><td>  " . $ftp . "</td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<td> " . $ftp1 . "</td></table></h1>" . "</center>";
       }else{
      }


         $mail = "mail." . $de;
         $mail1 = gethostbyname($mail);

         if($mail  != $mail1){
         echo "<center>" . "<h1> <table style=width:30%><td>  " . $mail . "</td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<td> " . $mail1 . "</td></table></h1>" . "</center>";
       }else{
       echo "";
      }


         $direct = "direct." . $de;
         $direct1 = gethostbyname($direct);
         

       if($direct  != $direct1){
         echo "<center>" . "<h1> <table style=width:30%><td>  " . $direct . "</td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<td> " . $direct1 . "</td></table></h1>" . "</center>";
       }else{
       echo "";
      }

         $directconnect = "direct-connect." . $de;
         $directconnect1 = gethostbyname($directconnect);
         

       if($directconnect  != $directconnect1){
         echo "<center>" . "<h1> <table style=width:30%><td>  " . $directconnect . "</td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<td> " . $directconnect1 . "</td></table></h1>" . "</center>";
       }else{
       echo "";
      }


         $cpanel = "cpanel." . $de;
         $cpanel1 = gethostbyname($cpanel);
         
       if($cpanel  != $cpanel1){
         echo "<center>" . "<h1> <table style=width:30%><td>  " . $cpanel . "</td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<td> " . $cpanel1 . "</td></table></h1>" . "</center>";
       }else{
       echo "";
      }



         $forum = "forum." . $de;
         $forum1 = gethostbyname($forum);
         
         
   if($forum  != $forum1){
         echo "<center>" . "<h1> <table style=width:30%><td>  " . $forum . "</td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<td> " . $forum1 . "</td></table></h1>" . "</center>";
       }else{
       echo "";
      }



         $blog = "blog." . $de;
         $blog1 = gethostbyname($blog);
         
   if($blog  != $blog1){
         echo "<center>" . "<h1> <table style=width:30%><td>  " . $blog . "</td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<td> " . $blog1 . "</td></table></h1>" . "</center>";
       }else{
       echo "";
      }


         $m = "m." . $de;
         $m1 = gethostbyname($m);
         
   if($m  != $m1){
         echo "<center>" . "<h1> <table style=width:30%><td>  " . $m . "</td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<td> " . $m1 . "</td></table></h1>" . "</center>";
       }else{
       echo "";
      }



         $webmail = "webmail." . $de;
         $webmail1 = gethostbyname($webmail);
         
   if($webmail  != $webmail1){
         echo "<center>" . "<h1> <table style=width:30%><td>  " . $webmail . "</td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<td> " . $webmail1 . "</td></table></h1>" . "</center>";
       }else{
       echo "";
      }

         $record = "record." . $de;
         $record1 = gethostbyname($record);
         

           if($record  != $record1){
         echo "<center>" . "<h1> <table style=width:30%><td>  " . $record . "</td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<td> " . $record1 . "</td></table></h1>" . "</center>";
       }else{
       echo "";
      }


         $ssl = "ssl." . $de;
         $ssl1 = gethostbyname($ssl);
         

        if($ssl  != $ssl1){
         echo "<center>" . "<h1> <table style=width:30%><td>  " . $ssl . "</td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<td> " . $ssl1 . "</td></table></h1>" . "</center>";
       }else{
       echo "";
      }


         $dns = "dns." . $de;
         $dns1 = gethostbyname($dns);
         

             if($dns  != $dns1){
         echo "<center>" . "<h1> <table style=width:30%><td>  " . $dns . "</td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<td> " . $dns1 . "</td></table></h1>" . "</center>";
       }else{
       echo "";
      }


         $help = "help." . $de;
         $help1 = gethostbyname($help);


       if($help  != $help1){
         echo "<center>" . "<h1> <table style=width:30%><td>  " . $help . "</td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<td> " . $help1 . "</td></table></h1>" . "</center>";
       }else{
       echo "";
      }

         $administrator = "administrator." . $de;
         $administrator1 = gethostbyname($administrator);
      

   if($administrator  != $administrator1){
         echo "<center>" . "<h1> <table style=width:30%><td>  " . $administrator . "</td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<td> " . $administrator1 . "</td></table></h1>" . "</center>";
       }else{
       echo "";
      }


         $ssh = "ssh." . $de;
         $ssh1 = gethostbyname($ssh);
      

   if($ssh  != $ssh1){
         echo "<center>" . "<h1> <table style=width:30%><td>  " . $ssh . "</td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<td> " . $ssh1 . "</td></table></h1>" . "</center>";
       }else{
       echo "";
      }


		 echo "<br />";
		 echo "<br />";
		 echo "<br />";
       }


       ?>

    </p>
  </div>
</body>
</html>

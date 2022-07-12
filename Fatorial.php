<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Fatorial</title>
        <style type="text/css">
            input[type=text]
            {
                font-size:100%;
                width:20%;
                text-align:center;
                border-color: rgb(230, 110, 30);
            }
            #btnNum, #Limpar{
                border-color: rgb(255, 0, 136);
                width: 30%;
                border-radius: 10px;
                padding: 5px;
                background-color:rgba(20, 63, 14, 0.426);
                border-radius: 140%;

            }
            input[type=text]
            {
                width:20%;
            }
            form
            {
                width: 50%;
                margin-left: 25%;
                border:2px double rgb(255, 0, 136);
                text-align: center;
                background-image: white;
                font-family: 'Courier New', Courier, monospace;
                margin-top: 20%;
               
            }
            h1{
                color: rgb(0, 0, 0);
            }
            header{
                color: rgb(0, 0, 0);
            }
            p{
                color: rgb(0, 0, 0);
                text-align: center;
            }
            body{
                background-image: linear-gradient(to right, violet,cyan);
 
            }


        </style>
    </head>
    <body>
        <form method ="post" action="Fatorial.php">
        <br/><br/><br/>
            <input type="text" name="num"/>
            <br/><br/><br/>
            <input type="submit" value="Fatorial" name="btnNum"/>
            <input type="reset" value="Limpar" name="Limpar"/>
            <br/><br/>
        </form>
        
        <?php 
        $num=$_POST['num'];
        $f=1;
        
        echo "<p>";
  
  for($contagem=1; $contagem<=$num ; $contagem++)
   $f *= $contagem;
   
  echo $f;
  echo "</p>"
 ?>
 </body>
</html>
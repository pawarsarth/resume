<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

        
    #bt1:hover
    {
        background-color: black;
        color: white;

    }
    </style>
</head>
<body>
    
    <div class="div" style="text-align: center; background-color: rgba(119, 219, 219, 0.801);">
    
      <fieldset class="fie1" style="text-align: center; font-family: cursive;">
            <legend>login form</legend>

                <label for="t1">enter name</label>
            <input type="text" name="text1" id="t1"><br><br>

            <label for="t2">enter password </label>
            <input type="number" name="text2" id="t2"><br><br>

            <input type="button" name="but1" id="bt1" value="login" onclick="ok()">

    
    </fieldset>
    
    </div>
</body>
</html>




<script>

    

function ok()
{
     var a=document.getElementById("t1").value;
     var pass=document.getElementById("t2").value;

     if(a=="sarthak" && pass=="123")
     {
        alert("successfull logn ");
        window.location.href='displayt.php';
        


     }
     else
     {
        alert("not authorised user");
     }

}


</script>

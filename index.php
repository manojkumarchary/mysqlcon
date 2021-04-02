<html>
 <script type="text/javascript" src="jquery-1.3.2.js"> </script>

 <script type="text/javascript">
                   
function connection(){
      $.ajax({    //create an ajax request to display.php
        type: "GET",
        url: "page3.php",             
        dataType: "text",   //expect html to be returned                
        success: function(response){                    
            $("#responsecontainer").html(response); 
            //alert(response);
        }

    });
}

</script>

<body>
<h3 align="center">MY SQL</h3>
<table border="1" align="center">
   <tr>
       <td> <input type="button" id="display" onclick="connection()" value="mysql connection" /> </td>
   </tr>
</table>
<div id="responsecontainer" align="center">

</div>
</body>
</html>
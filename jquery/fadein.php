<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registation Form</title>

  
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/hover.css" rel="stylesheet" media="all">
    <script src="../js/jquery-3.3.1.min.js"></script>

    	<script>
$(document).ready(function(){
    $("button").click(function(){
        $("#A").fadeToggle();
        $("#B").fadeToggle("slow");
         $("#C").fadeToggle("slow");
          $("#D").fadeToggle("slow");
           $("#E").fadeToggle("5000");            
        $("#F").fadeToggle("3000");
    });
});
    	</script>

</head>

<body>
        <div class="container">
                    
        <div class="col-md-12" style="padding-top: 50px;">
            <div class="col-md-4"></div>

            <div class="col-md-4">
          
          <button class="btn btn-info">Enquiry Form</button>

            </div>

            <div class="col-md-4"></div>

        </div>


        <div class="col-md-12">
            
            <div id="A" >
                <label>Name</label>
                <input type="text" name="name" class="form-control">
            </div>

            <div id="B" >
                <label>Age</label>
                <input type="text" name="name" class="form-control">
            </div>

               <div id="C">
                <label>Qualification</label>
                   <select class="form-control">
                       <option>Highschool</option>
                       <option>Intermediate</option>
                   </select>
               </div>

                <div id="D">
                <label>Qualification</label>
                   <select class="form-control">
                       <option>Highschool</option>
                       <option>Intermediate</option>
                   </select>
               </div>

                <div id="E">
                <label>Qualification</label>
                   <select class="form-control">
                       <option>Highschool</option>
                       <option>Intermediate</option>
                   </select>
               </div>

                <div id="F">
                <label>Qualification</label>
                   <select class="form-control">
                       <option>Highschool</option>
                       <option>Intermediate</option>
                   </select>
               </div>
            
        </div>

        </div>
        </body>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
</html>
<html>
   <head>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

   </head>

   <body>
  
       <div class="container">
            <div class="container">
                <h4> Register Yourself </h4>
            </div>
            <form action="action.php" method="POST">
                  <div class="container">
                      <label> Enter email :</label>
                      <input type="email" class="form-control" name ="email"> 
                  </div>
                  <div class="container">
                      <label> Enter your name : </label>
                      <input type =" text " class ="form-control" name ="name">
                  </div>
                  <div class="container">
                     <label> Enter Roll N0 : </label>
                     <input type=" number"  class= "form-control" name ="roll">
                  </div>
                  <div class="container">
                      <label> Tell about yourself </label>
                      <input type = "text-area" class = "form-control" name="about">
                  </div>
                  <div>
                     
                  </div>

                  <div class ="container" style ="padding-top = 100px">
                     <button type="submit" class="btn btn-success" > Submit </button>
                  </div>

            
            </form>
       </div>
   </body>
</html>
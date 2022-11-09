<!doctype html>
<html lang="">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
     
        <title>Test Performance</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   
    </head>
    <body>

      <div class="container">
        

            <div class="form-group">

            <br>
            <br>
            
            <div class = "row d-flex justify-content-center" >
          
            
            
                <div class = "col-6">

               
                  <div class="d-flex justify-content-center">
                  <h2 for="name">Performance Application</h2>
                  </div>

         
                <div class="form-group">
                  <label for="exampleInputEmail1"></label>
                  <input type="number" class="form-control" name="number" id="number"  aria-describedby="emailHelp" placeholder="Enter Rows">
             
                </div>
                
               
                <button type="submit" id="ajaxSubmit" class="btn btn-primary">Submit</button>

              

                
               <br>
           
              <br>

            <div class="alert alert-success"></div>
             <br>

           
             </div>
            </div>
         
    
          
      </div>

      <script src="http://code.jquery.com/jquery-3.3.1.min.js"
               integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
               crossorigin="anonymous">
      </script>
      <script>
         jQuery(document).ready(function(){
            jQuery('#ajaxSubmit').click(function(e){
               e.preventDefault();
            //    $.ajaxSetup({
            //       headers: {
            //           'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            //       }
            //   });
               jQuery.ajax({
                  url: "http://localhost:8000/api/insertData",
                  method: 'POST',
                  data: {
                    // name: jQuery('#name').val(),
                    //  email: jQuery('#type').val(),
                    //  location: jQuery('#price').val(),
                    //  github: jQuery('#github').val(),
                    //  twitter: jQuery('#twitter').val(),
                    //  location: jQuery('#latest_article_published').val()
                     number: jQuery('#number').val(),
                    
                  },
                  success: function(result){
                    console.log(result);
                     jQuery('.alert').show();
                      jQuery('.alert').html(result);
                  }});
               });
            });
      </script>
    </body>
</html>
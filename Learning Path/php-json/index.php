<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    
    <title>json</title>
  </head>
  <body>

  <div class="container pt-5">
    <div class="row">
        <div class="col align-self-center">
            <h1 class="text-center">Parse and fetch data using json-ajax-php</h1>
        
        <!-- <form >
        <div class="form-floating mt-3 mb-3">
      <input type="text" class="form-control" id="limit" placeholder="Enter limit" name="limit">
      <label for="pwd">limit</label>
    </div>
    <div class="form-floating mb-3 mt-3">
      <input type="text" class="form-control" id="offset" placeholder="Enter offset" name="offset">
      <label for="email">Offset</label>
    </div>
    
    <button type="submit" class="btn btn-primary" id="submit">Submit</button>
  </form> -->

  <input type="text" name="search" autocomplete="off" placeholder="Search By Name" id="search-value" class="bg-dark p-2 my-3 rounded-pill border border-1 border-danger text-center text-white   " > 
  <a class="btn    btn-outline-danger" href="#table-data" id="home">back</a>
            <div id="table-data">

            </div>
            <div id="table-data1">
         </div>
         <div id="table-data3">
         </div>

            

        </div>
    </div>
  </div>

    <script>

        $(document).ready(function(page){
            // var limit = $("#limit").val();
            // var offset = $("#offset").val();
          var obj =   {"limit" : 3, "offset" : 1}; 
            function loadtable(page) {
              obj.page_no = page;
              // obj.search = search-value;

            
                $.ajax({                    
                    url: "mysqli_json.php",
                    type: "POST",
                    data: JSON.stringify(obj),
                    contentType: 'application/json; charset=utf-8',
                    success: function(data){
                        const obj = JSON.parse(data);
                        var output = '';
                        output += `<table class="table table-dark table-striped text-center">
                                    <tr class="table-success">
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    </tr>`;

                        for(var i = 0; i < obj.length; i++ ){
                            output += `<tr class=""><td>${obj[i].id}</td><td>${obj[i].firstname}</td><td>${obj[i].email}</td></tr>`;
                        }

                        output += `</table>`;
                        $("#table-data").html(output);
                        $("#home").hide();

                    }
                });
              }
               
              loadtable(); 
// this is fro page numbers 
             $.ajax({                    
                    url: "json_pagination.php",
                    type: "POST",
                    data: JSON.stringify(obj),
                    contentType: 'application/json; charset=utf-8',
                    success: function(data){
                        const obj = JSON.parse(data);                                                 
                        var total_pages = obj;
                        var output = ``;
                        output += `<div id='pagination' ><ul class='pagination pagination-lg justify-content-center '>`;
        
                          for(var i=1;i <= total_pages  ; i++)
                          {
                              output += `<li class='page-item shadow-lg'><a class='page-link' id = '${i}' href='#'>${i}</a></li>`;
                          }
                          output += '</ul></div>';
                          
                          $("#table-data1").html(output);
                        }
                        });

// this is fro page numbers link

                        $(document).on("click","#pagination a",function(e){
                          e.preventDefault();
                          var page_id =$(this).attr("id");
                          loadtable(page_id);
                        })

                  // search data 
                  $("#search-value").on("keyup",function(){
                          obj.search = $(this).val();
                          $.ajax({                    
                    url: "search_json_pagination.php",
                    type: "POST",
                    data: JSON.stringify(obj),
                    contentType: 'application/json; charset=utf-8',
                    success: function(data){
                        const obj = JSON.parse(data);
                        var output = '';
                        output += `<table class="table table-dark table-striped text-center">
                                    <tr class="table-success">
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    </tr>`;

                        for(var i = 0; i < obj.length; i++ ){
                            output += `<tr class=""><td>${obj[i].id}</td><td>${obj[i].firstname}</td><td>${obj[i].email}</td></tr>`;
                        }

                        output += `</table>`;
                        $("#table-data").html(output);
                        // its optional from here  
                        $("#table-data1").hide(output);
                        $("#home").show();
                        // $("#home").click()
                        $("#home").click(function()
                        {
                           loadtable();
                           
                        $("#table-data1").show(output);
                        // $("#search-value").trigger("reset");
                        $('div :input').val('');
                        // its optional ends here   

                        })
                                                

                    }
                });
                          
        });
        loadtable(); 
                      
        }); 

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
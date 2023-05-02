<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert into table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        
        h2
        {
            color:red;
        }
        h3
        {
            color:green;
        }
    
    </style>
    
</head>
<body>

    <div class="container-fluid">
        <h1 class="text-center "><u>Insert into table</u></h1>
        <div class="row border border-success border-3 rounded-5 m-1">
            <div class="col border border-1 border-info shadow-lg shadow-dark m-5">
                <pre>
                    <strong>
                        <h2>select query</h2>
                    SELECT * from emp_info;
             
                    </strong>
                   
                </pre>
                    
               
            </div>
            <div class="col border border-1 border-info shadow-lg shadow-dark m-5">
                <pre>
                    <strong>
                        <h2>Where</h2>
                    SELECT * FROM `emp_info` <u>WHERE</u> firstname ="urvashi";
             
                    </strong>
                    
                </pre>
                    
               
            </div>
            <img src="select.png" alt="">
            
        </div>
        <div class="col border border-1 border-info shadow-lg shadow-dark m-5">
                <pre>
                    <strong>
        <h2 class="text-center "><u>And</u></h2>

                        
                        select * from emp_info where firstname = "urvashi" <u>and</u> age = 23;
             
                    </strong>
                    
                </pre>
                    
               
            </div>
            <img src="and.png" alt="">
           
        </div>
        <div class="col border border-1 border-info shadow-lg shadow-dark m-5">
                <pre>
                    <strong>
        <h2 class="text-center "><u>And</u></h2>

                        
        select * from emp_info where age >= 23;

             
                    </strong>
                    
                </pre>
                    
               
            </div>
            <img src="condition.png" alt="">
        </div>
        
        <div class="col border border-1 border-info shadow-lg shadow-dark m-5">
                <pre>
                    <strong>
        <h2 class="text-center "><u>And</u></h2>

                        
        select * from emp_info where age >= 23 and dob = "1996-06-14";

             
                    </strong>
                    
                </pre>
                    
               
            </div>
            <img src="condition2.png" alt="">
        </div>
        
       
</div>



   




   




</body>
</html>
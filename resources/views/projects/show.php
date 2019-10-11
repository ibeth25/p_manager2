<!DOCTYPE html>
<htm lang ="{{ str_replace('_', '_', app()->getlocale(() }}">
<head>
    <meta charset="utf=8">
     <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->

       
        </head>
    <body>
        <div class="flex-center position-ref full-height">
        <div class="content">
             <div class="title m-b-md">
            
                    User 1 view
                </div>

               <from action="/users/1/delete" method="POST">
               @csrf
               <button>Delete User</button>
               <from>
                </div>
            </div>
    </body>
</html>

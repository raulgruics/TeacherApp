<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital@1&display=swap" rel="stylesheet"> 
        <!-- Styles -->
        <style>
            body {
                background-color:rgb(64,224,208);
           font-family: 'Lobster Two', cursive;
           display:flex;
           align-items:center;
           justify-content:center;
           flex-direction:column;
            }
            h1{
                font-size:100px;
                margin: 0px;
            }
            h2{
                margin: 0px;
                font-size:60px;
            }
           ul{ 
          padding: 10px 10px 10px 10px;
          background-color:white;
          border-radius:5px;
         }
         li{
          list-style-type: none;
         }
         button{
             font-family:  sans-serif;
              letter-spacing: 2px;
              border:none;
              border-radius:5px;
              padding: 20px;
              margin:20px;
               cursor:pointer;
          text-decoration: none;
         }
        </style>
    </head>
    <body >       
        <h1>Welcome </h1>
        <h2>Teacher !</h2>
        <tr>
            <td><button onclick="location.href='{{ url('/createProject') }}'">
     Create Project</button></td><li>
     </tr>
    </body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Create Project</title>

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
            .Create-project{
                display:flex;
                flex-direction:column;
            }
            h1{
                font-size:50px;
                
            }
            label { 
                font-size:35px;
               color: rgb(105,105,105);
            }
            input{
                font-family:sans-serif;
                letter-spacing:2px;
                padding:15px;
                margin:10px;
                border-radius:5px;
                border:none;
            }
            form{
                display: flex;
                align-items:center;
           justify-content:center;
           flex-direction:column;
            }
          .create-button{ 
              font-family:  sans-serif;
              letter-spacing: 2px;
              border:none;
              border-radius:5px;
              padding: 20px;
              margin:20px;
               cursor:pointer;
           }
           .create-button:hover{ 
               background-color:rgb(30,144,255);
               cursor:pointer;
               transform: scale(1.03);
                transition: all 0.8s ease;
                
           }
        </style>
    </head>
    <body >       
        <h1>Create project</h1>
        <div class="Create-project">

        <form action="createProject" method="POST">
         @csrf
        <label for="projectName">Project Name</label>
        <input type="text" id="" name="projectname" placeholder="Project Name">

        <label for="numberOfGroups">Number of Groups</label>
        <input type="text" id="" name="numberOfGroup" placeholder="Number of Groups">

        <label for="studentsPerGroup">Students per group</label>
        <input type="text" id="" name="studentsPerGroup" placeholder="Students per Group">
        </div>

        <div class="button">
            <button type="submit" onclick=" "  class="create-button">Submit</button>
        </div>
    </form>
    </body>
</html>

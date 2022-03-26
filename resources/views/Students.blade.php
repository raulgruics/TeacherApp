<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Students</title>

        <!-- Fonts -->
        
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

         table, th, td{
             background-color:rgb(0,191,255);
             padding:20px;
            border: 1px solid;
             border-collapse: collapse;
              
          }
          th {
    
           font-size:35px;
           font-weight:bold;
           color:rgb(240,248,255);
        }
        tr {
          font-size:20px;
          color: rgb(245,255,250);
         }
 
         .delete-button{ 
             font-family: 'Lobster Two', cursive;
             letter-spacing:2px;
             padding:10px;
               cursor:pointer;
               border:none;
               border-radius:5px;
           }
           .delete-button:hover{ 
               cursor:pointer;
               transform: scale(1.03);
                transition: all 0.8s ease; 
           }
         
          label { 
                font-size:25px;
               color: rgb(105,105,105);
            }
            input{
                font-family:sans-serif;
                letter-spacing:2px;
                padding:10px;
                margin:10px;
                border-radius:5px;
                border:none;
            }
        .addbutton{
           font-family:  sans-serif;
              letter-spacing: 2px;
              border:none;
              border-radius:5px;
              padding: 20px;
              margin:20px;
               cursor:pointer;
        }
         .addbutton:hover{ 
               background-color:rgb(30,144,255);
               cursor:pointer;
               transform: scale(1.03);
                transition: all 0.8s ease;
         }
        </style>

        
    </head>
    <body >
     
<table>
  <tr>
    <th>Student</th>
    <th>Group</th>
    <th>Actions</th>
  </tr>

  @foreach($studentsdata as $showdata )
  <tr>
    <td>{{$showdata['student']}}</td>
    <td><select id="groups" name="groups">
    <option >{{$showdata['groups']}}</option>
  </select></td>
    <td><button class="delete-button">Delete!</button></td>
    @endforeach
  </tr>
</table>


<h1>Create new student</h1>
<form action=" addStudent" method="POST">
         @csrf
      
        <label for="student">Add Student</label>
        <input type="text" id="" name="student" placeholder="Student">

        <button type="" onclick=" "  class="addbutton">Create</button>
       </form>
    </body>

</html>

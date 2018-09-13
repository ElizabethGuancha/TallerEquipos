<!DOCTYPE htm>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title_table')</title>
</head>
<body>
   
    
    <center>
    <table border=2>
        <tr>
            <td colspan=3><center><b> @yield('title_page') </b></center></td>
        
        </tr>
        @php ($cont = 1) 

             @foreach($equipos as $e)  

                     @php ($cont ++)

                         @if($cont >= 2)
                         
                             <tr></tr> 
                             @php($cont = 0) 

                        @endif  
                        <td>{{$e}}</td>
             @endforeach              
        <tr>
            <td colspan=3><center><b>@yield('footer') </b></center></td>
        </tr>
    </table>
    </center>
    
</body>
</html>

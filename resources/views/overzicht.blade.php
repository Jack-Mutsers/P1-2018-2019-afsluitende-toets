<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>

    </head>
    <body>
        <div class="container">

            <div class="row">
                <a href="add" ><button> klasgenoot toevoegen </button></a>
            </div>
            <br />
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="overflow-y:scroll; overflow-x:none; height:300px;">
                    <ul class="list-group">
                        <!-- Disable elements -->
                        <li class="list-group-item disabled">Klasgenootselectie</li>
                        <div id="divcontent">
                            @if(isset($klasgenoten) && $klasgenoten != "" && $klasgenoten != null)
                                @foreach ($klasgenoten as $klasgenoot)
                                    <li class="list-group-item">
                                        <span class="badge" style="background: none">
                                            {{ Form::open(array('url'=>'verwijder', 'method'=>'post')) }}
                                                {{ Form::hidden('id', $klasgenoot->id) }}
                                                {{ Form::submit('X', ['style'=>'background-color: Red;']) }}
                                            {{ Form::close() }}
                                        </span>
                                        {{ Form::open(array('url'=>'klasgenoot', 'method'=>'post')) }}
                                        {{ Form::hidden('name', $klasgenoot->name) }}
                                        {{ Form::submit($klasgenoot->name) }}
                                        {{ Form::close() }}
                                    </li>
                                @endforeach
                            @endif
                        </div>
                    </ul>
                </div>
        
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    <input id="btn1" type="button" name="huidige" value="huidige"> <br />
                    <input id="btn2" type="button" name="oud" value="oud"> <br />
                    <input id="btn3" type="button" name="alle" value="alle"> <br />
                    <input id="btn4" type="button" name="voldoende" value="voldoende"> <br />
                    <input id="btn5" type="button" name="onvoldoende" value="onvoldoende">
                </div>
            </div>
        </div>
            
        <script type="text/javascript" src="js/jquery.js"></script>
        <script>
            $( document ).ready(function() {
                $( "#btn1, #btn2, #btn3, #btn4, #btn5" ).on('click', function(e) {
                    
                    $.ajax({
                        url: 'ajax',
                        type: "get",
                        data: {position: $(e.target).attr('name')},
                        success: function(response){ // What to do if we succeed
                            console.log(response);
                            $('#divcontent').empty();
                            var content ="";
                            
                            for(var i in response) {
                                var item = response[i];
                                
                                content += "<li class='list-group-item'>";
                                content += "<span class='badge' style='background: none'>";
                                content += "<form action='verwijder' method='post'>";
                                content += "<input type='hidden' id='" + item['id'] + "'>";
                                content += "<input type='submit' value='X' style='background-color: Red;'>";
                                content += "</form></span>" + item['name'] +"</li>";
                            }
                            
                            $('#divcontent').append(content);
                        },
                        error: function(data){
                            console.log('Error:', data);
                        }
                    });
                    
                    //alert('all done');
                });
            });
            
        </script>
    </body>
</html>

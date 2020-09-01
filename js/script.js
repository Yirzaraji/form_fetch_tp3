console.log('coucou')
var string = "my string"; // What i want to pass to php
var stringb = "my stringb"; // What i want to pass to php

$.ajax({
    type: 'post', // the method (could be GET btw)
    url: 'model/data.json', // The file where my php code is
    success: function(data) { // in case of success get the output, i named data
        //console.log(data) // do something with the output, like an alert
        //console.log(data)
            $.ajax({
                type: 'post', // the method (could be GET btw)
                url: 'view/test.php', // The file where my php code is
                data: {
                    'test': string,
                    'testb' : stringb,
                    'player': data[0].player,
                    'playerb': data[1].player // all variables i want to pass. In this case, only one.
               
                },
                success: function(data) { // in case of success get the output, i named data
                    alert(data + ' Rencontre saved'); // do something with the output, like an alert
                    
                },
                error: function(data){
                    console.log(data)
                }
            });

        
        
    }
});


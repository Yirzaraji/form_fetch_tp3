//console.log('coucou')


/* $.ajax({
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
}); */
let save = document.getElementById('save')
save.style.display = "none"
let success = document.getElementById('success')
success.style.display = "none"

let state = true


let card = document.getElementsByClassName('card')

for(let t = 0; t < card.length; t++){
    card[t].addEventListener("click", () => {
        state = !state
        console.log(state)
        if(state == false){
            //console.log(state)
            card[t].style.background = "yellow" 
        }
        else{       
            card[t].style.background = "white"
            //card[t].classList.remove('click');
        }
    })
}




var string = "my string"; // What i want to pass to php
var stringb = "my stringb"; // What i want to pass to php


$.ajax({
    method: "post",
    url: "../model/data.json",
    dataType: "json",

    success: function() {
        console.log("Ajax success");
    },
    error: function() {
        alert("There was an error. Try again please!");
    },
})
//.done est lié a jquery ref la doc
.done(function(data) {
    //console.log(data);
        for(let j = 0; j < card.length; j++){
            console.log(card);

                console.log(data)
                
                card[j].innerHTML = '<img src="' + data[j].urlavatar + '">' + data[j].nom 
                + '<br>' + data[j].pseudo + '<br>' + data[j].xp;
                
            card[j].addEventListener("click", () => {

                
                card[j].classList.add('click')
                let clicked = document.getElementsByClassName('click')
                
                if(clicked.length == 2){
                    console.log("coucoui")
                    save.style.display = "block"
                    save.addEventListener("click", () => {

                        $.ajax({
                            type: 'post', // the method (could be GET btw)
                            url: '../view/test.php', // The file where my php code is
                            data: {
                                'test': string,
                                'testb' : stringb,
                                'player': data[0].player,
                                'playerb': data[1].player // all variables i want to pass. In this case, only one.
                        
                            },
                            success: function(data) { // in case of success get the output, i named data
                                //alert(data + ' Rencontre saved'); // do something with the output, like an alert
                                success.style.display = "block"
                                save.style.display = "none"
                            },
                            error: function(data){
                                console.log(data)
                            }
                        }); 
                    })
                }

            });

            
        }
});


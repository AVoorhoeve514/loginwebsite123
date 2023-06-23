let randomBoolean = 'false';

function change_message()
{
    fetch('https://api.breakingbadquotes.xyz/v1/quotes', {
        headers: {
            Accept:
                "application/json; charset=utf-8",
                "Content-Type": "application/json; charset=utf-8",
        },
        mode: "cors"
    })
    .then(function(response) {
        // handle success
        return response.json()
    })
    .then(function (data){
        console.log(data[0].quote);
        let popup = document.getElementById('popup');
        if (randomBoolean === 'false'){
            popup.classList.toggle('show');
            randomBoolean = 'true';
            popup.innerHTML = data[0].quote;
            console.log('show'+ randomBoolean)
        } else if(randomBoolean === 'true'){
            popup.classList.toggle('hide');
            randomBoolean = 'false';
            console.log('hide')
        }

    })
    .catch(function(error) {
        // handle error
        console.log(error);
    });
}

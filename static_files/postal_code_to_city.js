
document.querySelector("#cp").addEventListener('input', function() {
    
    if (this.value.length == 5) {
        final_array = [];
        const menu = document.querySelector('#menu');
        removeAllChildNodes(menu);
        let url = `https://apicarto.ign.fr/api/codes-postaux/communes/${this.value}`;

        fetch(url).then((response) => 
            response.json().then((data) => {

            console.log(data);


            for (let i = 0; i < data.length; i++) 
            {
                final_array[i] = data[i].nomCommune;
            }        

            console.log("array", final_array);

            var select = document.getElementById("menu");

            for (let j = 0; j<final_array.length; j++)
            {
                var opt = document.createElement("option");
                opt.value = final_array[j];
                opt.innerHTML = final_array[j];
                select.appendChild(opt);
            }

        })
    ).catch(err => console.log('erreur : ' + err));
    }
    
});
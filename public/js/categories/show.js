var buttonFavs = document.getElementsByClassName('button-favorite');


Array.from(buttonFavs).forEach(val=>{
    val.addEventListener('click', ()=>{
        if(val.classList.contains('selected')){
            url= "http://127.0.0.1:8000/api/removefavorite";
            $.ajax({
                method:'POST',
                url: url,
                data: {
                    id : user,
                    cat: val.getAttribute('cat_id')
                },
            }).done(function(e){
                val.classList.remove("selected");
            }).fail(function(e){
                console.log(e);
            });
        }else{
            url= "http://127.0.0.1:8000/api/addfavorite";
            $.ajax({
                method:'POST',
                url: url,
                data: {
                    id : user,
                    cat: val.getAttribute('cat_id')
                },
            }).done(function(e){
                val.classList.add("selected");
            }).fail(function(e){
                console.log(e);
            })
        }
        

    });
})
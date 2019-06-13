var buttonFavs = document.getElementsByClassName('button-favorite');


Array.from(buttonFavs).forEach(val=>{
    val.addEventListener('click', ()=>{
        id_cat = val.getAttribute('cat_id')
        if(val.classList.contains('selected')){
            $('.toast.remove.'+id_cat).toast('show');
            url= "http://127.0.0.1:8000/api/removefavorite";
            $.ajax({
                method:'POST',
                url: url,
                data: {
                    id : user,
                    cat: val.getAttribute('cat_id')
                },
            }).done(function(e){
                $('.toast.removedone.'+id_cat).toast('show');
                val.classList.remove("selected");
            }).fail(function(e){
                console.log(e);
            });
        }else{
            $('.toast.add.'+id_cat).toast('show');
            url= "http://127.0.0.1:8000/api/addfavorite";
            $.ajax({
                method:'POST',
                url: url,
                data: {
                    id : user,
                    cat: val.getAttribute('cat_id')
                },
            }).done(function(e){
                $('.toast.adddone.'+id_cat).toast('show');
                val.classList.add("selected");
            }).fail(function(e){
                console.log(e);
            })
        }
        

    });
})
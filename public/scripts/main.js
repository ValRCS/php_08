console.log("js IS WORKING!");

let myarr = document.querySelectorAll(".songname");
for (let i=0;i<myarr.length;i++){
    myarr[i].addEventListener("input", function() {
        console.log("input event fired", $(this).val());
         $.post("update.php", 
            {
                uid: $(this).attr('value'),
                content: "Badac"
                //we can gather infrom from siblings as well
        },
            () => {location.reload()});
    }, false)
}


// $(".songname").change(function(){
//     // $.post
//     console.log("CLicked on "+$(this).attr('id'));
//     console.log("Value "+$(this).attr('value'));
//     // $.post("update.php", 
//     //     {uid: $(this).attr('value')},
//     //     () => {location.reload()});
// })
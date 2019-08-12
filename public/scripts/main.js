console.log("js IS WORKING!");

$(".songname").click(function(){
    // $.post
    console.log("CLicked on "+$(this).attr('id'));
    console.log("Value "+$(this).attr('value'));
    $.post("delete.php", 
        {uid: $(this).attr('value')},
        () => {location.reload()});
})
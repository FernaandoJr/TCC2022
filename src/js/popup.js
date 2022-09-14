window.addEventListener("load", function(){
    setTimeout(
        function open(event){
            document.querySelector(".popup").style.display = "flex";
        },
        100
    )
});

window.onclick = function(e) {
    if(e.target == popup){
        popup.style.display = "none";
    }
}

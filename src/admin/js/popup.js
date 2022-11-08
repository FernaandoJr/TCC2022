window.onload=function(){
    document.getElementById("btn-add").addEventListener("click", function(){
        document.querySelector(".popup").style.display = "flex";
    })
    window.onclick = function(e) {
        if(e.target == popup){
            popup.style.display = "none";
        }
    }
    
  }

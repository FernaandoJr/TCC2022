window.onload=function(){
    let error = document.querySelector('.popup_teste');
    window.onclick = function(e) {
        if(e.target == error){
            document.querySelector(".popup_teste").style.display = "none";
        }
    }
    
  }

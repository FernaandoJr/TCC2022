const navMenu = document.getElementById('nav-menu'),
        toggleMenu = document.getElementById('toggle-menu'),
        closeMenu = document.getElementById('close-menu')


        toggleMenu.addEventListener('click',() =>{
            navMenu.classList.toggle('show')
        })
        closeMenu.addEventListener('click',() =>{
            navMenu.classList.remove('show')
        })
        
        function changeImage(){
            let displayImage = document.getElementById('toggle-menu')
            if(displayImage.src.match('./img/icon/menu.svg')){
                displayImage.src = './img/icon/close.svg'
            } else {
                displayImage.src = './img/icon/menu.svg'
            }
                
            
        }

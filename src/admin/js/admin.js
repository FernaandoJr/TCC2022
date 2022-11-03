function AdminToggle(){
    let toggle = document.querySelector('.toggle');
    let navigation = document.querySelector('.navigation');
    let main = document.querySelector('.main');
    let table = document.querySelector('.table');
    toggle.classList.toggle('active')
    navigation.classList.toggle('active')
    main.classList.toggle('active')
}
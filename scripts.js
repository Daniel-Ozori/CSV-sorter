var menuBtn = document.getElementById('menuBtn');
var menu = document.getElementById('menu');
var menuActive = false;
menuBtn.onclick = function(){
    if(menuActive){
        menu.style.width ='0px';
        menuBtn.style.transform = 'rotate(180deg)';
        menu.style.visibility = 'hidden';
        menuActive = false;
        
    }else{
        menu.style.width = '300px';
        menuBtn.style.transform = 'rotate(90deg)';
        menu.style.visibility = 'visible';
        menuActive = true;
    }
}
const coso = document.getElementsByClassName('contentBx');

for(i=0; i<coso.length; i++){
    coso[i].addEventListener('click',function(){
        this.classList.toggle('active')
    })
}
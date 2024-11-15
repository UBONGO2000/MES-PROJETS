
// Definitions des variables

let heure,minute,seconde,btnStart,btnReset,btnStop,sp,t

sp=document.getElementsByTagName('span');

heure = document.getElementById('heure');
minute = document.getElementById('minute');
seconde = document.getElementById('seconde');

btnStart = document.getElementById('start');
btnStop = document.getElementById('stop');
btnReset = document.getElementById('reset')





// Reinitialisation du chronometre lors du chargement de la page

window.onload = function(){

    heure = 0 , minute = 0 , seconde = 0;
}







//  confection des fonctions à utilisées



function updateChronos () {
    // cette fonction fait avance le temp
    seconde+=1;
    if(seconde==60){
    seconde=0;
    minute+=1;
}if(minute == 60){
    minute = 0;
    heure+=1;
}
// affichage du compteur

sp[0].innerHTML = heure ;
sp[1].innerHTML = minute ;
sp[2].innerHTML = seconde;

}


function Start(){
    // Cette ligne de code execute cette fonction (updateChronos) toutes les 100ms
    t=setInterval(updateChronos,100);
    // On desactive le bouton start 
    btnStart.disabled = true;
}



function Stop(){
    // on enleve l'intervalle d'execution de notre fonction updateChronos qui s'executait pendant les 100ms 
    clearInterval(t);
    // on active le buton start
    btnStart.disabled = false;

}





//  Event


// on declanche la fonction start au click du bouton start
btnStart.addEventListener("click", Start);


// on stop le chrono quand on click sur le bouton stop

btnStop.addEventListener("click",Stop);



// On met les compteurs à zero en en clicant sur le bouton reset
btnReset.addEventListener("click",function (){

    heure = 0 , minute = 0 , seconde =0 ;

    sp[0].innerText = heure ;
    sp[1].innerText = minute ;
    sp[2].innerText = seconde ;
    // on saisse d'executer la fonction pendant l'intervalle de temps precise precedement 
    clearInterval(t);
    // On active le bouton start
    btnStart.disabled = false;


});





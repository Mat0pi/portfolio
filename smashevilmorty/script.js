var canvas = document.getElementById("jogo");
var contexto = canvas.getContext("2d");


var audio = new Audio("fundo2.mp3");


//Imagem de fundo (tela de inicio)
var imgfundo1 = new Image();
imgfundo1.src = "img/comecar.png";
imgfundo1.onload=function(){
    contexto.drawImage(imgfundo1,0,0);
    
}

//Imagem de fundo (jogo)
var imgfundo2 = new Image ();
imgfundo2.src = "img/Buracos.jpg";

//Imagem do Rick
var rick = new Image ();
rick.src = "img/rickflutuante.png";
rick.name = "rick";

//Imagem do Morty
var morty = new Image ();
morty.src = "img/evilmorty2.png";
morty.name = "morty";

var vet_obj = [rick,morty];
var currentobj;
var pos_coord;
var score=0;
var timerGame=0;
var start=false;

//Coordenadas                                 Valores corretos
var coordX = [126, 280, 273, 434];   //126 *1  280 *2  273 *3  434 *4
var coordY = [104, 33, 180, 104];    //104 *1  33  *2  180 *3  104 *4

//Click no canvas
canvas.addEventListener('click', function (event) {
    audio.play();
    var rect = canvas.getBoundingClientRect();
    
    var mouseX = event.clientX - rect.left;
    var mouseY = event.clientY - rect.top;
    
    //Inicio
    if (mouseX > 0 && mouseX < canvas.width && mouseY > 0 && mouseY < canvas.height && start ==false){
        start=true;
        
        timerGame = setInterval(updategame,800); //800
    }else{
        if (coordX[pos_coord]<=mouseX && (coordX[pos_coord]+currentobj.width >=mouseX) &&
            coordY[pos_coord]<=mouseY && (coordY[pos_coord]+currentobj.height >=mouseY)){
            if (currentobj.name=="rick"){score ++;
                                         //Som de acerto
                                         var acerto = new Audio();
                                            acerto.src="audio/Acerto.mp3";
                                                acerto.play();
                                         clearInterval(timerGame);
                                         updategame(800);
                                         timerGame = setInterval(updategame,800);
                }else{score --;
                                        //Som de Erro
                                         var nope = new Audio();
                                            nope.src="audio/Nope.mp3";
                                                nope.play();
                                            clearInterval(timerGame);
                                         updategame(800);
                                         timerGame = setInterval(updategame,800);
                }
            }
        }    
    });
    //Atualizar imagens
function updategame(){
    contexto.drawImage(imgfundo2,0,0); 
    showscore();
    sorteiocordenada();
    currentobj = vet_obj[Math.round(Math.random())];
    contexto.drawImage(currentobj, coordX[pos_coord], coordY[pos_coord]);
}    
    //Pontos
function showscore(){
    contexto.font="20px Arial";
    contexto.fillStyle="fff";
    contexto.fillText("Pontos: "+score,0,30);
}
    //Sorteio de Coordenadas
    function sorteiocordenada(){
        pos_coord = Math.round(Math.random()*(coordX.length-1));}

//Proporções de tela
//1350
//660


//Sons
//var audiofundo = new Audio();
//audiofundo.src="";
//audiofundo.play();
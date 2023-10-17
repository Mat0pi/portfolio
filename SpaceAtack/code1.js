gdjs.InicioCode = {};
gdjs.InicioCode.GDPontosObjects1= [];
gdjs.InicioCode.GDPontosObjects2= [];
gdjs.InicioCode.GDPontosObjects3= [];
gdjs.InicioCode.GDVidasObjects1= [];
gdjs.InicioCode.GDVidasObjects2= [];
gdjs.InicioCode.GDVidasObjects3= [];
gdjs.InicioCode.GDFundoObjects1= [];
gdjs.InicioCode.GDFundoObjects2= [];
gdjs.InicioCode.GDFundoObjects3= [];
gdjs.InicioCode.GDPlataformaObjects1= [];
gdjs.InicioCode.GDPlataformaObjects2= [];
gdjs.InicioCode.GDPlataformaObjects3= [];
gdjs.InicioCode.GDPlayerspriteObjects1= [];
gdjs.InicioCode.GDPlayerspriteObjects2= [];
gdjs.InicioCode.GDPlayerspriteObjects3= [];
gdjs.InicioCode.GDInimigoSpriteObjects1= [];
gdjs.InicioCode.GDInimigoSpriteObjects2= [];
gdjs.InicioCode.GDInimigoSpriteObjects3= [];
gdjs.InicioCode.GDVoltarObjects1= [];
gdjs.InicioCode.GDVoltarObjects2= [];
gdjs.InicioCode.GDVoltarObjects3= [];
gdjs.InicioCode.GDPlayerObjects1= [];
gdjs.InicioCode.GDPlayerObjects2= [];
gdjs.InicioCode.GDPlayerObjects3= [];
gdjs.InicioCode.GDTiroObjects1= [];
gdjs.InicioCode.GDTiroObjects2= [];
gdjs.InicioCode.GDTiroObjects3= [];
gdjs.InicioCode.GDInimigoObjects1= [];
gdjs.InicioCode.GDInimigoObjects2= [];
gdjs.InicioCode.GDInimigoObjects3= [];
gdjs.InicioCode.GDExplosaoObjects1= [];
gdjs.InicioCode.GDExplosaoObjects2= [];
gdjs.InicioCode.GDExplosaoObjects3= [];
gdjs.InicioCode.GDVidaObjects1= [];
gdjs.InicioCode.GDVidaObjects2= [];
gdjs.InicioCode.GDVidaObjects3= [];

gdjs.InicioCode.conditionTrue_0 = {val:false};
gdjs.InicioCode.condition0IsTrue_0 = {val:false};
gdjs.InicioCode.condition1IsTrue_0 = {val:false};
gdjs.InicioCode.condition2IsTrue_0 = {val:false};


gdjs.InicioCode.mapOfGDgdjs_46InicioCode_46GDTiroObjects1Objects = Hashtable.newFrom({"Tiro": gdjs.InicioCode.GDTiroObjects1});gdjs.InicioCode.eventsList0x6b1cec = function(runtimeScene) {

{


gdjs.InicioCode.condition0IsTrue_0.val = false;
{
gdjs.InicioCode.condition0IsTrue_0.val = gdjs.evtTools.runtimeScene.sceneJustBegins(runtimeScene);
}if (gdjs.InicioCode.condition0IsTrue_0.val) {
{gdjs.evtTools.sound.playSound(runtimeScene, "Audios\\Musiquinha.mp3", false, 100, 1);
}}

}


{


gdjs.InicioCode.condition0IsTrue_0.val = false;
gdjs.InicioCode.condition1IsTrue_0.val = false;
{
gdjs.InicioCode.condition0IsTrue_0.val = gdjs.evtTools.input.isMouseButtonPressed(runtimeScene, "Left");
}if ( gdjs.InicioCode.condition0IsTrue_0.val ) {
{
gdjs.InicioCode.condition1IsTrue_0.val = gdjs.evtTools.runtimeScene.timerElapsedTime(runtimeScene, 0.30, "Tiro");
}}
if (gdjs.InicioCode.condition1IsTrue_0.val) {
gdjs.InicioCode.GDPlayerObjects1.createFrom(runtimeScene.getObjects("Player"));
gdjs.InicioCode.GDTiroObjects1.length = 0;

{gdjs.evtTools.object.createObjectOnScene((typeof eventsFunctionContext !== 'undefined' ? eventsFunctionContext : runtimeScene), gdjs.InicioCode.mapOfGDgdjs_46InicioCode_46GDTiroObjects1Objects, (( gdjs.InicioCode.GDPlayerObjects1.length === 0 ) ? 0 :gdjs.InicioCode.GDPlayerObjects1[0].getPointX("origin")), (( gdjs.InicioCode.GDPlayerObjects1.length === 0 ) ? 0 :gdjs.InicioCode.GDPlayerObjects1[0].getPointY("origin")) - 50, "");
}{for(var i = 0, len = gdjs.InicioCode.GDTiroObjects1.length ;i < len;++i) {
    gdjs.InicioCode.GDTiroObjects1[i].addForce(0, -(300), 1);
}
}{gdjs.evtTools.runtimeScene.resetTimer(runtimeScene, "Tiro");
}{gdjs.evtTools.sound.playMusic(runtimeScene, "Audios\\sfx_Tiro.ogg", false, 100, 1);
}}

}


}; //End of gdjs.InicioCode.eventsList0x6b1cec
gdjs.InicioCode.mapOfGDgdjs_46InicioCode_46GDInimigoObjects2Objects = Hashtable.newFrom({"Inimigo": gdjs.InicioCode.GDInimigoObjects2});gdjs.InicioCode.eventsList0x6a7aa4 = function(runtimeScene) {

{


gdjs.InicioCode.condition0IsTrue_0.val = false;
{
gdjs.InicioCode.condition0IsTrue_0.val = gdjs.evtTools.runtimeScene.timerElapsedTime(runtimeScene, 0.35, "Inimigo");
}if (gdjs.InicioCode.condition0IsTrue_0.val) {
gdjs.InicioCode.GDInimigoObjects2.length = 0;

{gdjs.evtTools.object.createObjectOnScene((typeof eventsFunctionContext !== 'undefined' ? eventsFunctionContext : runtimeScene), gdjs.InicioCode.mapOfGDgdjs_46InicioCode_46GDInimigoObjects2Objects, gdjs.random(350), -(50), "");
}{gdjs.evtTools.runtimeScene.resetTimer(runtimeScene, "Inimigo");
}}

}


{


{
gdjs.InicioCode.GDInimigoObjects1.createFrom(runtimeScene.getObjects("Inimigo"));
gdjs.InicioCode.GDPlayerObjects1.createFrom(runtimeScene.getObjects("Player"));
{for(var i = 0, len = gdjs.InicioCode.GDInimigoObjects1.length ;i < len;++i) {
    gdjs.InicioCode.GDInimigoObjects1[i].addForceTowardObject((gdjs.InicioCode.GDPlayerObjects1.length !== 0 ? gdjs.InicioCode.GDPlayerObjects1[0] : null), 185, 0);
}
}{for(var i = 0, len = gdjs.InicioCode.GDInimigoObjects1.length ;i < len;++i) {
    gdjs.InicioCode.GDInimigoObjects1[i].rotateTowardPosition((( gdjs.InicioCode.GDPlayerObjects1.length === 0 ) ? 0 :gdjs.InicioCode.GDPlayerObjects1[0].getPointX("Center")), (( gdjs.InicioCode.GDPlayerObjects1.length === 0 ) ? 0 :gdjs.InicioCode.GDPlayerObjects1[0].getPointY("Center")), 0, runtimeScene);
}
}}

}


}; //End of gdjs.InicioCode.eventsList0x6a7aa4
gdjs.InicioCode.mapOfGDgdjs_46InicioCode_46GDTiroObjects2Objects = Hashtable.newFrom({"Tiro": gdjs.InicioCode.GDTiroObjects2});gdjs.InicioCode.mapOfGDgdjs_46InicioCode_46GDInimigoObjects2Objects = Hashtable.newFrom({"Inimigo": gdjs.InicioCode.GDInimigoObjects2});gdjs.InicioCode.mapOfGDgdjs_46InicioCode_46GDExplosaoObjects2Objects = Hashtable.newFrom({"Explosao": gdjs.InicioCode.GDExplosaoObjects2});gdjs.InicioCode.eventsList0x72c91c = function(runtimeScene) {

{

gdjs.InicioCode.GDInimigoObjects2.createFrom(runtimeScene.getObjects("Inimigo"));
gdjs.InicioCode.GDTiroObjects2.createFrom(runtimeScene.getObjects("Tiro"));

gdjs.InicioCode.condition0IsTrue_0.val = false;
{
gdjs.InicioCode.condition0IsTrue_0.val = gdjs.evtTools.object.hitBoxesCollisionTest(gdjs.InicioCode.mapOfGDgdjs_46InicioCode_46GDTiroObjects2Objects, gdjs.InicioCode.mapOfGDgdjs_46InicioCode_46GDInimigoObjects2Objects, false, runtimeScene, false);
}if (gdjs.InicioCode.condition0IsTrue_0.val) {
/* Reuse gdjs.InicioCode.GDInimigoObjects2 */
/* Reuse gdjs.InicioCode.GDTiroObjects2 */
gdjs.InicioCode.GDExplosaoObjects2.length = 0;

{gdjs.evtTools.object.createObjectOnScene((typeof eventsFunctionContext !== 'undefined' ? eventsFunctionContext : runtimeScene), gdjs.InicioCode.mapOfGDgdjs_46InicioCode_46GDExplosaoObjects2Objects, (( gdjs.InicioCode.GDInimigoObjects2.length === 0 ) ? 0 :gdjs.InicioCode.GDInimigoObjects2[0].getPointX("Center")), (( gdjs.InicioCode.GDInimigoObjects2.length === 0 ) ? 0 :gdjs.InicioCode.GDInimigoObjects2[0].getPointY("Center")), "");
}{for(var i = 0, len = gdjs.InicioCode.GDInimigoObjects2.length ;i < len;++i) {
    gdjs.InicioCode.GDInimigoObjects2[i].deleteFromScene(runtimeScene);
}
}{for(var i = 0, len = gdjs.InicioCode.GDTiroObjects2.length ;i < len;++i) {
    gdjs.InicioCode.GDTiroObjects2[i].deleteFromScene(runtimeScene);
}
}{runtimeScene.getGame().getVariables().get("Pontos").add(10);
}{runtimeScene.getVariables().get("Pontos").add(10);
}}

}


{


{
gdjs.InicioCode.GDPontosObjects2.createFrom(runtimeScene.getObjects("Pontos"));
{for(var i = 0, len = gdjs.InicioCode.GDPontosObjects2.length ;i < len;++i) {
    gdjs.InicioCode.GDPontosObjects2[i].setString("Pontos: " + gdjs.evtTools.common.toString(gdjs.evtTools.common.getVariableNumber(runtimeScene.getVariables().get("Pontos"))));
}
}}

}


{

gdjs.InicioCode.GDExplosaoObjects1.createFrom(runtimeScene.getObjects("Explosao"));

gdjs.InicioCode.condition0IsTrue_0.val = false;
{
for(var i = 0, k = 0, l = gdjs.InicioCode.GDExplosaoObjects1.length;i<l;++i) {
    if ( gdjs.InicioCode.GDExplosaoObjects1[i].hasAnimationEnded() ) {
        gdjs.InicioCode.condition0IsTrue_0.val = true;
        gdjs.InicioCode.GDExplosaoObjects1[k] = gdjs.InicioCode.GDExplosaoObjects1[i];
        ++k;
    }
}
gdjs.InicioCode.GDExplosaoObjects1.length = k;}if (gdjs.InicioCode.condition0IsTrue_0.val) {
/* Reuse gdjs.InicioCode.GDExplosaoObjects1 */
{for(var i = 0, len = gdjs.InicioCode.GDExplosaoObjects1.length ;i < len;++i) {
    gdjs.InicioCode.GDExplosaoObjects1[i].deleteFromScene(runtimeScene);
}
}}

}


}; //End of gdjs.InicioCode.eventsList0x72c91c
gdjs.InicioCode.mapOfGDgdjs_46InicioCode_46GDInimigoObjects2Objects = Hashtable.newFrom({"Inimigo": gdjs.InicioCode.GDInimigoObjects2});gdjs.InicioCode.mapOfGDgdjs_46InicioCode_46GDPlayerObjects2Objects = Hashtable.newFrom({"Player": gdjs.InicioCode.GDPlayerObjects2});gdjs.InicioCode.mapOfGDgdjs_46InicioCode_46GDExplosaoObjects2Objects = Hashtable.newFrom({"Explosao": gdjs.InicioCode.GDExplosaoObjects2});gdjs.InicioCode.eventsList0x72a64c = function(runtimeScene) {

{


gdjs.InicioCode.condition0IsTrue_0.val = false;
{
gdjs.InicioCode.condition0IsTrue_0.val = gdjs.evtTools.runtimeScene.sceneJustBegins(runtimeScene);
}if (gdjs.InicioCode.condition0IsTrue_0.val) {
{runtimeScene.getVariables().get("Vidas").setNumber(3);
}}

}


{

gdjs.InicioCode.GDInimigoObjects2.createFrom(runtimeScene.getObjects("Inimigo"));
gdjs.InicioCode.GDPlayerObjects2.createFrom(runtimeScene.getObjects("Player"));

gdjs.InicioCode.condition0IsTrue_0.val = false;
{
gdjs.InicioCode.condition0IsTrue_0.val = gdjs.evtTools.object.hitBoxesCollisionTest(gdjs.InicioCode.mapOfGDgdjs_46InicioCode_46GDInimigoObjects2Objects, gdjs.InicioCode.mapOfGDgdjs_46InicioCode_46GDPlayerObjects2Objects, false, runtimeScene, false);
}if (gdjs.InicioCode.condition0IsTrue_0.val) {
/* Reuse gdjs.InicioCode.GDInimigoObjects2 */
/* Reuse gdjs.InicioCode.GDPlayerObjects2 */
gdjs.InicioCode.GDExplosaoObjects2.length = 0;

{gdjs.evtTools.object.createObjectOnScene((typeof eventsFunctionContext !== 'undefined' ? eventsFunctionContext : runtimeScene), gdjs.InicioCode.mapOfGDgdjs_46InicioCode_46GDExplosaoObjects2Objects, (( gdjs.InicioCode.GDPlayerObjects2.length === 0 ) ? 0 :gdjs.InicioCode.GDPlayerObjects2[0].getPointX("Center")), (( gdjs.InicioCode.GDPlayerObjects2.length === 0 ) ? 0 :gdjs.InicioCode.GDPlayerObjects2[0].getPointY("Center")), "");
}{runtimeScene.getVariables().get("Vidas").sub(1);
}{for(var i = 0, len = gdjs.InicioCode.GDInimigoObjects2.length ;i < len;++i) {
    gdjs.InicioCode.GDInimigoObjects2[i].deleteFromScene(runtimeScene);
}
}{gdjs.evtTools.sound.playMusic(runtimeScene, "Audios\\sfx_Inimigo.ogg", false, 100, 1);
}}

}


{


{
gdjs.InicioCode.GDVidasObjects2.createFrom(runtimeScene.getObjects("Vidas"));
{for(var i = 0, len = gdjs.InicioCode.GDVidasObjects2.length ;i < len;++i) {
    gdjs.InicioCode.GDVidasObjects2[i].setString("Vidas: " + gdjs.evtTools.common.toString(gdjs.evtTools.common.getVariableNumber(runtimeScene.getVariables().get("Vidas"))));
}
}}

}


{


gdjs.InicioCode.condition0IsTrue_0.val = false;
{
gdjs.InicioCode.condition0IsTrue_0.val = gdjs.evtTools.common.getVariableNumber(runtimeScene.getVariables().get("Vidas")) == 0;
}if (gdjs.InicioCode.condition0IsTrue_0.val) {
gdjs.InicioCode.GDPlayerObjects2.createFrom(runtimeScene.getObjects("Player"));
{for(var i = 0, len = gdjs.InicioCode.GDPlayerObjects2.length ;i < len;++i) {
    gdjs.InicioCode.GDPlayerObjects2[i].deleteFromScene(runtimeScene);
}
}{gdjs.evtTools.sound.playMusic(runtimeScene, "Audios\\sfx_Fim.ogg", false, 100, 1);
}{gdjs.evtTools.runtimeScene.replaceScene(runtimeScene, "Fim de jogo", true);
}}

}


{


gdjs.InicioCode.condition0IsTrue_0.val = false;
{
gdjs.InicioCode.condition0IsTrue_0.val = gdjs.evtTools.input.isKeyPressed(runtimeScene, "Escape");
}if (gdjs.InicioCode.condition0IsTrue_0.val) {
{gdjs.evtTools.runtimeScene.replaceScene(runtimeScene, "Hud", false);
}}

}


}; //End of gdjs.InicioCode.eventsList0x72a64c
gdjs.InicioCode.eventsList0xb5aa0 = function(runtimeScene) {

{


if (runtimeScene.getProfiler()) { runtimeScene.getProfiler().begin("Tiro"); }gdjs.InicioCode.eventsList0x6b1cec(runtimeScene);if (runtimeScene.getProfiler()) { runtimeScene.getProfiler().end("Tiro"); }
}


{


if (runtimeScene.getProfiler()) { runtimeScene.getProfiler().begin("Inimigo"); }gdjs.InicioCode.eventsList0x6a7aa4(runtimeScene);if (runtimeScene.getProfiler()) { runtimeScene.getProfiler().end("Inimigo"); }
}


{


if (runtimeScene.getProfiler()) { runtimeScene.getProfiler().begin("Matar Inimigos + Pontos"); }gdjs.InicioCode.eventsList0x72c91c(runtimeScene);if (runtimeScene.getProfiler()) { runtimeScene.getProfiler().end("Matar Inimigos + Pontos"); }
}


{


if (runtimeScene.getProfiler()) { runtimeScene.getProfiler().begin("Matar Player + Vidas"); }gdjs.InicioCode.eventsList0x72a64c(runtimeScene);if (runtimeScene.getProfiler()) { runtimeScene.getProfiler().end("Matar Player + Vidas"); }
}


}; //End of gdjs.InicioCode.eventsList0xb5aa0


gdjs.InicioCode.func = function(runtimeScene) {
runtimeScene.getOnceTriggers().startNewFrame();

gdjs.InicioCode.GDPontosObjects1.length = 0;
gdjs.InicioCode.GDPontosObjects2.length = 0;
gdjs.InicioCode.GDPontosObjects3.length = 0;
gdjs.InicioCode.GDVidasObjects1.length = 0;
gdjs.InicioCode.GDVidasObjects2.length = 0;
gdjs.InicioCode.GDVidasObjects3.length = 0;
gdjs.InicioCode.GDFundoObjects1.length = 0;
gdjs.InicioCode.GDFundoObjects2.length = 0;
gdjs.InicioCode.GDFundoObjects3.length = 0;
gdjs.InicioCode.GDPlataformaObjects1.length = 0;
gdjs.InicioCode.GDPlataformaObjects2.length = 0;
gdjs.InicioCode.GDPlataformaObjects3.length = 0;
gdjs.InicioCode.GDPlayerspriteObjects1.length = 0;
gdjs.InicioCode.GDPlayerspriteObjects2.length = 0;
gdjs.InicioCode.GDPlayerspriteObjects3.length = 0;
gdjs.InicioCode.GDInimigoSpriteObjects1.length = 0;
gdjs.InicioCode.GDInimigoSpriteObjects2.length = 0;
gdjs.InicioCode.GDInimigoSpriteObjects3.length = 0;
gdjs.InicioCode.GDVoltarObjects1.length = 0;
gdjs.InicioCode.GDVoltarObjects2.length = 0;
gdjs.InicioCode.GDVoltarObjects3.length = 0;
gdjs.InicioCode.GDPlayerObjects1.length = 0;
gdjs.InicioCode.GDPlayerObjects2.length = 0;
gdjs.InicioCode.GDPlayerObjects3.length = 0;
gdjs.InicioCode.GDTiroObjects1.length = 0;
gdjs.InicioCode.GDTiroObjects2.length = 0;
gdjs.InicioCode.GDTiroObjects3.length = 0;
gdjs.InicioCode.GDInimigoObjects1.length = 0;
gdjs.InicioCode.GDInimigoObjects2.length = 0;
gdjs.InicioCode.GDInimigoObjects3.length = 0;
gdjs.InicioCode.GDExplosaoObjects1.length = 0;
gdjs.InicioCode.GDExplosaoObjects2.length = 0;
gdjs.InicioCode.GDExplosaoObjects3.length = 0;
gdjs.InicioCode.GDVidaObjects1.length = 0;
gdjs.InicioCode.GDVidaObjects2.length = 0;
gdjs.InicioCode.GDVidaObjects3.length = 0;

gdjs.InicioCode.eventsList0xb5aa0(runtimeScene);
return;

}
gdjs['InicioCode'] = gdjs.InicioCode;

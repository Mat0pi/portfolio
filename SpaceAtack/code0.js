gdjs.HudCode = {};
gdjs.HudCode.GDPontosObjects1= [];
gdjs.HudCode.GDPontosObjects2= [];
gdjs.HudCode.GDPontosObjects3= [];
gdjs.HudCode.GDVidasObjects1= [];
gdjs.HudCode.GDVidasObjects2= [];
gdjs.HudCode.GDVidasObjects3= [];
gdjs.HudCode.GDFundoObjects1= [];
gdjs.HudCode.GDFundoObjects2= [];
gdjs.HudCode.GDFundoObjects3= [];
gdjs.HudCode.GDPlataformaObjects1= [];
gdjs.HudCode.GDPlataformaObjects2= [];
gdjs.HudCode.GDPlataformaObjects3= [];
gdjs.HudCode.GDPlayerspriteObjects1= [];
gdjs.HudCode.GDPlayerspriteObjects2= [];
gdjs.HudCode.GDPlayerspriteObjects3= [];
gdjs.HudCode.GDInimigoSpriteObjects1= [];
gdjs.HudCode.GDInimigoSpriteObjects2= [];
gdjs.HudCode.GDInimigoSpriteObjects3= [];
gdjs.HudCode.GDVoltarObjects1= [];
gdjs.HudCode.GDVoltarObjects2= [];
gdjs.HudCode.GDVoltarObjects3= [];
gdjs.HudCode.GDTutorialObjects1= [];
gdjs.HudCode.GDTutorialObjects2= [];
gdjs.HudCode.GDTutorialObjects3= [];
gdjs.HudCode.GDCreditosObjects1= [];
gdjs.HudCode.GDCreditosObjects2= [];
gdjs.HudCode.GDCreditosObjects3= [];
gdjs.HudCode.GDIniciarObjects1= [];
gdjs.HudCode.GDIniciarObjects2= [];
gdjs.HudCode.GDIniciarObjects3= [];

gdjs.HudCode.conditionTrue_0 = {val:false};
gdjs.HudCode.condition0IsTrue_0 = {val:false};
gdjs.HudCode.condition1IsTrue_0 = {val:false};


gdjs.HudCode.eventsList0x6b4614 = function(runtimeScene) {

}; //End of gdjs.HudCode.eventsList0x6b4614
gdjs.HudCode.mapOfGDgdjs_46HudCode_46GDIniciarObjects2Objects = Hashtable.newFrom({"Iniciar": gdjs.HudCode.GDIniciarObjects2});gdjs.HudCode.mapOfGDgdjs_46HudCode_46GDTutorialObjects2Objects = Hashtable.newFrom({"Tutorial": gdjs.HudCode.GDTutorialObjects2});gdjs.HudCode.mapOfGDgdjs_46HudCode_46GDCreditosObjects1Objects = Hashtable.newFrom({"Creditos": gdjs.HudCode.GDCreditosObjects1});gdjs.HudCode.eventsList0x72c6cc = function(runtimeScene) {

{

gdjs.HudCode.GDIniciarObjects2.createFrom(runtimeScene.getObjects("Iniciar"));

gdjs.HudCode.condition0IsTrue_0.val = false;
{
gdjs.HudCode.condition0IsTrue_0.val = gdjs.evtTools.input.cursorOnObject(gdjs.HudCode.mapOfGDgdjs_46HudCode_46GDIniciarObjects2Objects, runtimeScene, true, false);
}if (gdjs.HudCode.condition0IsTrue_0.val) {
{gdjs.evtTools.runtimeScene.replaceScene(runtimeScene, "Inicio", false);
}}

}


{

gdjs.HudCode.GDTutorialObjects2.createFrom(runtimeScene.getObjects("Tutorial"));

gdjs.HudCode.condition0IsTrue_0.val = false;
{
gdjs.HudCode.condition0IsTrue_0.val = gdjs.evtTools.input.cursorOnObject(gdjs.HudCode.mapOfGDgdjs_46HudCode_46GDTutorialObjects2Objects, runtimeScene, true, false);
}if (gdjs.HudCode.condition0IsTrue_0.val) {
{gdjs.evtTools.runtimeScene.replaceScene(runtimeScene, "Tutorial", false);
}}

}


{

gdjs.HudCode.GDCreditosObjects1.createFrom(runtimeScene.getObjects("Creditos"));

gdjs.HudCode.condition0IsTrue_0.val = false;
{
gdjs.HudCode.condition0IsTrue_0.val = gdjs.evtTools.input.cursorOnObject(gdjs.HudCode.mapOfGDgdjs_46HudCode_46GDCreditosObjects1Objects, runtimeScene, true, false);
}if (gdjs.HudCode.condition0IsTrue_0.val) {
{gdjs.evtTools.runtimeScene.replaceScene(runtimeScene, "Creditos", false);
}}

}


}; //End of gdjs.HudCode.eventsList0x72c6cc
gdjs.HudCode.eventsList0xb5aa0 = function(runtimeScene) {

{


if (runtimeScene.getProfiler()) { runtimeScene.getProfiler().begin("Interações Botão"); }gdjs.HudCode.eventsList0x6b4614(runtimeScene);if (runtimeScene.getProfiler()) { runtimeScene.getProfiler().end("Interações Botão"); }
}


{


gdjs.HudCode.condition0IsTrue_0.val = false;
{
gdjs.HudCode.condition0IsTrue_0.val = gdjs.evtTools.runtimeScene.sceneJustBegins(runtimeScene);
}if (gdjs.HudCode.condition0IsTrue_0.val) {
{gdjs.evtTools.sound.playMusic(runtimeScene, "Audios\\Musiquinha.mp3", true, 100, 1);
}{gdjs.evtTools.window.setFullScreen(runtimeScene, true, true);
}}

}


{


gdjs.HudCode.condition0IsTrue_0.val = false;
{
gdjs.HudCode.condition0IsTrue_0.val = gdjs.evtTools.input.isMouseButtonReleased(runtimeScene, "Left");
}if (gdjs.HudCode.condition0IsTrue_0.val) {

{ //Subevents
gdjs.HudCode.eventsList0x72c6cc(runtimeScene);} //End of subevents
}

}


}; //End of gdjs.HudCode.eventsList0xb5aa0


gdjs.HudCode.func = function(runtimeScene) {
runtimeScene.getOnceTriggers().startNewFrame();

gdjs.HudCode.GDPontosObjects1.length = 0;
gdjs.HudCode.GDPontosObjects2.length = 0;
gdjs.HudCode.GDPontosObjects3.length = 0;
gdjs.HudCode.GDVidasObjects1.length = 0;
gdjs.HudCode.GDVidasObjects2.length = 0;
gdjs.HudCode.GDVidasObjects3.length = 0;
gdjs.HudCode.GDFundoObjects1.length = 0;
gdjs.HudCode.GDFundoObjects2.length = 0;
gdjs.HudCode.GDFundoObjects3.length = 0;
gdjs.HudCode.GDPlataformaObjects1.length = 0;
gdjs.HudCode.GDPlataformaObjects2.length = 0;
gdjs.HudCode.GDPlataformaObjects3.length = 0;
gdjs.HudCode.GDPlayerspriteObjects1.length = 0;
gdjs.HudCode.GDPlayerspriteObjects2.length = 0;
gdjs.HudCode.GDPlayerspriteObjects3.length = 0;
gdjs.HudCode.GDInimigoSpriteObjects1.length = 0;
gdjs.HudCode.GDInimigoSpriteObjects2.length = 0;
gdjs.HudCode.GDInimigoSpriteObjects3.length = 0;
gdjs.HudCode.GDVoltarObjects1.length = 0;
gdjs.HudCode.GDVoltarObjects2.length = 0;
gdjs.HudCode.GDVoltarObjects3.length = 0;
gdjs.HudCode.GDTutorialObjects1.length = 0;
gdjs.HudCode.GDTutorialObjects2.length = 0;
gdjs.HudCode.GDTutorialObjects3.length = 0;
gdjs.HudCode.GDCreditosObjects1.length = 0;
gdjs.HudCode.GDCreditosObjects2.length = 0;
gdjs.HudCode.GDCreditosObjects3.length = 0;
gdjs.HudCode.GDIniciarObjects1.length = 0;
gdjs.HudCode.GDIniciarObjects2.length = 0;
gdjs.HudCode.GDIniciarObjects3.length = 0;

gdjs.HudCode.eventsList0xb5aa0(runtimeScene);
return;

}
gdjs['HudCode'] = gdjs.HudCode;

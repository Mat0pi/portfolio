gdjs.TutorialCode = {};
gdjs.TutorialCode.GDPontosObjects1= [];
gdjs.TutorialCode.GDPontosObjects2= [];
gdjs.TutorialCode.GDVidasObjects1= [];
gdjs.TutorialCode.GDVidasObjects2= [];
gdjs.TutorialCode.GDFundoObjects1= [];
gdjs.TutorialCode.GDFundoObjects2= [];
gdjs.TutorialCode.GDPlataformaObjects1= [];
gdjs.TutorialCode.GDPlataformaObjects2= [];
gdjs.TutorialCode.GDPlayerspriteObjects1= [];
gdjs.TutorialCode.GDPlayerspriteObjects2= [];
gdjs.TutorialCode.GDInimigoSpriteObjects1= [];
gdjs.TutorialCode.GDInimigoSpriteObjects2= [];
gdjs.TutorialCode.GDVoltarObjects1= [];
gdjs.TutorialCode.GDVoltarObjects2= [];
gdjs.TutorialCode.GDTutorialObjects1= [];
gdjs.TutorialCode.GDTutorialObjects2= [];

gdjs.TutorialCode.conditionTrue_0 = {val:false};
gdjs.TutorialCode.condition0IsTrue_0 = {val:false};
gdjs.TutorialCode.condition1IsTrue_0 = {val:false};


gdjs.TutorialCode.mapOfGDgdjs_46TutorialCode_46GDVoltarObjects1Objects = Hashtable.newFrom({"Voltar": gdjs.TutorialCode.GDVoltarObjects1});gdjs.TutorialCode.eventsList0x6b2f44 = function(runtimeScene) {

{

gdjs.TutorialCode.GDVoltarObjects1.createFrom(runtimeScene.getObjects("Voltar"));

gdjs.TutorialCode.condition0IsTrue_0.val = false;
{
gdjs.TutorialCode.condition0IsTrue_0.val = gdjs.evtTools.input.cursorOnObject(gdjs.TutorialCode.mapOfGDgdjs_46TutorialCode_46GDVoltarObjects1Objects, runtimeScene, true, false);
}if (gdjs.TutorialCode.condition0IsTrue_0.val) {
{gdjs.evtTools.runtimeScene.replaceScene(runtimeScene, "Hud", false);
}}

}


}; //End of gdjs.TutorialCode.eventsList0x6b2f44
gdjs.TutorialCode.eventsList0xb5aa0 = function(runtimeScene) {

{


gdjs.TutorialCode.condition0IsTrue_0.val = false;
{
gdjs.TutorialCode.condition0IsTrue_0.val = gdjs.evtTools.input.isMouseButtonReleased(runtimeScene, "Left");
}if (gdjs.TutorialCode.condition0IsTrue_0.val) {

{ //Subevents
gdjs.TutorialCode.eventsList0x6b2f44(runtimeScene);} //End of subevents
}

}


}; //End of gdjs.TutorialCode.eventsList0xb5aa0


gdjs.TutorialCode.func = function(runtimeScene) {
runtimeScene.getOnceTriggers().startNewFrame();

gdjs.TutorialCode.GDPontosObjects1.length = 0;
gdjs.TutorialCode.GDPontosObjects2.length = 0;
gdjs.TutorialCode.GDVidasObjects1.length = 0;
gdjs.TutorialCode.GDVidasObjects2.length = 0;
gdjs.TutorialCode.GDFundoObjects1.length = 0;
gdjs.TutorialCode.GDFundoObjects2.length = 0;
gdjs.TutorialCode.GDPlataformaObjects1.length = 0;
gdjs.TutorialCode.GDPlataformaObjects2.length = 0;
gdjs.TutorialCode.GDPlayerspriteObjects1.length = 0;
gdjs.TutorialCode.GDPlayerspriteObjects2.length = 0;
gdjs.TutorialCode.GDInimigoSpriteObjects1.length = 0;
gdjs.TutorialCode.GDInimigoSpriteObjects2.length = 0;
gdjs.TutorialCode.GDVoltarObjects1.length = 0;
gdjs.TutorialCode.GDVoltarObjects2.length = 0;
gdjs.TutorialCode.GDTutorialObjects1.length = 0;
gdjs.TutorialCode.GDTutorialObjects2.length = 0;

gdjs.TutorialCode.eventsList0xb5aa0(runtimeScene);
return;

}
gdjs['TutorialCode'] = gdjs.TutorialCode;

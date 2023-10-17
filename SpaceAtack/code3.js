gdjs.CreditosCode = {};
gdjs.CreditosCode.GDPontosObjects1= [];
gdjs.CreditosCode.GDPontosObjects2= [];
gdjs.CreditosCode.GDVidasObjects1= [];
gdjs.CreditosCode.GDVidasObjects2= [];
gdjs.CreditosCode.GDFundoObjects1= [];
gdjs.CreditosCode.GDFundoObjects2= [];
gdjs.CreditosCode.GDPlataformaObjects1= [];
gdjs.CreditosCode.GDPlataformaObjects2= [];
gdjs.CreditosCode.GDPlayerspriteObjects1= [];
gdjs.CreditosCode.GDPlayerspriteObjects2= [];
gdjs.CreditosCode.GDInimigoSpriteObjects1= [];
gdjs.CreditosCode.GDInimigoSpriteObjects2= [];
gdjs.CreditosCode.GDVoltarObjects1= [];
gdjs.CreditosCode.GDVoltarObjects2= [];
gdjs.CreditosCode.GDCreditoObjects1= [];
gdjs.CreditosCode.GDCreditoObjects2= [];

gdjs.CreditosCode.conditionTrue_0 = {val:false};
gdjs.CreditosCode.condition0IsTrue_0 = {val:false};
gdjs.CreditosCode.condition1IsTrue_0 = {val:false};


gdjs.CreditosCode.mapOfGDgdjs_46CreditosCode_46GDVoltarObjects1Objects = Hashtable.newFrom({"Voltar": gdjs.CreditosCode.GDVoltarObjects1});gdjs.CreditosCode.eventsList0x6b31f4 = function(runtimeScene) {

{

gdjs.CreditosCode.GDVoltarObjects1.createFrom(runtimeScene.getObjects("Voltar"));

gdjs.CreditosCode.condition0IsTrue_0.val = false;
{
gdjs.CreditosCode.condition0IsTrue_0.val = gdjs.evtTools.input.cursorOnObject(gdjs.CreditosCode.mapOfGDgdjs_46CreditosCode_46GDVoltarObjects1Objects, runtimeScene, true, false);
}if (gdjs.CreditosCode.condition0IsTrue_0.val) {
{gdjs.evtTools.runtimeScene.replaceScene(runtimeScene, "Hud", false);
}}

}


}; //End of gdjs.CreditosCode.eventsList0x6b31f4
gdjs.CreditosCode.eventsList0xb5aa0 = function(runtimeScene) {

{


gdjs.CreditosCode.condition0IsTrue_0.val = false;
{
gdjs.CreditosCode.condition0IsTrue_0.val = gdjs.evtTools.input.isMouseButtonPressed(runtimeScene, "Left");
}if (gdjs.CreditosCode.condition0IsTrue_0.val) {

{ //Subevents
gdjs.CreditosCode.eventsList0x6b31f4(runtimeScene);} //End of subevents
}

}


}; //End of gdjs.CreditosCode.eventsList0xb5aa0


gdjs.CreditosCode.func = function(runtimeScene) {
runtimeScene.getOnceTriggers().startNewFrame();

gdjs.CreditosCode.GDPontosObjects1.length = 0;
gdjs.CreditosCode.GDPontosObjects2.length = 0;
gdjs.CreditosCode.GDVidasObjects1.length = 0;
gdjs.CreditosCode.GDVidasObjects2.length = 0;
gdjs.CreditosCode.GDFundoObjects1.length = 0;
gdjs.CreditosCode.GDFundoObjects2.length = 0;
gdjs.CreditosCode.GDPlataformaObjects1.length = 0;
gdjs.CreditosCode.GDPlataformaObjects2.length = 0;
gdjs.CreditosCode.GDPlayerspriteObjects1.length = 0;
gdjs.CreditosCode.GDPlayerspriteObjects2.length = 0;
gdjs.CreditosCode.GDInimigoSpriteObjects1.length = 0;
gdjs.CreditosCode.GDInimigoSpriteObjects2.length = 0;
gdjs.CreditosCode.GDVoltarObjects1.length = 0;
gdjs.CreditosCode.GDVoltarObjects2.length = 0;
gdjs.CreditosCode.GDCreditoObjects1.length = 0;
gdjs.CreditosCode.GDCreditoObjects2.length = 0;

gdjs.CreditosCode.eventsList0xb5aa0(runtimeScene);
return;

}
gdjs['CreditosCode'] = gdjs.CreditosCode;

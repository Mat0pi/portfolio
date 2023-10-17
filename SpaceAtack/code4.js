gdjs.Fim_32de_32jogoCode = {};
gdjs.Fim_32de_32jogoCode.GDPontosObjects1= [];
gdjs.Fim_32de_32jogoCode.GDPontosObjects2= [];
gdjs.Fim_32de_32jogoCode.GDVidasObjects1= [];
gdjs.Fim_32de_32jogoCode.GDVidasObjects2= [];
gdjs.Fim_32de_32jogoCode.GDFundoObjects1= [];
gdjs.Fim_32de_32jogoCode.GDFundoObjects2= [];
gdjs.Fim_32de_32jogoCode.GDPlataformaObjects1= [];
gdjs.Fim_32de_32jogoCode.GDPlataformaObjects2= [];
gdjs.Fim_32de_32jogoCode.GDPlayerspriteObjects1= [];
gdjs.Fim_32de_32jogoCode.GDPlayerspriteObjects2= [];
gdjs.Fim_32de_32jogoCode.GDInimigoSpriteObjects1= [];
gdjs.Fim_32de_32jogoCode.GDInimigoSpriteObjects2= [];
gdjs.Fim_32de_32jogoCode.GDVoltarObjects1= [];
gdjs.Fim_32de_32jogoCode.GDVoltarObjects2= [];
gdjs.Fim_32de_32jogoCode.GDFimdoJogoObjects1= [];
gdjs.Fim_32de_32jogoCode.GDFimdoJogoObjects2= [];
gdjs.Fim_32de_32jogoCode.GDRecomecarObjects1= [];
gdjs.Fim_32de_32jogoCode.GDRecomecarObjects2= [];
gdjs.Fim_32de_32jogoCode.GDLogoObjects1= [];
gdjs.Fim_32de_32jogoCode.GDLogoObjects2= [];

gdjs.Fim_32de_32jogoCode.conditionTrue_0 = {val:false};
gdjs.Fim_32de_32jogoCode.condition0IsTrue_0 = {val:false};
gdjs.Fim_32de_32jogoCode.condition1IsTrue_0 = {val:false};


gdjs.Fim_32de_32jogoCode.mapOfGDgdjs_46Fim_9532de_9532jogoCode_46GDRecomecarObjects1Objects = Hashtable.newFrom({"Recomecar": gdjs.Fim_32de_32jogoCode.GDRecomecarObjects1});gdjs.Fim_32de_32jogoCode.eventsList0x727874 = function(runtimeScene) {

{

gdjs.Fim_32de_32jogoCode.GDRecomecarObjects1.createFrom(runtimeScene.getObjects("Recomecar"));

gdjs.Fim_32de_32jogoCode.condition0IsTrue_0.val = false;
{
gdjs.Fim_32de_32jogoCode.condition0IsTrue_0.val = gdjs.evtTools.input.cursorOnObject(gdjs.Fim_32de_32jogoCode.mapOfGDgdjs_46Fim_9532de_9532jogoCode_46GDRecomecarObjects1Objects, runtimeScene, true, false);
}if (gdjs.Fim_32de_32jogoCode.condition0IsTrue_0.val) {
{gdjs.evtTools.runtimeScene.replaceScene(runtimeScene, "Inicio", false);
}}

}


}; //End of gdjs.Fim_32de_32jogoCode.eventsList0x727874
gdjs.Fim_32de_32jogoCode.eventsList0xb5aa0 = function(runtimeScene) {

{


{
gdjs.Fim_32de_32jogoCode.GDPontosObjects1.createFrom(runtimeScene.getObjects("Pontos"));
{for(var i = 0, len = gdjs.Fim_32de_32jogoCode.GDPontosObjects1.length ;i < len;++i) {
    gdjs.Fim_32de_32jogoCode.GDPontosObjects1[i].setString("Pontos: " + gdjs.evtTools.common.toString(gdjs.evtTools.common.getVariableNumber(runtimeScene.getGame().getVariables().get("Pontos"))));
}
}}

}


{


gdjs.Fim_32de_32jogoCode.condition0IsTrue_0.val = false;
{
gdjs.Fim_32de_32jogoCode.condition0IsTrue_0.val = gdjs.evtTools.input.isMouseButtonReleased(runtimeScene, "Left");
}if (gdjs.Fim_32de_32jogoCode.condition0IsTrue_0.val) {

{ //Subevents
gdjs.Fim_32de_32jogoCode.eventsList0x727874(runtimeScene);} //End of subevents
}

}


}; //End of gdjs.Fim_32de_32jogoCode.eventsList0xb5aa0


gdjs.Fim_32de_32jogoCode.func = function(runtimeScene) {
runtimeScene.getOnceTriggers().startNewFrame();

gdjs.Fim_32de_32jogoCode.GDPontosObjects1.length = 0;
gdjs.Fim_32de_32jogoCode.GDPontosObjects2.length = 0;
gdjs.Fim_32de_32jogoCode.GDVidasObjects1.length = 0;
gdjs.Fim_32de_32jogoCode.GDVidasObjects2.length = 0;
gdjs.Fim_32de_32jogoCode.GDFundoObjects1.length = 0;
gdjs.Fim_32de_32jogoCode.GDFundoObjects2.length = 0;
gdjs.Fim_32de_32jogoCode.GDPlataformaObjects1.length = 0;
gdjs.Fim_32de_32jogoCode.GDPlataformaObjects2.length = 0;
gdjs.Fim_32de_32jogoCode.GDPlayerspriteObjects1.length = 0;
gdjs.Fim_32de_32jogoCode.GDPlayerspriteObjects2.length = 0;
gdjs.Fim_32de_32jogoCode.GDInimigoSpriteObjects1.length = 0;
gdjs.Fim_32de_32jogoCode.GDInimigoSpriteObjects2.length = 0;
gdjs.Fim_32de_32jogoCode.GDVoltarObjects1.length = 0;
gdjs.Fim_32de_32jogoCode.GDVoltarObjects2.length = 0;
gdjs.Fim_32de_32jogoCode.GDFimdoJogoObjects1.length = 0;
gdjs.Fim_32de_32jogoCode.GDFimdoJogoObjects2.length = 0;
gdjs.Fim_32de_32jogoCode.GDRecomecarObjects1.length = 0;
gdjs.Fim_32de_32jogoCode.GDRecomecarObjects2.length = 0;
gdjs.Fim_32de_32jogoCode.GDLogoObjects1.length = 0;
gdjs.Fim_32de_32jogoCode.GDLogoObjects2.length = 0;

gdjs.Fim_32de_32jogoCode.eventsList0xb5aa0(runtimeScene);
return;

}
gdjs['Fim_32de_32jogoCode'] = gdjs.Fim_32de_32jogoCode;

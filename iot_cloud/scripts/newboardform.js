var noSensor = 0;

function desactivarSensores(){
    var estado1 = document.getElementById('sensor-1');
    var estado2 = document.getElementById('sensor-2');
    if(noSensor == 0){
        noSensor = 1;
    }else{
        noSensor = 0;
    }
    estado1.disabled = !estado1.disabled;
    estado2.disabled = !estado2.disabled;
   // document.getElementById("sensor-1").disabled = !document.getElementById("sensor-1").disabled;
   // document.getElementById("sensor-2").disabled = !document.getElementById("sensor-2").disabled;
}

function createNewBoard(){
    var boardName = document.getElementById('boardName').value;
    var boardDescription = document.getElementById('boardDescription').value;
    if(noSensor == 0){
        var sensor1Name = document.getElementById('sensor-1').value;
        var sensor2Name = document.getElementById('sensor-2').value;
    }else{
        var sensor1Name = '';
        var sensor2Name = '';
    }
    //var saveBoardLink = '/saveboard.php?name='+ boarName +'&description='+ boardDescription +'&sensor1'+sensor1Name+'&sensor2'+sensor2Name+'&nosensor'+noSensor;

   var saveBoardLink = `saveboard.php?name=${boardName}&description=${boardDescription}&sensor1=${sensor1Name}&sensor2=${sensor2Name}&nosensor=${noSensor}`;
    console.log(saveBoardLink);
    window.location = saveBoardLink;
} 
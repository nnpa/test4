<script
  src="https://code.jquery.com/jquery-3.7.1.js"
  integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
  crossorigin="anonymous"></script>
<script type="text/javascript">
$( document ).ready(function() {
    //load table
    tableData = [];
    for(var i = 0;i<5;i++){
       var row = [getRand(),getRand(),getRand(),getRand(),getRand()];
       tableData[i]= row;
    }
    var tbl = "<table border='1'>";
    for(var i = 0;i<5;i++){
       tbl = tbl + '<tr>';
       for(var j = 0;j<5;j++){
          tbl += '<td>';
          tbl += tableData[i][j];
          tbl += '</td>';
       }
       tbl += '</tr>';
    }
    tbl = tbl + "</table>";
    $("#tbl").html(tbl);
    $( "#btn1" ).on( "click", function() {
       changeColor();
     } );
    $( "#btn3" ).on( "click", function() {
       changeColor();
     } );
    $( "#btn2" ).on( "click", function() {
      changeColor();
      var k = 0;
      var z = 0;
      for(var i = 0;i<5;i++){
         
         for(var j = 0;j<5;j++){
            if(tableData[i][j] == 0){
              if(checkArryaIndex(i-1,j)){
                if(tableData[i-1][j] == 1){
                   k +=1;
                }
              }
              if(checkArryaIndex(i+1,j)){
                if(tableData[i+1][j] == 1){
                  k +=1;
                }
              }
              if(checkArryaIndex(i,j-1)){
                if(tableData[i][j-1] == 1){
                   k +=1;
                }
              }
              if(checkArryaIndex(i,j+1)){
                if(tableData[i][j+1] == 1){
                   k +=1;
                }
              }
             
             if(k>1){
               z +=1;
             }
             k=0;
           }
         }

      }
      
      alert(z);
     } );
});

function getRand(){
  var oneOrZero = (Math.random()>=0.5)? 1 : 0;
  return oneOrZero;
}
function changeColor(){
  $("td").css("background",'yellow');
  
}

function checkArryaIndex(index1,index2){
  if(typeof tableData[index1]=== 'undefined' ){
   return false;
  }
    if(typeof tableData[index1][index2] === 'undefined') {
      return false;
    }
  
  return true;
}

</script>
<input type="button" id="btn1" value="1">
<input type="button" id="btn2" value="2">
<input type="button" id="btn3" value="3">
<div id="tbl">
  
</div>

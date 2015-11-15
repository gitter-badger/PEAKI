
var f = document.getElementById("frame01").innerHTML;
var contents = $("#frame01+.p").text();

var obj = {heading: 123, contents: "contents",keywords:"array keyword",img:"THIS ARRAY OF IMG FROM API miniUPLOADER IMGUR"};
var dataURI = "text/json;charset=utf-8," + encodeURIComponent(JSON.stringify(obj));
var dataJson = JSON.stringify(obj);

 document.getElementById("Download").innerHTML+='<a href="data:' + dataURI + '" download="myData.PKI">download PKI </a>';
 
 function toServer(){
 
var jsonString = JSON.stringify(dataJson);
alert(jsonString);
 $.ajax({
    type: "POST",
    url: "2readjson.php",
   dataType: "json",
    data: {data : jsonString}, 
  // data: jsonString,
    cache: false,

    success: function(res){
       alert("Success");
      
    }
});
 }
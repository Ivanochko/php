/*<script> 
str="1 2 3 4";
arr=str.split(' ')
document.writeln("вапіап str="+str+"<p>")
for (g=arr.length-1;g>=0;g--){document.writeln(arr[g])}
</script>

*/

$(document).ready(function(){
//alert("ready JS");

$("td").hover(

function(){
$(this).addClass("hover");
},

function(){
$(this).removeClass("hover");
}
);
$("a").hover(

function(){
$(this).addClass("hover");
},

function(){
$(this).removeClass("hover");
}
);

});




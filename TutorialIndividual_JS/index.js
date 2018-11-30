var v1,v2,v3,v4,v5,v6,v7,v8;
function detect_s1()
{
var x1=document.getElementById("s1").value;
document.getElementById("ds_1").value=x1;
}

function detect_s2()
{
var x1=document.getElementById("s2").value;
document.getElementById("ds_2").value=x1;
}

function detect_s3()
{
var x1=document.getElementById("s3").value;
document.getElementById("ds_3").value=x1;
}

function detect_s4()
{
var x1=document.getElementById("s4").value;
document.getElementById("ds_4").value=x1;
}

function shirt()
{
var x1=document.getElementById("id5").value;
document.getElementById("ds_5").value=x1;
}

function pants()
{
var x1=document.getElementById("id6").value;
document.getElementById("ds_6").value=x1;
}
function processItem1()
{
var x1=document.getElementById("ds_1").value;
var x2=document.getElementById("id1").value;
var x3=x1*x2;
document.getElementById("a1").value=x3;
v1=x3;
}

function processItem2()
{
var x1=document.getElementById("ds_2").value;
var x2=document.getElementById("id2").value;
var x3=x1*x2;
document.getElementById("a2").value=x3;
v2=x3;
}

function processItem3()
{
var x1=document.getElementById("ds_3").value;
var x2=document.getElementById("id3").value;
var x3=x1*x2;
document.getElementById("a3").value=x3;
v3=x3;
}

function processItem4()
{
var x1=document.getElementById("ds_4").value;
var x2=document.getElementById("id4").value;
var x3=x1*x2;
document.getElementById("a4").value=x3;
v4=x3;
}

function processShirts()
{
var x1=document.getElementById("ds_5").value;
var x2=document.getElementById("id5").value;
var x3=x1*x2;
document.getElementById("a5").value=x3;
v5=x3;
}

function processPants()
{
var x1=document.getElementById("ds_6").value;
var x2=document.getElementById("id6").value;
var x3=x1*x2;
document.getElementById("a6").value=x3;
v6=x3;
}

function taxRate()
{
var x1=document.getElementById("tax_rate").value;
var x2=document.getElementById("Cleaning_total").value;
var x3=(x1/100)*x2;
(x3);
document.getElementById("tax_amount").value=x3;
v7=x3;
}

function OrderTotal()
{
var x1=document.getElementById("tax_amount").value;
var x2=document.getElementById("Cleaning_total").value;
var x3=x2+x1;
document.getElementById("Order_total").value=x3;
v8=x3;
}

function processOrder()
{
var x1=v1+v2+v3+v4+v5+v6;
taxRate();
OrderTotal();

document.getElementById("Cleaning_total").value=x1;

}
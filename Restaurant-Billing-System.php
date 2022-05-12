<?php

extract($_POST);


if(isset($add))
{
	
$subtotal1 = ($number1 * 195) + ($number2 * 110) + ($number3 * 230) + ($number4 * 245);
$subtotal2 = ($number5 * 87) + ($number6 * 110) + ($number7 * 230) + ($number8 * 245);
$subtotal3 = ($number9 * 45) + ($number10 * 110) + ($number11 * 230) + ($number12 * 245);
$subtotal4 = ($number13 * 87) + ($number14 * 245) + ($number15 * 230) + ($number16 * 245);

$subtotal = $subtotal1 + $subtotal2 + $subtotal3 + $subtotal4;

$tax = $subtotal *  0.12;

$total = $subtotal + $tax;
}
?>





<HTML>
<HEAD>
<TITLE>Restaurant Billing System</TITLE>

<style type="text/css">

.style1 {	

	border: solid powderblue 0px;
	width: 90%;
	border-radius: 5px;
	margin: 5px auto;
	background: powderblue;

}
.style2 {

	border: solid cadetblue 10px;
	width: 90%;
	border-radius: 5px;
	margin: 5px auto;
	background: cadetblue;
	
}


.cbtn{
	width:50px; 
	height:40px; 
	font-size:25; 
	border-radius:8px
	
}
 


</style>
</HEAD>

<BODY bgcolor="#5F9EA0">
<center><img src="Restaurant.jpg" width="1200" height="600">
<B><font color="white" style ="font-size:80" > Restaurant Billing System </font></B>
</center>
<hr size=5 color = "powderblue">
<div>
<table class="style1" border="4">
<tr>
<td>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">

	<table class="style1" width="700px"  >
		
		<tr>
		<td>Cheese Pizza (Rs.195):</td>
			<td>
			<input type="number" style="width: 200px" name="number1" value="<?php echo $number1; ?>" 
			onfocus="this.value=''" ></td>
		</tr>
		
		<tr>
		<td>Veg Sandwich (Rs.110):</td>
			<td>
			<input type="number" style="width: 200px" name="number2" value="<?php echo $number2; ?>" 
			onfocus="this.value=''" ></td>
		</tr>
		
		<tr>
		<td>Peri Peri Fries (Rs.230):</td>
			<td>
			<input type="number" style="width: 200px" name="number3" value="<?php echo $number3; ?>" 
			onfocus="this.value=''" ></td>
		</tr>
		
		<tr>
		<td>Paneer Tandoori Pizza (Rs.245):</td>
			<td>
			<input type="number" style="width: 200px" name="number4" value="<?php echo $number4; ?>" 
			onfocus="this.value=''" ></td>
		</tr>
		
		<tr>
		<td>Garlic Bread (Rs.87):</td>
			<td>
			<input type="number" style="width: 200px" name="number5" value="<?php echo $number5; ?>" 
			onfocus="this.value=''" ></td>
		</tr>
		
		<tr>
		<td>Nachos (Rs.110):</td>
			<td>
			<input type="number" style="width: 200px" name="number6" value="<?php echo $number6; ?>" 
			onfocus="this.value=''" ></td>
		</tr>
		
		<tr>
		<td>Jumbo Veg Burger (Rs.230):</td>
			<td>
			<input type="number" style="width: 200px" name="number7" value="<?php echo $number7; ?>" 
			onfocus="this.value=''" ></td>
		</tr>
		
		<tr>
		<td>Veg Whopper Combo (Rs.245):</td>
			<td>
			<input type="number" style="width: 200px" name="number8" value="<?php echo $number8; ?>" 
			onfocus="this.value=''" ></td>
		</tr>
		
		<tr>
		<td>Hakka Noodles (Rs.230):</td>
			<td>
			<input type="number" style="width: 200px" name="number9" value="<?php echo $number9; ?>" 
			onfocus="this.value=''" ></td>
		</tr>
		
		<tr>
		<td>Veg Crunchy Volcano(Rs.110):</td>
			<td>
			<input type="number" style="width: 200px" name="number10" value="<?php echo $number10; ?>" 
			onfocus="this.value=''" ></td>
		</tr>
		
		
	
		
</td>
</table>
<!--==================================================================================================================-->


<!--==================================================================================================================-->

<td>
<table class="style1" width="700px">
	<tr>
		<td> Minty Mojito(Rs.230):</td>
			<td>
			<input type="number" style="width: 200px" name="number11" value="<?php echo $number11; ?>" 
			onfocus="this.value=''" ></td>
		</tr>
		
		<tr>
		<td>2 Oreo shakes (Rs.245):</td>
			<td>
			<input type="number" style="width: 200px" name="number12" value="<?php echo $number12; ?>" 
			onfocus="this.value=''" ></td>
		</tr>
		
		<tr>
		<td>Choco Lava Cake (Rs.87):</td>
			<td>
			<input type="number" style="width: 200px" name="number13" value="<?php echo $number13; ?>" 
			onfocus="this.value=''" ></td>
		</tr>
		
		<tr>
		<td>Mocha Frape (Rs.245):</td>
			<td>
			<input type="number" style="width: 200px" name="number14" value="<?php echo $number14; ?>" 
			onfocus="this.value=''" ></td>
		</tr>
		
		<tr>
		<td>Tender Coconut icecream (Rs.230):</td>
			<td>
			<input type="number" style="width: 200px" name="number15" value="<?php echo $number15; ?>" 
			onfocus="this.value=''" ></td>
		</tr>
		
		<tr>
		<td>Sizzling Brownie (Rs.245):</td>
			<td>
			<input type="number" style="width: 200px" name="number16" value="<?php echo $number16; ?>" 
			onfocus="this.value=''" ></td>
		</tr>
		
		<tr><td bgcolor="#5F9EA0">&nbsp;</td>
		<td style="width: 480px"  bgcolor="#5F9EA0"><b><u><font color ="white">Total Cost</font></u></b></td>
		</tr>
		<!--========================================================================================-->
		

	
		
		<tr>
		<td style="width: 250px">Tax:</td>
			
				<td><input type="text" name = "tax" style="width: 400px" 
					value="<?php $tax; echo $tax; ?>" onfocus="this.value=''">			
			
			
			</td>
		</tr>
		
		<tr>
		<td>Subtotal :</td>       
			
			<td><input type="text" name = "subtotal" style="width: 400px" 
					value="<?php $subtotal; echo $subtotal; ?>" onfocus="this.value=''">		
			</td>
			
		</tr>
		
		<tr>
		
		<td>Total:</td>
				
			<td><input type="text" name = "total" style="width: 400px" 
					value="<?php $total; echo $total; ?>" onfocus="this.value=''">		
			
			
			</td>				
		
		</tr>
		
		<tr>
		
		<td>&nbsp;</td><td align="left" style="width: 400px">
			<input type="submit" value="Total Cost" name = 'add' class='btn'></td>	
			
		</tr>
</table>
</form>
</td>
<!--==================================================================================================================-->





<!--=====================Calcualtor=============================================================-->

<td>
<form name ="Calculator"  class="style2"> 
<input name ="display" placeholder = "0" style ="width:212px; height:40px; text-align:right; font-size:30; 
border-radius:8px; margin:3px"/>
<br>
<input type ="button"  value="7" onClick ="document.Calculator.display.value +='7'" class='cbtn'/>
<input type ="button"  value="8" onClick ="document.Calculator.display.value +='8'" class='cbtn'/>
<input type ="button"  value="9" onClick ="document.Calculator.display.value +='9'" class='cbtn'/>
<input type ="button"  value="+" onClick ="btnplus()" class='cbtn'/>
<br>
<input type ="button"  value="4" onClick ="document.Calculator.display.value +='4'" class='cbtn'/>
<input type ="button"  value="5" onClick ="document.Calculator.display.value +='5'" class='cbtn'/>
<input type ="button"  value="6" onClick ="document.Calculator.display.value +='6'" class='cbtn'/>
<input type ="button"  value="-" onClick ="btnsub()" class='cbtn'/>
<br>
<input type ="button"  value="1" onClick ="document.Calculator.display.value +='1'" class='cbtn'/>
<input type ="button"  value="2" onClick ="document.Calculator.display.value +='2'" class='cbtn'/>
<input type ="button"  value="3" onClick ="document.Calculator.display.value +='3'" class='cbtn'/>
<input type ="button"  value="*" onClick ="btnmult()" class='cbtn'/>
<br>
<input type ="button"  value="0" onClick ="document.Calculator.display.value +='0'" class='cbtn'/>
<input type ="button"  value="%" onClick ="btnMod()" class='cbtn'/>
<input type ="button"  value="." onClick ="btndot()" class='cbtn'/>
<input type ="button"  value="/" onClick ="btndiv()" class='cbtn'/>
<br>
<input type ="button"  value="=" onClick ="document.Calculator.display.value = eval(document.Calculator.display.value)"
 style ="width:101px; height:40px; font-size:30; border-radius:8px ; margin:3px"/>
<input type ="button"  value="C" onClick ="btnclear()" style ="width:101px; height:40px; font-size:30; border-radius:8px "/>

</form></td>

</tr>

</table></div>

<hr size=5 color = "powderblue">
<SCRIPT>

function btnplus()
{	document.Calculator.display.value +="+";
document.Calculator.display.style.textAlign="right";}
function btnsub()
{	document.Calculator.display.value +="-";
document.Calculator.display.style.textAlign="right";}
function btnmult()
{	document.Calculator.display.value +="*";
document.Calculator.display.style.textAlign="right";}
function btnMod()
{	document.Calculator.display.value +="%";
document.Calculator.display.style.textAlign="right";}
function btndot()
{	document.Calculator.display.value +=".";
document.Calculator.display.style.textAlign="right";}
function btndiv()
{	document.Calculator.display.value +="/";
document.Calculator.display.style.textAlign="right";}
function btnclear()
{	document.Calculator.display.value ="";
document.Calculator.display.style.textAlign="right";}

</SCRIPT> 

<!--==============================================================================================-->
</td>
</tr>
</table>

</BODY>
</HTML>
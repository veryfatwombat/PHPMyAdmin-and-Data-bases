/* Calculations

*/

function cal1()
{
	//var Prod1Rt,Prod2Rt,Prod1qty,Prod2qty;
	var P1Rt, P1Rt,P1qty, P2qty;
	var gst=0, subTotale=0,totale=0;
	
	
	//read input values
	/*Prod1Rt=document.frmS.Prod1Rt.value;
	Prod2Rt=document.frmS.Prod2Rt.value;
	Prod1qty=document.frmS.Prod1qty.value;
	Prod2qty=document.frmS.Prod2qty.value;
*/
	//convert text to numbers
	
	P1Rt=document.frmS.Prod1Rt.value;
	P2Rt=document.frmS.Prod2Rt.value;
	P1qty=document.frmS.Prod1qty.value;
	P2qty=document.frmS.Prod2qty.value;
	

	
	subTotale=(P1Rt*P1qty)+(P2Rt*P2qty);
	
	gst=subTotale*0.1;
	
	totale=subTotale+gst;
	
	document.frmS.tsubTtl.value=subTotale.toFixed(2); 
	document.frmS.tGST.value=gst.toFixed(2);
	document.frmS.Ttl.value=totale.toFixed(2);
}
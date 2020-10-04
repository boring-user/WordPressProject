// SELECTED VALUE //
//var store;
 
function selectedvalue()
{ 
store=document.getElementById("menu1").selectedIndex;
//setvalue(store);
}
function setvalue(x)
{ 
document.getElementById("menu1").selectedIndex=x;	
}

// SIP //
gHidenValuet=0;
gHidenValuel=0;
gHidenValuef=0;
ini=0;
FV=0;
b1=0;
function dual(a,b)
{	
	b.value=a*12;
	gHidenValuet=a*12;
}
function revdual(a,b)
{	
	b.value=a/12;
}
function copy(x,y)
{
y.value=x;
}
function single(x,y,a,b,c,d,e,f,e1,f1,ex)
{
y.value=x;
res=0;
res=a*b*12;
c.value=res;
d.value=res;
b1=Math.pow((1 + x/100),1/12) - 1;
K=a/b1;
L=Math.pow((1+b1),b*12)-1;
M=1+b1;
T=K*L*M;
T = "" + T;
T = (T.indexOf(".") >= 0) ? T.substring(0, T.indexOf(".",1) + 3) : T + ".00";
e.value=Math.round(T);
TT=T/res;
TT = "" + TT;
TT = (TT.indexOf(".") >= 0) ? TT.substring(0, TT.indexOf(".",1) + 3) : TT + ".00";
f.value=TT  + '   times';
AA=ex.value*100/y.value;//
BB=Math.pow((1 + y.value/100),b)-1;
CC=1+y.value/100;
DD=AA*BB*CC;
DD = "" + DD;
DD = (DD.indexOf(".") >= 0) ? DD.substring(0, DD.indexOf(".",1) + 3) : DD + ".00";
e1.value=Math.round(DD);
QQ=DD/d.value;
QQ = "" + QQ;
QQ=(QQ.indexOf(".") >= 0) ? QQ.substring(0, QQ.indexOf(".",1) + 3) : QQ + ".00";
f1.value=QQ + '   times';//Math.round(QQ);
}


//  INSURANCE  //
function CALinsurance(A,B,C,D,E,F,G,H)
{
GG=0;
EE=0;
CC=0;
DD=0;
B.value=A.value*12;
G.value=Math.round((B.value/F.value)*100);
GG=G.value;
EE=E.value;
CC=C.value;
DD=D.value;
H.value=Math.round(eval(GG)-eval(EE)-eval(CC)+eval(DD));

}

//  LOAN  //

function EMI()   //((C12*C4/1200)*(1+C4/1200)^(C5*12))/((1+C4/1200)^(C5*12)-1)
{
	tt=eval(document.form1.C12.value)*eval(document.form1.C4.value)/1200;
	xx=Math.pow((1+eval(document.form1.C4.value)/1200),(eval(document.form1.C5.value)*12));
	yy=Math.pow((1+eval(document.form1.C4.value)/1200),eval(document.form1.C5.value)*12)-1;
	document.form1.C7.value=Math.round((tt*xx)/yy);
	document.form1.C11.value=Math.round(eval(document.form1.C7.value)*eval(document.form1.C5.value)*12);
	document.form1.C13.value=Math.round(eval(document.form1.C11.value)-eval(document.form1.C12.value));
	TT=(Math.pow((1+eval(document.form1.C4.value)/1200),12)-1)*100;
	TT = "" + TT;
    TT = (TT.indexOf(".") >= 0) ? TT.substring(0, TT.indexOf(".",1) + 3) : TT + ".00";
	document.form1.C15.value=TT + '  %';
	document.form1.E13.value=eval(document.form1.E4.value)*eval(document.form1.E5.value)*eval(document.form1.E3.value)/100;
	document.form1.E11.value=eval(document.form1.E12.value)+eval(document.form1.E13.value);
	document.form1.E7.value=Math.round(eval(document.form1.E11.value)/(eval(document.form1.E5.value)*12));
	document.form1.E15.value= '  %';
}


// RETIREMENT //
/*function Expense(F,G,C,I)
{
	ival=Math.pow((1+G.value/100),C.value);
	fval=ival*F.value;
	I.value=Math.round(fval);
}*/
function Fund(F,G,C,X,Y,I,E)
{
	document.form1.C.value=document.form1.A.value-document.form1.B.value;
	document.form1.E.value=document.form1.D.value-document.form1.B.value;
	document.form1.C.value=document.form1.B.value-document.form1.A.value;
	ival=Math.pow((1+G.value/100),C.value);
	fval=ival*F.value;
	I.value=Math.round(fval);
	i=1+X.value/100;
	j=(1+Y.value/100);
	HID=i/j-1;
	//alert(HID);
	retfund(I.value,HID,E.value);
	}
	function retfund(I,HD,E)
	{ 	
	    C11=I;
		D7=HD;
		B5=E;
		AA=(C11*12/D7)*(1+D7/12);
		BB=(Math.pow((1+D7/12),B5*12)-1)/(Math.pow((1+D7/12),B5*12));
		DD=AA*BB/100000;
		HH=DD;
	    DD = "" + DD;
        DD = (DD.indexOf(".") >= 0) ? DD.substring(0, DD.indexOf(".",1) + 3) : DD + ".00";
		document.form1.J.value=DD;
		P1=9/100;
		P2=12/100;
		P3=15/100;
		P4=18/100;
		HP1=(Math.pow((1+P1),(1/12))-1);//*100;
		HP2=(Math.pow((1+P2),(1/12))-1);//*100;
		HP3=(Math.pow((1+P3),(1/12))-1);//*100;
		HP4=(Math.pow((1+P4),(1/12))-1);//*100;
		C13=HH;
		B18=HP1;
		B3=document.form1.C.value;
		XX1=(C13*B18)*100000;
		YY1=Math.pow((1+B18),(B3*12))-1
		ZZ1=1+B18;
		RR1=YY1*ZZ1;
		FR1=Math.round(XX1/RR1);
		document.form1.M1.value=FR1;
		B18=HP2;
		XX2=(C13*B18)*100000;
		YY2=Math.pow((1+B18),(B3*12))-1
		ZZ2=1+B18;
		RR2=YY2*ZZ2;
		FR2=Math.round(XX2/RR2);
		document.form1.M2.value=FR2;
		B18=HP3;
		XX3=(C13*B18)*100000;
		YY3=Math.pow((1+B18),(B3*12))-1
		ZZ3=1+B18;
		RR3=YY3*ZZ3;
		FR3=Math.round(XX3/RR3);
		document.form1.M3.value=FR3;
		B18=HP4;
		XX4=(C13*B18)*100000;
		YY4=Math.pow((1+B18),(B3*12))-1
		ZZ4=1+B18;
		RR4=YY4*ZZ4;
		FR4=Math.round(XX4/RR4);
		document.form1.M4.value=FR4;
		B17=P1;
		XX1=(C13*B17)*100000;
		YY1=Math.pow((1+B17),B3)-1;
		ZZ1=1+B17;
		RR1=YY1*ZZ1;
		FR1=Math.round(XX1/RR1);
		document.form1.A1.value=FR1;
		B17=P2;
		XX2=(C13*B17)*100000;
		YY2=Math.pow((1+B17),B3)-1;
		ZZ2=1+B17;
		RR2=YY2*ZZ2;
		FR2=Math.round(XX2/RR2);
		document.form1.A2.value=FR2;
		B17=P3;
		XX3=(C13*B17)*100000;
		YY3=Math.pow((1+B17),B3)-1;
		ZZ3=1+B17;
		RR3=YY3*ZZ3;
		FR3=Math.round(XX3/RR3);
		document.form1.A3.value=FR3;
		B17=P4;
		XX4=(C13*B17)*100000;
		YY4=Math.pow((1+B17),B3)-1;
		ZZ4=1+B17;
		RR4=YY4*ZZ4;
		FR4=Math.round(XX4/RR4);
		document.form1.A4.value=FR4;
		if(B3>5)
		{ B28=HH*100000/Math.pow((1+P1),(B3-5)); }  else { B28='NA'; }
		if(B3>5)
		{ C28=HH*100000/Math.pow((1+P2),(B3-5)); }  else { C28='NA';  }
		if(B3>5)
		{ D28=HH*100000/Math.pow((1+P3),(B3-5)); }  else { D28='NA';  }
		if(B3>5)
		{ E28=HH*100000/Math.pow((1+P4),(B3-5)); }  else { E28='NA';  }
		//IF($B$3>5,((B28*B17)/(((1+B17)^5-1)*(1+B17))),"N.A.")
		if(B3>5)
		{ document.form1.L1.value=Math.round(eval(B28*P1)/(eval(Math.pow((1+P1),5)-1)*(1+P1))); } else { document.form1.L1.value='NA'; }
		if(B3>5)
		{ document.form1.L2.value=Math.round(eval(C28*P2)/(eval(Math.pow((1+P2),5)-1)*(1+P2))); } else { document.form1.L2.value='NA'; }
		if(B3>5)
		{ document.form1.L3.value=Math.round(eval(D28*P3)/(eval(Math.pow((1+P3),5)-1)*(1+P3))); } else { document.form1.L3.value='NA'; }
		if(B3>5)
		{ document.form1.L4.value=Math.round(eval(E28*P4)/(eval(Math.pow((1+P4),5)-1)*(1+P4))); } else { document.form1.L4.value='NA'; }
	}
/*
function Fund(X,Y,I,E)
{
	i=1+X.value/100;
	j=(1+Y.value/100);
	HID=i/j-1;
	//alert(HID);
	retfund(I.value,HID,E.value);
	}
	function retfund(I,HD,E)
	{ 	
	    C11=I;
		D7=HD;
		B5=E;
		AA=(C11*12/D7)*(1+D7/12);
		BB=(Math.pow((1+D7/12),B5*12)-1)/(Math.pow((1+D7/12),B5*12));
		DD=AA*BB/100000;
		HH=DD;
	    DD = "" + DD;
        DD = (DD.indexOf(".") >= 0) ? DD.substring(0, DD.indexOf(".",1) + 3) : DD + ".00";
		document.form1.J.value=DD;
		P1=9/100;
		P2=12/100;
		P3=15/100;
		P4=18/100;
		HP1=(Math.pow((1+P1),(1/12))-1);//*100;
		HP2=(Math.pow((1+P2),(1/12))-1);//*100;
		HP3=(Math.pow((1+P3),(1/12))-1);//*100;
		HP4=(Math.pow((1+P4),(1/12))-1);//*100;
		C13=HH;
		B18=HP1;
		B3=document.form1.C.value;
		XX1=(C13*B18)*100000;
		YY1=Math.pow((1+B18),(B3*12))-1
		ZZ1=1+B18;
		RR1=YY1*ZZ1;
		FR1=Math.round(XX1/RR1);
		document.form1.M1.value=FR1;
		B18=HP2;
		XX2=(C13*B18)*100000;
		YY2=Math.pow((1+B18),(B3*12))-1
		ZZ2=1+B18;
		RR2=YY2*ZZ2;
		FR2=Math.round(XX2/RR2);
		document.form1.M2.value=FR2;
		B18=HP3;
		XX3=(C13*B18)*100000;
		YY3=Math.pow((1+B18),(B3*12))-1
		ZZ3=1+B18;
		RR3=YY3*ZZ3;
		FR3=Math.round(XX3/RR3);
		document.form1.M3.value=FR3;
		B18=HP4;
		XX4=(C13*B18)*100000;
		YY4=Math.pow((1+B18),(B3*12))-1
		ZZ4=1+B18;
		RR4=YY4*ZZ4;
		FR4=Math.round(XX4/RR4);
		document.form1.M4.value=FR4;
		B17=P1;
		XX1=(C13*B17)*100000;
		YY1=Math.pow((1+B17),B3)-1;
		ZZ1=1+B17;
		RR1=YY1*ZZ1;
		FR1=Math.round(XX1/RR1);
		document.form1.A1.value=FR1;
		B17=P2;
		XX2=(C13*B17)*100000;
		YY2=Math.pow((1+B17),B3)-1;
		ZZ2=1+B17;
		RR2=YY2*ZZ2;
		FR2=Math.round(XX2/RR2);
		document.form1.A2.value=FR2;
		B17=P3;
		XX3=(C13*B17)*100000;
		YY3=Math.pow((1+B17),B3)-1;
		ZZ3=1+B17;
		RR3=YY3*ZZ3;
		FR3=Math.round(XX3/RR3);
		document.form1.A3.value=FR3;
		B17=P4;
		XX4=(C13*B17)*100000;
		YY4=Math.pow((1+B17),B3)-1;
		ZZ4=1+B17;
		RR4=YY4*ZZ4;
		FR4=Math.round(XX4/RR4);
		document.form1.A4.value=FR4;
		if(B3>5)
		{ B28=HH*100000/Math.pow((1+P1),(B3-5)); }  else { B28='NA'; }
		if(B3>5)
		{ C28=HH*100000/Math.pow((1+P2),(B3-5)); }  else { C28='NA';  }
		if(B3>5)
		{ D28=HH*100000/Math.pow((1+P3),(B3-5)); }  else { D28='NA';  }
		if(B3>5)
		{ E28=HH*100000/Math.pow((1+P4),(B3-5)); }  else { E28='NA';  }
		//IF($B$3>5,((B28*B17)/(((1+B17)^5-1)*(1+B17))),"N.A.")
		if(B3>5)
		{ document.form1.L1.value=Math.round(eval(B28*P1)/(eval(Math.pow((1+P1),5)-1)*(1+P1))); } else { document.form1.L1.value='NA'; }
		if(B3>5)
		{ document.form1.L2.value=Math.round(eval(C28*P2)/(eval(Math.pow((1+P2),5)-1)*(1+P2))); } else { document.form1.L2.value='NA'; }
		if(B3>5)
		{ document.form1.L3.value=Math.round(eval(D28*P3)/(eval(Math.pow((1+P3),5)-1)*(1+P3))); } else { document.form1.L3.value='NA'; }
		if(B3>5)
		{ document.form1.L4.value=Math.round(eval(E28*P4)/(eval(Math.pow((1+P4),5)-1)*(1+P4))); } else { document.form1.L4.value='NA'; }
	}*/
	
	
	//   GOAL   //
	
	function inflation()
	{
		//document.form1.B5.value=document.form1.B3.value;
	document.form1.D5.value=Math.round(document.form1.B2.value*Math.pow((1+document.form1.B4.value/100),document.form1.B3.value));
	    P1=9/100;
		P2=12/100;
		P3=15/100;
		P4=18/100;
		HP1=(Math.pow((1+P1),(1/12))-1);//*100;
		HP2=(Math.pow((1+P2),(1/12))-1);//*100;
		HP3=(Math.pow((1+P3),(1/12))-1);//*100;
		HP4=(Math.pow((1+P4),(1/12))-1);//*100; 
		XX1=(document.form1.D5.value*HP1);
		YY1=Math.pow((1+HP1),(document.form1.B3.value*12))-1
		ZZ1=1+HP1;
		RR1=YY1*ZZ1;
		FR1=Math.round(XX1/RR1);
		document.form1.B12.value=FR1;
		XX1=(document.form1.D5.value*HP2);
		YY1=Math.pow((1+HP2),(document.form1.B3.value*12))-1
		ZZ1=1+HP2;
		RR1=YY1*ZZ1;
		FR1=Math.round(XX1/RR1);
		document.form1.C12.value=FR1;
		XX1=(document.form1.D5.value*HP3);
		YY1=Math.pow((1+HP3),(document.form1.B3.value*12))-1
		ZZ1=1+HP3;
		RR1=YY1*ZZ1;
		FR1=Math.round(XX1/RR1);
		document.form1.D12.value=FR1;
		XX1=(document.form1.D5.value*HP4);
		YY1=Math.pow((1+HP4),(document.form1.B3.value*12))-1
		ZZ1=1+HP4;
		RR1=YY1*ZZ1;
		FR1=Math.round(XX1/RR1);
		document.form1.E12.value=FR1;
		XX1=(document.form1.D5.value*P1); 
		YY1=Math.pow((1+P1),document.form1.B3.value)-1;
		ZZ1=1+P1;
		RR1=YY1*ZZ1;
		FR1=Math.round(XX1/RR1);
		document.form1.B13.value=FR1;
		XX1=(document.form1.D5.value*P2); 
		YY1=Math.pow((1+P2),document.form1.B3.value)-1;
		ZZ1=1+P2;
		RR1=YY1*ZZ1;
		FR1=Math.round(XX1/RR1);
		document.form1.C13.value=FR1;
		XX1=(document.form1.D5.value*P3); 
		YY1=Math.pow((1+P3),document.form1.B3.value)-1;
		ZZ1=1+P3;
		RR1=YY1*ZZ1;
		FR1=Math.round(XX1/RR1);
		document.form1.D13.value=FR1;
		XX1=(document.form1.D5.value*P4); 
		YY1=Math.pow((1+P4),document.form1.B3.value)-1;
		ZZ1=1+P4;
		RR1=YY1*ZZ1;
		FR1=Math.round(XX1/RR1);
		document.form1.E13.value=FR1;
		if(document.form1.B3.value>5) 
		{ HR1=Math.round((document.form1.D5.value/Math.pow((1+P1),(document.form1.B3.value-5)))); }  else { B28='NA'; }
		if(document.form1.B3.value>5) 
		{ HR2=Math.round((document.form1.D5.value/Math.pow((1+P2),(document.form1.B3.value-5)))); }  else { B28='NA'; }
		if(document.form1.B3.value>5) 
		{ HR3=Math.round((document.form1.D5.value/Math.pow((1+P3),(document.form1.B3.value-5)))); }  else { B28='NA'; }
		if(document.form1.B3.value>5) 
		{ HR4=Math.round((document.form1.D5.value/Math.pow((1+P4),(document.form1.B3.value-5)))); }  else { B28='NA'; }
		
		//IF($B$3>5,((B20*B10)/(((1+B10)^5-1)*(1+B10))),"N.A.")
		if(document.form1.B3.value>5)
		{ document.form1.B14.value=Math.round((eval(HR1*P1)/(eval(Math.pow((1+P1),5)-1)*(1+P1)))); 
		} else { document.form1.B14.value='NA'; }
		if(document.form1.B3.value>5)
		{ document.form1.C14.value=Math.round((eval(HR2*P2)/(eval(Math.pow((1+P2),5)-1)*(1+P2)))); } else { document.form1.C14.value='NA'; }
		if(document.form1.B3.value>5)
		{ document.form1.D14.value=Math.round((eval(HR3*P3)/(eval(Math.pow((1+P3),5)-1)*(1+P3)))); } else { document.form1.D14.value='NA'; }
		if(document.form1.B3.value>5)
		{ document.form1.E14.value=Math.round((eval(HR4*P4)/(eval(Math.pow((1+P4),5)-1)*(1+P4)))); } else { document.form1.E14.value='NA'; }
	}
	
	
/*function changeval(xx,yy)
{
xx = (xx.indexOf(".") >= 0) ? xx.substring(0, xx.indexOf(".",1) + 3) : xx + ".00";
yy.value=Math.round(xx);	
}*/

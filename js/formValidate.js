function lTrim(txtBoxValue)//----->INPUT PARAMETER TYPE "String"
{		
	for(startIndx=0;startIndx<txtBoxValue.length;++startIndx)
	{   
		 if(txtBoxValue.charAt(startIndx)!=' ')
			break;
		 else if((startIndx+1)<txtBoxValue.length)
		 {				
			txtBoxValue=txtBoxValue.substring((startIndx+1),txtBoxValue.length);
			startIndx=-1;
		 }
	}return txtBoxValue;
}

function rTrim(txtBoxValue)//----->INPUT PARAMETER TYPE "String"
{	
	for(startIndx=(txtBoxValue.length-1);startIndx>=0;--startIndx)
	{   
		if(txtBoxValue.charAt(startIndx)!=' ')
			break;
		else
		 {			
			txtBoxValue=txtBoxValue.substring(0,startIndx);
			startIndx=txtBoxValue.length;
		 }
	}return txtBoxValue;
}

function trim(txtBoxValue)//----->INPUT PARAMETER TYPE "String"
{
return lTrim(rTrim(txtBoxValue));
}

function checkemail(email)
{
	var testresults
	var str = email
	var filter=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i
	if (filter.test(str))
		testresults=true
	else{
		testresults=false
	}
	return (testresults)
}
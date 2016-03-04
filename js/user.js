 var arr=new Array();
 var acts=new Array(); 
 var _id=0;
 var _pay=0;

 function dochangepay(id,state)
 {
	var index;
	if(state==3)
	{
		$('#payid'+id).toggleClass('pay3');
		$('#payid'+id).toggleClass('pay0');
		if($('#payid'+id).hasClass('pay0'))	arr[1].push(id);
		else 
		{
			index = arr[1].indexOf(id);
			if (index > -1) arr[1].splice(index, 1);
		}
	}
	else if(state==1)	alert("оплачено");
	else
	{	
		$('#payid'+id).toggleClass('pay3');
		if($('#payid'+id).hasClass('pay3'))	arr[0].push(id);
		else 
		{
			index = arr[0].indexOf(id);
			if (index > -1) arr[0].splice(index, 1);
		}
	}
 }
  function doshowpay(obj)
 {
	var str=obj.href;
	var i,j;
	var id=new Array();
	for(j=0;j<2;j++)
	{
		i=str.indexOf(";");
		id[j]=str.substring(str.indexOf("=")+1,i);
		str=str.substr(i+1);
	}
	var sbstr="";
	var distr="#accountsdialog";
        if(id[1].length>0)
        {
            if(id[1]=='100')
                sbstr="Номенклатура";
            else if(id[1]=='500')
                sbstr="Отгрузки";
            else if(id[1]=='200')
            {
                sbstr="Новый платеж";
                distr="#mydialog";
            }
            else
                sbstr="Платежи";
        }
        else sbstr="Отгрузки";
	$(distr).dialog("option","title",""+sbstr+" по счету №"+id[0]); 
 }
   function deleterecords(id)
   {
       var seldvals=$.fn.yiiGridView.getChecked("exp-grid","exp-checked");
       var ids=Array();
    seldvals.forEach(function(item, i) {
        var rr=0;
      if(document.getElementById("payid" + item)) {rr=1;}
        if(document.getElementById("invid" + item)) {rr=rr+2;}
        if(rr>0)  ids.push(rr);
        });
        if(seldvals.length==0) return;
        var str="";
        var stra="удалить";
        if(id==0){
            rr=seldvals.length-ids.length
            stra="архивировать";
          if(rr>0) str="Для "+rr+" записей нет ни платежей ни отгрузок.\n";
       }
        else
        {
         if(ids.length>0) str="Для "+ids.length+" записей имеются платежи или отгрузки.\n";          
        }
             if(!confirm("Предпринимается попытка "+stra+" "+seldvals.length+" записей"+"\n"+str+" Продолжить?")) return;
//        alert(JSON.stringify(seldvals));
    	document.forms['date-form'].elements['checks'].value=JSON.stringify([id,seldvals]);
	document.forms["date-form"].submit();
//   
   }
   function dosavepay()
 {

	var str=arr[0].valueOf();
	str=str+"&"+arr[1].valueOf();
	if(str.length>1) 
	{
		document.forms['date-form'].elements['checks'].value=str;
		document.forms["date-form"].submit();
	}
 }
function docomment(id)
{
    alert(id);
}
$(document).ready(function()
 {
	arr[0]=new Array();
	arr[1]=new Array();
 });
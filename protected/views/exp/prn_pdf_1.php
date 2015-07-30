<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">    
<head><title>Счет</title>
    <style type="text/css" media="print"> 
        @page { size:portrait; margin:0cm 0cm;} #show_print{visibility:hidden; display:none;}
    </style>
    <style type="text/css" media="screen"> #show_print{visibility:hidden; display:none;}</style>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print_doc.css" />
    </head>
    <body>
<div style="width:740px;font-family: freeserif;" class="outprintarea">
 <div id="printarea">
   <table width="100%" cellspacing="0" cellpadding="0">
        <tbody><tr>
            <td>
<table width="100%" style="border-width:0px;">
<tbody>
    <tr>
    <td>
 <table width="100%" border="0">
<tbody><tr>
<td style="width:60px;">
&nbsp;
</td>
<td width="auto">    
    <div style="font-size: 8pt; background-color: transparent;"  >
        Внимание!
 Оплата данного счета означает согласие с условиями поставки товара. 
Уведомление об оплате  обязательно, в противном случае не гарантируется 
наличие товара на складе. Товар отпускается по факту прихода денег на 
р/с Поставщика, самовывозом, при наличии доверенности и паспорта.
    </div>
</td>
<td style="width:60px;">
&nbsp;
</td>
</tr>
<tr>
<td colspan="3">
    <div style="text-align: center; width: 700px; font-size: 10pt; font-weight: bold; background-color: transparent;">
Внимание! Изменились реквизиты.<br>
        Образец заполнения платежного поручения                                 
    </div>
</td>
</tr>
</tbody>
</table>


<table width="100%" cellspacing="1" cellpadding="1" class="invoice_bank_rekv">
  <tbody><tr>
    <td width="400" style="min-height:54px;padding-bottom:0; border-width:1px 0px 0px 1px;" rowspan="2" colspan="2">
    <table width="400" cellspacing="0" cellpadding="0" border="0">
    <tbody><tr>
    <td valign="top">
        <div style="width:350px;font-size:10pt;" id="bank_name">
        <?php echo $dep['rs_t']." ".$dep['rs_p'] ?>
        </div>   
    </td>
    </tr>
    <tr>
    <td valign="bottom" height="10">    
        <div style="width:350px;font-size:8pt;padding-top:5pt;">
Банк получателя
        </div>                    
    </td>
    </tr>
    </tbody></table>    
    </td>
    <td width="100" style="min-height:22px;height:auto; border-width:1px 0px 0px 1px;">
        <div style="width:100px;font-size:10pt;" id="bank_bik_txt">БИK</div>    
    </td>
    <td width="200" rowspan="2" style="border-bottom:0px;" >
        <div style="width: 190px; font-size: 10pt; height: 22px; background-color: transparent;" id="bank_bik">
        <?php echo $dep['bik'] ?>
        </div>
        <div style="width: 190px; font-size: 10pt; background-color: transparent;" id="bank_schet">
       <?php echo $dep['rs_cr'] ?>
        </div>
    </td>
  </tr>
  <tr>
    <td  style="width: 100px; border-right: 0px;">
        <div style="width:100px;font-size:10pt;" id="bank_schet_txt">Сч. №</div>    
    </td>
  </tr>
  <tr>
    <td width="200" style="min-height:16px;height:auto;border-width:1px 0px 0px 1px;">
        <div style="width:198px;font-size:10pt;" id="inn_txt">ИНН&nbsp;<?php echo $dep['inn'] ?></div>      
    </td>
    <td width="200" style="min-height:16px;height:auto;border-width:1px 0px 0px 0px;">
        <div style="width:198px;font-size:10pt;" id="kpp_txt">КПП&nbsp;<?php echo $dep['kpp'] ?></div>      
    </td>
    <td width="100" style="min-height:62px;height:auto;border-width:0px 0px 1px 1px;" rowspan="2">
        <div style="width: 100px; font-size: 10pt; background-color: transparent;" id="seller_schet_txt">Сч. №</div>     
    </td>
    <td width="200" style="min-height:62px;height:auto;" rowspan="2">
        <div style="width:190px;font-size:10pt;"  id="seller_schet"><?php echo $dep['rs_n'] ?>
        </div>     
    </td>
  </tr>
  <tr>
    <td style="min-height:46px;height:auto;border-right:0px;" colspan="2">

    <table width="400" cellspacing="0" cellpadding="0" border="0">
    <tbody><tr>
    <td valign="top">
        <div style="width:400px;font-size:10pt;" id="seller_name">
            <?php echo $dep['f_n'] ?>
        </div>  
    </td>
    </tr>
    <tr>
    <td valign="bottom" height="10">    
        <div style="width:400px;font-size:8pt;" id="seller_txt">Получатель</div>                        
    </td>
    </tr>
    </tbody></table>      

    </td>
  </tr>
</tbody></table>
<br>
<div style="width: 700px; font-weight: bold; font-size: 14pt; padding-left: 5px; background-color: transparent;">
    Счет № <?php echo $model['name']; ?> от <?php echo Yii::app()->dateFormatter->formatDateTime($model['date'], 'medium', null) ; ?>
</div>
<br>  
<div style="background-color:#000000;width:100%;font-size:1px;height:2px;">&nbsp;</div>


<table width="100%">
<tbody><tr>
<td width="85">
    <div style="width:85px;font-size:10pt;padding-left:2px;" id="seller_full_txt">
Поставщик:
    </div>
</td>
<td>
    <div style="width: 630px; font-weight: bold; font-size: 10pt; padding-left: 2px; background-color: transparent;" id="seller_full">
    <?php 
    $postav="ИНН ".$dep['inn']." КПП ".$dep['kpp']." ".$dep['f_n']." ".$dep['inx'].", ".$dep['reg'].", ".$dep['add'];
     echo $postav;
    ?>
    </div>
</td>
</tr>
<tr>
<td width="85">
    <div style="width:85px;font-size:10pt;padding-left:2px;" id="buyer_full_txt">
Покупатель:
    </div>
</td>
<td>
    <div style="width: 630px; font-weight: bold; font-size: 10pt; padding-left: 2px; background-color: transparent;" id="buyer_full">
    <?php 
    $client="ИНН ".$cli['inn']." КПП ".$cli['kpp']." ".$cli['f_n'].", ".$cli['tel'];
     echo $client;
    ?>
    </div>
</td>
</tr>
</tbody>
</table>

 <?php
 $dis=0;
 if($model->expSum>$model->expTot)     $dis=1;
 ?>
 
<table width="100%" cellspacing="0" cellpadding="0" border="0" class="invoice_items" id="items">
<thead>
 <tr id="header">
  <th style="width:30px; border-left:2px solid;">
    <div style="width:30px; "  id="item_n_txt">№</div>  
  </th> 
  <th>
    <div  id="item_name_txt" style="background-color: transparent;">Товар</div>     
  </th>  
  <th style="width:50px;">
    <div style="width:55px;" id="item_kol_txt">Кол - во</div>       
  </th>
  <th style="width:50px;">
    <div style="width:50px;"  id="item_ed_txt">Ед.</div>         
  </th>
  <th style="width:55px;">
    <div style="width: 55px; background-color: transparent;" id="item_price_txt">Цена</div>         
  </th>
  <?php if($dis): ?>
  <th style="width:60px;">
    <div style="width:60px;" id="item_summ_txt">Сумма без скидки</div>           
  </th>  
  <th style="width:55px;border-right:2px solid;">
    <div style="width:55px;" id="item_summ_txt">Скидка</div>           
  </th> 
    <?php endif; ?>  
  <th style="width:60px;border-right:2px solid;">
    <div style="width:60px;" id="item_summ_txt">Сумма</div>           
  </th>  
 </tr> 
</thead>                
 <tbody>
 <?php
 		$resa=0;
		$resb=0;
		$rest=0;
    		$resv=0;
                $ii=0;
               $totcount=count($model->expd);
  	foreach($model->expd as $key=>$row) 	{
            $ii++;
 	$ret="<tr><td style='border-left:2px solid;'>".$row['id']."</td><td style='text-align:left;padding-left:5px;'>".$row->product0['tnam']."</td>\n";
        $sumka=$row['amount']*$row['price'];
 	$ret.="<td style='text-align:right;'>".Yii::app()->numberFormatter->formatCurrency($row['amount'], '')."</td>\n"; 
	$ret.="<td style='text-align:center;'>".$row->product0->it0['sh_name']."</td>\n"; 
	$ret.="<td style='text-align:right;'>".Yii::app()->numberFormatter->formatCurrency($row['price'], '')."</td>\n"; 
        if($dis)
        {
            $ret.="<td style='text-align:right;'>".Yii::app()->numberFormatter->formatCurrency($sumka, '')."</td>\n";
             if($sumka==$row['total'])   $rate=0;
            else     $rate=$sumka-$row['total'];            
            $ret.="<td style='text-align:right;'>".Yii::app()->numberFormatter->formatCurrency($rate, '')."</td>\n"; 
        }
	$ret.="<td style='text-align:right;border-right:2px solid;'>".Yii::app()->numberFormatter->formatCurrency($row['total'], '')."</td>\n"; 
//        $ret.="<td style='text-align:right;'>".Yii::app()->numberFormatter->formatCurrency($row['vat'], '')."</td>\n"; 
//	$ret.="<td style='text-align:right;'>".Yii::app()->numberFormatter->formatCurrency($row['total']+$row['vat'], '')."</td>";
	$ret.="</tr>\n"; 
	$resa+=$sumka;
	$resb+=$row['total'];
	$rest+=$row['total']+$row['vat'];
	$resv+=$row['vat'];
		echo $ret;
	}
//	$ret.="<tr><td colspan='4'>Итого:</td>"
//                . "<td style='font-weight: bold;text-align:right;'>".Yii::app()->numberFormatter->formatCurrency($resa, '')."</td>"
//                . "<td style='font-weight: bold;text-align:right;'>".Yii::app()->numberFormatter->formatCurrency($resb, '')."</td>"
//                . "<td colspan='3' style='font-weight: bold;text-align:right;'>".Yii::app()->numberFormatter->formatCurrency($rest, '')."</td>"
//                . "</tr>\n";
?>

<tr>
  <td style="border-width:1px 0 0;" <?php echo ($dis==0 ? "colspan='5'":"colspan='7'"); ?>>
    <div style="font-weight:bold;font-size:10pt;text-align:right;padding-right:5px;" id="items_summ_txt">Итого:</div>  
  </td>
  <td width="80" style="font-weight:bold;font-size:10pt;text-align:right;border-width:1px 0 0;" id="invoice_total_summ">
 <?php echo Yii::app()->numberFormatter->formatCurrency($resb, ''); ?>
  </td>
   </tr><tr>
  <td style="border:0;" <?php echo ($dis==0 ? "colspan='5'":"colspan='7'"); ?>>
    <div style="font-weight:bold;font-size:10pt;text-align:right;padding-right:5px;" id="items_summ_txt">НДС:</div>  
  </td>
  <td width="80" style="font-weight:bold;font-size:10pt;text-align:right;border:0;" id="invoice_total_summ">
 <?php echo Yii::app()->numberFormatter->formatCurrency($resv, ''); ?>
  </td>
  </tr><tr>
  <td style="border:0;" <?php echo ($dis==0 ? "colspan='5'":"colspan='7'"); ?>>
    <div style="font-weight:bold;font-size:10pt;text-align:right;padding-right:5px;" id="items_summ_txt">Всего:</div>  
  </td>
  <td width="80" style="font-weight:bold;font-size:10pt;text-align:right;border:0;" id="invoice_total_summ">
  <?php echo Yii::app()->numberFormatter->formatCurrency($rest, ''); ?>

  </td>

 </tr>
</tbody></table>


<div id="items_total_text">Всего наименований <?php echo $totcount ?> на сумму <?php echo Yii::app()->numberFormatter->formatCurrency($rest, ''); ?> руб.</div>
<div style="font-weight: bold;font-size: 1.2em"><?php echo CommonFunc::num2str($rest); ?></div>
<div style="font-style: italic ;font-size: 1.2em">С Вашей организацией работает <?php echo $model->account['name']; ?></div>
<div style="position: relative;">
<div style="font-size: 0.9em;">
    <ol>
   <li>Настоящий договор является офертой договора поставки указанной в счете</li>
<li>Заключение договора (акцепт) производится путем оплаты счета безналичным способом</li>
<li>Срок действия оферты (Срок оплаты настящего счета) 20 (двадцать) дней</li>
<li>Предоплата по данному счету 100%</li>
<li>Срок поставки продукции после получения предоплаты 30 дней</li>
<li> Под поставкой подразумевается самовывоз Покупателем продукции со склада поставщика или дата передачи продукции транспортной компании, указанной в пункте 6.1
    <ol>
 <li>Транспортная компания <?php echo $model->rtransport['name']; ?> </li>   
 <li>Покупатель несет ответственность за правильность предоставленных Поставщику отгрузочных реквизитов. </li>   
    </ol>
 </li>   
<li>За правильность подбора оборудования ответственность несет Покупатель</li>
</ol>
</div>
<div style="background-color:#000000;width:100%;font-size:1px;height:2px;">
    &nbsp;
</div>

<br>

<table width="100%" cellspacing="0" cellpadding="0" border="0" >
    <tr>
        <td style="background-color: transparent; padding: 10px 10px 0; font-weight: bold; width:10px;">
            Руководитель
        </td>    
        <td style="width:100px;border-bottom: 1px solid;"></td>
        <td style="background-color: transparent; padding-top: 10px;">
            (<?php echo $dep['man_n']; ?> )
            </td>
       <td style="background-color: transparent; padding: 10px 10px 0; font-weight: bold; width:120px;">
            Главный бухгалтер
        </td>    
        <td style="width:100px;border-bottom: 1px solid;"></td>
        <td style="background-color: transparent; padding-top: 10px;">
            (<?php echo $dep['buh_n']; ?> )
            </td>
    </tr>
</table>
<br>
<div style="width:300px;text-align:center;padding-top: 20px;margin-left:50px;" id="mp">М.П.</div>
<div id="show_print" style="position: absolute; left: 30px;top:80px;width:100%;">
<img src="<?php echo Yii::app()->params['pic_dir'].$dep['sign']; ?>" style="width:70px;position: absolute; left: 90px;top:40px;">
<img src="<?php echo Yii::app()->params['pic_dir'].$dep['stamp']; ?>" style="width:140px;position: absolute; left: 130px;top:0px;">
<img src="<?php echo Yii::app()->params['pic_dir'].$dep['sign']; ?>" style="width:70px;position: absolute; left: 450px;top:40px;">
</div>
</div>

<br>

    </td>
</tr>
</tbody></table>      

             
</td>
        </tr>
        </tbody></table>  
 </div>
 
</div>
</body></html>
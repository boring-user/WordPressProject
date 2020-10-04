<?php /*Template Name: Calculation*/ ?>

<?php get_header(); ?>

<style media="print">

..onlyscreen
{
/*display: none;*/
}

..printerandscreen
{
display: block;
}

..sss{
min-height:800px;

width:100%;
}
</style>

<script language="javascript">
function reset_classes()

{
t.className='onlyscreen';
}
</script>
       
    <div class="content">
    <div class="container">
    	
        <div class="content-left">
        </div><!--content-left ends-->
        
        <div class="content-right">
        </div><!--content-right ends-->
        
        <div class="clear"></div>
        
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php
		$title=get_post_meta(get_the_ID(), 'alternate_title', true);
		if($title=="")
			$title=get_the_title();
		
		/*$post_thumbnail_id = get_post_thumbnail_id( $post_id );
		$image_arr = wp_get_attachment_image_src( $post_thumbnail_id, "full" );*/
		 ?>
         
         <h2><?php echo $title; ?></h2>
         
         <?php the_content(); ?>
         <?php 
		 $calpath=site_url().'/calculators/';
		 ?>
         
        <div class="srchcat calsrch">
        <form name='' action='<?php echo $calpath; ?>' method='post'>
        <select name="calsrch" onchange="this.form.submit()">
        <option value="0">Select Calculator</option>
        <option value="1">SIP Calculator</option>
        <option value="2">Loan Calculator</option>
        <option value="3">Retirement Corpus</option>
        <option value="4">Goal</option>
        <option value="5">Insurance Calculator</option>
        </select>
		</form>
        </div>
        
        <?php 
		$calsrch=$_POST['calsrch'];
		?>
        <?php 
		if($calsrch==0 || $calsrch==1){
		?>
   
        <div class="cal">
        <form name="form1" id="form1">
		<div class="onlyscreen sss" id='t'>
        <table width="100%" border="1" cellspacing="5" cellpadding="5" >
        <tr>
        <td style="background: #7e1312;text-align: left;color: #FFF;padding: 8px 0 8px 12px;font-size:15px;text-transform:uppercase;">SIP Calculator</td>
        <td style="background: #7e1312;text-align: center;color: #FFF;padding: 8px 0 8px 0;font-size:15px;text-transform:uppercase;">Monthly</td>
        <td style="background: #7e1312;text-align: center;color: #FFF;padding: 8px 0 8px 0;font-size:15px;text-transform:uppercase;">Annual</td>
        </tr>
        <tr>
        <td style="color: #474747;border: 1px solid #CCC;padding: 5px 12px 5px 12px;font-family:'myriad Pro';border: 1px solid #E5E5E5;background:#E5E5E5;font-size:16px;">Investments (starting today)-Rs.</td>
        <td style="border: 0px solid #CCC;padding: 5px 12px 5px 12px;"><input name="A1" type="text" id="A1" size="12"  onkeyup="javascript:dual(this.value,document.form1.A2);javascript:single(document.form1.C1.value,document.form1.C2,document.form1.A1.value,document.form1.B1.value,document.form1.D1,document.form1.D2,document.form1.E1,document.form1.F1,document.form1.E2,document.form1.F2,document.form1.A2)" style="border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;"/></td>
        <td style="border: 0px solid #CCC;padding: 5px 12px 5px 12px;"><input name="A2" type="text" id="A2" size="12" onkeyup="javascript:revdual(this.value,document.form1.A1)" style="border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;"/></td>
        </tr>
        <tr>
        <td style="color: #474747;border: 1px solid #CCC;padding: 5px 12px 5px 12px;font-family:'myriad Pro';border: 1px solid #E5E5E5;background:#E5E5E5;font-size:16px;">No. of Years</td>
        <td style="border: 0px solid #CCC;padding: 5px 12px 5px 12px;"><input name="B1" type="text" id="B1" size="12" onkeyup="javascript:copy(this.value,document.form1.B2);javascript:single(document.form1.C1.value,document.form1.C2,document.form1.A1.value,document.form1.B1.value,document.form1.D1,document.form1.D2,document.form1.E1,document.form1.F1,document.form1.E2,document.form1.F2,document.form1.A2)" style="border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;"/></td>
        <td style="border: 0px solid #CCC;padding: 5px 12px 5px 12px;"><input name="B2" type="text" id="B2" size="12" style="border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;"/></td>
        </tr>
        <tr>
        <td style="color: #474747;border: 1px solid #CCC;padding: 5px 12px 5px 12px;font-family:'myriad Pro';border: 1px solid #E5E5E5;background:#E5E5E5;font-size:16px;">Expexted annual return(%)</td>
        <td style="border: 0px solid #CCC;padding: 5px 12px 5px 12px;"><input name="C1" type="text" id="C1" size="12" onkeyup="javascript:single(this.value,document.form1.C2,document.form1.A1.value,document.form1.B1.value,document.form1.D1,document.form1.D2,document.form1.E1,document.form1.F1,document.form1.E2,document.form1.F2,document.form1.A2)" style="border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;"/></td>
        <td style="border: 0px solid #CCC;padding: 5px 12px 5px 12px;"><input name="C2" type="text" id="C2" size="12" style="border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;"/></td>
        </tr>
        <tr>
        <td style="color: #474747;border: 1px solid #CCC;padding: 5px 12px 5px 12px;font-family:'myriad Pro';border: 1px solid #E5E5E5;background:#E5E5E5;font-size:16px;">Cost of total investments made- Rs.</td>
        <td style="border: 0px solid #CCC;padding: 5px 12px 5px 12px;"> <input name="D1" type="text" id="D1" size="12" style="background-color:#FFFFCC;border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;" readonly="readonly" /></td>
        <td style="border: 0px solid #CCC;padding: 5px 12px 5px 12px;"><input name="D2" type="text" id="D2" size="12" style="background-color:#FFFFCC;border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;" readonly="readonly" /></td>
        </tr>
        <tr>
        <td style="color: #474747;border: 1px solid #CCC;padding: 5px 12px 5px 12px;font-family:'myriad Pro';border: 1px solid #E5E5E5;background:#E5E5E5;font-size:16px;">Investment value at the end of the tenure-Rs.</td>
        <td style="border: 0px solid #CCC;padding: 5px 12px 5px 12px;"><input name="E1" type="text" id="E1" size="12"  style="background-color:#FFFFCC;border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;" readonly="readonly"/></td>
        <td style="border: 0px solid #CCC;padding: 5px 12px 5px 12px;"><input name="E2" type="text" id="E2" size="12" style="background-color:#FFFFCC;border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;" readonly="readonly"/></td>
        </tr>
        <tr>
        <td style="color: #474747;border: 1px solid #CCC;padding: 5px 12px 5px 12px;font-family:'myriad Pro';border: 1px solid #E5E5E5;background:#E5E5E5;font-size:16px;">Final Investment value/Cost of investment</td>
        <td style="border: 0px solid #CCC;padding: 5px 12px 5px 12px;"> <input name="F1" type="text" id="F1" size="12" style="background-color:#FFFFCC;border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;" readonly="readonly"/></td>
        <td style="border: 0px solid #CCC;padding: 5px 12px 5px 12px;"><input name="F2" type="text" id="F2" size="12" style="background-color:#FFFFCC;border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;" readonly="readonly"/></td>
        </tr>
        
        <tr>
        <td>&nbsp;</td>
        <td><input name="Button" type="button" class="style19" value="Print" onClick="reset_classes(); t.className='printerandscreen'; window.print();" style="background:#7e1312;color:#FFFFFF;font-family:'myriad Pro';font-size:16px;text-align:center;padding:8px 5px 8px 5px;width:120px;cursor:pointer;margin-left:6%;border-radius: 5px;"/></td>
        <td>&nbsp;</td>
        </tr>
        </table>
        </div>
        </form>
         </div>
         
        <?php
        	}
			elseif($calsrch==2){
		?>
          
         
    <div class="cal">
    <form name="form1" id="form1">     
    <table width="100%" border="1" cellspacing="5" cellpadding="5">
    <tr>
      <td style="background: #7e1312;text-align: left;color: #FFF;padding: 8px 0 8px 12px;font-size:15px;text-transform:uppercase;">Loan Calculator</td>
      <td style="background: #7e1312;text-align: center;color: #FFF;padding: 8px 0 8px 12px;font-size:15px;text-transform:uppercase;">Loan @ reducing balance</td>
      <td style="background: #7e1312;text-align: center;color: #FFF;padding: 8px 0 8px 12px;font-size:15px;text-transform:uppercase;">Loan @ simple int. rate</td>
    </tr>
    <tr>
      <td style="color: #474747;border: 1px solid #CCC;padding: 5px 12px 5px 12px;font-family:'myriad Pro';border: 1px solid #E5E5E5;background:#E5E5E5;font-size:16px;">Loan Amount - Rs.</td>
      <td  style="border: 0px solid #CCC;padding: 5px 12px 5px 12px;"><input name="C3" type="text" id="C3" size="12"  onkeyup="document.form1.E3.value=this.value;document.form1.E12.value=this.value;document.form1.C12.value=this.value;" style="border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;"/></td>
      <td  style="border: 0px solid #CCC;padding: 5px 12px 5px 12px;"> <input name="E3" type="text" id="E3" size="12" style="border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;"/></td>
    </tr>
    <tr>
      <td style="color: #474747;border: 1px solid #CCC;padding: 5px 12px 5px 12px;font-family:'myriad Pro';border: 1px solid #E5E5E5;background:#E5E5E5;font-size:16px;">Interest Rate (%)</td>
      <td  style="border: 0px solid #CCC;padding: 5px 12px 5px 12px;"><input name="C4" type="text" id="C4" size="12" onkeyup="document.form1.E4.value=this.value;javascript:EMI()" style="border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;"/></td>
      <td  style="border: 0px solid #CCC;padding: 5px 12px 5px 12px;"><input name="E4" type="text" id="E4" size="12" style="border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;"/></td>
    </tr>
    <tr>
      <td style="color: #474747;border: 1px solid #CCC;padding: 5px 12px 5px 12px;font-family:'myriad Pro';border: 1px solid #E5E5E5;background:#E5E5E5;font-size:16px;">Tenure (Years)</td>
      <td  style="border: 0px solid #CCC;padding: 5px 12px 5px 12px;"><input name="C5" type="text" id="C5" size="12" onkeyup="document.form1.E5.value=this.value;javascript:EMI()" style="border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;"/></td>
      <td  style="border: 0px solid #CCC;padding: 5px 12px 5px 12px;"> <input name="E5" type="text" id="E5" size="12" style="border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;"/></td>
    </tr>
    <tr>
      <td style="color: #474747;border: 1px solid #CCC;padding: 5px 12px 5px 12px;font-family:'myriad Pro';border: 1px solid #E5E5E5;background:#E5E5E5;font-size:16px;">EMI - Rs..</td>
      <td  style="border: 0px solid #CCC;padding: 5px 12px 5px 12px;"><input name="C7" type="text" id="C7" size="12" style="background-color:#FFFFCC;border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;" readonly="readonly" /></td>
      <td  style="border: 0px solid #CCC;padding: 5px 12px 5px 12px;"><input name="E7" type="text" id="E7" size="12" style="background-color:#FFFFCC;border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;" readonly="readonly" /></td>
    </tr>
    <tr>
      <td style="color: #474747;border: 1px solid #CCC;padding: 5px 12px 5px 12px;font-family:'myriad Pro';border: 1px solid #E5E5E5;background:#E5E5E5;font-size:16px;">Total repayment of loan - Rs. </td>
      <td  style="border: 0px solid #CCC;padding: 5px 12px 5px 12px;"><input name="C11" type="text" id="C11" size="12" style="background-color:#FFFFCC;border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;" readonly="readonly" /></td>
      <td  style="border: 0px solid #CCC;padding: 5px 12px 5px 12px;"><input name="E11" type="text" id="E11" size="12" style="background-color:#FFFFCC;border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;" readonly="readonly" /></td>
    </tr>
    <tr>
      <td style="color: #474747;border: 1px solid #CCC;padding: 5px 12px 5px 12px;font-family:'myriad Pro';border: 1px solid #E5E5E5;background:#E5E5E5;font-size:16px;">Principal Repayment - Rs.</td>
      <td style="border: 0px solid #CCC;padding: 5px 12px 5px 12px;"><input name="C12" type="text" id="C12" size="12" style="background-color:#FFFFCC;border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;" readonly="readonly" /></td>
      <td  style="border: 0px solid #CCC;padding: 5px 12px 5px 12px;"><input name="E12" type="text" id="E12" size="12" style="background-color:#FFFFCC;border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;"  readonly="readonly"/></td>
    </tr>
    <tr>
      <td style="color: #474747;border: 1px solid #CCC;padding: 5px 12px 5px 12px;font-family:'myriad Pro';border: 1px solid #E5E5E5;background:#E5E5E5;font-size:16px;">Interest Repayment - Rs.</td>
      <td  style="border: 0px solid #CCC;padding: 5px 12px 5px 12px;"><input name="C13" type="text" id="C13" size="12" style="background-color:#FFFFCC;border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;"  readonly="readonly"/></td>
      <td  style="border: 0px solid #CCC;padding: 5px 12px 5px 12px;"><input name="E13" type="text" id="E13" size="12" style="background-color:#FFFFCC;border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;"  readonly="readonly"/></td>
    </tr>
    <tr>
      <td style="color: #474747;border: 1px solid #CCC;padding: 5px 12px 5px 12px;font-family:'myriad Pro';border: 1px solid #E5E5E5;background:#E5E5E5;font-size:16px;">Effective loan rate</td>
      <td  style="border: 0px solid #CCC;padding: 5px 12px 5px 12px;"> <input name="C15" type="text" id="C15" size="12" style="background-color:#FFFFCC;border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;" readonly="readonly" /></td>
      <td  style="border: 0px solid #CCC;padding: 5px 12px 5px 12px;"> <input name="E15" type="text" id="E15" size="12" style="background-color:#FFFFCC;border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;" readonly="readonly" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td ><input name="Button" type="button" class="style19" value="Print" onClick="reset_classes(); t.className='printerandscreen'; window.print();" style="background:#7e1312;color:#FFFFFF;font-family:'myriad Pro';font-size:16px;text-align:center;padding:8px 5px 8px 5px;width:120px;cursor:pointer;margin-left:3%;border-radius: 5px;"/></td>
      <td>&nbsp;</td>
    </tr>
  </table>
  </form>
  </div>

  <?php
   }
   elseif($calsrch==3){
   ?>
    <div class="cal">
    <form name="form1" id="form1">
    <div class="onlyscreen sss" id='t'>
    
    <table width="100%" border="1" cellspacing="5" cellpadding="5">
    <tr>
      <td colspan="5" style="background: #7e1312;text-align: center;color: #FFF;padding: 8px 0 8px 12px;font-size:15px;text-transform:uppercase;">Retirement Corpus Calculator  </td>
      </tr>
    <tr>
      <td style="color: #474747;border: 1px solid #CCC;padding: 5px 12px 5px 12px;font-family:'myriad Pro';border: 1px solid #E5E5E5;background:#E5E5E5;font-size:16px;">Current Age (Years)</td>
      <td><input name="A" type="text" id="A" size="12" onkeyup="javascript:Fund(document.form1.F,document.form1.G,document.form1.C,document.form1.H,document.form1.G,document.form1.I,document.form1.E)" style="border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;"/></td>
      <td colspan="3" rowspan="10" style="text-align:center;"><img src="<?php bloginfo('template_directory'); ?>/images/retirment.jpg" alt="" /> </td>
      </tr>
    <tr>
      <td style="color: #474747;border: 1px solid #CCC;padding: 5px 12px 5px 12px;font-family:'myriad Pro';border: 1px solid #E5E5E5;background:#E5E5E5;font-size:16px;">Retirement Age (Years)</td>
      <td><input name="B" type="text" id="B" size="12" onkeyup="javascript:Fund(document.form1.F,document.form1.G,document.form1.C,document.form1.H,document.form1.G,document.form1.I,document.form1.E)" style="border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;"/></td>
      </tr>
    <tr>
      <td style="color: #474747;border: 1px solid #CCC;padding: 5px 12px 5px 12px;font-family:'myriad Pro';border: 1px solid #E5E5E5;background:#E5E5E5;font-size:16px;">No. of years left for retirement</td>
      <td><input name="C" type="text" id="C" size="12" style="background-color:#FFFFCC;border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;" readonly="readonly"  /></td>
      </tr>
    <tr>
      <td style="color: #474747;border: 1px solid #CCC;padding: 5px 12px 5px 12px;font-family:'myriad Pro';border: 1px solid #E5E5E5;background:#E5E5E5;font-size:16px;">Life Expectancy (Years)</td>
      <td>  <input name="D" type="text" id="D" size="12" onkeyup="javascript:Fund(document.form1.F,document.form1.G,document.form1.C,document.form1.H,document.form1.G,document.form1.I,document.form1.E)" style="border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;"/></td>
      </tr>
    <tr>
      <td style="color: #474747;border: 1px solid #CCC;padding: 5px 12px 5px 12px;font-family:'myriad Pro';border: 1px solid #E5E5E5;background:#E5E5E5;font-size:16px;">No. of years - Post retirement</td>
      <td><input name="E" type="text" id="E" size="12" style="background-color:#FFFFCC;border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;" readonly="readonly" onchange="javascript:Fund(document.form1.F,document.form1.G,document.form1.C,document.form1.H,document.form1.G,document.form1.I,document.form1.E)"/></td>
      </tr>
    <tr>
      <td style="color: #474747;border: 1px solid #CCC;padding: 5px 12px 5px 12px;font-family:'myriad Pro';border: 1px solid #E5E5E5;background:#E5E5E5;font-size:16px;">Current Monthly Expense(Rs.)</td>
      <td><input name="F" type="text" id="F" size="12" onkeyup="javascript:Fund(document.form1.F,document.form1.G,document.form1.C,document.form1.H,document.form1.G,document.form1.I,document.form1.E)" style="border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;"/></td>
      </tr>
    <tr>
      <td style="color: #474747;border: 1px solid #CCC;padding: 5px 12px 5px 12px;font-family:'myriad Pro';border: 1px solid #E5E5E5;background:#E5E5E5;font-size:16px;">Inflation rate(%)</td>
      <td><input name="G" type="text" id="G" value="5" size="12"  onkeyup="if(eval(document.form1.H.value)<=eval(document.form1.G.value)) { alert('Expected Risk free rate should be greater than Inflation rate');document.form1.G.value='';};javascript:Fund(document.form1.F,document.form1.G,document.form1.C,document.form1.H,document.form1.G,document.form1.I,document.form1.E)" style="border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;" /></td>
      </tr>
    <tr>
      <td style="color: #474747;border: 1px solid #CCC;padding: 5px 12px 5px 12px;font-family:'myriad Pro';border: 1px solid #E5E5E5;background:#E5E5E5;font-size:16px;">Expected Risk free rate (%)</td>
      <td><input name="H" type="text" id="H" value="7" size="12"   onkeyup="if(eval(document.form1.H.value)<=eval(document.form1.G.value)) { alert('Expected Risk free rate should be greater than Inflation rate');document.form1.H.value='';};javascript:Fund(document.form1.F,document.form1.G,document.form1.C,document.form1.H,document.form1.G,document.form1.I,document.form1.E)" style="border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;"/></td>
      </tr>
    <tr>
      <td style="color: #474747;border: 1px solid #CCC;padding: 5px 12px 5px 12px;font-family:'myriad Pro';border: 1px solid #E5E5E5;background:#E5E5E5;font-size:16px;">Monthly expense post retirement (Rs.)</td>
      <td><input name="I" type="text" id="I" size="12" style="background-color:#FFFFCC;border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;" readonly="readonly"/></td>
      </tr>
    <tr>
      <td style="color: #474747;border: 1px solid #CCC;padding: 5px 12px 5px 12px;font-family:'myriad Pro';border: 1px solid #E5E5E5;background:#E5E5E5;font-size:16px;">Required retirement fund - Rs. lacs</td>
      <td><input name="J" type="text" id="J" size="12" style="background-color:#FFFFCC;border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;" readonly="readonly" /></td>
      </tr>
   <tr>
      <td colspan="5" style="color: #FFF;border: 1px solid #CCC;padding: 5px 12px 5px 12px;font-family:'myriad Pro';border: 1px solid #E5E5E5;background:#7e1312;font-size:16px;text-transform:uppercase;text-align:center;">Investment required to create retirement fund -<span style="display:block;margin-top:5px;">Expected rate of return</span></td>
   </tr>
    <tr>
      <td style="color: #FFF;border: 1px solid #CCC;padding: 5px 12px 5px 12px;font-family:'myriad Pro';border: 1px solid #E5E5E5;background:#7e1312;font-size:16px;">Mode of investment</td>
      <td style="color: #FFF;border: 1px solid #CCC;padding: 5px 12px 5px 12px;font-family:'myriad Pro';border: 1px solid #E5E5E5;background:#7e1312;font-size:16px;text-align:center;">9%</td>
      <td style="color: #FFF;border: 1px solid #CCC;padding: 5px 12px 5px 12px;font-family:'myriad Pro';border: 1px solid #E5E5E5;background:#7e1312;font-size:16px;text-align:center;">12%</td>
      <td style="color: #FFF;border: 1px solid #CCC;padding: 5px 12px 5px 12px;font-family:'myriad Pro';border: 1px solid #E5E5E5;background:#7e1312;font-size:16px;text-align:center;">15%</td>
      <td style="color: #FFF;border: 1px solid #CCC;padding: 5px 12px 5px 12px;font-family:'myriad Pro';border: 1px solid #E5E5E5;background:#7e1312;font-size:16px;text-align:center;">18%</td>
    </tr>
    <tr>
      <td style="color: #474747;border: 1px solid #CCC;padding: 5px 12px 5px 12px;font-family:'myriad Pro';border: 1px solid #E5E5E5;background:#E5E5E5;font-size:16px;">Monthly- starting today</td>
      <td><input name="M1" type="text" id="M1" size="12" style="background-color:#FFFFCC;border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;" readonly="readonly"></td>
      <td> <input name="M2" type="text" id="M2" size="12" style="background-color:#FFFFCC;border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;" readonly="readonly"/></td>
      <td> <input name="M3" type="text" id="M3" size="12" style="background-color:#FFFFCC;border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;" readonly="readonly"/></td>
      <td><input name="M4" type="text" id="M4" size="12" style="background-color:#FFFFCC;border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;" readonly="readonly"/></td>
    </tr>
    <tr>
      <td style="color: #474747;border: 1px solid #CCC;padding: 5px 12px 5px 12px;font-family:'myriad Pro';border: 1px solid #E5E5E5;background:#E5E5E5;font-size:16px;">Annually - starting today</td>
      <td><input name="A1" type="text" id="A1" size="12" style="background-color:#FFFFCC;border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;" readonly="readonly"/></td>
      <td> <input name="A2" type="text" id="A2" size="12" style="background-color:#FFFFCC;border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;" readonly="readonly"/></td>
      <td> <input name="A3" type="text" id="A3" size="12" style="background-color:#FFFFCC;border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;" readonly="readonly"/></td>
      <td><input name="A4" type="text" id="A4" size="12" style="background-color:#FFFFCC;border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;" readonly="readonly"/></td>
    </tr>
    <tr>
      <td style="color: #474747;border: 1px solid #CCC;padding: 5px 12px 5px 12px;font-family:'myriad Pro';border: 1px solid #E5E5E5;background:#E5E5E5;font-size:16px;">Limited pay - for 5 years starting today.</td>
      <td> <input name="L1" type="text" id="L1" size="12" style="background-color:#FFFFCC;border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;" readonly="readonly"/></td>
      <td>  <input name="L2" type="text" id="L2" size="12" style="background-color:#FFFFCC;border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;" readonly="readonly"/></td>
      <td> <input name="L3" type="text" id="L3" size="12" style="background-color:#FFFFCC;border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;" readonly="readonly"/></td>
      <td><input name="L4" type="text" id="L4" size="12" style="background-color:#FFFFCC;border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;" readonly="readonly"/></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="4"> <input name="Button" type="button" class="style19" value="Print" onClick="reset_classes(); t.className='printerandscreen'; window.print();" style="background:#7e1312;color:#FFFFFF;font-family:'myriad Pro';font-size:16px;text-align:center;padding:8px 5px 8px 5px;width:120px;cursor:pointer;margin-left:0%;border-radius: 5px;"/></td>
      </tr>
  </table>
  
    </div>
    </form>
    </div>
    
    <?php
   }
   elseif($calsrch==4){
   ?>
    <div class="cal">
    <form name="form1" id="form1">
    <div class="onlyscreen sss" id='t'>
    
    <table width="100%" border="1" cellspacing="5" cellpadding="5">
    <tr>
      <td colspan="5" style="background: #7e1312;text-align: center;color: #FFF;padding: 8px 0 8px 12px;font-size:15px;text-transform:uppercase;">GOAL Calculator  </td>
      </tr>
    <tr>
      <td style="color: #474747;border: 1px solid #CCC;padding: 5px 12px 5px 12px;font-family:'myriad Pro';border: 1px solid #E5E5E5;background:#E5E5E5;font-size:16px;">My goal would require(Rs.)</td>
      <td><input name="B2" type="text" id="B2" size="12" onkeyup="javascript:inflation();" style="border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;"/></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td style="color: #474747;border: 1px solid #CCC;padding: 5px 12px 5px 12px;font-family:'myriad Pro';border: 1px solid #E5E5E5;background:#E5E5E5;font-size:16px;">I need this money after (Years)</td>
      <td><input name="B3" type="text" id="B3" size="12" onkeyup="javascript:inflation();document.form1.B5.value=document.form1.B3.value;" style="border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td style="color: #474747;border: 1px solid #CCC;padding: 5px 12px 5px 12px;font-family:'myriad Pro';border: 1px solid #E5E5E5;background:#E5E5E5;font-size:16px;">Expected inflation rate (%)</td>
      <td><input name="B4" type="text" id="B4" value="5" size="12" onkeyup="javascript:inflation();" style="border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td style="color: #474747;border: 1px solid #CCC;padding: 5px 12px 5px 12px;font-family:'myriad Pro';border: 1px solid #E5E5E5;background:#E5E5E5;font-size:16px;">Actual inflation adjusted amount needed after</td>
      <td><input name="B5" type="text" id="B5" size="12" style="background-color:#FFFFCC;border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;" readonly="readonly"></td>
      <td style="color: #474747;border: 1px solid #CCC;padding: 5px 12px 5px 12px;font-family:'myriad Pro';border: 1px solid #E5E5E5;background:#E5E5E5;font-size:16px;">years will be Rs.</td>
      <td><input name="D5" type="text" id="D5" size="12" style="background-color:#FFFFCC;border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;" readonly="readonly"></td>
      <td>&nbsp;</td>
    </tr>
     <tr>
      <td colspan="5" style="color: #FFF;border: 1px solid #CCC;padding: 5px 12px 5px 12px;font-family:'myriad Pro';border: 1px solid #E5E5E5;background:#7e1312;font-size:16px;text-transform:uppercase;text-align:center;">Investment required to create retirement fund -<span style="display:block;margin-top:5px;">Expected rate of return</span></td>
   </tr>
    <tr>
      <td style="color: #FFF;border: 1px solid #CCC;padding: 5px 12px 5px 12px;font-family:'myriad Pro';border: 1px solid #E5E5E5;background:#7e1312;font-size:16px;">Mode of investment</td>
      <td style="color: #FFF;border: 1px solid #CCC;padding: 5px 12px 5px 12px;font-family:'myriad Pro';border: 1px solid #E5E5E5;background:#7e1312;font-size:16px;">9%</td>
      <td style="color: #FFF;border: 1px solid #CCC;padding: 5px 12px 5px 12px;font-family:'myriad Pro';border: 1px solid #E5E5E5;background:#7e1312;font-size:16px;">12%</td>
      <td style="color: #FFF;border: 1px solid #CCC;padding: 5px 12px 5px 12px;font-family:'myriad Pro';border: 1px solid #E5E5E5;background:#7e1312;font-size:16px;">15%</td>
      <td style="color: #FFF;border: 1px solid #CCC;padding: 5px 12px 5px 12px;font-family:'myriad Pro';border: 1px solid #E5E5E5;background:#7e1312;font-size:16px;">18%</td>
    </tr>
    <tr>
      <td style="color: #474747;border: 1px solid #CCC;padding: 5px 12px 5px 12px;font-family:'myriad Pro';border: 1px solid #E5E5E5;background:#E5E5E5;font-size:16px;">Monthly- starting today</td>
      <td><input name="B12" type="text" id="B12" size="12" style="background-color:#FFFFCC;border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;" readonly="readonly"></td>
      <td><input name="C12" type="text" id="C12" size="12" style="background-color:#FFFFCC;border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;" readonly="readonly"></td>
      <td><input name="D12" type="text" id="D12" size="12" style="background-color:#FFFFCC;border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;"readonly="readonly"></td>
      <td><input name="E12" type="text" id="E12" size="12" style="background-color:#FFFFCC;border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;" readonly="readonly"></td>
    </tr>
    <tr>
      <td style="color: #474747;border: 1px solid #CCC;padding: 5px 12px 5px 12px;font-family:'myriad Pro';border: 1px solid #E5E5E5;background:#E5E5E5;font-size:16px;">Annually - starting today</td>
      <td><input name="B13" type="text" id="B13" size="12" style="background-color:#FFFFCC;border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;" readonly="readonly"></td>
      <td><input name="C13" type="text" id="C13" size="12" style="background-color:#FFFFCC;border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;" readonly="readonly"></td>
      <td><input name="D13" type="text" id="D13" size="12" style="background-color:#FFFFCC;border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;" readonly="readonly"></td>
      <td><input name="E13" type="text" id="E13" size="12" style="background-color:#FFFFCC;border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;" readonly="readonly"></td>
    </tr>
    <tr>
      <td style="color: #474747;border: 1px solid #CCC;padding: 5px 12px 5px 12px;font-family:'myriad Pro';border: 1px solid #E5E5E5;background:#E5E5E5;font-size:16px;">Limited pay - for 5 years starting today.</td>
      <td><input name="B14" type="text" id="B14" size="12" style="background-color:#FFFFCC;border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;" readonly="readonly"></td>
      <td><input name="C14" type="text" id="C14" size="12" style="background-color:#FFFFCC;border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;" readonly="readonly"></td>
      <td><input name="D14" type="text" id="D14" size="12" style="background-color:#FFFFCC;border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;" readonly="readonly"></td>
      <td><input name="E14" type="text" id="E14" size="12" style="background-color:#FFFFCC;border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;" readonly="readonly"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="4"><input name="Button" type="button" class="style19" value="Print" onclick="reset_classes(); t.className='printerandscreen'; window.print();" style="background:#7e1312;color:#FFFFFF;font-family:'myriad Pro';font-size:16px;text-align:center;padding:8px 5px 8px 5px;width:120px;cursor:pointer;margin-left:0%;border-radius: 5px;"></td>
      </tr>
  </table>
        </div>
        </form>
         </div>
         
         
   <?php 
   }
   elseif($calsrch==5){
   ?>
   
    <div class="cal">
    <form name="form1" id="form1">
   <table width="100%" border="1" cellspacing="5" cellpadding="5">
   <tr>
      <td colspan="5" style="background: #7e1312;text-align: center;color: #FFF;padding: 8px 0 8px 12px;font-size:15px;text-transform:uppercase;">INSURANCE Calculator  </td>
      </tr>
    <tr>
    <tr>
      <td style="color: #474747;border: 1px solid #CCC;padding: 5px 12px 5px 12px;font-family:'myriad Pro';border: 1px solid #E5E5E5;background:#E5E5E5;font-size:16px;">Monthly Expenses (Rs.)</td>
      <td><input name="A" type="text" id="A" size="12" onkeyup="javascript:CALinsurance(document.form1.A,document.form1.B,document.form1.C,document.form1.D,document.form1.E,document.form1.F,document.form1.G,document.form1.H)" style="border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;"></td>
    </tr>
    <tr>
      <td style="color: #474747;border: 1px solid #CCC;padding: 5px 12px 5px 12px;font-family:'myriad Pro';border: 1px solid #E5E5E5;background:#E5E5E5;font-size:16px;">Annual Expenses (Rs.)</td>
      <td><input name="B" type="text" id="B" size="12" style="background-color:#FFFFCC;border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;" readonly="readonly"></td>
    </tr>
    <tr>
      <td style="color: #474747;border: 1px solid #CCC;padding: 5px 12px 5px 12px;font-family:'myriad Pro';border: 1px solid #E5E5E5;background:#E5E5E5;font-size:16px;">Assets (Rs.)</td>
      <td><input name="C" type="text" id="C" size="12" onkeyup="javascript:CALinsurance(document.form1.A,document.form1.B,document.form1.C,document.form1.D,document.form1.E,document.form1.F,document.form1.G,document.form1.H)" style="border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;"></td>
    </tr>
    <tr>
      <td style="color: #474747;border: 1px solid #CCC;padding: 5px 12px 5px 12px;font-family:'myriad Pro';border: 1px solid #E5E5E5;background:#E5E5E5;font-size:16px;">Liabilities, excluding loans which are insured (Rs.)</td>
      <td><input name="D" type="text" id="D" size="12" onkeyup="javascript:CALinsurance(document.form1.A,document.form1.B,document.form1.C,document.form1.D,document.form1.E,document.form1.F,document.form1.G,document.form1.H)" style="border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;"></td>
    </tr>
    <tr>
      <td style="color: #474747;border: 1px solid #CCC;padding: 5px 12px 5px 12px;font-family:'myriad Pro';border: 1px solid #E5E5E5;background:#E5E5E5;font-size:16px;">Current Insurance coverage (Rs.)</td>
      <td><input name="E" type="text" id="E" size="12" onkeyup="javascript:CALinsurance(document.form1.A,document.form1.B,document.form1.C,document.form1.D,document.form1.E,document.form1.F,document.form1.G,document.form1.H)" style="border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;"></td>
    </tr>
    <tr>
      <td style="color: #474747;border: 1px solid #CCC;padding: 5px 12px 5px 12px;font-family:'myriad Pro';border: 1px solid #E5E5E5;background:#E5E5E5;font-size:16px;">Expected rate of return (%)</td>
      <td><input name="F" type="text" id="F" size="12" onkeyup="javascript:CALinsurance(document.form1.A,document.form1.B,document.form1.C,document.form1.D,document.form1.E,document.form1.F,document.form1.G,document.form1.H)" style="border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;"></td>
    </tr>
    <tr>
      <td style="color: #474747;border: 1px solid #CCC;padding: 5px 12px 5px 12px;font-family:'myriad Pro';border: 1px solid #E5E5E5;background:#E5E5E5;font-size:16px;">Total Insurance coverage required</td>
      <td><input name="G" type="text" id="G" size="12" style="background-color:#FFFFCC;border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;" readonly="readonly"></td>
    </tr>
    <tr>
      <td style="color: #474747;border: 1px solid #CCC;padding: 5px 12px 5px 12px;font-family:'myriad Pro';border: 1px solid #E5E5E5;background:#E5E5E5;font-size:16px;">Additional insurance coverage required</td>
      <td><input name="H" type="text" id="H" size="12" style="background-color:#FFFFCC;border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;" readonly="readonly"></td>
    </tr>
    
    <tr>
      <td>&nbsp;</td>
      <td><input name="Button" type="button" class="style19" value="Print" onclick="reset_classes(); t.className='printerandscreen'; window.print();" style="background:#7e1312;color:#FFFFFF;font-family:'myriad Pro';font-size:16px;text-align:center;padding:8px 5px 8px 5px;width:120px;cursor:pointer;margin-left:0%;border-radius: 5px;"></td>
    </tr>
    
  </table>
  </form>
  </div>

   <?php 
   }
   else{
   ?>
   <div class="cal">
        <form name="form1" id="form1">
		<div class="onlyscreen sss" id='t'>
        <table width="100%" border="1" cellspacing="5" cellpadding="5" >
        <tr>
        <td style="background: #7e1312;text-align: left;color: #FFF;padding: 8px 0 8px 12px;font-size:15px;text-transform:uppercase;">SIP Calculator</td>
        <td style="background: #7e1312;text-align: center;color: #FFF;padding: 8px 0 8px 0;font-size:15px;text-transform:uppercase;">Monthly</td>
        <td style="background: #7e1312;text-align: center;color: #FFF;padding: 8px 0 8px 0;font-size:15px;text-transform:uppercase;">Annual</td>
        </tr>
        <tr>
        <td style="color: #474747;border: 1px solid #CCC;padding: 5px 12px 5px 12px;font-family:'myriad Pro';border: 1px solid #E5E5E5;background:#E5E5E5;font-size:16px;">Investments (starting today)-Rs.</td>
        <td style="border: 0px solid #CCC;padding: 5px 12px 5px 12px;"><input name="A1" type="text" id="A1" size="12"  onkeyup="javascript:dual(this.value,document.form1.A2);javascript:single(document.form1.C1.value,document.form1.C2,document.form1.A1.value,document.form1.B1.value,document.form1.D1,document.form1.D2,document.form1.E1,document.form1.F1,document.form1.E2,document.form1.F2,document.form1.A2)" style="border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;"/></td>
        <td style="border: 0px solid #CCC;padding: 5px 12px 5px 12px;"><input name="A2" type="text" id="A2" size="12" onkeyup="javascript:revdual(this.value,document.form1.A1)" style="border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;"/></td>
        </tr>
        <tr>
        <td style="color: #474747;border: 1px solid #CCC;padding: 5px 12px 5px 12px;font-family:'myriad Pro';border: 1px solid #E5E5E5;background:#E5E5E5;font-size:16px;">No. of Years</td>
        <td style="border: 0px solid #CCC;padding: 5px 12px 5px 12px;"><input name="B1" type="text" id="B1" size="12" onkeyup="javascript:copy(this.value,document.form1.B2);javascript:single(document.form1.C1.value,document.form1.C2,document.form1.A1.value,document.form1.B1.value,document.form1.D1,document.form1.D2,document.form1.E1,document.form1.F1,document.form1.E2,document.form1.F2,document.form1.A2)" style="border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;"/></td>
        <td style="border: 0px solid #CCC;padding: 5px 12px 5px 12px;"><input name="B2" type="text" id="B2" size="12" style="border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;"/></td>
        </tr>
        <tr>
        <td style="color: #474747;border: 1px solid #CCC;padding: 5px 12px 5px 12px;font-family:'myriad Pro';border: 1px solid #E5E5E5;background:#E5E5E5;font-size:16px;">Expexted annual return(%)</td>
        <td style="border: 0px solid #CCC;padding: 5px 12px 5px 12px;"><input name="C1" type="text" id="C1" size="12" onkeyup="javascript:single(this.value,document.form1.C2,document.form1.A1.value,document.form1.B1.value,document.form1.D1,document.form1.D2,document.form1.E1,document.form1.F1,document.form1.E2,document.form1.F2,document.form1.A2)" style="border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;"/></td>
        <td style="border: 0px solid #CCC;padding: 5px 12px 5px 12px;"><input name="C2" type="text" id="C2" size="12" style="border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;"/></td>
        </tr>
        <tr>
        <td style="color: #474747;border: 1px solid #CCC;padding: 5px 12px 5px 12px;font-family:'myriad Pro';border: 1px solid #E5E5E5;background:#E5E5E5;font-size:16px;">Cost of total investments made- Rs.</td>
        <td style="border: 0px solid #CCC;padding: 5px 12px 5px 12px;"> <input name="D1" type="text" id="D1" size="12" style="background-color:#FFFFCC;border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;" readonly="readonly" /></td>
        <td style="border: 0px solid #CCC;padding: 5px 12px 5px 12px;"><input name="D2" type="text" id="D2" size="12" style="background-color:#FFFFCC;border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;" readonly="readonly" /></td>
        </tr>
        <tr>
        <td style="color: #474747;border: 1px solid #CCC;padding: 5px 12px 5px 12px;font-family:'myriad Pro';border: 1px solid #E5E5E5;background:#E5E5E5;font-size:16px;">Investment value at the end of the tenure-Rs.</td>
        <td style="border: 0px solid #CCC;padding: 5px 12px 5px 12px;"><input name="E1" type="text" id="E1" size="12"  style="background-color:#FFFFCC;border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;" readonly="readonly"/></td>
        <td style="border: 0px solid #CCC;padding: 5px 12px 5px 12px;"><input name="E2" type="text" id="E2" size="12" style="background-color:#FFFFCC;border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;" readonly="readonly"/></td>
        </tr>
        <tr>
        <td style="color: #474747;border: 1px solid #CCC;padding: 5px 12px 5px 12px;font-family:'myriad Pro';border: 1px solid #E5E5E5;background:#E5E5E5;font-size:16px;">Final Investment value/Cost of investment</td>
        <td style="border: 0px solid #CCC;padding: 5px 12px 5px 12px;"> <input name="F1" type="text" id="F1" size="12" style="background-color:#FFFFCC;border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;" readonly="readonly"/></td>
        <td style="border: 0px solid #CCC;padding: 5px 12px 5px 12px;"><input name="F2" type="text" id="F2" size="12" style="background-color:#FFFFCC;border: 1px solid #000;width: 100%;height: 30px;border-radius: 3px;padding-left: 5px;" readonly="readonly"/></td>
        </tr>
        
        <tr>
        <td>&nbsp;</td>
        <td><input name="Button" type="button" class="style19" value="Print" onClick="reset_classes(); t.className='printerandscreen'; window.print();" style="background:#7e1312;color:#FFFFFF;font-family:'myriad Pro';font-size:16px;text-align:center;padding:8px 5px 8px 5px;width:120px;cursor:pointer;margin-left:6%;border-radius: 5px;"/></td>
        <td>&nbsp;</td>
        </tr>
        </table>
        </div>
        </form>
         </div>
   <?php
   }
   ?>
         <?php endwhile; else: ?>
    <p><?php //_e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
    
    <div class="clear"></div>
    
    </div>    
    </div><!--content ends-->
    

<?php get_footer(); ?>
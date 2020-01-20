
<!DOCTYPE html>
<html>
<head>
	<title>Download Your Letter</title>
</head>
<body>

	<div>
		 <img src="resources/logo.png" alt="ONGC logo" style="width:100px;height:100px;float:left;"> 
		<font size="4">
			
			<center>
				<strong style="padding-left: 0px">Oil and Natural Gas Corporation Limited</strong>
			</center>
			<center style="padding-left: 80px"> ONGC Academy</center>
			<center style="padding-left: 90px">KDMIPE Campus, Kaulagarh Road, Dehradun - 248195</center>
			<center style="padding-left: 90px">Ph. 0135-2795103 Fax. 0135-2758832</center>
		</font>

<form method="POST">
	<font size="3">
	  <p style="margin-top:80px; align:left ">File No. OA/SAIL/CSE/2020-21 </p>					<p align="right"> Date: <?php echo date("d/m/Y"); ?></p>
	  <p>
			To,
		<br>
			<strong>Mr./Ms./Mrs. <?php session_start(); echo $_SESSION["namee"]; ?></strong>
		
		</p>
		<p align="left">
			This has reference to your request letter for training in BE/B.Tech - Computer Science at ONGC, Dehradun. We are plaeased to inform that your name has been short-listed by the competent authority for Winter training for a period of 1 Month. You are hereby requested to report to Mr. Rajneesh Badoni, General Manager ( Electronics & Telecom ), C/INFO IT DN, Dehradun, Mob. # 9411114300 for training on  <?php echo date("d/m/Y"); ?>. This Training shall be under the following terms and conditions:
			<ol type="1">
				<li>ONGC will not provide any Boarding/ Loading/ Transportation to the student during the period of Training.</li>
				<li>No stipend will be paid to the student by ONGC for the period of the training.</li>
				<li>The training shall not incur any liability on ONGC for providing any job to the trainee.</li>
				<li>The student will undergo the training at his/her own risk and ONGC will not be held responsible for any injury etc. caused to him during the period of the training.</li>
				<li>The student will abide by all the rules and regulations of ONGC while inside its premesis.</li>
				<li>On completion of the period of the training the student will have to submit a report (in soft and hard copies) to the respective Mentor. On the basis of the report, the Mentor would issue a "Letter of Completion" to the trainee specifying the period of training and Topic/ Subject.</li>
				<li>The "Completion Certificate" will only be issued to him / her on submission of following to I/c SAIL, ONGC Academy Dehradun.</li>

				<ol type="a">
					<li>The "Letter of Completion" of training issued by the mentor.</li>
					<li>A copy of report (in soft form i.e, CD and hard form)</li>
					<li>This letter in original, and</li>
					<li>Gate pass issued from Security.</li>
				</ol>
		</ol>
		</p>
		<p align="right">

																													Yours sincerely,
																													<br>
																												    (GIRI RAJ DHIMAN)
																												    <br>
																											Deputy General Manager (HR)
	</p>
	<p align="left">
	Copy to:-
		<ol type="1">
			<li>Rajneesh Badoni, General Manager (Electronics & Telecom), C/INFO IT DN, Dehradun with a request to issue a letter of completion so that ONGC Academy main issue final Completion certificate. Regular Attendance of the student during the training period shall also be ensured.</li>
			<li>Head of the Educational Institute concerned.</li>
			<li>In-charge, security gate, Tel Bhavan /IDT/E&D/KDMIPE, Dehradun.</li>
		</ol>
	</p>
</form>


</div>
</body>
</html>
   
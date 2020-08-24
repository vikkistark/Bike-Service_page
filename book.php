<html>
<body>
    <div class="anotherpg"></div>
    <div class="anotherpg1"></div>
	<link rel="stylesheet" href="cp3.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
	<div class="sel" >
		<form class="form" style="font-family: 'Josefin Sans', sans-serif;" action="#">
	<h1 class="bh">Service Package</h1>
  		<select id="c" class="sct" onchange="hide()">
  	  	<option>select bike company</option>
	    <option value="yamaha" >yamaha</option>
	    <option value="hero" >hero</option>
	    <option value="Honda">Honda</option>
	    <option value="Bajaj">Bajaj</option>
	    <option value="TVS">TVS</option>
	    <option value="Suzuki">Suzuki</option>
	    <option value="Mahindra">Mahindra</option>
	    <option value="KTM">KTM</option>
        <option value="Royal Enfield">Royal Enfield</option>
        <option value="Other">Other</option>
    </select>
<div class="anotherpg2"></div>
  		<select class="sel" >
		<option value="">Manufactured Year</option>
		<option value="2018">2018</option>
		<option value="2017">2017</option>
		<option value="2016">2016</option>
		<option value="2015">2015</option>
		<option value="2014">2014</option>
		<option value="2013">2013</option>
		<option value="2012">2012</option>
		<option value="2011">2011</option>
		<option value="2010">2010</option>
		<option value="2009">2009</option>
		<option value="2008">2008</option>
		<option value="2007">2007</option>
		<option value="2006">2006</option>
		<option value="2005">2005</option>
		<option value="2004">2004</option>
		<option value="2003">2003</option>
		<option value="2002">2002</option>
		<option value="2001">2001</option>
		<option value="2000">2000</option>
		<option value="1999">1999</option>
		<option value="1998">1998</option>
		<option value="1997">1997</option>
		<option value="1996">1996</option>
		<option value="1995">1995</option>
		<option value="1994">1994</option>
		<option value="1993">1993</option>
		<option value="1992">1992</option>
		<option value="1991">1991</option>
		<option value="1990">1990</option>
		<option value="1989">1989</option>
		<option value="1988">1988</option>
		<option value="1987">1987</option>
		<option value="1986">1986</option>
		<option value="1985">1985</option>
	</select>

    <select id="time" class=sel>
		<option value="">Preferred Time</option>
		<option value="8:00 AM to 11:00 AM">8:00 AM to 11:00 AM</option>
		<option value="11:00 AM to 2:00 PM">11:00 AM to 2:00 PM</option>
		<option value="2:00 PM to 5:00 PM">2:00 PM to 5:00 PM</option>
		<option value="5:00 PM to 8:00 PM">5:00 PM to 8:00 PM</option>
	</select>
<p action=#>
	<div class="bd"><input type="date" placeholder="Service Location" required=""><label>Select Date</label></div>
	<div class="bp"><input type="text" required=""><label>Name</label></div>
	<div class="bp"><input type="text" required=""><label>Vehicle No.</label></div>
	<div class="bp"><input type="text" required=""><label>Phone number</label></div>
	<div class="bt1"><textarea rows="5" placeholder="Service Location" ></textarea></div>
	<div class="bt2"><textarea rows="10" placeholder="Special Complaint" ></textarea></div>
	<div class="end"><button href="#">Book Now</button></div>

</p>

</p>
</form>
</div>
</body>
</html>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
	$(function(){
		$(".anotherpg").load("top.php");
});
		$(function(){
		$(".anotherpg1").load("select.php");
});
		$(function(){
		$(".anotherpg2").load("model.php");
});

</script>


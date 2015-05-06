<HTML>
<BODY Background="images/00akiw5.gif">
<CENTER>
<H1>Welcome to Raj Bank of India</H1>

<H1>Online Account Opening</H1>
<FORM ACTION="./openaccount" method="post">

<table>
  <tr>
    <td>Accno<input id="acno" type="text" Name="accno" required></td>
    <td>Name<input type="text" Name="name" required></td>
	<td>Balance<input id="bal" type="text" Name="initialbalance" value=0></td>
  </tr>
</table>
<button type="submit" onclick="myFunction()">Test Input</button>
<!--<INPUT TYPE= "SUBMIT" VALUE="open account">-->
<p id="message" color="red"></p><br><br>
<p>click here to go to <a href="homepage.jsp">home page<a><p>
</form>
</center>

<script>
function myFunction() {
    var message, x;
    message = document.getElementById("message");
    message.innerHTML = "";
    x = document.getElementById("acno").value;
	y=  document.getElementById("bal").value;
    try { 
        if(isNaN(x)) throw "account number should not contain characters";
        if(x > 9999)   throw "account number should be 4 digits only";
        if(y > 50000)    throw "you are supposed to deposit more than 50thousand in the bank only";
    }
    catch(err) {
        message.innerHTML = err;
    }
    finally {
        document.getElementById("demo").value = "";
    }
}
</script>
</BODY>
</HTML>
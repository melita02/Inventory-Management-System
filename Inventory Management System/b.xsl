<?xml version="1.0" encoding="ISO-8859-1"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/"> 
	<html>
		<body> 
			<h3>
				<center>table of credits</center>
			</h3> 
			<table border="1" align="center"> 
				<tr>
				<th>Name of Students</th>
				<th>roll no</th>
				
			</tr>			
			<xsl:for-each select="employeedetails/employee" > 
				<tr> 
					<td> 
						<xsl:value-of select="Name_of_Students"/></td>
						<td> 
						<xsl:value-of select="Roll_No"/></td>
								
						</tr>
						</xsl:for-each>				
				</table></body>
	</html></xsl:template></xsl:stylesheet>

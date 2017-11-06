<?xml version="1.0" ?>
<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<HTML> 
<BODY> 
<P>Tabla creada mediante VerPreguntas.xsl</P>
<BR></BR>
<TABLE border="1">

<THEAD>

<TR>



 <TH> Email </TH> 
 <TH> Enunciado </TH>
 <TH> RCorrecta </TH> 
 <TH> RIncorrectas </TH>
 <TH> Complejidad </TH> 
 <TH> Tema </TH>

</TR>

</THEAD>



<xsl:for-each select="/assessmentItems/assessmentItem" >

	<TR>


	<TD>
	<xsl:value-of select="@author" />
	</TD>

	<TD>
	<xsl:value-of select="itemBody/p"/>
	</TD>

	<TD>
	<xsl:value-of select="correctResponse/value"/>
	</TD>

	<TD>
	<xsl:for-each select="incorrectResponses/value" >
		<xsl:value-of select="current()"/>
		<br></br>
	</xsl:for-each>
	</TD>


	<TD>
	<xsl:value-of select="@complexity" />
	</TD>

	<TD>
	<xsl:value-of select="@subject" />
	</TD>



	</TR>

</xsl:for-each>






</TABLE>
</BODY>
</HTML>
</xsl:template>
</xsl:stylesheet> 
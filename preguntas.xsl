<?xml version="1.0" ?>
<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<HTML> <BODY> <P>COMO TRANSFORMAR XML EN UNA TABLA
HTML</P>
<TABLE border="1">
 <THEAD>
<tr> <th> Email </th> <th> Enunciado </th><th> RCorrecta </th> <th> RIncorrecta1 </th> <th> RIncorrecta2 </th> <th> RIncorrecta3</th> <th> Complejidad </th> <th> Tema </th></tr>
 </THEAD>
 <xsl:for-each select="/LIBROS/LIBRO" >
 <TR>
 <TD>
 <FONT SIZE="2" COLOR="red" FACE="Verdana">
 <xsl:value-of select="TITULO"/> <BR/>
 </FONT>
 </TD>
 <TD>
 <FONT SIZE="2" COLOR="blue" FACE="Verdana">
 <xsl:value-of select="AUTOR"/> <BR/>
 </FONT>
 </TD>
 </TR>
 </xsl:for-each>
 </TABLE>
</BODY>
</HTML>
</xsl:template>
</xsl:stylesheet> 
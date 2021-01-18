<?xml version = "1.0"?>
<xsl:stylesheet version = "1.0" xmlns:xsl = "http://www.w3.org/1999/XSL/Transform" xmlns="http://www.w3.org/1999/xhtml">
<xsl:template match = "RU">
<html>
    <head>
        <title> Style sheet for 5b.xml </title>
    </head>
    <body style="background-color:white;">
        <h2 style="font-size:300%; text-align:center; color:SlateBlue;"> Shopping </h2>

        <span style = "font-style: italic; color: blue;font-size:200%;"> Books:</span> <xsl:value-of select="b"/><br/>

        <span style="font-style: italic; color: red; font-size:200%;"> Electronics:</span> <xsl:value-of select="e"/> <br/>

        <span style = "font-style: italic; color: MediumSeaGreen; font-size:200%;">Stationary: </span> <xsl:value-of select="s"/> <br />

        <span style="font-style: italic; color: blue; font-size:200%;"> Clothes:</span> <xsl:value-of select="c"/> <br />

        <span style = "font-style: italic; color: Chocolate; font-size:200%;"> Others:

        </span> <xsl:value-of select="o"/> <br />

    </body>

 </html>
 </xsl:template>
 </xsl:stylesheet>
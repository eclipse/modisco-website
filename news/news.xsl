<xsl:stylesheet xmlns:xsl='http://www.w3.org/1999/XSL/Transform' version="1.0">

<xsl:template match="rss">
  <xsl:apply-templates select="channel"/>
</xsl:template>


<xsl:template match="channel">
  <ul>
   <xsl:apply-templates select="item"/>
  </ul>
</xsl:template>

<xsl:template match="item">
  <li>
  <h4><a href="{link}"><xsl:value-of select="title"/></a></h4>
  <xsl:copy-of select="description/*"/>
  </li>
  
</xsl:template>

</xsl:stylesheet>

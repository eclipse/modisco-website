<xsl:stylesheet xmlns:google="http://base.google.com/ns/1.0" xmlns:atom="http://www.w3.org/2005/Atom" xmlns:xsl='http://www.w3.org/1999/XSL/Transform' version="1.0">
<xsl:template match="/">
<h3>Twitter</h3>
  <ul>
   <xsl:apply-templates select=".//atom:entry[1]|.//atom:entry[2]|.//atom:entry[3]" />
  </ul>
</xsl:template>

<xsl:template match="atom:entry" name="xx">
  <li>
  <a href="{.//atom:link[@rel='alternate'][1]/@href}"><xsl:value-of select="atom:title"/></a>
  </li>
</xsl:template>

</xsl:stylesheet>

<?php  	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

#*****************************************************************************
#
# kdm.php
#
# Author: 		Gabriel Barbier
# Date:			2009-04-03
#
# Description: presentation of KDM to UML converter plugin in MoDisco project.
#  It is a translation of KDM models to UML models.
#
#
#****************************************************************************

#
# Begin: page-specific settings.  Change these.
$pageTitle 		= "MoDisco Tool - KDM to UML Converter";
$pageKeywords	= "MoDisco, Model Discovery, Model-Driven Reverse Engineering, MDE, Modernization, Knowledge Discovery Metamodel (KDM), Knowledge Discovery Metamodel, KDM, Unified Modeling Language, UML, UML2, Eclipse UML2, OMG, Object Management Group, Object Management Group (OMG)";
$pageAuthor		= "Gabriel Barbier";

# End: page-specific settings
#

# Paste your HTML content between the EOHTML markers!
$html = <<<EOHTML

    <!-- Main part -->
    <div id="midcolumn">
        <h1><font color='#280882'>Mo</font><font color='#C88C19'>Disco</font> KDM to UML Converter</h1>

        <a name="goals"></a>
        <img align="right" src="../../resources/logoMoDiscoSmall.jpg" valign="top" style="padding-left: 10px;" alt="MoDisco Logo" />
        <blockquote>
            <ul>
                <li><a href="#keywords"><b>Keywords</b></a></li>
                <li><a href="#overview"><b>Overview</b></a></li>
                <li><a href="#relatedUseCases"><b>Related Use Cases</b></a></li>
                <li><a href="#documentation"><b>Documentation</b></a></li>
                <li><a href="#download"><b>Download</b></a></li>
            </ul>
        </blockquote>

        <hr class="clearer" />

        <div>
        <table border="0" width="100%">
            <COLGROUP>
                <COL width="2%">
                <COL width="98%">
        <tr>
            <td></td>
            <td>

        <h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="keywords">Keywords</a></h4>

        <p align="justify">
            Modernization, Knowledge Discovery Metamodel (KDM), KDM, Object Management Group (OMG), OMG
        </p>

        <br>

        <h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="overview">Overview</a></h4>

        <p align="justify">

            This tool is about converting <a href="./kdm.php">KDM models</a> into
            <a href="http://wiki.eclipse.org/MDT-UML2">Eclipse UML2 models</a> in order to allow integrating KDM-compliant tools
            (i.e. discoverers) with UML2-compliant tools (e.g. modelers, model transformation tools, code generators, etc).

            <br>
            <br>
            This tool is provided by <a href="http://www.mia-software.com/">MIA-Software</a> and its development
            is being supported by the <a href="https://www.modelplex-ist.org/">IST European MODELPLEX project</a>
            (MODELing solution for comPLEX software systems, FP6-IP 34081).
            <br>
            The overall approach is summarized in the following figure:


        </p>
        <p align="center">
            <img src="../resources/schemas/MoDisco_KDMtoUML2Converter_Overview.png"/>
            <br /><br />
            <b>Using the KDM to UML Converter for integrating KDM tools with UML2 tools</b>
        </p>
        <p align="justify">
            The converter is implemented by an <a href="http://www.eclipse.org/m2m/atl/">ATL model-to-model transformation</a>
            taking as input a model conforming to the KDM metamodel and producing as ouptut a model conforming
            to the UML metamodel. Thus, each KDM input model elements are converted into their corresponding
            UML output model elements.
            <br>
            We provide below an example showing a KDM sample model and the equivalent generated UML model.

        </p>
        <p align="center">
            <img src="../resources/excerpts/MoDisco-KDM Kdm source model.jpg"/>
            <img src="../resources/excerpts/MoDisco-KDM Uml target model.jpg"/>
            <br /><br />
            <b>Using the KDM to UML Converter for integrating KDM tools with UML2 tools</b>
        </p>
        <br>

        <h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="relatedUseCases">Related Use Cases or tool boxes</a></h4>
     
        <table border="0" width="100%">
            <COLGROUP>
                <COL width="25%">
                <COL width="75%">
            <tr>
                <td align="center">
                    <h2> <a href="../Modelplex">Modelplex use case</a> </h2>
                </td>
                <td>
                    The goal of this use case is to obtain a UML model of a java application.
                    It combines JavaDiscoverer with KdmToUmlConverter to attain this goal.
                    And it offers a way to customize easily these transformation chains.
                </td>
            </tr>
            <tr>
                <td align="center">
                    <h2> <a href="../ModelFilter">Model filter use case</a> </h2>
                </td>
                <td>
                    The goal of this use case is to obtain a specific UML model of a java element,
                    final model describes dependencies from selected element to other elements,
                    and it contains only required informations (it is a mimimalist model).
                    It combines JavaDiscoverer with KdmToUmlConverter to attain this goal.
                </td>
            </tr>
        </table>
       

        <br>

        <h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="documentation">Documentation</a></h4>

        <table border="0" width="100%">
            <COLGROUP>
                <COL width="25%">
                <COL width="75%">
        <tr>
        <td align="center">
        <a href="http://wiki.eclipse.org/MoDisco/KDM/UMLConverter">
            <img src="../../resources/buttons/InstallationUserGuide_button.jpg"/>
        </a>
        </td>
        <td>
            <b>KDM to UML Converter Installation Guide</b>: How to install the plugin for building UML models from KDM models.
        </td>
        </tr>
        </table>


        <h4 STYLE="font-size: 10pt; padding: 0; border-bottom: 2px solid #49457C; background-position: top left; background-repeat; repeat-x;"><a name="download">Download</a></h4>

        <table border="0" width="100%">
            <COLGROUP>
                <COL width="25%">
                <COL width="75%">
        <tr>
        <td align="center">
        <a href="downloads/org.eclipse.gmt.modisco.omg.kdm.uml2converter_0.6.0.jar">
            <img src="../../resources/buttons/Discoverer_button.jpg"/>
        </a>
        </td>
        <td>
            First complete version of the <b>KDM to UML Converter</b> plug-in. All the sources contained in the archive are also available from the <a href="http://dev.eclipse.org/viewsvn/index.cgi/plugins/trunk/org.eclipse.gmt.modisco.omg.kdm.uml2converter/?root=Modeling_MODISCO">MoDisco SVN</a>
        </td>
        </tr>
        </table>



        </td>
        </tr>
        </table>
        </div>

        <hr class="clearer" />
    </div>


    <!-- Right Part -->
    <div id="rightcolumn">
        <div class="sideitem">
            <h6>General Information</h6>
            <ul>
                <li>April 2009</li>
                <li style="list-style:none"><br/></li>
                <li>By <a href="mailto://gbarbier@mia-software.com">Gabriel Barbier (Mia-Software)</a></li>
                <li style="list-style:none"><br/></li>
                <li>Please, ask your questions on the <a href="news://news.eclipse.org/eclipse.modisco">MoDisco newsgroup</a></li>
            </ul>
        </div>
        <div class="sideitem">
            <h6>Related Links</h6>
            <ul>
                <li><a href="http://www.eclipse.org/m2m/atl/">ATL (Model Transformation)</a></li>
                <li style="list-style:none">----------</li>
                <li><a href="http://www.omg.org/technology/kdm/index.htm">OMG KDM</a></li>
                <li style="list-style:none">----------</li>
                <li><a href="http://en.wikipedia.org/wiki/Knowledge_Discovery_Metamodel">Wikipedia KDM</a></li>
                <li style="list-style:none">----------</li>
                <li><a href="http://www.omg.org/spec/UML/2.1.2/">OMG UML 2.1.2</a></li>
                <li style="list-style:none">----------</li>
                <li><a href="http://www.eclipse.org/modeling/mdt/?project=uml2">Eclipse UML2</a></li>
            </ul>
        </div>

    </div>


EOHTML;


# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
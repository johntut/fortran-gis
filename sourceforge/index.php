<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <title>FortranGIS - linking Fortran and GIS libraries</title>
   <link href="style.css" type="text/css" rel="stylesheet">
</head>
<body>

<div id="page_wrapper">

<div id="header_wrapper">

<div id="header">

<h1>Fortran<font color="#FFDF10">GIS</font></h1>
<h2>Accessing GIS datasets from Fortran programs</h2>

</div>

<div id="navcontainer">
<!-- <div class="rl2"> -->

<ul id="navlist">
<li id="active"><a href="#" id="current">Home</a></li>

<?php
if (strpos($_SERVER['SERVER_NAME'],"berlios")) {
$summ = "http://developer.berlios.de/projects/fortrangis/";
$files = "http://developer.berlios.de/project/showfiles.php?group_id=12472";
} else {
$summ = "http://sourceforge.net/projects/fortrangis/";
$files = "http://sourceforge.net/projects/fortrangis/files/fortrangis/";
}
echo '<li><a href="' . $summ . '">Summary</a></li>';
echo '<li><a href="' . $files . '">Download</a></li>';
?>
<li><a href="https://sourceforge.net/p/fortrangis/code/HEAD/tree/">Browse SVN</a></li>
<li><a href="doc/index.html">Documentation</a></li>

</ul>
</div>

</div>

<div id="left_side">

<?php
if (strpos($_SERVER['SERVER_NAME'],"berlios")) {
echo '<a href="http://developer.berlios.de"><img src="http://developer.berlios.de/bslogo.php?group_id=12472" width="124" height="32" border="0" alt="BerliOS Logo" /></a>';
} else {
echo '<a href="http://sourceforge.net/projects/fortrangis"><img src="http://sflogo.sourceforge.net/sflogo.php?group_id=603237&amp;type=15" width="150" height="40" alt="Get FortranGIS at SourceForge.net. Fast, secure and Free Open Source software downloads" /></a>';
}
?>

<h3>News from the project</h3>

<p>
<?php
if ( file_exists("projnews.html") ) {
        include("projnews.html");
}
?>
</p>

</div>


<div id="content">

<h3>FortranGIS project</h3>

<p>FortranGIS project includes a collection of Fortran interfaces to
some common Open Source GIS (Geographic Information System)
software libraries, plus some more Fortran-specific tools.</p>

<p>The libraries interfaced at the moment are Shapelib, GDAL, Proj
and ReadOSM.</p>


<h4>Shapelib</h4>
<br />

<div class='featurebox_center'>

<a href="http://shapelib.maptools.org/">Shapelib</a> is a library for
handling ESRI shapefiles, a very common vector file format in
GIS. This Fortran interface covers the full Shapelib API, including
reading and writing of all kinds of shapes and dbf attributes
supported.<br />

All the procedures interfaced in Fortran are documented with
Doxygen.<br />

The Fortran API for Shapelib is stable and unlikely to undergo any
change.<br />

</div>

<br />
<h4>Gdal</h4>
<br />

<div class='featurebox_center'>

<a href="http://www.gdal.org/">GDAL</a> is a library for the
input/output of a number of georeferenced raster (gridded) data
formats. Since release 2.0, this Fortran interface includes bindings
to almost all the GDAL C functions, allowing read and write of
any file format supported by GDAL. This incidentally allows to read in
Fortran also common graphic formats such as jpeg, png and gif.<br />

For some common procedures, a Fortran-specific interface is available,
thus simplifying the work for Fortran programmers.</br />

The Fortran-specific procedures are documented with Doxygen,
while for the procedures directly interfaced to the native GDAL functions
you should refer to the original GDAL C API documentation.<br />

</div>

<br />
<h4>Proj</h4>
<br />

<div class='featurebox_center'>

<a href="http://trac.osgeo.org/proj/">Proj</a> is a library for
handling a big number of geographical projections and coordinate
conversions. The Fortran interface covers much of the library but is
still untested and undocumented.<br />

</div>

<br />
<h4>ReadOSM</h4>
<br />

<div class='featurebox_center'>

<a href="https://www.gaia-gis.it/fossil/readosm/index">ReadOSM</a> is a
library for extracting data from Open Street Map <tt>.osm</tt> and
<tt>.osm.pbf</tt> files which can be downloaded with various tools from
the <a href="http://openstreetmap.org/">OpenStreetMap</a> platform. It
is still experimental and is not built by default.<br />

</div>

<br />
<h3>Interfacing to C</h3>

<p>The interfacing to the C APIs within this project is done through
the ISO_C_BINDING Fortran2003 intrinsic module. This is supported
nowadays by most commercial Fortran compilers as well as by the free
gfortran compiler. Since version 2.3, FortranGIS makes use of some extra
Fortran 2003 features besides bindings to C, thus gfortran version 4.6
or higher is recommended.</p>

<p>The main hosting for this project is now
<a href="http://fortrangis.sourceforge.net/">Sourceforge</a>,
the original and no more updated pages on
<a href="http://fortrangis.berlios.de/">Berlios</a> will remain online until the closure of the site.</p>

</div>

<div id="footer">
<!-- <a href="#">Link One</a> |  -->
<!-- <a href="#">Link Two</a> |  -->
<!-- <a href="#">Link Three</a> |  -->
<!-- <a href="#">Link Four</a> |  -->
<!-- <a href="#">Link Five</a> -->
<!-- <br /> -->
FortranGIS by Davide Cesari, e-mail <font color="#FFFFFF">dcesari69 at
gmail.com</font><br />
Web page template by Darren Hester, <a
href="http://www.designsbydarren.com">DesignsByDarren.com</a> </div>
</div>

</body>

</html>

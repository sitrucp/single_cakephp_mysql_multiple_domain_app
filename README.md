OneApp_OneDB_MultiDomain
========================

Use one CakePHP application and one MySQL datababse with multiple domains.

All domains have to be hosted on shared hosting.  Shared hosting has to allow pointing multiple domains to one sub domain directory.

CakePHP is put into the one shared sub domain directory.

Create your CakePHP application as normal but add the following:

1. Table called domain (or whatever you want with as many columns as you need) that will hold domain specific values that are used in the CakePHP to retrieved to be used in controllers and views.

2. Add function to AppController (see AppController code) and refer to it in AppController BeforeFilter. This will read domain name from site visitor and retrieve only that domain's values from database and make Configure:Read variables to be used elsewhere in application.

3. As required, add condition to other controllers that filters model records to only the current domain by using Configure:Write to get values to compare to.

I am currently using this with 6 domains.  Each of these 6 sites are filtered to specific countries but otherwise the presentation of content is the same in each. I  include Google Analytics code in database so that each site can be separately tracked. Instead of countries uou could filter for brands, product categories, client, etc. You could also swap out css styles or CakePHP themes.  

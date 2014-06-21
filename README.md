OneApp_OneDB_MultiDomain
========================

Use one CakePHP application and one MySQL datababse to provide website for multiple domains.

All domains have to be hosted on shared hosting.  Shared hosting has to allow pointing multiple domains to one sub domain directory.

CakePHP is put into the one shared sub domain directory.

Create your CakePHP application as normal but add the following:

1. Table called domain (or whatever you want with as many columns as you need) that will hold domain specific values that are retrieved to be used in in application.

2. Add domain table foreign key (domain_id) to other tables so that they can be filtered by domain when retrieving data.

3. Add getDomainSettings function to AppController and call it in AppController BeforeFilter. This reads domain name from site visitor and then usess that to retrieve only that domain's values from database which are then used to make CakePHP Configure:Read variables to be used elsewhere in application.

4. As required, add condition using CakePHP Configure:Write in other controllers' to filter database records to only the current domain.

I am currently using this with 6 domains.  Each of these 6 sites are filtered to specific countries but otherwise the presentation of content is the same. The alternative was maintaining 6 separate CakePHP applications and MySQL databases.

I include Google Analytics code in database so that each site can be separately tracked. Instead of countries uou could filter for brands, product categories, client, etc. You could also swap out css styles or CakePHP themes.  

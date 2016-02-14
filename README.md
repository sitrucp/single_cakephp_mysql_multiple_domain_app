OneApp_OneDB_MultiDomain
========================

Use one CakePHP application and one MySQL datababse to provide website for multiple domains.

All domains have to be hosted on shared hosting.  Shared hosting has to allow pointing multiple domains to one subdomain directory.

CakePHP application files are put into the shared subdomain directory.

Create your CakePHP application as normal but add the following:

1. Table called domain (or whatever you want with as many columns as you need) that will hold domain specific values that are retrieved to be used in in application.

2. Add domain table foreign key (domain_id) to other tables so that they can be filtered by domain when retrieving data. (This means likely you will require additional steps to ensure that the foreign key is written to your tables. How you do that is up to you but for example if you allow users to create accounts or post comments then you can simply record the domain_id Configure::read value when new user or comment is added.)

3. Add getDomainSettings function to AppController and call it in AppController beforeFilter. This reads domain name from current site visitor and then uses that to retrieve only that domain's values from database which are then used to make CakePHP Configure::write variables to be used elsewhere in application.

4. As required, add conditions when retrieving model data using CakePHP Configure:write in other controllers' to retrieve only records for the current domain.


More details at this blog post:

[http://009co.com/?p=249] (http://009co.com/?p=249)

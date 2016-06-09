# Development & deployment process after a site has been deployed on production

## Prerequisites

Our Git conventions & best practices:

[hut6-git-conventions.md](https://github.com/hut6/dev-resources/blob/master/hut6-git-conventions.md)

---

## The Process

If you develop web applications or websites, every developer has to have their own local setup, where development has to be done locally at all times. Every change can be verified locally first, proper quality assurance testing can be done, then, once it’s tested properly, it can be pushed to the production server. 

Automatic upload via FTP (rsync, ssh, etc... ie not Git) is not allowed. While this gives developers a small advantage of not installing the site or the application on their computers to perform testing locally, it will waste a lot of time down the track, and cause a lot of issues. 

### Step 1 

Take an sql dump of the live site/app, drop the dev database, and import the dump to replace your working data. 

Getting a database dump can be done various ways, depending on the project type

+ mysqldump via SSH
+ Database backup tool in the Craft Control Panel
+ cPanel / phpMyAdmin export
+ Sequel Pro connection to the prod DB server via SSH

### Step 2

Run migrations if applicable

### Step 3

Develop, test, rinse and repeat locally. 

### Step 4 

Deploy on production. Depending on the project, especially with Craft, DB changes on production may need to be done manually. See below. 

### Notes about Craft

For Craft sites, make the schema changes on dev first, test all of the changes, and then replicate the database changes on production at deployment time. Changes made to the code may break the current live site (ie a template change requires a new field, or when a field has been rename/removed); it will be up to the developer to decide whether to apply the DB changes to production just before or just after deploying the changes. 

Never run Craft CMS updates on production. Always run the update locally, test it, then deploy it. 

---

## Process for larger projects

On larger projects, developers will work on bugs and features in separate branches. Really minor updates or small urgent fixes can be committed directly to the master branch. For this process, please read: 

[hut6-git-workflow.md](https://github.com/hut6/dev-resources/blob/master/hut6-git-workflow.md)

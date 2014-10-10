# Useful Developer Notes

## Crana Servers

### Staging

    ssh securecr@meson.com.au -p 6395
    ssh stagingc@meson.com.au -p 6395
    cd cranaplus-db/
    app/deploy prod 2.1.15

	(soon to be obsolete with migrations)
    app/console doctrine:schema:update --dump-sql
    app/console doctrine:schema:update --force
	exit
	
### Public Web Site Server

    ssh cranaor2@meson.com.au -p 6395
 
apache rules:

    cat ~/public_html/.htaccess
  
proxy for redirection to DEV or STAGING from live site:
    cd public_html/proxy/
    cat get.php

CMS Front End: search OnePassword for crana.org.au:CMS
-  log into admin
-  for CMS changes remember to clear cache afterwards
	
## Symfony Projects

### Installing

download GIT Repo
	cd cranaplus-db/
	composer install
	php app/console assets:install
	php app/console assetic:dump

### Useful commands

start the project
    php app/console server:run

print all routing info
	app/console router:debug
	
print help info about app/console
	app/console

### To rebuild after branch switch or before test

	<refresh database>
	app/console assets:install
	app/console assetic:dump

 	app/console doctrine:schema:update --dump-sql
 	app/console doctrine:schema:update --force
 	.. OR ..
	app/console doctrine:migrations:migrate

	app/console cache:clear

### misc notes

Debug CSV Exports 
	- go to DefaultBundle/Crana/CranaController ->exportQueryResults
	- comment out response->headers->add

For logging in PHP
	fwrite(STDERR, print_r(count($results), TRUE));

## OSX Bash

command line navigation
	ctrl-a				Move to the start of the current line.
	ctrl-e				Move to the end of the line.
	option-fwdarrow		Move forward to the end of the next word. Words are composed of letters and digits.
	option-backarrow	Move backwards a word

find a file (not cached)
	find / -name php.ini 2>/dev/null

locate a file (cached): build database
	sudo /usr/libexec/locate.updatedb

start and stop mysql
	/usr/local/opt/mysql/bin/mysqld_safe
	/usr/local/opt/mysql/support-files/mysql.server stop


## VIM

	0 start line
	$ end of line
	hjkl move around
	a append at cursor pos / i append before cursor pos
	A append at end of line
	“*p paste from system clipboard
	dd delete line
	x delete char
	v select text
	V select lines
	  -> d to cut, y to copy
	p paste after cursor
	P paste before cursor

	u undo
	ctrl-R redo

	:wq write and quit

## Git Exotica

print hash of the newest common merged ancestor of the two branches
    git merge-base <public branch> <experimental branch>

create text patch file of the changes between the 'branch-private' branch and 'master'
    git diff $(git merge-base master branch-private) > anotherPatch.diff

clean up local pointers to remote branches that no longer exist
    git remote prune origin
    
delete remote repository 'newfeature'
	git push origin :newfeature


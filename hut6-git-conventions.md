# Git

## General tips

- Commit early and often and use real commit messages
- Push on a regular basis
    - lunch break and end of the day
    - for code review, unit test, etc...
- Pull frequently to keep the repo up to date

---

## Public Repositories

We use public repositories in GitHub for any resources that are available to public, general utility resources, procedures or to make contributions to open source projects. 

Anything confidential needs to stay out of any public repositories on GitHub.

---

## Project Repository Naming Convention

To make sure we use consistent names, repositories will be named like so: the year the project is started, the business name (in one word, or trading name), then the project type (in one word), separated by dashes, everything in lower case. For example:

``2016-businessname-website``

We use the business name instead of the domain name, because domain names tend to change more often than business names. 

If there happen to be two distinct projects in the same year for the same client, add a label at the end like so: ``2016-business-newsletter-promotion`` and ``2016-business-newsletter-mediarelease``.

---

## .gitignore best practices

### Local .gitignore (for the project)

Needs to list all the files that are directly relevant to the project, eg cache files, logs, uploaded data, temp, backups, etc...

Examples for Craft projects

+   craft/config/db.php
+   craft/storage/runtime/*
+   cache/*
+   etc...

Examples for Symfony projects

+   /app/cache/*
+   /app/logs/*
+   /app/config/parameters.yml
+   /app/config/parameters.ini
+   etc...

### Global .gitignore (for the environment)

Needs to list files that should be excluded because of your own environment, ie your OS, your IDEs (IntelliJ, PHPStorm), text editors (Sublime, TextMate, etc...) and other tools like CodeKit... Ie, files that appear for you but may not appear to others because of the way you do things. We need to avoid polluting the project with information it shouldn't know about. It's the developers responsibility to populate the global .gitignore with the files relevant to their environment.

Examples for OSX & Windows

+   .AppleDouble
+   .LSOverride
+   Thumbs.db

Examples for JetBrains stuff

+   .idea

You can generate your gitignore file here https://www.gitignore.io/

#### Other Notes

1. Remember to run `git config --global core.excludesfile ~/.gitignore`, because global ignore is not enabled by default.
2. It's possible to include previous excluded files using the prefix !. There are exceptions; more info at [https://git-scm.com/docs/gitignore]()

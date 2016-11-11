# GIT WORKFLOW

**Hut6** workflow for releasing and merging branches into master.

On larger projects, developers will work on bugs and features in separate branches. Once features are implemented on a branch, they are tested, a pull request is made, which a senior developer will check, and then merged into master if everything is ok. Really minor updates or small urgent fixes can be committed directly to the master branch.

## Beta Process
All project branches are prefixed with "P-". All feature branches are prefixed "F-". Code review should typically be a diff of a feature branch F-name against project branch P-name.
---

## Step 1 - Checkout new branch

Create new branch for your changes. Give it a descriptive no-flabel so it makes sense to other developers that might work on the project.

	git checkout -b <new_branch>

## Step 2 - Develop, test, rinse & repeat

We now have a new branch where we can make changes and test them without affecting other developers or the **master** branch.

When everything is done and working properly, commit the changes and push the new branch:

	git add .
	git commit -m "Some notes about the changes made"
	git push -u origin <new_branch>

## Step 3 - Sync with master

Update the **master** branch and merge it into the **new branch** to make sure the changes on your new branch are working on the latest version of the **master** branch.

### *Updating master*

Change to the **master** branch:

	git checkout master

Pull the latest changes from master:

	git pull origin master


### *Merging in master*

Change back to your **new branch**:

	git checkout <new_branch>

Double check that the working branch is your **new branch**:

	git branch

Merge **master** into your **new branch**:

	git merge master

## Step 4 - Push to origin

Now that master has been merged into your **new branch**, make sure everything is still working and push your to the remote repo:

	git push

## Step 5 - Automated tests

Check the results from Circle CI and Scrutinizer CI. Fix any outstanding issues and repeat steps above.

## Step 6 - Code review

Send a **"New pull request"** under **Pull Requests** link on the left hand side menu on a Github project and wait for another developer to review your changes. When a developer points out any issues, return to **Step 2** and fix anything outstanding.

## Step 7 - Merge into master

We now need to merge the **new branch** into the **master** branch.

Change the branch to **master**:

	git checkout master

Merge the **new branch** into the **master** branch:

	git merge --no-ff <new_branch>

* _The **--no-ff** flag prevents `git merge` from executing a "fast-forward" merge, which is difficult to revert._

## Step 8 - Tag version

The **master** branch on your local repository will now contain the changes from your branch.

Use the release script to tag your release and push your changes to the remote repository.

    app/tag-release [fix|minor|major] [--force] [-push]

* _Use the **-push** flag to also push the changes to origin_
* _It is not possible to tag a branch other than master by default. **--force** will allow you to tag branches other than master, but should not be used unless exceptional circumstances._

## Step 9 - Deploy

Now that the remote **master** branch is updated with your lastest changes, we can deploy to the server.

You can deploy by running the the following command on the server.

	app/deploy [prod|stage] <version_number>

### _Post Deployment_

Some changes will need database updates or migrations, vendors updates, caches clearing and new assets dumped. These should be included in the project's `app/deploy` script.

## Issues and Resolution

### _Releasing a broken build_

If you release a broke build the first thing you should do is revert back to the previous working build. You can do this by using the following.

`app/deploy [prod|stage] <previous_working_version>`

If migrations ran as part of your broken deployment, you will have to migrate down manually. This is quite hard, and you should probably get help.

### _Revert a broken merge_
If issues come up during the merge, you can find a resource on reverting the changes [here](http://git-scm.com/blog/2010/03/02/undoing-merges.html).

Reverting commits in version control is somewhat confusing, and usually fixing the problem and re-deploying will be best option.

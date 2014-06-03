# GIT WORKFLOW

**Hut6** workflow for releasing and merge branches into master.

---

# Step 1.

Create new branch for your changes.

	git checkout -b <new_branch>
    
# Step 2

You now have a branch and can modity and test changes without effecting other developers or the **master** branch.

**Commit** your changes and remember to **push** them to your new branch.

# Step 3

Send a **"New pull request"** found under **Pull Requests** link on the left hand side menu on a Github project and have another developer review your changes.

# Step 4

If the developer comments on any issues, return to **Step 2.** and fix an found issues.

If everything passed we now need to merge the new branch into the **master** branch as followed.

Check that your current working branch is your new branch using the folling command.

	git branch

Begin by merging **master** into your **new branch** using the following command

	git merge master

# Step 5

Now that the **master** branch has been merged into your **new branch** and all conflicts dealt with. We need to merge the  **new branch** into the Master branch.

First we want to change our branch to **master** using the following command.

	git checkout master
	
We now want to merge our **new branch** into our **master** branch using the following command.

	git merge --no-ff <new_branch>
	
* *The **--no-ff** flag prevents `git merge` from executing a "fast-forward".*

# Step 6

The **master** branch on your local repo will now contain your changes and is ready to be release to the remote repo.

Use the release script located `app/tag-release` to tag your release and push your changes to the remote repo.	

    app/tag-release [fix|minor|major] [--force] [-push]
    
* *The **--force** flag only applies to releases to non-master branches.*

# Step 7

Now that the remote **master** branch is update with your lastest changes, we can your the server deploy.

You can deploy using the following command.

	app/deploy [prod|stage] <version_number>
	
# Issues and Resolution 

### *Releasing a broken build*
* If you release a broke build the first thing you should do is revert back to the previous working build. You can do this by using the following.

`app/deploy [prod|stage] <previous_working_version>`

### *Revert a broken build*
* If issues come up during the merge, you can find a resource on reverting the changes [here](http://git-scm.com/blog/2010/03/02/undoing-merges.html).
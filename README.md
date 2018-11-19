**Edit a file, create a new file, and clone from Bitbucket in under 2 minutes**

When you're done, you can delete the content in this README and update the file with details for others getting started with your repository.

*We recommend that you open this README in another tab as you perform the tasks below. You can [watch our video](https://youtu.be/0ocf7u76WSo) for a full demo of all the steps in this tutorial. Open the video in a new tab to avoid leaving Bitbucket.*

---

## PUSH Code to Bitbucket

Work on a repository
Push code to Bitbucket
Pull code from Bitbucket
Create an issue
Create or edit a wiki page
Still need help?
The Atlassian Community is here for you.

Ask the community

To get your code changes into Bitbucket, you work on them locally before you add, commit, and push them to Bitbucket.

Push changes to a Git repository
Create your new files or edit existing files in your local project directory.
From the command line, enter cd <path_to_local_repo> so that you can enter commands for your repository.
Enter git add --all at the command line to add the files or changes to the repository.

Enter git commit -m '<commit_message>' at the command line to commit new files/changes to the local repository. For the <commit_message> , you can enter anything that describes the changes you are committing.
Enter git push  at the command line to copy your files from your local repository to Bitbucket.
If prompted for authentication, enter your Bitbucket password.
Push changes to a Mercurial repository
Create your new files or edit existing files in your local project directory.
From the command line, enter cd <path_to_local_repo> so that you can enter commands for your repository.
If you created a new file as part of your changes, enter hg add at the command line to add the file to the repository. If you didn't create any new files, continue to the next step.

Enter hg commit -m '<commit_message>' at the command line to commit new files/changes to the local repository. For the <commit_message>, you can enter anything that describes the changes you are committing.
Enter hg push at the command line to copy your files from your local repository to Bitbucket.
If prompted for authentication, enter your Bitbucket password.

## Create a file

Next, you’ll add a new file to this repository.

1. Click the **New file** button at the top of the **Source** page.
2. Give the file a filename of **contributors.txt**.
3. Enter your name in the empty file space.
4. Click **Commit** and then **Commit** again in the dialog.
5. Go back to the **Source** page.

Before you move on, go ahead and explore the repository. You've already seen the **Source** page, but check out the **Commits**, **Branches**, and **Settings** pages.

---

## Clone a repository

Use these steps to clone from SourceTree, our client for using the repository command-line free. Cloning allows you to work on your files locally. If you don't yet have SourceTree, [download and install first](https://www.sourcetreeapp.com/). If you prefer to clone from the command line, see [Clone a repository](https://confluence.atlassian.com/x/4whODQ).

1. You’ll see the clone button under the **Source** heading. Click that button.
2. Now click **Check out in SourceTree**. You may need to create a SourceTree account or log in.
3. When you see the **Clone New** dialog in SourceTree, update the destination path and name if you’d like to and then click **Clone**.
4. Open the directory you just created to see your repository’s files.

Now that you're more familiar with your Bitbucket repository, go ahead and add a new file locally. You can [push your change back to Bitbucket with SourceTree](https://confluence.atlassian.com/x/iqyBMg), or you can [add, commit,](https://confluence.atlassian.com/x/8QhODQ) and [push from the command line](https://confluence.atlassian.com/x/NQ0zDQ).
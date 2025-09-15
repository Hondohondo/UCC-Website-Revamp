# GitHub Repo Collaboration

1. **UCC-Website-Revamp** repo has been created and has been made public. (We made it public for a purpose, private repos under a free plan have some limitations)
2. I have then shared access links to your emails
3. Accept the invitation sent to your emails
4. Then pick a location for your project (e.g. Desktop, Documents, htdocs, etc) and clone the repository using the following command:

```bash
git clone https://github.com/Hondohondo/UCC-Website-Revamp.git
```

5. After cloning you should first **navigate** to the project folder you just cloned: **UCC-Website-Revamp**. Then create your own branch, we won’t be pushing to a master branch. Everyone will be working from and pushing to their own branch
6. Make a branch using the following command, make sure you replace **branch-name** with your own name:

```bash
git branch branch-name
```

7. Go to your branch using the following command, make sure you replace **branch-name** with the same name you created above

```bash
git checkout branch-name
```

8. Confirm that you’re on your own branch using:

```bash
git branch
```

9. You will see the current active branch in **green**

1. Then before opening our Laravel project, let’s run:

```bash
composer install
```

That will create a vendor’s folder

10. If the step above fails you may need to run: (But this is **optional**)

```bash
composer update
```

11. Open your UCC-Website-Revamp folder in a code editor and let’s duplicate the file **.env.example**, and rename the copy to be just **.env**
12. Now as you will see the .env file has the name of our database: **ucc_website_revamp**
13. So open XAMPP and start your Apache web server and MySQL server and create a database named: **ucc_website_revamp**
14. Then run the following command for migrations:

```bash
php artisan migrate
```

15. Before starting our Laravel project, we may need to run this command to generate the application key: (Application key is needed for all features that require security e.g. tokens, password, sessions, cookies, etc)

```bash
php artisan key:generate
```

16. Finally, let’s start our project by running:

```bash
php artisan serve
```

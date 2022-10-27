<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "hello world"
    echo " Haiii"
    echo "Microsoft Windows [Version 10.0.22000.1098]
    (c) Microsoft Corporation. All rights reserved.
    
    C:\Users\futur\OneDrive\Desktop\checking>git --version
    git version 2.38.1.windows.1
    
    error: key does not contain variable name: user.
    
    C:\Users\futur\OneDrive\Desktop\checking>git config --global user.name "SANTHIKC"
    
    C:\Users\futur\OneDrive\Desktop\checking>git config --global user.email "santhikc12@gmail.com"
    
    C:\Users\futur\OneDrive\Desktop\checking>dir
     Volume in drive C has no label.
     Volume Serial Number is 342C-F797
    
     Directory of C:\Users\futur\OneDrive\Desktop\checking
    
    27-10-2022  12:52    <DIR>          .
    27-10-2022  12:50    <DIR>          ..
    19-10-2022  14:28               310 demo.php
                   1 File(s)            310 bytes
                   2 Dir(s)  166,915,981,312 bytes free
    
    C:\Users\futur\OneDrive\Desktop\checking>git init
    Initialized empty Git repository in C:/Users/futur/OneDrive/Desktop/checking/.git/
    
    C:\Users\futur\OneDrive\Desktop\checking>git add .
    
    C:\Users\futur\OneDrive\Desktop\checking>git status
    On branch master
    
    No commits yet
    
    Changes to be committed:
      (use "git rm --cached <file>..." to unstage)
            new file:   demo.php
    
    
    C:\Users\futur\OneDrive\Desktop\checking>git status
    On branch master
    
    No commits yet
    
    Changes to be committed:
      (use "git rm --cached <file>..." to unstage)
            new file:   demo.php
    
    Changes not staged for commit:
      (use "git add <file>..." to update what will be committed)
      (use "git restore <file>..." to discard changes in working directory)
            modified:   demo.php
    
    
    C:\Users\futur\OneDrive\Desktop\checking>git add .
    
    C:\Users\futur\OneDrive\Desktop\checking>git status
    On branch master
    
    No commits yet
    
    Changes to be committed:
      (use "git rm --cached <file>..." to unstage)
            new file:   demo.php
    
    
    C:\Users\futur\OneDrive\Desktop\checking>git commit -m "first push"
    [master (root-commit) 55aa0dc] first push
     1 file changed, 15 insertions(+)
     create mode 100644 demo.php
    
    C:\Users\futur\OneDrive\Desktop\checking>git log
    commit 55aa0dc2714d3be37168268f5af776145b75220b (HEAD -> master)
    Author: SANTHIKC <santhikc12@gmail.com>
    Date:   Thu Oct 27 13:10:49 2022 +0530
    
        first push
    
    C:\Users\futur\OneDrive\Desktop\checking>git branch -M master
    
    
    C:\Users\futur\OneDrive\Desktop\checking>git remote add origin https://github.com/SANTHIKC/Checking.git
    
    C:\Users\futur\OneDrive\Desktop\checking>git push -u origin main
    error: src refspec main does not match any
    error: failed to push some refs to 'https://github.com/SANTHIKC/Checking.git'
    
    C:\Users\futur\OneDrive\Desktop\checking>git push -u origin master
    info: please complete authentication in your browser...
    Enumerating objects: 3, done.
    Counting objects: 100% (3/3), done.
    Delta compression using up to 8 threads
    Compressing objects: 100% (2/2), done.
    Writing objects: 100% (3/3), 422 bytes | 84.00 KiB/s, done.
    Total 3 (delta 0), reused 0 (delta 0), pack-reused 0
    To https://github.com/SANTHIKC/Checking.git
     * [new branch]      master -> master
    branch 'master' set up to track 'origin/master'.
    
    ?>
</body>
</html>
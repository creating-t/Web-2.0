
# 初次使用

1. git clone https://github.com/SUMSC/Web-2.0.git 到本地一文件夹；
2. cd Web-2.0/

在此文件夹下编写代码，待编写代码完毕需要做上传时，参照`每次上传步骤`：

# 每次上传步骤

1. git pull                         -- 同步远端仓库到本地
2. git add XXX/                     -- 添加你编写的代码
3. git commit -m 'XXX的更新'        -- 提交你的添加到本地仓库
4. git push -u origin master        -- 上传到远端

# 注意

每次编写自己代码的时候不要轻易修改非自己代码段的代码。如果该代码是其他成员编写，需要做出修改的时候联系对应作者，商讨是否需要修改，并由原作者进行修改并提交到远端。

如果修改部分会影响其他作者代码段的编写，应谨慎修改，实在必要修改需要立即通知其他作者，以防不必要的代码冲突。

每位成员在提交自己的代码之前要先行同步，并完成自己功能块的测试，并上传，此过程尽量快。以避免Admin做过多的merge操作。

# pull 原理

执行pull的过程会做git智能合并。

例如，A作者修改了Temp文件的第二行，然后push上去，然后B在自己本地在文件结尾添加了一行，此时B直接push会冲突，只要先执行一步pull操作，git会自动合并之前A做的修改到当前本地库，然后B再push就没有冲突了。

但是如果A、B都修改了这一行，就无法智能合并，需要admin手动合并，因此为避免admin工作量，请勿修改其他作者的代码。

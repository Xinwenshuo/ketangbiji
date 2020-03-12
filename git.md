# Git Hub
[TOC]
## 安装git

1.sudo apt-get install git 安装git
2.git config --global user.name " " 创建名
3.git config --global user.email " " 创建邮箱

## 创建版本库

1. 创建路径
	- mkdir learngit 创建路径
	- cd learngit 进入路径
	- pwd 显示当前目录

2. 管理仓库
	- git init 把目录变成管理仓库 初始化仓库
	- 创建一个readme.txt文件
	- git add readme.txt 把文件添加到仓库
	- git commit -m "wrote a readme file" 把文件提交到仓库
	- 也可以提交多个文件
		- git add file1.txt
		- git add file2.txt
		- git commit -m "add 3 files." 

## 时光穿梭

1. 修改提交
	- 修改readme.txt文件
	1. git status 查看结果
	2. git diff 查看修改的内容
	3. git add readme.txt 把文件添加到仓库
	4. git commit -m "add distributed" 把文件提交到仓库
	5. git status 查看当前状态

2. 版本退回
	1. git log 查看历史文档版本
	- git log --pretty=oneline 缩短查询的历史版本 视觉上简化
	2. git reset --hard HEAD^ 退回上一个历史版本 HEAD代表本版本 HEAD^上一个版本 HEAD^^ 代表上一个版本 HEAD~100 第100个版本
	3. git reset --hard 1094a 退回id是1094a……的版本
	4. git reflog 记录你的每一次命令

3. 工作区和暂存区
	1. git add 是将文件存到暂存区。
	2. git commit -m 是将文件提交到分支进行保存

4. 管理修改
	1. 在工作区修改1.txt然后git add 添加后在修改1.txt 后git commit -m 提交后提交的是第一次修改文件。 第二次的并没有提交 需要再次提交。
	2. cat 文件 可以查看文档内容
	3. git diff HEAD -- 文件名和后缀名 可以查看工作区的和版本库里面最新版本的区别文本爱工作区的时候用
5. 撤销修改
	1. cat readme.txt 查看修改内容
	2. git status 查询状态
	3. git checkout -- readme.txt 撤销修改
	4. git add 添加到暂存库
	5. git reset HEAD readme.txt 撤销暂存
	6. git checkout -- readme.txt 再次撤销修改
6. 删除文件
	1. git add test.txt 添加到暂存
	2. rm test.txt 删除本地文件
	3. git rm test.txt 删除版本库文件
	4. git checkout -- test.txt 把被删文件恢复到最新版本
## 远程仓库
- ssh-keygen -t rsa -C "97017096@qq.com" 创建一个SSH Key 主目录下面有文件.ssh
- id\_rsa 是私钥
- id\_rsa.pub 是公钥
- car ../.ssh/id\_rsa.pub 查看钥匙连接沾到网站上
1. 添加远程仓库
	1. 在git网站上建一个仓库 learngit
	2. git remote add origin git@github.com:Xinwenshuo/learngit.git 连接到远程仓库
	3. git push origin master 将内容推送到远程仓库中master分支
2. 远程克隆
	- 创建一个新的库记得勾选Initialize 会自动创建一个README.md文件
	1. git clone git@github.com:michaelliao/gitskills.git 克隆一个本地库记得换地址
	2. cd gitskills 进入目录
	3. ls 查看目录
## 分支管理
1. 创建与合并分支
	1. git checkout -b kev 创建并打开一个分支命名kev
	2. git branch 查询当前分支
	3. git checkout master 切换到master分支
	4. git merge kev 合并分支
	5. git checkout -d kev 删除分支
2. 解决冲突
	1. 准备一个featurel分支并将文本a.txt修改然后提交
	2. 用checkout切换到master分支。会显示有一个分支要超前一个提交
	3. 将a.txt刚刚修改的内容 再修改一下在提交上去。这样两个分支都有一个版本
	4. 现在将featurel用merge分支合并。无法快速合并，因为会产生冲突。
	5. 这种冲突只能手动解决然后查看文本里的内容。
	6. 他会用<<<<<<<<,=========,>>>>>>>标记不同分支的内容，
	7. 两个版本进行修改然后提交也可以用git log查看一下分之合并的情况
	8. 最后删除分支
	9. git log -graph 可以看到分支合并图
3. 分支管理策略
	1. 上一个说道合并分支是快速合并merge，默认用的是Fast forward模式，删除分支后会丢掉分支信息
	2. 同上一个一样写一个冲突的合并然后用--no-ff参数表示禁用Fast forward模式
	3. merge --no-ff
	4. 合并后用git log看一下历史分支
4. Bug分支
	1.当你正在dev分支工作的时候master分支上出现了bug让你修改bug，工作没做完不能提交，不提交就不能切换分支就用stash
	2.git stash  将无法提交的文件用stash储藏起来
		- git stash list 查看储藏的分支
		- git stash pop 直接恢复文本并把stash内容删除
		- git stash apply 恢复文本
		- git stash drop 删除stash内容
	3. 切换分支master并建一个临时分支issue101
	4. 在issue101 分支把bug修改完成后提交到版本库
	5. 切换master分支将issue101分支合并
		- git merge --no-ff -m "merged bug fix 101" issue101
	6. 然后回到dev分支。用 git stash pop 恢复文本并删除stash内容
	7. 用 git cherry-pick 12acb02 复制一个提交命令到当前分支
		- 12acb02 是之前提交issue101的commit 的ID
	8. 合并分支是可能会产生冲突要手动修改
5. Feature分支
	1. 创建一个feature分支用来写新功能，写完之后提交到版本库未合并时让你删除这个分支
	2. 用 git branch -d feature删除分支的话会跳出分支未合并不能 删除但又不能合并
	3. 用 git branch -D feature 强制删除分支
6.多人协作
	1. 往版本库推使用push		
		- git push -u origin master
	2. 从版本库拉使用pull和 fetch，
		- git pull origin master
		- git fetch origin master 经常用
	3. 往上推分支
		- git push origin master:dev 将本地的dev分支往上推
	4. 下拉分支
		- git fetch origin dev 下拉分支dev
		- git merge origin/dev 将远程分支合并到当前分支

## 查看秘钥
	1. cd.ssh 进入公钥秘钥存放的目录    
	2. vim id_rsa.pub 进入公钥 
	3.ssh-keygen -t rsa -C 用户名
	3.ll   查看目录
	4. cat id_rsa     查看文件	
	5. 复制公钥
	6. 填写到网站上

## 标签管理
	1. git checkout 分支名                        切换到要打标签的分支上
	2. git tag  标签名                                  打标签
	3. git tag                                                 查看所有的标签
	4. git show 标签名                                          查看标签的信息
	5. git tag -a 标签名 -m "说明" 版本号      带有说明的标签
	6. git push 名字 标签名                              推送到远程仓库
	7. git push 名字 --tags                               推送全部标签到远程仓库
	8. git tag -d 标签名                              删除本地标签
	9. git push origin :refs/tags/标签名     删除远程仓库标签

## 简记

一个简单的博客系统

采用 laravel 5.6 + Vue2.4 + Bulma 开发

- 线上地址: https://www.timenotes.me

欢迎大佬们赏玩


打算采用 bulma + buefy重构，新版本敬请期待哦


文章的发布和留言采用Markdown，简化写作


### 安装方式

1.克隆代码
```
git clone https://github.com/wowiwj/Note.git note
```
2.进入项目目录
```
cd note
```
3.使用composer安装依赖库
```
composer install
```
4.创建.env文件
```
cp .env.example .env
```
5.homestead配置
```
folders:
    - map: ~/my-path/note/ # 你本地的项目目录地址
      to: /home/vagrant/note
sites:
    - map: note.test
      to: /home/vagrant/note/public

databases:
    - note
```
6.应用修改homestead配置
```
homestead reload --provision
```
7.修改.env文件
```
...
DB_DATABASE=note
...

```
8.配置host文件
```
echo "192.168.10.10   note.test" | sudo tee -a /etc/hosts
```
9.进入虚拟机
```
// 进入项目目录
cd /home/vagrant/note 
// 序列化key
php artisan key:generate
// 执行数据库迁移
php artisan migrate --seed
// 安装passport
php artisan passport:install
```
10.访问

首页地址：http://note.test/
默认用户
用户名:35649084@qq.com
密码: 123456

11.说明
* 该项目默认使用了send cloud的邮件发送服务，注册功能需要发送邮件，您可以注册send cloud的
邮件，进行配置，或者将邮件驱动设置为log
* 文件url使用了百度翻译，如有需要，请自行申请百度翻译的免费key，进行配置
* 第三方登录使用了qq和github，请自行申请



### 计划
已完成 

- 文章发布 
- 评论 
- 回复  
- 文章管理功能
- 评论点赞 
- 文章标签 
- github登录
- 文章点赞
- ~~原创文章 显示 转载声明~~ 已完成
- ~~标签功能~~

下一步 

- 发布课程
- 后台访客管理
- markdown文章 导入导出 导出
- more

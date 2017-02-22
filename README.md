# Exercise
种一棵树最好的时间是十年前，其次是现在。

已经错过了最好的时间，

所以不想再错过现在。

使用简单的CI框架搭建一个Blog，建议按模块来搭建。

数据库设计，最小原则，需要的后期再加。

## 注册
### 初级
*　正则（校验用户名和密码）
*　cookie（记录登录状态）
*　session
*　特殊字符过滤
*　登录跳转
*　验证码（图片处理问题）

### 高级
* 发送邮件
* cookie 的跨域问题

## 登录
## 初级
* 密码认证，加密方式
* 验证码

### 高级
* 输错多次锁定账号
* 防止暴力破解，输入三次不正确才加入验证码
* 多处登录检测

## 发表文章
### 初级
* 特殊字符过滤
* 数据表字段的设计
* 分页
### 高级
* 草稿功能
* markdown渲染
* 特殊格式

### 高级
* 缓存

## 留言板功能
### 初级
* 单留言回复

### 高级
* 留言的树形结构
* @功能
* 站内信功能

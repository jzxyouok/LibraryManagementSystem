# BookMnagementSystem
Developed by Yii2. Book Mnagement System or BookMis. 

# 图书管理系统
Yii2开发，版本2.0.9
## 功能

### 0x00 认证

验证用户身份，输入ID和密码，随后的交互取决于用户的身份；  


### 0x01 如果用户是读者，可进行如下交互：   

- 查询图书的各种信息 
按书名、图书类别、作者、出版社查，可提供选择和输入两种方式；  
- 查询本人的借阅信息
列出本人所有借阅历史信息和当前借阅信息（指未还的书籍）；  

### 0x02如果用户是管理员，可进行如下交互：   

-  查询图书的各种信息   
查询馆藏图书和借阅图书，以列表显示，点击每本图书显示该图书 详细信息；
-  查询并维护读者的各种信息
提供输入姓名和编号两种方式 
-  图书入库   
登记图书入库信息
-  办理借书证  
给读者分配一个编号，登记读者信息  
-  图书借阅和归还   
不同级别会员的出借天数和最多借阅册书不同
-  逾期未还处理    
列出未还的图书清单和读者清单，发送邮件提示
-  挂失处理    
包括借书证挂失和图示遗失处理，借书证挂失在挂失数据表中处理，图书遗失在借阅表和图书表中处理
## 表信息

#### 0x00 读者   

readers（ reader-id（读者编号）,reader-name（姓名）, sex（性别）,birthday（出生日期）,mail（邮件）, mobile（手机）, card-name（证件名称）,card-id（证件编号）,level（会员级别）, （办证日期））    
#### 0x01 图书    
books（book-id（图书编号）,book-name（书名）, author（作者）,publishing（出版社）, category-id（类别）,price（单价）, date-in（入库日期）, quantity–in（入库数量）, quantity–out（出借数量）, quantity–loss（遗失数量））    
#### 0x02 借阅  
borrow（reader-id（读者编号）, book-id（图书编号）, date-borrow（出借日期）, date-return（应还日期）, loss（遗失))  
#### 0x03 图书类别      
book-category（category-id(类别编号), category(类别名称))     
#### 0x04 会员级别    
member-level（level(会员级别), days(最长出借天数), numbers(最多借书册书), fee(会费))   
#### 0x05 挂失    
loss-reporting（reader-id（读者编号）, loss-date（挂失日期）)    
#### 0x06 user    
user （id，username，password，authKey，accessToken，isAdmin）      
```
    `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
    `username` varchar(50) NOT NULL,
    `password` varchar(32) NOT NULL,
    `authKey` varchar(100) NOT NULL DEFAULT '',
    `accessToken` varchar(100) NOT NULL DEFAULT '',
    `isAdmin` tinyint(1) NOT NULL DEFAULT 0,
```

####  Warning
系统已知存在未授权访问和反射XSS漏洞。

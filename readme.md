### v1.0 输出一个简单的demo
```
{
	"require": {
		"illuminate/routing":"*",
		"illuminate/events":"*"
	}
}
```

### v1.1 添加控制器模块
```
composer dump-autoload
```
访问host/welcome就能看到效果

### v1.2 添加数据库模块
表结构students
```
CREATE TABLE IF NOT EXISTS `students` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO `students` (`id`, `name`, `age`) VALUES
(1, 'lee', 20),
(2, 'mingming', 19);
```

### v1.3 添加试图模块
注意storage/framework/views的权限问题
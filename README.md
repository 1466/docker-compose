# docker-compose
docker-ompose练习
此次练习代码来源于b站，感谢up主分享 https://www.bilibili.com/video/BV1Wt411w72h?from=search&seid=9813628463235495335
本次项目由会构造利用docker-compose构造三个容器，nginx,php,mysql
目录结构如下：
```yaml
hello-docker-compose
    |-- conf
        |-- nginx.conf      // nginx配置文件
    |-- html
        |-- index.html      // nginx首页
        |-- test.php        // 访问 php info服务
        |-- mysql.php       // 访问 mysql
    |-- docker-compose.yml  // docker-compose 主配置文件
```
使用方法：
```yaml
# 1 下载源码
git clone https://github.com/1466/docker-compose.git
# 2 
cd docker-compose
# 3
 docker-compose up -d 
```
完成后 ,输入docker ps 内容如下
```yaml
    CONTAINER ID        IMAGE                            COMMAND                  CREATED             STATUS              PORTS                NAMES
    9e601c8ae358        nginx:alpine                     "nginx -g 'daemon of…"   50 minutes ago      Up 49 minutes       0.0.0.0:80->80/tcp   firstdocker_nginx_1
    5fa15d44c2f8        devilbox/php-fpm:5.2-work-0.89   "/docker-entrypoint.…"   53 minutes ago      Up 53 minutes       9000/tcp             firstdocker_php_1
    96bf8fa67f3f        mysql:5.6                        "docker-entrypoint.s…"   53 minutes ago      Up 53 minutes       3306/tcp             firstdocker_mysql_1
```

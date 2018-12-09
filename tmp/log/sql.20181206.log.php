<?php
 die();
?>
20181206 13:52:16: 

20181206 13:52:18: blog-indexByCategory-index
  SELECT * FROM v_blog ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM v_blog 
  SELECT * FROM v_blog ORDER BY `id` desc  LIMIT 0, 20 
  SELECT * FROM blog_tag ORDER BY `id` 

20181206 13:52:20: blog-create
  SELECT id,tag FROM blog_tag ORDER BY `id` 

20181206 14:01:24: blog-create
  INSERT INTO blog SET `title` = '配置二级域名的方法',`cat_code` = 'dev',`content` = '&lt;p&gt;以86机器为例：&lt;/p&gt;&lt;ol class=&quot; list-paddingleft-2&quot; style=&quot;list-style-type: decimal;&quot;&gt;&lt;li&gt;&lt;p&gt;在服务器的hosts文件中 (windows\\system32\\drivers\\etc\\hosts)中，写入本机对应的主机全名称，如86机器上的文件内容为&lt;br/&gt;&lt;/p&gt;&lt;/li&gt;&lt;/ol&gt;&lt;p&gt;127.0.0.1&amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;localhost&lt;/p&gt;&lt;p&gt;127.0.0.1&amp;nbsp; www.sunrx.com&lt;/p&gt;&lt;p&gt;127.0.0.1&amp;nbsp; test2.sunrx.com&lt;/p&gt;&lt;p&gt;127.0.0.1&amp;nbsp; thinkphp3.sunrx.com&lt;/p&gt;&lt;p&gt;127.0.0.1&amp;nbsp; oscshop2.sunrx.com&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;2.在apache的conf目录vhost文件中，写具体的路径配置，&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&amp;lt;VirtualHost *:80&amp;gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp; &amp;nbsp; DocumentRoot &amp;quot;D:\\websites\\phpStudy\\PHPTutorial\\WWW&amp;quot;&lt;/p&gt;&lt;p&gt;&amp;nbsp; &amp;nbsp; ServerName www.sunrx.com&lt;/p&gt;&lt;p&gt;&amp;nbsp; &amp;nbsp; ServerAlias www.sunrx.com&lt;/p&gt;&lt;p&gt;&amp;nbsp; &amp;lt;Directory &amp;quot;D:\\websites\\phpStudy\\PHPTutorial\\WWW&amp;quot;&amp;gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp;Options +Indexes +FollowSymLinks +ExecCGI&lt;/p&gt;&lt;p&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; AllowOverride All&lt;/p&gt;&lt;p&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; Order allow,deny&lt;/p&gt;&lt;p&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; Allow from all&amp;nbsp; &amp;nbsp; &amp;nbsp;&lt;/p&gt;&lt;p&gt;&amp;nbsp; &amp;lt;/Directory&amp;gt;&lt;/p&gt;&lt;p&gt;&amp;lt;/VirtualHost&amp;gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&amp;lt;VirtualHost *:80&amp;gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp; &amp;nbsp; DocumentRoot &amp;quot;D:\\websites\\phpStudy\\PHPTutorial\\WWW\\thinkphp&amp;quot;&lt;/p&gt;&lt;p&gt;&amp;nbsp; &amp;nbsp; ServerName thinkphp3.sunrx.com&lt;/p&gt;&lt;p&gt;&amp;nbsp; &amp;nbsp; ServerAlias thinkphp3.sunrx.com&lt;/p&gt;&lt;p&gt;&amp;nbsp; &amp;lt;Directory &amp;quot;D:\\websites\\phpStudy\\PHPTutorial\\WWW\\thinkphp&amp;quot;&amp;gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; Options +Indexes +FollowSymLinks +ExecCGI&lt;/p&gt;&lt;p&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; AllowOverride All&lt;/p&gt;&lt;p&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; Order allow,deny&lt;/p&gt;&lt;p&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; Allow from all&amp;nbsp; &amp;nbsp; &amp;nbsp;&lt;/p&gt;&lt;p&gt;&amp;nbsp; &amp;lt;/Directory&amp;gt;&lt;/p&gt;&lt;p&gt;&amp;lt;/VirtualHost&amp;gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&amp;lt;VirtualHost *:82&amp;gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp; &amp;nbsp; DocumentRoot &amp;quot;D:\\websites\\phpStudy\\PHPTutorial\\WWW\\thinkphp&amp;quot;&amp;nbsp; &amp;nbsp;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&amp;nbsp; &amp;lt;Directory &amp;quot;D:\\websites\\phpStudy\\PHPTutorial\\WWW\\thinkphp&amp;quot;&amp;gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; Options +Indexes +FollowSymLinks +ExecCGI&lt;/p&gt;&lt;p&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; AllowOverride All&lt;/p&gt;&lt;p&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; Order allow,deny&lt;/p&gt;&lt;p&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; Allow from all&amp;nbsp; &amp;nbsp; &amp;nbsp;&lt;/p&gt;&lt;p&gt;&amp;nbsp; &amp;lt;/Directory&amp;gt;&lt;/p&gt;&lt;p&gt;&amp;lt;/VirtualHost&amp;gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&amp;lt;VirtualHost *:80&amp;gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp; &amp;nbsp; DocumentRoot &amp;quot;D:\\websites\\phpStudy\\PHPTutorial\\WWW\\test2&amp;quot;&lt;/p&gt;&lt;p&gt;&amp;nbsp; &amp;nbsp; ServerName test2.sunrx.com&lt;/p&gt;&lt;p&gt;&amp;nbsp; &amp;nbsp; ServerAlias test2.sunrx.com&lt;/p&gt;&lt;p&gt;&amp;nbsp; &amp;lt;Directory &amp;quot;D:\\websites\\phpStudy\\PHPTutorial\\WWW\\test2&amp;quot;&amp;gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; Options&amp;nbsp; +Indexes +FollowSymLinks +ExecCGI&lt;/p&gt;&lt;p&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; AllowOverride All&lt;/p&gt;&lt;p&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; Order allow,deny&lt;/p&gt;&lt;p&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; Allow from all&amp;nbsp; &amp;nbsp; &amp;nbsp;&lt;/p&gt;&lt;p&gt;&amp;nbsp; &amp;lt;/Directory&amp;gt;&lt;/p&gt;&lt;p&gt;&amp;lt;/VirtualHost&amp;gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&amp;lt;VirtualHost *:80&amp;gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp; &amp;nbsp; DocumentRoot &amp;quot;D:\\websites\\phpStudy\\PHPTutorial\\WWW\\oscshop2&amp;quot;&lt;/p&gt;&lt;p&gt;&amp;nbsp; &amp;nbsp; ServerName oscshop2.sunrx.com&lt;/p&gt;&lt;p&gt;&amp;nbsp; &amp;nbsp; ServerAlias oscshop2.sunrx.com&lt;/p&gt;&lt;p&gt;&amp;nbsp; &amp;lt;Directory &amp;quot;D:\\websites\\phpStudy\\PHPTutorial\\WWW\\oscshop2&amp;quot;&amp;gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; Options&amp;nbsp; +Indexes +FollowSymLinks +ExecCGI&lt;/p&gt;&lt;p&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; AllowOverride All&lt;/p&gt;&lt;p&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; Order allow,deny&lt;/p&gt;&lt;p&gt;&amp;nbsp; &amp;nbsp; &amp;nbsp; Allow from all&amp;nbsp; &amp;nbsp; &amp;nbsp;&lt;/p&gt;&lt;p&gt;&amp;nbsp; &amp;lt;/Directory&amp;gt;&lt;/p&gt;&lt;p&gt;&amp;lt;/VirtualHost&amp;gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;3. 在本地连接中加入局域网的域名解析服务器，这里是82&lt;/p&gt;&lt;p&gt;4.在局域网的域名解析服务器上，加入对地址的解析&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20181206/1544075955143881.png&quot; title=&quot;1544075955143881.png&quot; alt=&quot;image.png&quot;/&gt;&lt;/p&gt;&lt;p&gt;5浏览器输入thinkphp3.sunrx.com ,访问正确。&lt;/p&gt;'
  INSERT INTO blog_tag_relation SET `blog_id` = '63',`tag_id` = '10'

20181206 14:01:24: blog
  SELECT * FROM v_blog ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM v_blog 
  SELECT * FROM v_blog ORDER BY `id` desc  LIMIT 0, 20 
  SELECT * FROM blog_tag ORDER BY `id` 

20181206 14:37:28: 

20181206 15:31:44: blog-indexByTag-1
  SELECT * FROM v_blog_by_tag WHERE tag_id  = '1' ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM v_blog_by_tag WHERE tag_id  = '1' 
  SELECT * FROM v_blog_by_tag WHERE tag_id  = '1' ORDER BY `id` desc 
  SELECT tag FROM blog_tag WHERE id  = '1'
  SELECT * FROM blog_tag ORDER BY `id` 

20181206 15:31:51: blog-view-49
  SELECT * FROM v_blog WHERE `id` = '49' 
  SELECT tag_id FROM blog_tag_relation WHERE blog_id  = '49' ORDER BY `id` 
  SELECT tag FROM blog_tag WHERE id  = '1'
  SELECT tag FROM blog_tag WHERE id  = '3'

20181206 17:38:29: 

20181206 18:00:38: 

20181206 18:04:09: blog-indexByCategory-index
  SELECT * FROM v_blog ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM v_blog 
  SELECT * FROM v_blog ORDER BY `id` desc  LIMIT 0, 20 
  SELECT * FROM blog_tag ORDER BY `id` 


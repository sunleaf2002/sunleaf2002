<?php
 die();
?>
20181123 09:27:17: 

20181123 18:09:54: blog-create
  SELECT id,tag FROM blog_tag ORDER BY `id` 

20181123 18:10:52: blog-create
  INSERT INTO blog SET `title` = '改禅道上传文件大小限制',`cat_code` = 'dev',`content` = '&lt;p&gt;禅道上传文件大小限制写在www目录下的.htaccess文件中&lt;/p&gt;&lt;p&gt;php_value upload_max_filesize 100M&lt;/p&gt;'
  INSERT INTO blog_tag_relation SET `blog_id` = '61',`tag_id` = '20'

20181123 18:10:52: blog
  SELECT * FROM v_blog ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM v_blog 
  SELECT * FROM v_blog ORDER BY `id` desc  LIMIT 0, 20 
  SELECT * FROM blog_tag ORDER BY `id` 


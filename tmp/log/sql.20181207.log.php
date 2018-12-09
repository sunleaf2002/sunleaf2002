<?php
 die();
?>
20181207 09:16:22: 

20181207 09:16:24: blog-indexByCategory-index
  SELECT * FROM v_blog ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM v_blog 
  SELECT * FROM v_blog ORDER BY `id` desc  LIMIT 0, 20 
  SELECT * FROM blog_tag ORDER BY `id` 

20181207 09:16:51: blog-view-60
  SELECT * FROM v_blog WHERE `id` = '60' 
  SELECT tag_id FROM blog_tag_relation WHERE blog_id  = '60' ORDER BY `id` 
  SELECT tag FROM blog_tag WHERE id  = '1'

20181207 16:37:51: 


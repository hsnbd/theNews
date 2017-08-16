BEGIN

SELECT `n`.`*`, `c`.`name`
FROM `news` as `n`, `categories` as `c`
WHERE `n`.`categories_id` = `c`.`id`
ORDER BY `created_at` DESC
LIMIT 12;

-- if and field name confliction use as key to assign new field name;
SELECT n.id, n.categories_id, n.title, n.news_file_link, n.news_link, n.img_link, c.name
FROM news as n, categories as c
WHERE n.categories_id = '5'
AND
n.categories_id = c.id
ORDER BY n.created_at DESC
LIMIT 3;

END

SELECT productid FROM PRODUCTS 
JOIN posts	on products.title = posts.title and products.memberid = posts.memberid
WHERE posts.title = :title and posts.memberid = :memberid;
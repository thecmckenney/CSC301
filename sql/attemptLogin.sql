/* Select customers where the username and password match those passed as parameters */
SELECT * FROM members 
WHERE username = :username
AND password = :password